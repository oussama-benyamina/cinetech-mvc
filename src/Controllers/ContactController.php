<?php
namespace App\Controllers;

use App\Views\View;

class ContactController {
    public function index() {
        $view = new View();
        $view->render('Contact', ['title' => ' ']);
    }
}