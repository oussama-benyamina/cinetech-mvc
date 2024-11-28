<?php
namespace App\Controllers;

use App\Views\View;
use App\Models\Services\Jikanapi;

class SearchController {
    private $jikanApi;

    public function __construct() {
        $this->jikanApi = new Jikanapi();
    }

    public function index() {
        $query = $_GET['q'] ?? '';
        $results = $this->jikanApi->searchAnime($query);

        $view = new View();
        $view->render('search', [
            'title' => 'Search Results',
            'query' => $query,
            'results' => $results
        ]);
    }

    public function autocomplete() {
        $query = $_GET['q'] ?? '';
        $results = $this->jikanApi->searchAnime($query);

        $formattedResults = array_map(function($anime) {
            return [
                'id' => $anime->getMalId(),
                'title' => $anime->getTitle(),
                'image_url' => $anime->getImages()->getJpg()->getImageUrl()
            ];
        }, $results);

        header('Content-Type: application/json');
        echo json_encode($formattedResults);
    }
}