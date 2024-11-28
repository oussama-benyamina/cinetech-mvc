<?php
namespace App\Controllers;

use App\Views\View;
use App\Models\Services\Jikanapi;

class HomeController {
    public function index() {
        $jikanApi = new Jikanapi();
        $movies = $jikanApi->fetchPopularAnimes();
        $tvSeries = $jikanApi->fetchPopularAnime();
        
        // Get top 5 movies and 5 series for the carousel
        $trendingMovies = array_slice($movies, 0, 5);
        $trendingSeries = array_slice($tvSeries, 0, 5);
        $trendingContent = array_merge($trendingMovies, $trendingSeries);

        $view = new View();
        $view->render('home', [
            'title' => 'Bienvenue sur mon site MVC !',
            'movies' => $movies,
            'tvSeries' => $tvSeries,
            'trendingContent' => $trendingContent
        ]);
    }
}