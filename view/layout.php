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
    <div>
        <?php
        if (Core\Session::isAdmin()) {
            ?>
            <header>
                <div id="logblock">
                    <img src='public/img/<?= Core\Session::getUser()->getAvatar() ?>' alt='logo'>
                    <div id="messagehidden">
                        <p id="log-message">Bienvenue
                            <?= Core\Session::getUser()->getPseudo() ?>
                        </p>
                    </div>
                    <div class="logbottom">
                        <a href="index.php?ctrl=home&action=detailUser">
                            <i class="fa-solid fa-user icons"></i>
                        </a>
                        <a href="index.php?ctrl=home&action=users">
                            <i class="fa-solid fa-users icons"></i></a>
                        <a href="index.php?ctrl=security&action=logout"><i class="fa-solid fa-power-off icons"></i></a>
                    </div>
                </div>
                <nav>
                    <ol>
                        <li>
                            <a class="bouton" href="index.php?ctrl=home&action=index" role="button">Accueil</a>
                        </li>
                        <li>
                            <a class="bouton" href="index.php?ctrl=socialnetwork&action=findAllPublications"
                                role="button">Blog</a>
                        </li>
                        <li>
                            <button type="button" class="bouton btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Jeu de carte </button>
                            <ul class="dropdown-menu Yugioh">
                                <li><a class="dropdown-item" href="index.php?ctrl=card&action=presentation">Presentation des
                                        Cartes</a>
                                </li>
                                <!-- <li><a class="dropdown-item" href="index.php?ctrl=card&action=searchCard"
                                        role="button">Recherches</a></li> -->
                                <li><a class="dropdown-item" href="index.php?ctrl=card&action=typeofduel"
                                        role="button">Formats
                                        de
                                        duels</a></li>
                                <li><a class="dropdown-item" href="index.php?ctrl=card&action=listDeck"
                                        role="button">Deck</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <button type="button" class="bouton btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                L'Univers Yu-Gi-Oh!
                            </button>
                            <ul class="dropdown-menu Yugioh">
                                <li><a class="dropdown-item" href="index.php?ctrl=mangas&action=findAllMangas">Mangas</a>
                                </li>
                                <li><a class="dropdown-item" href="index.php?ctrl=anime&action=findAllAnime">Animé</a></li>
                            </ul>
                        </li>
                    </ol>
                    <div id="mySidebar" class="sidebar">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="index.php?ctrl=home&action=index">Accueil</a>
                        <a href="index.php?ctrl=socialnetwork&action=findAllPublications">Blog</a>
                        <li>
                            <button type="button" class="bouton btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Jeu de carte </button>
                            <ul class="dropdown-menu Yugioh">
                                <li><a class="dropdown-item" href="index.php?ctrl=card&action=presentation">Presentation des
                                        Cartes</a>
                                </li>
                                <!-- <li><a class="dropdown-item" href="index.php?ctrl=card&action=searchCard"
                                        role="button">Recherches</a></li> -->
                                <li><a class="dropdown-item" href="index.php?ctrl=card&action=typeofduel"
                                        role="button">Formats
                                        de
                                        duels</a></li>
                                <li><a class="dropdown-item" href="index.php?ctrl=card&action=listDeck"
                                        role="button">Deck</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <button type="button" class="bouton btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                L'Univers Yu-Gi-Oh!
                            </button>
                            <ul class="dropdown-menu Yugioh">
                                <li><a class="dropdown-item" href="index.php?ctrl=mangas&action=findAllMangas">Mangas</a>
                                </li>
                                <li><a class="dropdown-item" href="index.php?ctrl=anime&action=findAllAnime">Animé</a></li>
                            </ul>
                        </li>
                    </div>
                </nav>
            </header>

            <main>
                <?= $contenu ?>
                <?php include_once("comment_button.php") ?>
            </main>
            <a href="#" class="go_top">
                <i class="fa-solid fa-arrow-up"></i>
            </a>
            <?php

        } else if (Core\Session::getUser()) { ?>
                <header>
                    <div id="logblock">
                        <img src='public/img/<?= Core\Session::getUser()->getAvatar() ?>' alt='logo'>
                        <div id="messagehidden">
                            <p id="log-message">Bienvenue
                            <?= Core\Session::getUser()->getPseudo() ?>
                            </p>
                        </div>
                        <div class="logbottom">
                            <a href="index.php?ctrl=home&action=detailUser">
                                <i class="fa-solid fa-user icons"></i>
                            </a>
                            <a href="index.php?ctrl=home&action=users">
                                <i class="fa-solid fa-users icons"></i></a>
                            <a href="index.php?ctrl=security&action=logout"><i class="fa-solid fa-power-off icons"></i></a>
                        </div>
                    </div>
                    <nav>
                        <ol>
                            <li>
                                <a class="bouton" href="index.php?ctrl=home&action=index" role="button">Accueil</a>
                            </li>
                            <li>
                                <a class="bouton" href="index.php?ctrl=socialnetwork&action=findAllPublications"
                                    role="button">Blog</a>
                            </li>
                            <li>
                                <button type="button" class="bouton btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Jeu de carte </button>
                                <ul class="dropdown-menu Yugioh">
                                    <li><a class="dropdown-item" href="index.php?ctrl=card&action=presentation">Présentation des
                                            Cartes</a>
                                    </li>
                                    <!-- <li><a class="dropdown-item" href="index.php?ctrl=card&action=searchCard"
                                            role="button">Recherches</a></li> -->
                                    <li><a class="dropdown-item" href="index.php?ctrl=card&action=typeofduel"
                                            role="button">Formats
                                            de
                                            duels</a></li>
                                    <li><a class="dropdown-item" href="index.php?ctrl=card&action=listDeck"
                                            role="button">Deck</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button type="button" class="bouton btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    L'Univers Yu-Gi-Oh!
                                </button>
                                <ul class="dropdown-menu Yugioh">
                                    <li><a class="dropdown-item" href="index.php?ctrl=mangas&action=findAllMangas">Mangas</a>
                                    </li>
                                    <li><a class="dropdown-item" href="index.php?ctrl=anime&action=findAllAnime">Animé</a></li>
                                </ul>
                            </li>
                        </ol>
                        <div id="mySidebar" class="sidebar">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <a href="index.php?ctrl=home&action=index">Accueil</a>
                            <a href="index.php?ctrl=socialnetwork&action=findAllPublications">Blog</a>
                            <li>
                                <button type="button" class="bouton btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Jeu de carte </button>
                                <ul class="dropdown-menu Yugioh">
                                    <li><a class="dropdown-item" href="index.php?ctrl=card&action=presentation">Presentation des
                                            Cartes</a>
                                    </li>
                                    <!-- <li><a class="dropdown-item" href="index.php?ctrl=card&action=searchCard"
                                        role="button">Recherches</a></li> -->
                                    <li><a class="dropdown-item" href="index.php?ctrl=card&action=typeofduel"
                                            role="button">Formats
                                            de
                                            duels</a></li>
                                    <li><a class="dropdown-item" href="index.php?ctrl=card&action=listDeck"
                                            role="button">Deck</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button type="button" class="bouton btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    L'Univers Yu-Gi-Oh!
                                </button>
                                <ul class="dropdown-menu Yugioh">
                                    <li><a class="dropdown-item" href="index.php?ctrl=mangas&action=findAllMangas">Mangas</a>
                                    </li>
                                    <li><a class="dropdown-item" href="index.php?ctrl=anime&action=findAllAnime">Animé</a></li>
                                </ul>
                            </li>
                        </div>
                    </nav>
                </header>

                <main>
                <?= $contenu ?>
                </main>

            <?php
        } else {
            ?>
                <header>
                    <div class="merge">

                    </div>
                    <nav>
                        <ol>
                            <li>
                                <a class="bouton" href="index.php?ctrl=home&action=index" role="button">Accueil</a>
                            </li>
                            <li> <button type="button" class="bouton btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Connectiques
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="bg-success"><a class="dropdown-item"
                                            href="index.php?ctrl=security&action=loginForm">Se Connecter</a></li>
                                    <li class="bg-danger"><a class="dropdown-item"
                                            href="index.php?ctrl=security&action=registerForm">Pas de Compte,
                                            S'enregistrer</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button type="button" class="bouton btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Jeu de carte </button>
                                <ul class="dropdown-menu Yugioh">
                                    <li><a class="dropdown-item" href="index.php?ctrl=card&action=presentation">Présentation des
                                            Cartes</a>
                                    </li>
                                    <!-- <li><a class="dropdown-item" href="index.php?ctrl=card&action=searchCard"
                                            role="button">Recherches</a></li> -->
                                    <li><a class="dropdown-item" href="index.php?ctrl=card&action=typeofduel"
                                            role="button">Formats
                                            de
                                            duels</a></li>

                                    <li><a class="dropdown-item" href="index.php?ctrl=card&action=listDeck"
                                            role="button">Deck</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button type="button" class="bouton btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    L'Univers Yu-Gi-Oh!
                                </button>
                                <ul class="dropdown-menu Yugioh">
                                    <li><a class="dropdown-item" href="index.php?ctrl=mangas&action=findAllMangas">Mangas</a>
                                    </li>
                                    <li><a class="dropdown-item" href="index.php?ctrl=anime&action=findAllAnime">Animé</a></li>
                                </ul>
                            </li>
                        </ol>
                        <div id="mySidebar" class="sidebar">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <a href="index.php?ctrl=home&action=index">Accueil</a>
                            <li> <button type="button" class="bouton btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Connectiques
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="bg-success"><a class="dropdown-item"
                                            href="index.php?ctrl=security&action=loginForm">Se Connecter</a></li>
                                    <li class="bg-danger"><a class="dropdown-item"
                                            href="index.php?ctrl=security&action=registerForm">Pas de Compte,
                                            S'enregistrer</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button type="button" class="bouton btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Jeu de carte </button>
                                <ul class="dropdown-menu Yugioh">
                                    <li><a class="dropdown-item" href="index.php?ctrl=card&action=presentation">Presentation des
                                            Cartes</a>
                                    </li>
                                    <!-- <li><a class="dropdown-item" href="index.php?ctrl=card&action=searchCard"
                                        role="button">Recherches</a></li> -->
                                    <li><a class="dropdown-item" href="index.php?ctrl=card&action=typeofduel"
                                            role="button">Formats
                                            de
                                            duels</a></li>
                                    <li><a class="dropdown-item" href="index.php?ctrl=card&action=listDeck"
                                            role="button">Deck</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button type="button" class="bouton btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    L'Univers Yu-Gi-Oh!
                                </button>
                                <ul class="dropdown-menu Yugioh">
                                    <li><a class="dropdown-item" href="index.php?ctrl=mangas&action=findAllMangas">Mangas</a>
                                    </li>
                                    <li><a class="dropdown-item" href="index.php?ctrl=anime&action=findAllAnime">Animé</a></li>
                                </ul>
                            </li>
                        </div>
                    </nav>
                </header>
                <main>
                <?= $contenu ?>
                </main>

            <?php
        } ?>

        <footer class="text-center text-white">
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
        </footer>

        <script src="public/js/script.js"></script>
        <script src="public/js/tarteaucitron.js"></script>
        <script src="public/tarteaucitron/advertising.js"></script>
        <script src="public/tarteaucitron/tarteaucitron.services.js"></script>
        <script src="public/tarteaucitron/lang/tarteaucitron.de.js"></script>
</body>

</html>