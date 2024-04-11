<?php

// Ouvre le namespace Controllers
namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;
use Models\Managers\MangasManager;

// use Models\Managers\AuteurManager;


class MangasController extends AbstractController implements ControllerInterface
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
    public function findAllMangas()
    {
        $mangasManager = new MangasManager();

        return [
            "view" => VIEW_DIR . "yugioh/mangas/listMangas.html.php",
            "data" => [
                "mangas" => $mangasManager->findAll()
            ]
        ];
    }
    public function findMangasById($id)
    {
        $mangasManager = new MangasManager();
        return [
            "view" => VIEW_DIR . "yugioh/mangas/detailMangas.html.php",
            "data" => [
                "mangas" => $mangasManager->findOneById($id),
            ]
        ];

    }

}