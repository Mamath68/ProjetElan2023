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
    /* **************** Cartes et présentation Cartes *************** */
    public function presentation()
    {
        return [
            "view" => VIEW_DIR . "cards/cartes/presentation.html.php",
        ];
    }

    public function typeCard()
    {
        try {
            $normal = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=normal%20monster&num=1&offset=0&format=tcg&sort=level");
            $normal_tuner_monster = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=normal%20tuner%20monster&num=1&offset=0&format=tcg&sort=level");
            $effet = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=effect%20monster&num=1&offset=0&format=tcg&sort=level");
            $flip_effect_monster = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=flip%20effect%20monster&num=1&offset=0&format=tcg&sort=level");
            $tuner_monster = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=tuner%20monster&num=1&offset=0&format=tcg&sort=level");
            $pendule_normal = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=pendulum%20normal%20monster&num=1&offset=0&format=tcg&sort=level");
            $pendule_effet = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=pendulum%20effect%20monster&num=1&offset=0&format=tcg&sort=level");
            $pendule_flip_monster = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=pendulum%20flip%20effect%20monster&num=1&offset=0&format=tcg&sort=level");
            $pendulum_tuner_monster = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=pendulum%20tuner%20effect%20monster&num=1&offset=0&format=tcg&sort=level");
            $gemini_monster = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=gemini%20monster&num=1&offset=0&format=tcg&sort=level");
            $spirit_monster = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spirit%20monster&num=1&offset=0&format=tcg&sort=level");
            $toon_monster = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=toon%20monster&num=1&offset=0&format=tcg&sort=level");
            $union_effect_monster = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=union%20effect%20monster&num=1&offset=0&format=tcg&sort=level");
            $rituel = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=ritual%20monster&num=1&offset=0&format=tcg&sort=level");
            $rituel_effet = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=ritual%20effect%20monster&num=1&offset=0&format=tcg&sort=level");
            $magie = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=normal&num=1&offset=0&format=tcg&sort=id");
            $magie_continue = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=continuous&num=1&offset=0&format=tcg&sort=id");
            $magie_rituel = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=ritual&num=1&offset=0&format=tcg&sort=id");
            $magie_terrain = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=field&num=1&offset=0&format=tcg&sort=id");
            $magie_rapide = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=quick-play&num=1&offset=0&format=tcg&sort=id");
            $magie_equipement = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=spell%20card&race=equip&num=1&offset=0&format=tcg&sort=id");
            $piege = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=trap%20card&race=normal&num=1&offset=0&format=tcg&sort=id");
            $piege_continue = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=trap%20card&race=continuous&num=1&offset=0&format=tcg&sort=id");
            $piege_contre = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=trap%20card&race=counter&num=1&offset=0&format=tcg&sort=id");
            // Monstre Spécial : Extra Deck
            $fusion = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=fusion%20monster&num=1&offset=0&format=tcg&sort=level");
            $pendulum_fusion_monster = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=pendulum%20effect%20fusion%20monster&num=1&offset=0&format=tcg&sort=level");
            $synchro = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=synchro%20monster&num=1&offset=0&format=tcg&sort=level");
            $pendulum_synchro_monster = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=synchro%20pendulum%20effect%20monster&num=1&offset=0&format=tcg&sort=level");
            $xyz = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=xyz%20monster&num=1&offset=0&format=tcg&sort=level");
            $pendulum_xyz_monster = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=xyz%20pendulum%20effect%20monster&num=1&offset=0&format=tcg&sort=level");
            $lien = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=link%20monster&num=1&offset=0&format=tcg&sort=id");

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
                "view" => VIEW_DIR . "cards/cartes/typeCard.html.php",
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
        } catch (\Throwable $th) {
            echo "Une erreur s'est produite lors de la création des cartes : " . $th->getMessage();
            throw new \ErrorException("Erreur lors de la création des cartes : " . $th->getMessage());
        }
    }

    /* ***************** Détail des cartes *********** */
    public function detailCard()
    {
        try {
            $cardId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

            $card = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?id=$cardId");

            $card = json_decode($card, true);

            return
                [
                    "view" => VIEW_DIR . "cards/cartes/details/detailCard.html.php",
                    'card' => $card,
                ];
        } catch (\Throwable $th) {
            throw new \ErrorException("Erreur lors de la création du détail de la carte : " . $th->getMessage());
        }
    }

    public function detailType()
    {
        try {
            $typeCard = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            // Send GET request to the API
            $type = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?type=$typeCard&sort=id&num=50&offset=0&format=tcg");

            $type = json_decode($type, true);

            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailType.html.php",
                'type' => $type,
            ];
        } catch (\Throwable $th) {
            throw new \ErrorException("Erreur lors de la création du détail du type de carte : " . $th->getMessage());
        }
    }

    public function detailAttribute()
    {
        try {
            $elementCard = filter_input(INPUT_GET, 'attribute', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            // Send GET request to the API
            $element = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?attribute=$elementCard&sort=level&num=50&offset=0&format=tcg");

            // Convert JSON response to PHP array
            $element = json_decode($element, true);
            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailElement.html.php",
                'element' => $element,
            ];
        } catch (\Throwable $th) {
            throw new \ErrorException("Erreur lors de la création du détail de l'attribut de carte : " . $th->getMessage());
        }
    }

    public function detailRace()
    {
        try {
            $raceCard = filter_input(INPUT_GET, 'race', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $race = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?race=$raceCard&sort=id&num=50&offset=0&format=tcg");

            $race = json_decode($race, true);

            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailRace.html.php",
                // Monstres, Magie et Piège : Main Deck
                'race' => $race,

            ];
        } catch (\Throwable $th) {
            throw new \ErrorException("Erreur lors de la création du détail de la race de carte : " . $th->getMessage());
        }
    }

    public function detailLevel()
    {
        try {
            $levelCard = filter_input(INPUT_GET, 'level', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $level = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?level=$levelCard&sort=id&num=50&offset=0&format=tcg");

            $level = json_decode($level, true);

            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailLevel.html.php",
                // Monstres, Magie et Piège : Main Deck
                'level' => $level,
            ];
        } catch (\Throwable $th) {
            echo "API request failed.";
            throw new \ErrorException("Erreur lors de la création du détail du niveau de carte : " . $th->getMessage());
        }
    }

    public function detailLinkVal()
    {
        try {
            $linkCard = filter_input(INPUT_GET, 'linkval', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $linkval = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?link=$linkCard&sort=id&num=50&offset=0&format=tcg");

            $linkval = json_decode($linkval, true);

            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailLinkVal.html.php",
                'linkval' => $linkval,
            ];
        } catch (\Throwable $th) {
            throw new \ErrorException("Erreur lors de la création du détail du lien de carte : " . $th->getMessage());
        }
    }

    public function detailScale()
    {
        try {
            $scaleCard = filter_input(INPUT_GET, 'scale', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $scale = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?scale=$scaleCard&sort=level&num=50&offset=0&format=tcg");

            $scale = json_decode($scale, true);

            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailScale.html.php",
                // Monstres, Magie et Piège : Main Deck
                'scale' => $scale,
            ];
        } catch (\Throwable $th) {
            throw new \ErrorException("Erreur lors de la création du détail de la race de carte : " . $th->getMessage());
        }
    }

    public function detailArchetype($archetype)
    {
        try {
            $archetype = filter_input(INPUT_GET, 'archetype', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            // Send GET request to the API
            $archetype = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?archetype=$archetype&sort=id");

            // Convert JSON response to PHP array
            $archetype = json_decode($archetype, true);

            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailArchetype.html.php",
                'archetype' => $archetype,
            ];
        } catch (\Throwable $th) {
            throw new \ErrorException("Erreur lors de la récupération des détails de l'archétype : " . $th->getMessage());
        }
    }
    public function detailAttack()
    {
        try {
            $attackCard = filter_input(INPUT_GET, 'atk', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $attack = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?atk=$attackCard&sort=level&num=50&offset=0&format=tcg");

            $attack = json_decode($attack, true);

            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailAtk.html.php",
                'attack' => $attack,
            ];
        } catch (\Throwable $th) {
            throw new \ErrorException("Erreur lors de la création du détail de l'attaque de carte : " . $th->getMessage());
        }
    }
    public function detailDefense()
    {
        try {
            $defCard = filter_input(INPUT_GET, 'def', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $def = file_get_contents("https://db.ygoprodeck.com/api/v7/cardinfo.php?def=$defCard&sort=level&num=50&offset=0&format=tcg");

            $def = json_decode($def, true);

            return [
                "view" => VIEW_DIR . "cards/cartes/details/detailDef.html.php",
                // Monstres, Magie et Piège : Main Deck
                'defense' => $def,
            ];
        } catch (\Throwable $th) {
            throw new \ErrorException("Erreur lors de la création du détail de la defense de carte : " . $th->getMessage());
        }
    }
    /* ********************** Formats de duel ************ */
    public function typeOfDuel()
    {
        return [
            "view" => VIEW_DIR . "cards/typeOfDuel.html.php",
        ];
    }
    /* ***********Decks********** */
    public function creatDeckForm()
    {
        return [
            "view" => VIEW_DIR . "cards/deck/creatDeck.html.php",
        ];
    }
    public function creatDeck($nom)
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
                        "view" => VIEW_DIR . "cards/deck/creatDeck.html.php",
                    ];
                }
            } else {
                echo "<h1 style='color:red;'>Erreur d'Enregistrement !</h1>";
                return [
                    "view" => VIEW_DIR . "cards/deck/creatDeck.html.php",
                ];
            }
        } else {
            echo "<h1 style='color:orange;'>Ces données n'ont pas été soumis !</h1>";
            return [
                "view" => VIEW_DIR . "cards/deck/creatDeck.html.php",
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
    //     $card = "https://db.ygoprodeck.com/api/v7/cardinfo.php?&name=$nomCarte";

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
    //             "view" => VIEW_DIR . "cards/deck/detailDeck.html.php",
    //             "data" =>
    //             [
    //                 "deck" => $deckManager->findOneById($deck->getId())
    //             ]
    //         ];
    // }
    public function listDeck()
    {
        $deckManager = new DeckManager();
        return
            [
                "view" => VIEW_DIR . "cards/deck/listDeck.html.php",
                "data" =>
                [
                    "decks" => $deckManager->findAllDeck()
                ]
            ];
    }
    public function detailDeck($id /*,$nom*/)
    {
        // $nom = $_GET['name'];

        // // API endpoint URL
        // $card = "https://db.ygoprodeck.com/api/v7/cardinfo.php? &name=$nom";

        // // Send GET request to the API
        // $card = file_get_contents($card);

        // // Handle the response
        // if ($card) 
        // {
        //     // Convert JSON response to PHP array
        //     $card = json_decode($card, true);

        //     return 
        //     [
        //         "view" => VIEW_DIR . "cards/cartes/detailCard.html.php",
        //         'card' => $card,
        //     ];

        // } else {
        //     // Handle error if request fails
        //     echo "API request failed.";
        // }

        $deckManager = new DeckManager();
        return
            [
                "view" => VIEW_DIR . "cards/deck/detailDeck.html.php",
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
                "view" => VIEW_DIR . "cards/deck/note_Deck.html.php",
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
                "view" => VIEW_DIR . "cards/deck/comment_Deck.html.php",
                // "data" =>
                // [
                //     "deck" => $deckManager->findOneById($id)
                // ]
            ];
    }
}
