<?php
namespace App\Controllers;

use App\Views\View;
use PDO;

class ProfileController {
    private $pdo;
    
    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
        
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        // Rediriger vers login si non connecté
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }
    }

    public function index() {
        try {
            // Récupérer les informations de l'utilisateur
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute([$_SESSION['user_id']]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Récupérer les favoris de l'utilisateur
            $stmt = $this->pdo->prepare("
                SELECT f.*, a.title, a.image_url 
            FROM favorites f
            JOIN animes a ON f.anime_id = a.mal_id
            WHERE f.user_id = ?
            ORDER BY f.created_at DESC
            ");
            $stmt->execute([$_SESSION['user_id']]);
            $favorites = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $view = new View();
            return $view->render('Profile', [
                'title' => 'My Profile',
                'user' => $user,
                'favorites' => $favorites
            ]);
        } catch (\Exception $e) {
            error_log("Profile loading error: " . $e->getMessage());
            return $this->renderError("An error occurred while loading your profile. Error: " . $e->getMessage());
        }
    }

    public function updatePassword() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return $this->renderError("Invalid request method.");
        }

        $currentPassword = $_POST['current_password'] ?? '';
        $newPassword = $_POST['new_password'] ?? '';
        $confirmPassword = $_POST['confirm_password'] ?? '';

        // Vérifier que les nouveaux mots de passe correspondent
        if ($newPassword !== $confirmPassword) {
            return $this->renderError("New passwords do not match.");
        }

        try {
            // Vérifier le mot de passe actuel
            $stmt = $this->pdo->prepare("SELECT password FROM users WHERE id = ?");
            $stmt->execute([$_SESSION['user_id']]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!password_verify($currentPassword, $user['password'])) {
                return $this->renderError("Current password is incorrect.");
            }

            // Valider le nouveau mot de passe
            if (strlen($newPassword) < 8) {
                return $this->renderError("Password must be at least 8 characters long.");
            }

            // Mettre à jour le mot de passe
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $stmt = $this->pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
            $stmt->execute([$hashedPassword, $_SESSION['user_id']]);

            $_SESSION['success'] = "Password updated successfully.";
            header('Location: /profile');
            exit;

        } catch (\Exception $e) {
            return $this->renderError("An error occurred while updating your password.");
        }
    }

    public function updateProfile() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return $this->renderError("Invalid request method.");
        }

        $firstname = trim($_POST['firstname'] ?? '');
        $lastname = trim($_POST['lastname'] ?? '');
        $email = trim($_POST['email'] ?? '');

        // Validation
        if (empty($firstname) || empty($lastname) || empty($email)) {
            return $this->renderError("All fields are required.");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->renderError("Invalid email format.");
        }

        try {
            // Vérifier si l'email existe déjà (sauf pour l'utilisateur actuel)
            $stmt = $this->pdo->prepare("SELECT id FROM users WHERE email = ? AND id != ?");
            $stmt->execute([$email, $_SESSION['user_id']]);
            if ($stmt->fetch()) {
                return $this->renderError("Email already in use.");
            }

            // Mettre à jour le profil
            $stmt = $this->pdo->prepare("
                UPDATE users 
                SET firstname = ?, lastname = ?, email = ? 
                WHERE id = ?
            ");
            $stmt->execute([$firstname, $lastname, $email, $_SESSION['user_id']]);

            $_SESSION['success'] = "Profile updated successfully.";
            header('Location: /profile');
            exit;

        } catch (\Exception $e) {
            return $this->renderError("An error occurred while updating your profile.");
        }
    }

    private function renderError($message) {
        $view = new View();
        return $view->render('Profile', [
            'title' => 'My Profile',
            'error' => $message
        ]);
    }
}