<div class="main3">
    <h1 class="p-3 primetitle text-light">Les Types de Carte</h1>
</div>
<div class="main2">
    <button class="openbtn" onclick="openNav()">☰</button>
    <h1 class="p-3 primetitle text-light">Les Types de Carte</h1>
</div>
<h2 class="p-4">Il existe plusieurs types de cartes. <br>Vous trouverez ci-dessous un exemple de chaque type de cartes.</h2>
<h3>En survolant les cartes, vous aurez des liens cliquables à votre disposition, vous pourrez donc explorer à votre guise.</h3>
<?php
$normal = $result['normal']['data'];
$normal_tuner_monster = $result['normal_tuner_monster']['data'];
$effet = $result['effet']['data'];
$flip_effect_monster = $result['flip_effect_monster']['data'];
$tuner_monster = $result['tuner_monster']['data'];
$pendule_normal = $result['pendule_normal']['data'];
$pendule_effet = $result['pendule_effet']['data'];
$pendule_flip_monster = $result['pendule_flip_monster']['data'];
$pendulum_tuner_monster = $result['pendulum_tuner_monster']['data'];
$gemini_monster = $result['gemini_monster']['data'];
$spirit_monster = $result['spirit_monster']['data'];
$union_effect_monster = $result['union_effect_monster']['data'];
$rituel = $result['rituel']['data'];
$rituel_effet = $result['rituel_effet']['data'];
$magie = $result['magie']['data'];
$magie_continue = $result['magie_continue']['data'];
$magie_rituel = $result['magie_rituel']['data'];
$magie_terrain = $result['magie_terrain']['data'];
$magie_rapide = $result['magie_rapide']['data'];
$magie_equipement = $result['magie_equipement']['data'];
$piege = $result['piege']['data'];
$piege_continue = $result['piege_continue']['data'];
$piege_contre = $result['piege_contre']['data'];
?>
<div class="cartes">
    <!-- normal -->
    <?php
    foreach ($normal as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
    ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                        <div class="element">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // normal_tuner_monster
    foreach ($normal_tuner_monster as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                        <div class="element">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // effet
    foreach ($effet as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                        <div class="element">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // flip_effect_monster
    foreach ($flip_effect_monster as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                        <div class="element">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiElement&attribute=<?= $card['attribute'] ?>" target="_blank"> Elément <?= $card['attribute'] ?> </a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // tuner_monster
    foreach ($tuner_monster as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                        <div class="element">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // pendule_normal
    foreach ($pendule_normal as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiScale&scale=<?= $card['scale'] ?>" target="_blank">Echelle Pendule :
                                    <?= $card['scale'] ?></a>
                            </p>
                        </div>
                        <div class="element">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // pendule_effet
    foreach ($pendule_effet as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiScale&scale=<?= $card['scale'] ?>" target="_blank">Echelle Pendule :
                                    <?= $card['scale'] ?></a>
                            </p>
                        </div>
                        <div class="element">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // pendule_flip_monster
    foreach ($pendule_flip_monster as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a></h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiScale&scale=<?= $card['scale'] ?>" target="_blank">Echelle Pendule :
                                    <?= $card['scale'] ?></a>
                            </p>
                        </div>
                        <div class="element">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // pendulum_tuner_monster
    foreach ($pendulum_tuner_monster as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiScale&scale=<?= $card['scale'] ?>" target="_blank">Echelle Pendule :
                                    <?= $card['scale'] ?></a>
                            </p>
                        </div>
                        <div class="element">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // gemini_monster
    foreach ($gemini_monster as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // spirit_monster
    foreach ($spirit_monster as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // union_effect_monster
    foreach ($union_effect_monster as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // rituel
    foreach ($rituel as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // rituel_effet
    foreach ($rituel_effet as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // magie
    foreach ($magie as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiRace&race=<?= $card['race'] ?>" target="_blank"><?= $card['race'] ?> </a> </p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // magie_continue   
    foreach ($magie_continue as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiRace&race=<?= $card['race'] ?>" target="_blank"><?= $card['race'] ?> </a> </p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // magie_rituel    
    foreach ($magie_rituel as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiRace&race=<?= $card['race'] ?>" target="_blank"><?= $card['race'] ?> </a> </p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // magie_terrain
    foreach ($magie_terrain as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiRace&race=<?= $card['race'] ?>" target="_blank"><?= $card['race'] ?> </a> </p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // magie_rapide
    foreach ($magie_rapide as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiRace&race=<?= $card['race'] ?>" target="_blank"><?= $card['race'] ?> </a> </p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // magie_equipement    
    foreach ($magie_equipement as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiRace&race=<?= $card['race'] ?>" target="_blank"><?= $card['race'] ?> </a> </p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // piege    
    foreach ($piege as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiRace&race=<?= $card['race'] ?>" target="_blank"><?= $card['race'] ?> </a> </p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // piege_continue    
    foreach ($piege_continue as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiRace&race=<?= $card['race'] ?>" target="_blank"><?= $card['race'] ?> </a> </p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // piege_contre    
    foreach ($piege_contre as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiRace&race=<?= $card['race'] ?>" target="_blank"><?= $card['race'] ?> </a> </p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }

    $fusion = $result['fusion']['data'];
    $pendulum_fusion_monster = $result['pendulum_fusion_monster']['data'];
    $synchro = $result['synchro']['data'];
    $pendulum_synchro_monster = $result['pendulum_synchro_monster']['data'];
    $xyz = $result['xyz']['data'];
    $pendulum_xyz_monster = $result['pendulum_xyz_monster']['data'];
    $lien = $result['lien']['data'];
    // Monstre Fusion
    foreach ($fusion as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                        <div class="element">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // Monstre Fusion Pendule
    foreach ($pendulum_fusion_monster as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiScale&scale=<?= $card['scale'] ?>" target="_blank">Echelle Pendule :
                                    <?= $card['scale'] ?></a>
                            </p>
                        </div>
                        <div class="element">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // Monstre Synchro
    foreach ($synchro as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                        <div class="element">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // Monstre Synchro Pendule
    foreach ($pendulum_synchro_monster as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiScale&scale=<?= $card['scale'] ?>" target="_blank">Echelle Pendule :
                                    <?= $card['scale'] ?></a>
                            </p>
                        </div>
                        <div class="element">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // Monstre XYZ
    foreach ($xyz as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                        <div class="element">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // Monstre XYZ Pendule
    foreach ($pendulum_xyz_monster as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiLevel&level=<?= $card['level'] ?>" target="_blank"> Niveau <?= $card['level'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiScale&scale=<?= $card['scale'] ?>" target="_blank">Echelle Pendule :
                                    <?= $card['scale'] ?></a>
                            </p>
                        </div>
                        <div class="element">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
                        </div>
                    </div>
                </div>
            <?php
                $counter++;
            }
        }
    }
    // Monstre Lien
    foreach ($lien as $card) {
        $counter = 0;
        foreach ($card['card_images'] as $img) {
            if ($counter <= 0) {
            ?>
                <div class="present2 present">
                    <div class="card cardWidth2 cardWidth">
                        <figure class="carte">
                            <img src="<?= $img['image_url'] ?>" alt="monstre_normal">
                        </figure>
                    </div>
                    <div class="infosTypeCard">
                        <div class="titre">
                            <h5 class="card-title"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiNammen&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                            </h5>
                        </div>
                        <div class="type2">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiType&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a></p>
                        </div>
                        <div class="niveau">
                            <p class="card-text">
                                <a class="link-light" href="index.php?ctrl=card&action=KarteBeiLinkValor&linkval=<?= $card['linkval'] ?>" target="_blank"> Valeur lien : <?= $card['linkval'] ?> </a>
                            </p>
                        </div>
                        <div class="element">
                            <p class="card-text"><a class="link-light" href="index.php?ctrl=card&action=KarteBeiElement&attribute=<?= $card['attribute'] ?>" target="_blank">Elément <?= $card['attribute'] ?> </a></p>
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
<?php
$title = "KarteVorstellung";

?>