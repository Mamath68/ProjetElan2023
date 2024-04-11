<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome CSS -->
    <script src="https://kit.fontawesome.com/f0dc5fab26.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <!-- Bootstrap JS -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/CSS/smartphone.css">
    <link rel="stylesheet" href="public/CSS/tablette.css">
    <link rel="stylesheet" href="public/tarteaucitron/css/tarteaucitron.css">
    <script src="public/tarteaucitron/tarteaucitron.js"></script>
    <link rel="shortcut icon" href="public/img/favico.png" type="image/x-icon">
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <header>
        <nav class="navbar bg-secondary navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php?ctrl=home&action=index">
                    Yugioh
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Yugioh</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?ctrl=home&action=index">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?ctrl=socialnetwork&action=findAllPublications">Blog</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Jeu de carte
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="index.php?ctrl=card&action=presentation">Présentation des
                                            Cartes</a></li>
                                    <li><a class="dropdown-item" href="index.php?ctrl=card&action=typeofduel" role="button">Formats
                                            de
                                            duels</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="index.php?ctrl=card&action=listDeck" role="button">Deck</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    L'univers Yugioh
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="index.php?ctrl=mangas&action=findAllMangas">Mangas</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="index.php?ctrl=anime&action=findAllAnime">Animé</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="d-flex mt-2">
                            <?php
                            if (Core\Session::getUser()) {
                            ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?= Core\Session::getUser()->getPseudo() ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="index.php?ctrl=home&action=detailUser&id=<?= Core\Session::getUser()->getId() ?>">Profile</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="index.php?ctrl=security&action=logout">Logout</a></li>
                                    </ul>
                                </li>
                            <?php
                            } else {
                            ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Connectiques
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="index.php?ctrl=security&action=loginForm">Se Connecter</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="index.php?ctrl=security&action=registerForm">S'enregistrer</a></li>
                                    </ul>
                                </li>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        <?= $contenu ?>
    </main>

    <!--<footer class="text-center text-white">
        <div class="container p-3">
            <section>
                <p class="d-flex justify-content-center align-items-center">
                    <span class="me-3"> © 2023 - Projet Yu-Gi-Oh!</span>
                </p>
            </section>
        </div>
        <div class="text-center p-3 footer">
            <a class="link" href="index.php?ctrl=home&action=forumRules" target="_blank">Règlement du forum</a>
            <a class="link" href="index.php?ctrl=home&action=forumMentions" target="_blank">Mentions légales</a>
        </div>
    </footer>-->

    <script src="public/js/tarteaucitron.js"></script>
    <script src="public/tarteaucitron/advertising.js"></script>
    <script src="public/tarteaucitron/tarteaucitron.services.js"></script>
    <script src="public/tarteaucitron/lang/tarteaucitron.de.js"></script>
</body>

</html>