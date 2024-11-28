<?php
namespace App\Models;

class Comment {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function addComment($userId, $animeId, $content) {
        $query = "INSERT INTO comments (user_id, anime_id, content) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$userId, $animeId, $content]);
    }

    public function getComments($animeId) {
        try {
            $query = "SELECT c.*, u.firstname as username, 
                             c.created_at as created_at
                      FROM comments c 
                      JOIN users u ON c.user_id = u.id 
                      WHERE c.anime_id = ? 
                      ORDER BY c.created_at DESC";
            $stmt = $this->db->prepare($query);
            $stmt->execute([$animeId]);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            error_log("Error fetching comments: " . $e->getMessage());
            return [];
        }
    }

    public function deleteComment($commentId, $userId) {
        $query = "DELETE FROM comments WHERE id = ? AND user_id = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$commentId, $userId]);
    }

    public function updateComment($commentId, $userId, $content) {
        $query = "UPDATE comments SET content = ? WHERE id = ? AND user_id = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$content, $commentId, $userId]);
    }
}