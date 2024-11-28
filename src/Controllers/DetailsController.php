<?php
namespace App\Controllers;

use App\Views\View;
use App\Models\Services\Jikanapi;
use App\Models\Comment;

class DetailsController {
    private $db;
    private $jikanApi;

    public function __construct($db) {
        $this->db = $db;
        $this->jikanApi = new Jikanapi();
    }

    public function show($malId) {
        try {
            $anime = $this->jikanApi->fetchAnimeDetails($malId);
            
            // Vérifier si l'anime existe déjà dans la base de données
            $stmt = $this->db->prepare("SELECT id FROM animes WHERE mal_id = ?");
            $stmt->execute([$malId]);
            $existingAnime = $stmt->fetch();

            if (!$existingAnime) {
                // Si l'anime n'existe pas, l'ajouter à la base de données
                $stmt = $this->db->prepare("INSERT INTO animes (mal_id, title, image_url, score, synopsis) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([
                    $anime->getMalId(),
                    $anime->getTitle(),
                    $anime->getImages()->getJpg()->getLargeImageUrl(),
                    $anime->getScore(),
                    $anime->getSynopsis()
                ]);
                $animeId = $this->db->lastInsertId();
            } else {
                $animeId = $existingAnime['id'];
            }

            $isFavorite = false;
            $comments = [];
            
            if (isset($_SESSION['user_id'])) {
                $stmt = $this->db->prepare("SELECT * FROM favorites WHERE user_id = ? AND anime_id = ?");
                $stmt->execute([$_SESSION['user_id'], $animeId]);
                $isFavorite = $stmt->fetch() !== false;

                $comment = new Comment($this->db);
                $comments = $comment->getComments($animeId);
            }
            
            $view = new View();
            return $view->render('details', [
                'title' => $anime->getTitle(),
                'anime' => $anime,
                'animeId' => $animeId,
                'isFavorite' => $isFavorite,
                'comments' => $comments
            ]);
        } catch (\Exception $e) {
            // Log the error
            error_log($e->getMessage());
            
            $view = new View();
            return $view->render('error', [
                'title' => 'Error',
                'message' => 'Unable to load anime details.'
            ]);
        }
    }

    public function toggleFavorite($animeId) {
        if (!isset($_SESSION['user_id'])) {
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'User not logged in']);
            return;
        }

        try {
            $stmt = $this->db->prepare("SELECT * FROM favorites WHERE user_id = ? AND anime_id = ?");
            $stmt->execute([$_SESSION['user_id'], $animeId]);
            $favorite = $stmt->fetch();

            if ($favorite) {
                $stmt = $this->db->prepare("DELETE FROM favorites WHERE user_id = ? AND anime_id = ?");
                $stmt->execute([$_SESSION['user_id'], $animeId]);
                $message = "Removed from favorites";
            } else {
                $stmt = $this->db->prepare("INSERT INTO favorites (user_id, anime_id) VALUES (?, ?)");
                $stmt->execute([$_SESSION['user_id'], $animeId]);
                $message = "Added to favorites";
            }

            header('Content-Type: application/json');
            echo json_encode(['success' => true, 'message' => $message]);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'An error occurred']);
        }
    }
}