<?php
namespace App\Controllers;

use App\Views\View;
use PDO;

class LoginController {
    private $pdo;
    
    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
        
        // Start session if not already started
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function index() {
        $view = new View();
        return $view->render('Login', [
            'title' => 'Login'
        ]);
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            try {
                // Get user from database
                $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
                $stmt->execute([$email]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                // Verify password
                if ($user && password_verify($password, $user['password'])) {
                    // Start new session
                    session_regenerate_id(true);
                    
                    // Store user info in session
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_email'] = $user['email'];
                    $_SESSION['user_firstname'] = $user['firstname'];
                    $_SESSION['user_lastname'] = $user['lastname'];
                    $_SESSION['logged_in'] = true;
                    
                    // Redirect to home page
                    header('Location: /');
                    exit;
                } else {
                    return $this->renderError("Invalid email or password");
                }
            } catch (\Exception $e) {
                return $this->renderError("An error occurred. Please try again.");
            }
        }
        
        
        return $this->index();
    }

    private function renderError($message) {
        $view = new View();
        return $view->render('Login', [
            'title' => 'Login',
            'error' => $message
        ]);
    }
    public function toggleFavorite($animeId) {
        if (!isset($_SESSION['user_id'])) {
            echo json_encode(['success' => false, 'message' => 'User not logged in']);
            return;
        }
    
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM favorites WHERE user_id = ? AND anime_id = ?");
            $stmt->execute([$_SESSION['user_id'], $animeId]);
            $favorite = $stmt->fetch();
    
            if ($favorite) {
                $stmt = $this->pdo->prepare("DELETE FROM favorites WHERE user_id = ? AND anime_id = ?");
                $stmt->execute([$_SESSION['user_id'], $animeId]);
                echo json_encode(['success' => true, 'action' => 'removed']);
            } else {
                $stmt = $this->pdo->prepare("INSERT INTO favorites (user_id, anime_id) VALUES (?, ?)");
                $stmt->execute([$_SESSION['user_id'], $animeId]);
                echo json_encode(['success' => true, 'action' => 'added']);
            }
        } catch (\Exception $e) {
            error_log($e->getMessage());
            echo json_encode(['success' => false, 'message' => 'An error occurred']);
        }
    }
}
