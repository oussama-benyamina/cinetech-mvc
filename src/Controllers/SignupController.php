<?php
namespace App\Controllers;

use App\Views\View;
use PDO;

class SignupController {
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
        return $view->render('Signup', [
            'title' => 'Sign Up'
        ]);
    }

    private function validatePassword($password) {
        if (strlen($password) < 8) {
            return "Password must be at least 8 characters long";
        }
        if (!preg_match('/[A-Z]/', $password)) {
            return "Password must contain at least one uppercase letter";
        }
        if (!preg_match('/[a-z]/', $password)) {
            return "Password must contain at least one lowercase letter";
        }
        if (!preg_match('/[0-9]/', $password)) {
            return "Password must contain at least one number";
        }
        if (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password)) {
            return "Password must contain at least one special character";
        }
        return null;
    }

    private function sanitizeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Verify CSRF token
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                throw new \Exception("Invalid CSRF token");
            }

            // Sanitize inputs
            $firstname = $this->sanitizeInput($_POST['firstname'] ?? '');
            $lastname = $this->sanitizeInput($_POST['lastname'] ?? '');
            $email = $this->sanitizeInput($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';
            $confirm_password = $_POST['confirm_password'] ?? '';
            
            // Validate input
            if (empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
                return $this->renderError("All fields are required");
            }

            // Validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return $this->renderError("Invalid email format");
            }

            // Validate name format
            if (!preg_match("/^[a-zA-Z]{2,50}$/", $firstname) || !preg_match("/^[a-zA-Z]{2,50}$/", $lastname)) {
                return $this->renderError("Names should only contain letters and be 2-50 characters long");
            }

            // Validate password
            $passwordError = $this->validatePassword($password);
            if ($passwordError) {
                return $this->renderError($passwordError);
            }

            if ($password !== $confirm_password) {
                return $this->renderError("Passwords do not match");
            }
            
            try {
                // Check if email already exists
                $stmt = $this->pdo->prepare("SELECT id FROM users WHERE email = ?");
                $stmt->execute([$email]);
                if ($stmt->fetch()) {
                    throw new \Exception("Email already registered");
                }
                
                // Hash password
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                
                // Insert new user
                $stmt = $this->pdo->prepare(
                    "INSERT INTO users (email, firstname, lastname, password) 
                     VALUES (?, ?, ?, ?)"
                );
                $stmt->execute([$email, $firstname, $lastname, $hashedPassword]);
                
                // Regenerate session ID for security
                session_regenerate_id(true);
                
                // Redirect to login page
                header('Location: /login');
                exit;
                
            } catch (\Exception $e) {
                return $this->renderError($e->getMessage());
            }
        }
    }

    private function renderError($message) {
        $view = new View();
        return $view->render('Signup', [
            'title' => 'Signup',
            'error' => $message
        ]);
    }
}