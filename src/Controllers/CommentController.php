<?php
namespace App\Controllers;

use App\Models\Comment;

class CommentController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function addComment($animeId) {
        if (!isset($_SESSION['user_id'])) {
            $this->jsonResponse(false, 'User not logged in');
            return;
        }

        // Get JSON input
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        $content = $data['content'] ?? '';

        if (empty($content)) {
            $this->jsonResponse(false, 'Comment content is required');
            return;
        }

        $comment = new Comment($this->db);
        try {
            $success = $comment->addComment($_SESSION['user_id'], $animeId, $content);
            if ($success) {
                $this->jsonResponse(true, 'Comment added successfully', [
                    'comment' => [
                        'username' => $_SESSION['firstname'] ?? 'Unknown User',
                        'content' => htmlspecialchars($content),
                        'created_at' => date('Y-m-d H:i:s')
                    ]
                ]);
            } else {
                throw new \Exception("Failed to add comment");
            }
        } catch (\Exception $e) {
            error_log($e->getMessage());
            $this->jsonResponse(false, 'Failed to add comment');
        }
    }

    private function jsonResponse($success, $message, $extra = []) {
        header('Content-Type: application/json');
        echo json_encode(array_merge(
            ['success' => $success, 'message' => $message],
            $extra
        ));
    }
}