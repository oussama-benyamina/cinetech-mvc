<?php
namespace App\Controllers;

use App\Views\View;
use App\Models\Services\Jikanapi;

class SeriesController {
    public function index() {
        $jikanApi = new Jikanapi();
        $tvSeries = $jikanApi->fetchPopularAnime();

        $view = new View();
        $view->render('Series', [
            'title' => 'Popular Anime Series',
            'tvSeries' => $tvSeries
        ]);
    }
}

