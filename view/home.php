<?php

if (Core\Session::isAdmin()) {
    ?>

    <div class="main2">
        <button class="openbtn" onclick="openNav()">☰</button>
        <h1 class="p-3 primetitle text-light">Willkommen
            <?= Core\Session::getUser()->getPseudo() ?>
        </h1>
    </div>
    <div class="main3">
        <h1 class="p-3 primetitle text-light">Willkommen
            <?= Core\Session::getUser()->getPseudo() ?>
        </h1>
    </div>
    <div class="bottom">
        <?php
        $card = $result["data"]["card"];
        $counter = 0;
            foreach ($card['card_images'] as $img) {
                if ($counter <= 0) {
                    ?>
                    <div class="present">
                        <div class="card cardWidth">
                            <figure class="carte">
                                <img src="<?= $img['image_url'] ?>" alt="Carte Alléatoire">
                            </figure>
                        </div>
                        <div class="infosTypeCard">
                            <div class="titre">
                                <h5 class="card-title"><a class="link-light"
                                        href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                                </h5>
                            </div>
                            <div class="type2">
                                <p class="card-text"><a class="link-light"
                                        href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                            </div>
                           <?php
                            if (isset($card['race'])) {
                                ?>
                                <div class="element">
                                    <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=detailRace&race=<?= $card['race'] ?>" target="_blank"><?= $card['race'] ?> </a></p>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                    $counter++;
                }
            }
        ?>
    </div>

    <?php
} else if (Core\Session::getUser()) {
    ?>
        <div class="main3">
            <h1 class="p-3 primetitle text-light">Willkommen
            <?= Core\Session::getUser()->getPseudo() ?>
            </h1>
        </div>
        <div class="main2">
            <button class="openbtn" onclick="openNav()">☰</button>
            <h1 class="p-3 primetitle text-light">Willkommen
            <?= Core\Session::getUser()->getPseudo() ?>
            </h1>
        </div>
        <div class="bottom">
        <?php
        $card = $result["data"]["card"];
        $counter = 0;
            foreach ($card['card_images'] as $img) {
                if ($counter <= 0) {
                    ?>
                    <div class="present">
                        <div class="card cardWidth">
                            <figure class="carte">
                                <img src="<?= $img['image_url'] ?>" alt="Carte Alléatoire">
                            </figure>
                        </div>
                        <div class="infosTypeCard">
                            <div class="titre">
                                <h5 class="card-title"><a class="link-light"
                                        href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                                </h5>
                            </div>
                            <div class="type2">
                                <p class="card-text"><a class="link-light"
                                        href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                            </div>
                            <?php

                            if (isset($card['level'])) {
                                ?>
                                <div class="niveau">
                                    <p class="card-text"><a class="link-light"
                                            href="index.php?ctrl=card&action=detaillevel&level=<?= $card['level'] ?>" target="_blank">
                                            Niveau <?= $card['level'] ?></a></p>
                                </div>
                                <?php
                            } 
                            if(isset($card['scale'])) {
                                ?>
                                <div class="niveau">
                                    <p class="card-text"><a class="link-light"
                                            href="index.php?ctrl=card&action=detailscale&scale=<?= $card['scale'] ?>"
                                            target="_blank">Echelle Pendule :
                                            <?= $card['scale'] ?></a>
                                    </p>
                                </div>
                                <?php
                            } if (isset($card['attribute'])) {
                                ?>
                                <div class="element">
                                    <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=detailElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
                                </div>
                                <?php
                            }
                            if (isset($card['race'])) {
                                ?>
                                <div class="element">
                                    <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=detailRace&race=<?= $card['race'] ?>" target="_blank"><?= $card['race'] ?> </a></p>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                    $counter++;
                }
            }
        ?>
    </div>


    <?php
} else {
    ?>
        <div class="main3">
            <h1 class="p-3 primetitle text-light">Willkommen, lieber Duellant, <br> <strong>Es ist Zeit für das Duell!</strong><br>
                Aber zuerst musst du dich anmelden</h1>
        </div>
        <div class="main2">
            <button class="openbtn" onclick="openNav()">☰</button>
            <h1 class="p-3 primetitle text-light">Willkommen, lieber Duellant, <br> <strong>Es ist Zeit für das Duell!</strong><br>
                Aber zuerst musst du dich anmelden</h1>
        </div>

        <div class="bottom2">
        <?php
        $card = $result["data"]["card"];
        $counter = 0;
            foreach ($card['card_images'] as $img) {
                if ($counter <= 0) {
                    ?>
                    <div class="present">
                        <div class="card cardWidth">
                            <figure class="carte">
                                <img src="<?= $img['image_url'] ?>" alt="carte Alléatoire">
                            </figure>
                        </div>
                        <div class="infosTypeCard">
                            <div class="titre">
                                <h5 class="card-title"><a class="link-light"
                                        href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                                </h5>
                            </div>
                            <div class="type2">
                                <p class="card-text"><a class="link-light"
                                        href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                            </div>
                            <?php

                            if (isset($card['level'])) {
                                ?>
                                <div class="niveau">
                                    <p class="card-text"><a class="link-light"
                                            href="index.php?ctrl=card&action=detaillevel&level=<?= $card['level'] ?>" target="_blank">
                                            Niveau <?= $card['level'] ?></a></p>
                                </div>
                                <?php
                            } 
                            if(isset($card['scale'])) {
                                ?>
                                <div class="niveau">
                                    <p class="card-text"><a class="link-light"
                                            href="index.php?ctrl=card&action=detailscale&scale=<?= $card['scale'] ?>"
                                            target="_blank">Echelle Pendule :
                                            <?= $card['scale'] ?></a>
                                    </p>
                                </div>
                                <?php
                            } if (isset($card['attribute'])) {
                                ?>
                                <div class="element">
                                    <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=detailElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
                                </div>
                                <?php
                            }
                            if (isset($card['race'])) {
                                ?>
                                <div class="element">
                                    <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=detailRace&race=<?= $card['race'] ?>" target="_blank"><?= $card['race'] ?> </a></p>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                    $counter++;
                }
            }
        ?>
    </div>
    <?php
}
$title = "Yu-Gi-Oh! Projekt";
?>