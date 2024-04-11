<?php

if (App\Session::getUser()) {
?>
    <h1 class="p-3">Bienvenue
        <?= App\Session::getUser()->getPseudo() ?>
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
    <div class="card card-2">
        <div class="card-header">
            <h3>
                <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank">
                    <?= $card['name'] ?>
                </a>
            </h3>
        </div>
        <div class="card-body card-body-2">
            <img src="<?= $card['card_images'][0]['image_url_small'] ?>" alt="<?= $card['name'] ?>">
        </div>
        <div class="card-footer">
            <?php
            if ($card['type'] == 'Spell Card' || $card['type'] == 'Trap Card') {
            ?>
                <h2>
                    <a href="index.php?ctrl=card&action=detailRaceType&race=<?= $card['race'] ?>&type=<?= $card['type'] ?>" target="_blank">
                        <?= $card['race'] . ' ' . $card['type'] ?>
                    </a>
                </h2>
            <?php
            } else {
            ?>
                <h2>
                    <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank">
                        <?= $card['type'] ?>
                    </a>
                </h2>
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