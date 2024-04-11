<?php

// Ouvre le namespace Controllers
namespace Controllers;

use App\AbstractController;
use App\ControllerInterface;
use Models\Managers\AnimeManager;


// class CardController hérite de la classe AbstractController et implémente ControllerInterface.
class AnimeController extends AbstractController implements ControllerInterface
{

    public function index()
    {
        try {
            // Send GET request to the API
            $cardsResponse = file_get_contents("https://db.ygoprodeck.com/api/v7/randomcard.php");

            // Convert JSON response to PHP array
            $randomCard = json_decode($cardsResponse, true);

            return [
                "view" => VIEW_DIR . "home.html.php",
                "data" => [
                    "card" => $randomCard,
                    // var_dump($randomCard),
                ]
            ];
        } catch (\Throwable $th) {
            throw new \ErrorException("Erreur lors de la récupération de la carte aleatoire : " . $th->getMessage());
        }
    }
    public function findAllAnime()
    {
        $animeManager = new AnimeManager();

        return [
            "view" => VIEW_DIR . "yugioh/anime/listAnime.html.php",
            "data" => [
                "animes" => $animeManager->findAll()
            ]
        ];
    }
    public function findAnimeById($id)
    {
        $animeManager = new AnimeManager();
        return [
            "view" => VIEW_DIR . "yugioh/anime/detailAnime.html.php",
            "data" => [
                "animes" => $animeManager->findOneById($id),
            ]
        ];
    }
}
