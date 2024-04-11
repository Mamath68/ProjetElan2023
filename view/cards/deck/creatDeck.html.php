<div class="main2">
    <button class="openbtn" onclick="openNav()">☰</button>
    <h1 class="p-3 primetitle text-light">Bienvenue sur cette page dédié à la création de deck</h1>
</div>
<div class="main3">
    <h1 class="p-3 primetitle text-light">Bienvenue sur cette page dédié à la création de deck</h1>
</div>
<?php

if (Core\Session::isAdmin()) {
    ?>
    <div class="container text-center addpubli">
        <form action="index.php?ctrl=card&action=creatDeck" method="post" enctype="multipart">

            <div class="input-group mb-3">
                <input type="text" name="deckName" class="form-control" id="deckName" placeholder="Nom du Deck">
            </div>
            <div class="input-group mb-3">
                <input type="file" name="imgDeck" class="form-control" id="inputGroupFile02">
            </div>
            <div class="input-group mb-3">
                <textarea class="form-control" name="deckPresentation" aria-label="Description du deck"
                    placeholder="Description du deck"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Creer votre deck</button>
        </form>
    </div>
    <?php

} elseif (Core\Session::getUser()) {
    ?>
    <div class="container text-center addpubli">
        <form action="index.php?ctrl=card&action=creatDeck" method="post" enctype="multipart">

            <div class="input-group mb-3">
                <input type="text" name="deckName" class="form-control" id="deckName" placeholder="Nom du Deck">
            </div>
            <div class="input-group mb-3">
                <input type="file" name="imgDeck" class="form-control" id="inputGroupFile02">
            </div>
            <div class="input-group mb-3">
                <textarea class="form-control" name="deckPresentation" aria-label="Description du deck"
                    placeholder="Description du deck"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Creer votre deck</button>
        </form>
    </div>
    <?php
} else {
    ?>
    <h2>Si vous voulez Creer un deck, Connectez Vous!</h2>
    <?php
}

$title = "Création d'un deck";