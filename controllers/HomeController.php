<?php

// Ouvre le namespace Controller
namespace Controllers;

use Core\AbstractController;
use Core\ControllerInterface;
use Models\Managers\UserManager;

class HomeController extends AbstractController implements ControllerInterface
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
    
    public function users()
    {
        $userManager = new UserManager();

        return [

            "view" => VIEW_DIR . "security/listUsers.html.php",

            "data" => [
                "users" => $userManager->findAll(["role", "DESC"])

            ]
        ];
    }

    public function detailUser($id)
    {

        $userManager = new UserManager();

        return [
            "view" => VIEW_DIR . "security/detailUser.html.php",
            "data" => [
                "user" => $userManager->findOneById($id),
            ]
        ];
    }

    public function publicUser($id)
    {
        $userManager = new UserManager();

        return [

            "view" => VIEW_DIR . "security/publicProfil.html.php",

            "data" => [
                "user" => $userManager->findOneById($id),
            ]
        ];
    }

    public function forumRules()
    {

        return [
            "view" => VIEW_DIR . "home/forumRules.html.php"
        ];
    }
    public function forumMentions()
    {
        return [
            "view" => VIEW_DIR . "home/mentions_legal.html.php"
        ];
    }
}
