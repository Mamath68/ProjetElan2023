<?php

// Ouvre le namespace Controller
namespace Controllers;

// fait appel a Session dans le namespace Core
use Core\Session;
// fait appel a AbstractController dans le namespace Core
use Core\AbstractController;
// fait appel a ControllerInterface dans le namespace Core
use Core\ControllerInterface;
// fait appel a UserManager dans le namespace Models\Managers
use Models\Managers\UserManager;
use Models\Managers\PublicationManager;

// class HomeController hérite de la classe AbstractController et implémente ControllerInterface.
class HomeController extends AbstractController implements ControllerInterface
{

    public function index()
    {
        $cardsEndpoint = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de";

        // Send GET request to the API
        $cardsResponse = file_get_contents($cardsEndpoint);

        // Handle the response

        if ($cardsResponse) {

            // Convert JSON response to PHP array
            $cardsArray = json_decode($cardsResponse, true);

            // Get the total number of available cards
            $totalCards = count($cardsArray['data']);

            // Generate a random index to select a card
            $randomIndex = array_rand($cardsArray['data']);

            // Retrieve the randomly selected card using the random index
            $randomCard = $cardsArray['data'][$randomIndex];

            return [
                "view" => VIEW_DIR . "home.php",
                "data" => [
                    "card" => $randomCard,
                    // var_dump($randomCard),
                ]
            ];

        } else {

            // Handle error if request fails

            echo "API request failed.";

        }
    }
    public function users()
    {
        $userManager = new UserManager();

        return [

            "view" => VIEW_DIR . "security/listUsers.php",

            "data" => [
                "users" => $userManager->findAll(["role", "DESC"])

            ]
        ];
    }

    public function detailUser($id)
    {

        $userManager = new UserManager();

        return [
            "view" => VIEW_DIR . "security/detailUser.php",
            "data" => [
                "user" => $userManager->findOneById($id),
                ]
            ];
        }
        
        public function publicUser($id)
        {
        $userManager = new UserManager();
        
        return [
            
            "view" => VIEW_DIR . "security/publicProfil.php",
            
            "data" => [
                "user" => $userManager->findOneById($id),
            ]
        ];
    }

    public function forumRules()
    {

        return [
            "view" => VIEW_DIR . "home/forumRules.php"
        ];
    }
    public function forumMentions()
    {
        return [
            "view" => VIEW_DIR . "home/mentions_legal.php"
        ];
    }

}