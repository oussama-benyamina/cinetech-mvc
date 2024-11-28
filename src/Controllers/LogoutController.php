<?php
namespace App\Controllers;

class LogoutController {
    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function logout() {
        // Stocker un message de succès avant de détruire la session
        $firstname = $_SESSION['user_firstname'] ?? '';
        
        // Détruire toutes les données de session
        $_SESSION = array();

        // Détruire le cookie de session si il existe
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time()-3600, '/');
        }

        // Détruire la session
        session_destroy();

        // Démarrer une nouvelle session pour le message flash
        session_start();
        $_SESSION['success'] = "You have been successfully logged out. Goodbye, {$firstname}!";

        // Rediriger vers la page de login
        header('Location: /login');
        exit();
    }
} 