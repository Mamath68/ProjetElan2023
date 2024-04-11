<?php

namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;
use Models\Managers\PublicationManager;
use Models\Managers\CommentManager;
use Models\Managers\ReponseManager;

class SocialNetworkController extends AbstractController implements ControllerInterface
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
    public function findPublicationsByUsers($id)
    {
        $publicationManager = new PublicationManager();

        return [
            "view" => VIEW_DIR . "socialNetwork/publicationByUsers.html.php",
            "data" => [
                "publications" => $publicationManager->findPublicationsByUser($id, ["id_publication", "ASC"]),
            ]
        ];
    }
    public function addPublication($id)
    {
        if (!empty($_POST)) {

            $body = filter_input(INPUT_POST, "body", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $img = filter_input(INPUT_POST, "img", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $user = Session::getUser()->getId();

            if ($body) {
                $publicationManager = new PublicationManager();

                $publication = !$publicationManager->add(
                    [
                        "body" => $body,
                        "img" => $img,
                        "user_id" => $user,
                    ]
                );
            }
            $this->redirectTo("socialNetwork", "findAllPublications");
            return
                [
                    "view" => VIEW_DIR . "socialNetwork/listPublication.html.php",
                    "data" =>
                    [
                        "publication" => $publication,
                    ]
                ];
        }
    }

    public function findAllPublications()
    {
        $publicationManager = new PublicationManager();

        return [
            "view" => VIEW_DIR . "socialNetwork/listPublication.html.php",
            "data" => [
                "publications" => $publicationManager->findAllPublications(["publicationDate", "ASC"]),
            ]
        ];
    }
    public function addComment()
    {
        $publicationManager = new PublicationManager();
        $id = $_GET['id'];

        if (!empty($_POST)) {
            $body = filter_input(INPUT_POST, "body", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $img = filter_input(INPUT_POST, "img", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $user = Session::getUser()->getId();
            if ($body) {
                $commentManager = new CommentManager();
                if (
                    !$commentManager->add(
                        [
                            "body" => $body,
                            "img" => $img,
                            "user_id" => $user,
                            "publication_id" => $id,
                        ]
                    )
                );
            }
            $this->redirectTo("socialNetwork", "viewCommentByPublication", $id);
            return
                [
                    "view" => VIEW_DIR . "socialNetwork/viewComment.html.php",
                    "data" =>
                    [
                        "comment" => $commentManager->findOneById($id)
                    ]
                ];
        }
    }
    public function viewCommentByPublication($id)
    {
        $publicationManager = new PublicationManager();
        $commentManager = new CommentManager();

        return [
            "view" => VIEW_DIR . "socialNetwork/viewComment.html.php",
            "data" => [
                "publication" => $publicationManager->findOneById($id),
                "comments" => $commentManager->findCommentByPublication($id),
            ]
        ];
    }
    public function replyTheComment()
    {
        $commentManager = new CommentManager();
        $id = $_GET['id'];
        if (!empty($_POST)) {
            $body = filter_input(INPUT_POST, "body", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $img = filter_input(INPUT_POST, "img", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $user = Session::getUser()->getId();
            if ($body) {
                $reponseManager = new ReponseManager();
                if (
                    !$reponseManager->add(
                        [
                            "body" => $body,
                            "img" => $img,
                            "user_id" => $user,
                            "comment_id" => $id,
                        ]
                    )
                );
            }
            $this->redirectTo("socialNetwork", "viewCommentsByComment", $id);
            return
                [
                    "view" => VIEW_DIR . "socialNetwork/commentToTheComment.html.php",
                    "data" =>
                    [
                        "reponses" => $reponseManager->findOneById($id)
                    ]
                ];
        }
    }
    public function viewCommentsByComment($id)
    {

        $commentManager = new CommentManager();
        $reponseManager = new ReponseManager();

        return [
            "view" => VIEW_DIR . "socialNetwork/commentToTheComment.html.php",
            "data" => [
                "comment" => $commentManager->findOneById($id),
                "reponses" => $reponseManager->findCommentsByComment($id)
            ]
        ];
    }
    public function deletePublication($id)
    {
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $publicationManager = new PublicationManager();
        $commentManager = new CommentManager();
        $reponseManager = new reponseManager();
        $commentManager->findOneById($commentManager);

        $publicationManager->delete($id);
        $reponse = $id;

        header('Location:index.php?ctrl=socialnetwork&action=findAllPublications');
    }
    public function deleteComment($id)
    {
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $publicationManager = new PublicationManager();
        $commentManager = new CommentManager();
        $reponseManager = new reponseManager();
        $commentManager->findOneById($commentManager);

        $publicationManager->delete($id);
        $reponse = $id;

        header('Location:index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=' . $id . '');
    }
    public function deleteReponse($id)
    {
        $reponseManager = new ReponseManager();

        if ($reponseManager) {
            $reponseManager->delete($id);
            $this->redirectTo("SocialNetwork", "findAllPublication");
            return [
                "view" => VIEW_DIR . "SocialNetwork/viewCommentByComment.html.php",
            ];
        }
    }
}
