<?php
namespace App\Models\Services;

use Jikan\JikanPHP\Client;

class Jikanapi {
    private $jikan;

    public function __construct() {
        $this->jikan = Client::create();
    }

    public function fetchPopularAnimes() {
        $response = $this->jikan->getTopAnime(['type' => 'movie']);
        return $response->getData();
    }

    public function fetchPopularAnime() {
        $response = $this->jikan->getTopAnime(['type' => 'tv']);
        return $response->getData();
    }

    public function fetchAnimeDetails($id) {
        $response = $this->jikan->getAnimeById($id);
        return $response->getData();
    }
    public function searchAnime($query) {
        try {
            $response = $this->jikan->getAnimeSearch(['q' => $query, 'limit' => 10]);
            return $response->getData();
        } catch (\Exception $e) {
            error_log("Error searching anime: " . $e->getMessage());
            return [];
        }
    }
}
