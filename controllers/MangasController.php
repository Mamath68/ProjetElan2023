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
        // API Endpoint(Who die karten sich befinden)
        $cardsEndpoint = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de";

        // Sendet GET request zu das API
        $cardsResponse = file_get_contents($cardsEndpoint);

        // behandelt die antwort

        if ($cardsResponse) {

            // Wechselt JSON-Antwort in PHP-array
            $cardsArray = json_decode($cardsResponse, true);

            // Erhalten Sie die Gesamtzahl der verfügbaren Karten
            $totalCards = count($cardsArray['data']);

            // Generieren Sie einen zufälligen Index, um eine Karte auszuwählen
            $randomIndex = array_rand($cardsArray['data']);

            // Rufen Sie die zufällig ausgewählte Karte mithilfe des Zufallsindex ab
            $randomCard = $cardsArray['data'][$randomIndex];

            return [
                // Wo ich die karte senden will
                "view" => VIEW_DIR . "home.php",
                // Die Daten die ich sende
                "data" => [
                    "card" => $randomCard,
                    // var_dump($randomCard),
                ]
            ];

        } else {

            // Behandelt die antwort im falle dessen dass das API ein fehler Hat

            echo "API request failed.";

        }
    }
    public function findeAlleMangas()
    {
        $mangasManager = new MangasManager();

        return [
            "view" => VIEW_DIR . "yugioh/mangas/listMangas.php",
            "data" => [
                "mangas" => $mangasManager->findAll()
            ]
        ];
    }
    public function findeMangasDurchId($id)
    {
        $mangasManager = new MangasManager();
        return [
            "view" => VIEW_DIR . "yugioh/mangas/detailMangas.php",
            "data" => [
                "mangas" => $mangasManager->findOneById($id),
            ]
        ];

    }

}