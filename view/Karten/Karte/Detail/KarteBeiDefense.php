<?php
$defense = $result['defense']['data'];

?>
<div class="main2">
    <button class="openbtn" onclick="openNav()">☰</button>
    <h1 class="p-3 primetitle text-light">Monstres avec
        <?= $_GET['def'] ?> point de defense
    </h1>
</div>
<div class="main3">
    <h1 class="p-3 primetitle text-light">Monstres avec
        <?= $_GET['def'] ?> point de defense
    </h1>
</div>
<div class="container text-center">
    <div class="row">
        <?php
        foreach ($defense as $card) {
            $counter2 = 0;
            foreach ($card['card_images'] as $img) {
                if ($counter2 <= 0) {
                    ?>
                    <div class="col">
                        <div class="present2">
                                <figure class="carte">
                                    <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                                </figure>
                            <div class="infosTypeCard">
                                <div class="titre">
                                    <h5 class="card-title">
                                        <?= $card['name'] ?>
                                    </h5>
                                </div>
                                <div class="element">
                                    <p class="card-text"><a class="link-light" href="#">Ajouter à un Deck</a></p>
                                </div>
                                <div>
                                    <p class="card-text"><a class="link-light"
                                            href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>"
                                            target="_blank">Détail</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $counter2++;
                }
            }
        }
        ?>
    </div>
</div>

<?php
$title = "Defense" . " " . $_GET['def'];