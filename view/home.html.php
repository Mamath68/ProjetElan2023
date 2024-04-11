<?php

if (Core\Session::getUser()) {
?>
    <h1 class="p-3">Bienvenue
        <?= Core\Session::getUser()->getPseudo() ?>
    </h1>
    </div>
<?php
} else {
?>
    <h1 class="p-3">Bienvenue
        Administrateur
    </h1>
<?php
}

if (isset($result["data"]["card"])) {
    $card = $result["data"]["card"];
?>
    <div class="present">
        <div class="card cardWidth">
            <figure class="carte">
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="Carte Alléatoire">
            </figure>
        </div>
        <div class="infosTypeCard">
            <div class="titre">
                <h5 class="card-title"><a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                </h5>
            </div>
            <div class="type2">
                <p class="card-text"><a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
            </div>
            <?php
            if (isset($card['race'])) {
            ?>
                <div class="element">
                    <p class="card-text"><a href="index.php?ctrl=card&action=detailRace&race=<?= $card['race'] ?>" target="_blank"><?= $card['race'] ?> </a></p>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
<?php
}
?>
</div>

<?php
$title = "Projet Yu-Gi-Oh!";
?>