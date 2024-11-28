<?php
namespace App\Controllers;

use App\Views\View;

class FavoritesController {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
        
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }
    }

    public function index() {
        try {
            $stmt = $this->db->prepare("
                SELECT a.id, a.mal_id, a.title, a.image_url, a.score
                FROM favorites f
                JOIN animes a ON f.anime_id = a.id
                WHERE f.user_id = ?
                ORDER BY f.created_at DESC
            ");
            $stmt->execute([$_SESSION['user_id']]);
            $favorites = $stmt->fetchAll();
            
            $view = new View();
            return $view->render('Favorites', [
                'title' => 'My Favorites',
                'favorites' => $favorites
            ]);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            return $this->renderError("An error occurred while loading your favorites.");
        }
    }

    private function renderError($message) {
        $view = new View();
        return $view->render('Favorites', [
            'title' => 'My Favorites',
            'error' => $message
        ]);
    }
}