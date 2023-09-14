<?php
$linkval = $result['linkval']['data'];

?>
<div class="main2">
    <button class="openbtn" onclick="openNav()">☰</button>
    <h1 class="p-3 primetitle text-light">Monstres de Valeur Lien
        <?= $_GET['linkval'] ?>
    </h1>
</div>
<div class="main3">
    <h1 class="p-3 primetitle text-light">Monstres de Valeur Lien
        <?= $_GET['linkval'] ?>
    </h1>
</div>
<div class="container text-center">
    <div class="row">
        <?php
        foreach ($linkval as $card) {
            $counter = 0;
            foreach ($card['card_images'] as $img) {
                if ($counter <= 0) {
                    ?>
                    <div class="col">
                        <div class="present2">
                            <figure class="carte">
                                <img src="<?= $img['image_url'] ?>" alt="<?=$card['type']?>">
                            </figure>
                            <div class="infosTypeCard">
                                <div class="titre">
                                    <h5 class="card-title">
                                        <?= $card['name'] ?>
                                    </h5>
                                </div>
                                <div class="element">
                                    <p class="card-text"><a class="link-light" href="#">An Einem Deck Zufügen</a></p>
                                </div>
                                <div>
                                    <p class="card-text"><a class="link-light"
                                            href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>"
                                            target="_blank">Mehr Infos</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $counter++;
                }
            }
        }
        ?>
    </div>
</div>
<?php

$title = "Valeur Lien " . " " . $_GET['linkval'];