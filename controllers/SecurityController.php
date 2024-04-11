<?php

// Ouvre le namespace Controller
namespace Controllers;

// fait appel a Session dans dossier APP
use Core\Session;
// fait appel a AbstractController dans dossier APP
use Core\AbstractController;
// fait appel a ControllerInterface dans dossier APP
use Core\ControllerInterface;
// fait appel a UserManager dans sous-dossier Managers du dossier Model
use Models\Managers\UserManager;

// class securityController hérite de la classe AbstractController et implémente ControllerInterface.
class SecurityController extends AbstractController implements ControllerInterface
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
    public function registerForm()
    {
        return [
            "view" => VIEW_DIR . "security/register.html.php",
            "data" => null,
        ];
    }
    public function register()
    {
        if (!empty($_POST)) {
            $username = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $avatar = filter_input(INPUT_POST, "avatar", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $confirmpassword = filter_input(INPUT_POST, "confirmpassword", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if ($username && $password && $email) {
                if (($password == $confirmpassword) and strlen($password) >= 3) {
                    $manager = new UserManager();
                    $user = $manager->findOneByEmail($email);

                    if (!$user) {

                        $hash = password_hash($password, PASSWORD_DEFAULT);

                        if
                        (
                            $manager->add([
                                "pseudo" => $username,
                                "email" => $email,
                                "avatar" => $avatar,
                                "password" => $hash,
                                "role" => json_encode(["ROLE_USER"]),
                            ])
                        ) {
                            return [
                                "view" => VIEW_DIR . "home.html.php",
                            ];
                        }
                    }
                }
            } else {
                echo "<h1 style='color:red;'>Erreur d'Enregistrement !</h1>";
                return [
                    "view" => VIEW_DIR . "security/register.html.php",
                ];
            }
        } else {
            echo "<h1 style='color:orange;'>Ces données n'ont pas été soumis !</h1>";
            return [
                "view" => VIEW_DIR . "security/register.html.php",
            ];
        }
    }
    public function loginForm()
    {
        return [
            "view" => VIEW_DIR . "security/login.html.php",
            "data" => null,
        ];
    }
    public function login()
    {
        if (!empty($_POST)) {

            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if ($email && $password) {

                $manager = new UserManager();
                $user = $manager->findOneByEmail($email);

                $pass = $user->getPassword();

                if ($user) {
                    if (password_verify($password, $pass)) {
                        session::setUser($user);

                        header('Location:index.php?ctrl=security&action=index');
                    } else {
                        return [
                            "view" => VIEW_DIR . "security/login.html.php",
                            "data" => null,
                        ];
                    }
                }
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        $this->redirectTo("security", "index");
    }

    public function deleteAccountForm()
    {

        return [
            "view" => VIEW_DIR . "security/deleteAccount.html.php",
            "data" => null,
        ];

    }
    public function deleteAccount($id)
    {
        $userManager = new UserManager();

        if ($userManager) {
            $userManager->delete($id);
            unset($_SESSION['user']);
            $this->redirectTo("security", "index");
            return [
                "view" => VIEW_DIR . "security/deleteAccount.html.php",
            ];
        }
    }
}