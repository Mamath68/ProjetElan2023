<div class="main2">
    <button class="openbtn" onclick="openNav()">☰</button>
    <h1 class="p-3 primetitle text-light">Liste des Decks</h1>
</div>
<div class="main3">
    <h1 class="p-3 primetitle text-light">Liste des Decks</h1>
</div>
<?php

if (Core\Session::isAdmin()) {

    $decks = $result['data']['decks'];
    foreach ($decks as $deck) {
        ?>
        <div class="card text-center deck">
            <img src="public/img/<?= $deck->getImgDeck() ?>" class="card-img-top" alt="imageDeck">
            <div class="card-body">
                <h5 class="card-title">
                    <?= ucfirst($deck->getDeckName()) ?>
                </h5>
                <p class="card-text">
                    <?= $deck->getDeckPresentation() ?>
                </p>
                <a href="index.php?ctrl=card&action=detailDeck&id=<?= $deck->getId() ?>" class="btn btn-primary">Détail du
                    Deck</a>
            </div>
        </div>
        <?php
    }
    ?>
    <button><a href="index.php?ctrl=card&action=creatDeckForm">Creer votre deck!</a></button>
    <?php
} else if (Core\Session::getUser()) {

    $decks = $result['data']['decks'];
    foreach ($decks as $deck) {
        ?>
            <div class="card text-center deck">
                <img src="public/img/<?= $deck->getImgDeck() ?>" class="card-img-top" alt="imageDeck">
                <div class="card-body">
                    <h5 class="card-title">
                    <?= ucfirst($deck->getDeckName()) ?>
                    </h5>
                    <p class="card-text">
                    <?= $deck->getDeckPresentation() ?>
                    </p>
                    <a href="index.php?ctrl=card&action=detailDeck&id=<?= $deck->getId() ?>" class="btn btn-primary">Détail du
                        Deck</a>
                </div>
            </div>

        <?php
    }
    ?>
        <button><a href="index.php?ctrl=card&action=creatDeckForm">Creer votre deck!</a></button>
    <?php
} else {

    $decks = $result['data']['decks'];
    foreach ($decks as $deck) {
        ?>
            <div class="card text-center deck">
                <img src="public/img/<?= $deck->getImgDeck() ?>" class="card-img-top" alt="imageDeck">
                <div class="card-body">
                    <h5 class="card-title">
                    <?= ucfirst($deck->getDeckName()) ?>
                    </h5>
                    <p class="card-text">
                    <?= $deck->getDeckPresentation() ?>
                    </p>
                    <a href="index.php?ctrl=card&action=detailDeck&id=<?= $deck->getId() ?>" class="btn btn-primary">Détail du
                        Deck</a>
                </div>
            </div>

        <?php
    }
    ?>
        <h2>Pour Creer un deck, Connectez-Vous!</h2>
    <?php
}

$title = "Les Decks";