<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config/db_connect.php';

// Start session at the beginning of the application
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

use App\Router;
use App\Container;

define('BASE_URL', '/cinetech-mvc/');

$container = new Container();

// Register your services in the container
$container->set('PDO', function($c) use ($pdo) {
    return $pdo;
});

// Register all your controllers
$controllers = [
    'App\Controllers\HomeController',
    'App\Controllers\SearchController',
    'App\Controllers\SeriesController',
    'App\Controllers\ContactController',
    'App\Controllers\DetailsController',
    'App\Controllers\SignupController',
    'App\Controllers\LoginController',
    'App\Controllers\ProfileController',
    'App\Controllers\LogoutController',
    'App\Controllers\FavoritesController',
    'App\Controllers\CommentController'
];

foreach ($controllers as $controller) {
    $container->set($controller, function($c) use ($controller) {
        return new $controller($c->get('PDO'));
    });
}

$router = new Router($container);

// Define routes with lowercase paths
$router->add('/', 'App\Controllers\HomeController', 'index');
$router->add('/series', 'App\Controllers\SeriesController', 'index');
$router->add('/contact', 'App\Controllers\ContactController', 'index');
$router->add('/details/{id}', 'App\Controllers\DetailsController', 'show');
$router->add('/toggle-favorite/{id}', 'App\Controllers\DetailsController', 'toggleFavorite');
$router->add('/search', 'App\Controllers\SearchController', 'index');
$router->add('/signup', 'App\Controllers\SignupController', 'index');
$router->add('/signup/register', 'App\Controllers\SignupController', 'register');
$router->add('/login', 'App\Controllers\LoginController', 'login');
$router->add('/profile', 'App\Controllers\ProfileController', 'index');
$router->add('/profile/update', 'App\Controllers\ProfileController', 'updateProfile');
$router->add('/profile/password', 'App\Controllers\ProfileController', 'updatePassword');
$router->add('/logout', 'App\Controllers\LogoutController', 'logout');
$router->add('/favorites', 'App\Controllers\FavoritesController', 'index');
$router->add('/add-comment/{id}', 'App\Controllers\CommentController', 'addComment');
$router->add('/delete-comment/{id}', 'App\Controllers\CommentController', 'deleteComment');
$router->add('/update-comment/{id}', 'App\Controllers\CommentController', 'updateComment');
$router->add('/autocomplete', 'App\Controllers\SearchController', 'autocomplete');

// Get current URL path and convert to lowercase for consistency
$url = strtolower(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Dispatch route
try {
    $router->dispatch($url);
} catch (Exception $e) {
    echo "404 Not Found: " . $e->getMessage();
}