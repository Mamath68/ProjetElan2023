<?php

// Ouvre le namespace Controllers
namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;
use Models\Managers\DeckManager;


// class CardController hérite de la classe AbstractController et implémente ControllerInterface.
class CardController extends AbstractController implements ControllerInterface
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
    /* **************** Cartes et présentation Cartes *************** */
    public function vorstellung()
    {
        return [
            "view" => VIEW_DIR . "Karten/Karte/vorstellung.php",
        ];
    }

    public function karteListe()
    {
        // API endpoint URL

        $normal = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=normal%20monster&num=1&offset=0&sort=id";
        $normal_tuner_monster = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=normal%20tuner%20monster&num=1&offset=0&sort=id";
        $effet = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=effect%20monster&num=1&offset=0&sort=id";
        $flip_effect_monster = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=flip%20effect%20monster&num=1&offset=0&sort=id";
        $tuner_monster = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=tuner%20monster&num=1&offset=0&sort=id";
        $pendule_normal = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=pendulum%20normal%20monster&num=1&offset=0&sort=id";
        $pendule_effet = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=pendulum%20effect%20monster&num=1&offset=0&sort=id";
        $pendule_flip_monster = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=pendulum%20flip%20effect%20monster&num=1&offset=0&sort=id";
        $pendulum_tuner_monster = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=pendulum%20tuner%20effect%20monster&num=1&offset=0&sort=id";
        $gemini_monster = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=gemini%20monster&num=1&offset=0&sort=id";
        $spirit_monster = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=spirit%20monster&num=1&offset=0&sort=id";
        $toon_monster = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=toon%20monster&num=1&offset=0&sort=id";
        $union_effect_monster = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=union%20effect%20monster&num=1&offset=0&sort=id";
        $rituel = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=ritual%20monster&num=1&offset=0&sort=id";
        $rituel_effet = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=ritual%20effect%20monster&num=1&offset=0&sort=id";
        $magie = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=spell%20card&race=normal&num=1&offset=0&sort=id";
        $magie_continue = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=spell%20card&race=continuous&num=1&offset=0&sort=id";
        $magie_rituel = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=spell%20card&race=ritual&num=1&offset=0&sort=id";
        $magie_terrain = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=spell%20card&race=field&num=1&offset=0&sort=id";
        $magie_rapide = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=spell%20card&race=quick-play&num=1&offset=0&sort=id";
        $magie_equipement = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=spell%20card&race=equip&num=1&offset=0&sort=id";
        $piege = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=trap%20card&race=normal&num=1&offset=0&sort=id";
        $piege_continue = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=trap%20card&race=continuous&num=1&offset=0&sort=id";
        $piege_contre = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=trap%20card&race=counter&num=1&offset=0&sort=id";
        $fusion = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=fusion%20monster&num=1&offset=0&sort=id";
        $pendulum_fusion_monster = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=pendulum%20effect%20fusion%20monster&num=1&offset=0&sort=id";
        $synchro = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=synchro%20monster&num=1&offset=0&sort=id";
        $pendulum_synchro_monster = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=synchro%20pendulum%20effect%20monster&num=1&offset=0&sort=id";
        $xyz = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=xyz%20monster&num=1&offset=0&sort=id";
        $pendulum_xyz_monster = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=xyz%20pendulum%20effect%20monster&num=1&offset=0&sort=id";
        $lien = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=link%20monster&num=1&offset=0&sort=id";

        // Send GET request to the API
        // Monstres, Magie et Piège : Main Deck
        $normal = file_get_contents($normal);
        $normal_tuner_monster = file_get_contents($normal_tuner_monster);
        $effet = file_get_contents($effet);
        $flip_effect_monster = file_get_contents($flip_effect_monster);
        $tuner_monster = file_get_contents($tuner_monster);
        $pendule_normal = file_get_contents($pendule_normal);
        $pendule_effet = file_get_contents($pendule_effet);
        $pendule_flip_monster = file_get_contents($pendule_flip_monster);
        $pendulum_tuner_monster = file_get_contents($pendulum_tuner_monster);
        $gemini_monster = file_get_contents($gemini_monster);
        $spirit_monster = file_get_contents($spirit_monster);
        $toon_monster = file_get_contents($toon_monster);
        $union_effect_monster = file_get_contents($union_effect_monster);
        $rituel = file_get_contents($rituel);
        $rituel_effet = file_get_contents($rituel_effet);
        $magie = file_get_contents($magie);
        $magie_continue = file_get_contents($magie_continue);
        $magie_rituel = file_get_contents($magie_rituel);
        $magie_terrain = file_get_contents($magie_terrain);
        $magie_rapide = file_get_contents($magie_rapide);
        $magie_equipement = file_get_contents($magie_equipement);
        $piege = file_get_contents($piege);
        $piege_continue = file_get_contents($piege_continue);
        $piege_contre = file_get_contents($piege_contre);
        // Monstre Spécial : Extra Deck
        $fusion = file_get_contents($fusion);
        $pendulum_fusion_monster = file_get_contents($pendulum_fusion_monster);
        $synchro = file_get_contents($synchro);
        $pendulum_synchro_monster = file_get_contents($pendulum_synchro_monster);
        $xyz = file_get_contents($xyz);
        $pendulum_xyz_monster = file_get_contents($pendulum_xyz_monster);
        $lien = file_get_contents($lien);

        // Handle the response
        if ($normal && $normal_tuner_monster && $effet && $flip_effect_monster && $tuner_monster && $pendule_normal && $pendule_effet && $pendule_flip_monster && $pendulum_tuner_monster && $gemini_monster && $spirit_monster && $toon_monster && $union_effect_monster && $rituel && $rituel_effet && $magie && $magie_continue && $magie_rituel && $magie_terrain && $magie_rapide && $magie_equipement && $piege && $piege_continue && $piege_contre && $fusion && $pendulum_fusion_monster && $synchro && $pendulum_synchro_monster && $xyz && $pendulum_xyz_monster && $lien) {
            // Convert JSON response to PHP array
            // Monstres, Magie et Piège : Main Deck
            $normal = json_decode($normal, true);
            $normal_tuner_monster = json_decode($normal_tuner_monster, true);
            $effet = json_decode($effet, true);
            $flip_effect_monster = json_decode($flip_effect_monster, true);
            $tuner_monster = json_decode($tuner_monster, true);
            $pendule_normal = json_decode($pendule_normal, true);
            $pendule_effet = json_decode($pendule_effet, true);
            $pendule_flip_monster = json_decode($pendule_flip_monster, true);
            $pendulum_tuner_monster = json_decode($pendulum_tuner_monster, true);
            $gemini_monster = json_decode($gemini_monster, true);
            $spirit_monster = json_decode($spirit_monster, true);
            $toon_monster = json_decode($toon_monster, true);
            $union_effect_monster = json_decode($union_effect_monster, true);
            $rituel = json_decode($rituel, true);
            $rituel_effet = json_decode($rituel_effet, true);
            $magie = json_decode($magie, true);
            $magie_continue = json_decode($magie_continue, true);
            $magie_rituel = json_decode($magie_rituel, true);
            $magie_terrain = json_decode($magie_terrain, true);
            $magie_rapide = json_decode($magie_rapide, true);
            $magie_equipement = json_decode($magie_equipement, true);
            $piege = json_decode($piege, true);
            $piege_continue = json_decode($piege_continue, true);
            $piege_contre = json_decode($piege_contre, true);
            // Monstre Spécial : Extra Deck
            $fusion = json_decode($fusion, true);
            $pendulum_fusion_monster = json_decode($pendulum_fusion_monster, true);
            $synchro = json_decode($synchro, true);
            $pendulum_synchro_monster = json_decode($pendulum_synchro_monster, true);
            $xyz = json_decode($xyz, true);
            $pendulum_xyz_monster = json_decode($pendulum_xyz_monster, true);
            $lien = json_decode($lien, true);

            return [
                "view" => VIEW_DIR . "Karten/Karte/karteListe.php",
                // Monstres, Magie et Piège : Main Deck
                'normal' => $normal,
                'normal_tuner_monster' => $normal_tuner_monster,
                'effet' => $effet,
                'flip_effect_monster' => $flip_effect_monster,
                'tuner_monster' => $tuner_monster,
                'pendule_normal' => $pendule_normal,
                'pendule_effet' => $pendule_effet,
                'pendule_flip_monster' => $pendule_flip_monster,
                'pendulum_tuner_monster' => $pendulum_tuner_monster,
                'gemini_monster' => $gemini_monster,
                'spirit_monster' => $spirit_monster,
                'union_effect_monster' => $union_effect_monster,
                'rituel' => $rituel,
                'rituel_effet' => $rituel_effet,
                'magie' => $magie,
                'magie_continue' => $magie_continue,
                'magie_rituel' => $magie_rituel,
                'magie_terrain' => $magie_terrain,
                'magie_rapide' => $magie_rapide,
                'magie_equipement' => $magie_equipement,
                'piege' => $piege,
                'piege_continue' => $piege_continue,
                'piege_contre' => $piege_contre,
                // Monstre Spécial : Extra Deck
                'fusion' => $fusion,
                'pendulum_fusion_monster' => $pendulum_fusion_monster,
                'synchro' => $synchro,
                'pendulum_synchro_monster' => $pendulum_synchro_monster,
                'xyz' => $xyz,
                'pendulum_xyz_monster' => $pendulum_xyz_monster,
                'lien' => $lien,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }

    /* ***************** KarteDetail *********** */
    public function KarteBeiNammen()
    {
        $cardId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        // URL de L'API
        $card = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&id=$cardId";

        // Send GET request to the API
        $card = file_get_contents($card);

        // Handle the response
        if ($card) {
            // Convertis JSON en tableau PHP
            $card = json_decode($card, true);

            return
                [
                    "view" => VIEW_DIR . "Karten/Karte/Detail/KarteBeiNammen.php",
                    'card' => $card,
                ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function KarteBeiType()
    {
        $typeCard = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $type = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&type=$typeCard&sort=level";

        // Send GET request to the API
        $type = file_get_contents($type);

        // Handle the response
        if ($type) {
            // Convert JSON response to PHP array
            $type = json_decode($type, true);

            return [
                "view" => VIEW_DIR . "Karten/Karte/Detail//KarteBeiType.php",
                'type' => $type,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function KarteBeiElement()
    {

        $elementCard = filter_input(INPUT_GET, 'attribute', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        // API endpoint URL

        $element = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&attribute=$elementCard&sort=level";
        // Send GET request to the API
        $element = file_get_contents($element);


        // Handle the response
        if ($element) {
            // Convert JSON response to PHP array
            $element = json_decode($element, true);


            return [
                "view" => VIEW_DIR . "Karten/Karte/Detail//KarteBeiElement.php",
                'element' => $element,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function KarteBeiRace()
    {
        $raceCard = filter_input(INPUT_GET, 'race', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        // API endpoint URL
        $race = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&race=$raceCard&sort=level";


        // Send GET request to the API
        // Monstres, Magie et Piège : Main Deck
        $race = file_get_contents($race);

        // Handle the response
        if ($race) {
            // Convert JSON response to PHP array
            // Monstres, Magie et Piège : Main Deck
            $race = json_decode($race, true);

            return [
                "view" => VIEW_DIR . "Karten/Karte/Detail/KarteBeiRace.php",
                // Monstres, Magie et Piège : Main Deck
                'race' => $race,

            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function KarteBeiLevel()
    {
        $levelCard = filter_input(INPUT_GET, 'level', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // API endpoint URL

        $level = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&level=$levelCard&sort=id";

        // Send GET request to the API
        // Monstres, Magie et Piège : Main Deck
        $level = file_get_contents($level);

        // Handle the response
        if ($level) {
            // Convert JSON response to PHP array
            // Monstres, Magie et Piège : Main Deck
            $level = json_decode($level, true);

            return [
                "view" => VIEW_DIR . "Karten/Karte/Detail/KarteBeiLevel.php",
                // Monstres, Magie et Piège : Main Deck
                'level' => $level,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function KarteBeiLinkValor()
    {
        $linkCard = filter_input(INPUT_GET, 'linkval', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // API endpoint URL

        $linkval = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&link=$linkCard&sort=id";

        // Send GET request to the API
        // Monstres, Magie et Piège : Main Deck
        $linkval = file_get_contents($linkval);

        // Handle the response
        if ($linkval) {
            // Convert JSON response to PHP array
            // Monstres, Magie et Piège : Main Deck
            $linkval = json_decode($linkval, true);

            return [
                "view" => VIEW_DIR . "Karten/Karte/Detail/KarteBeiLinkValor.php",
                // Monstres, Magie et Piège : Main Deck
                'linkval' => $linkval,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function KarteBeiLinkMarker()
    {
        $linkMarkers = filter_input(INPUT_GET, 'linkmarkers', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // API endpoint URL

        $linkmarkers = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&linkmarker=$linkMarkers&sort=id";

        // Send GET request to the API
        // Monstres, Magie et Piège : Main Deck
        $linkmarkers = file_get_contents($linkmarkers);

        // Handle the response
        if ($linkmarkers) {
            // Convert JSON response to PHP array
            // Monstres, Magie et Piège : Main Deck
            $linkmarkers = json_decode($linkmarkers, true);

            return [
                "view" => VIEW_DIR . "Karten/Karte/Detail/KarteBeiLinkMarker.php",
                // Monstres, Magie et Piège : Main Deck
                'linkmarkers' => $linkmarkers,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function KarteBeiScale()
    {
        $scaleCard = filter_input(INPUT_GET, 'scale', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // API endpoint URL

        $scale = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&scale=$scaleCard&sort=id";

        // Send GET request to the API
        // Monstres, Magie et Piège : Main Deck
        $scale = file_get_contents($scale);

        // Handle the response
        if ($scale) {
            // Convert JSON response to PHP array
            // Monstres, Magie et Piège : Main Deck
            $scale = json_decode($scale, true);

            return [
                "view" => VIEW_DIR . "Karten/Karte/Detail/KarteBeiScale.php",
                // Monstres, Magie et Piège : Main Deck
                'scale' => $scale,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function KarteBeiArchetype()
    {
        // API endpoint URL

        $archetype = filter_input(INPUT_GET, 'archetype', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // API endpoint URL

        $archetype = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&archetype=$archetype&sort=type";

        // Send GET request to the API
        $archetype = file_get_contents($archetype);

        // Handle the response
        if ($archetype) {
            // Convert JSON response to PHP array
            $archetype = json_decode($archetype, true);

            return [
                "view" => VIEW_DIR . "Karten/Karte/Detail/KarteBeiArchetype.php",
                'archetype' => $archetype,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function KarteBeiAngriff()
    {
        // API endpoint URL

        $attackCard = filter_input(INPUT_GET, 'atk', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // API endpoint URL

        $attack = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&atk=$attackCard&sort=type";

        // Send GET request to the API
        $attack = file_get_contents($attack);

        // Handle the response
        if ($attack) {
            // Convert JSON response to PHP array
            $attack = json_decode($attack, true);

            return [
                "view" => VIEW_DIR . "Karten/Karte/Detail/KarteBeiAngriff.php",
                'attack' => $attack,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    public function KarteBeiDefense()
    {
        // API endpoint URL

        $defCard = filter_input(INPUT_GET, 'def', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // API endpoint URL

        $def = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&def=$defCard&sort=type";

        // Send GET request to the API
        // Monstres, Magie et Piège : Main Deck
        $def = file_get_contents($def);

        // Handle the response
        if ($def) {
            // Convert JSON response to PHP array
            // Monstres, Magie et Piège : Main Deck
            $def = json_decode($def, true);

            return [
                "view" => VIEW_DIR . "Karten/Karte/Detail/KarteBeiDefense.php",
                // Monstres, Magie et Piège : Main Deck
                'defense' => $def,
            ];
        } else {
            // Handle error if request fails
            echo "API request failed.";
        }
    }
    /* ********************** Formats de duel ************ */
    public function DuelFormat()
    {
        return [
            "view" => VIEW_DIR . "Karten/DuelFormat.php",
        ];
    }
    /* ***********Decks********** */
    public function DeckFormular()
    {
        return [
            "view" => VIEW_DIR . "cards/deck/BaueDeck.php",
        ];
    }
    public function BaueDeck($nom)
    {
        if (!empty($_POST)) {
            $deckName = filter_input(INPUT_POST, "deckName", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $deckPresentation = filter_input(INPUT_POST, "deckPresentation", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $deckimg = filter_input(INPUT_POST, "imgDeck", FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_VALIDATE_EMAIL);
            $user = Session::getUser()->getId();


            if ($deckName && $deckPresentation && $deckimg) {
                $deckManager = new DeckManager();
                if (
                    $deckManager->add([
                        "deckName" => $deckName,
                        "deckPresentation" => $deckPresentation,
                        "imgDeck" => $deckimg,
                        "user_id" => $user,
                    ])
                ) {
                    return [
                        "view" => VIEW_DIR . "Karten/deck/BaueDeck.php",
                    ];
                }
            } else {
                echo "<h1 style='color:red;'>Erreur d'Enregistrement !</h1>";
                return [
                    "view" => VIEW_DIR . "Karten/deck/BaueDeck.php",
                ];
            }
        } else {
            echo "<h1 style='color:orange;'>Ces données n'ont pas été soumis !</h1>";
            return [
                "view" => VIEW_DIR . "Karten/deck/BaueDeck.php",
            ];
        }
    }
    // public function completeDeck()
    // {
    //     // Exemple de lien API de YGOPRO pour obtenir les détails d'une carte spécifique
    //     // $nomCarte = $_GET['name'];
    //     $nomCarte = filter_input(INPUT_GET, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //     $idDeck = filter_input(INPUT_GET, "idDeck", FILTER_SANITIZE_NUMBER_INT);

    //     // API endpoint URL
    //     $card = "https://db.ygoprodeck.com/api/v7/cardinfo.php?language=de&&name=$nomCarte";

    //     // Effectuer une requête pour récupérer les données de la carte depuis l'API
    //     $data = file_get_contents($card);
    //     $carte = json_decode($data, true);

    //     // // Extraire les informations nécessaires de la carte
    //     // $cardName = $carte['name'];
    //     // $cardType = $carte['type'];
    //     // $cardImg = $carte['card_images'];
    //     // // ...

    //     // // Ajouter les informations de la carte dans le tableau JSON $deck
    //     // $deck[] = array(
    //     //     'name' => $cardName,
    //     //     'type' => $cardType,
    //     //     'image' => $cardImg,
    //     //     // ...
    //     // );

    //     // // Répéter les étapes précédentes pour chaque carte que vous souhaitez ajouter au deck

    //     // // Afficher le contenu final du tableau JSON $deck
    //     // echo json_encode($deck);

    //     // récupération du deck actuel
    //     $deckManager = new DeckManager();
    //     $deck = $deckManager->findOneById($idDeck);

    //     // // récupération des cartes du deck (qui sont en JSON)
    //     $cartes = json_decode($deck->getCards(), true);

    //     // ajout de la carte aux cartes existantes
    //     $cartes[] = $carte;

    //     // transformation du tableau indexé des cartes en JSON
    //     $cartesJson = json_encode($cartes);

    //     // mise à jour du deck, en lui donnant ses cartes
    //     $deck->setCards($cartesJson);

    //     // sauvegarde dans la BDD
    //     $deckManager->update($deck);

    //     // $deckManager = new DeckManager();
    //     return
    //         [
    //             "view" => VIEW_DIR . "cards/deck/detailDeck.php",
    //             "data" =>
    //             [
    //                 "deck" => $deckManager->findOneById($deck->getId())
    //             ]
    //         ];
    // }
    public function DeckListe()
    {
        $deckManager = new DeckManager();
        return
            [
                "view" => VIEW_DIR . "cards/deck/DeckListe.php",
                "data" =>
                [
                    "decks" => $deckManager->findAllDeck()
                ]
            ];
    }
    public function DeckInfos($id /*,$nom*/)
    {
        $deckManager = new DeckManager();
        return
            [
                "view" => VIEW_DIR . "cards/deck/detailDeck.php",
                "data" =>
                [
                    "decks" => $deckManager->findOneById($id),
                ]
            ];
    }
    public function noteDeck($id)
    {

        $deckManager = new DeckManager();
        return
            [
                "view" => VIEW_DIR . "cards/deck/note_Deck.php",
                // "data" =>
                // [
                //     "deck" => $deckManager->findOneById($id)
                // ]
            ];
    }
    public function commentDeck($id)
    {
        $deckManager = new DeckManager();
        return
            [
                "view" => VIEW_DIR . "cards/deck/comment_Deck.php",
                // "data" =>
                // [
                //     "deck" => $deckManager->findOneById($id)
                // ]
            ];
    }
}
