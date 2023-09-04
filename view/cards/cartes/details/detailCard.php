<div class="main2">
    <button class="openbtn" onclick="openNav()">☰</button>
    <h1 class="p-3 primetitle text-light">Liste des Cartes</h1>
</div>
<?php
$card = $result['card']['data'];

if (Core\Session::isAdmin()) {
    foreach ($card as $carte) {
        ?>
        <div class="main3">
            <h1 class="p-3 primetitle2 text-light">
                <?= ucwords($carte['name']) ?>
            </h1>
        </div>
        <hr>
        <div class="conteneur">
            <div class="col detail">
                <?php
                $counter2 = 0;
                foreach ($carte['card_images'] as $img) {
                    if ($counter2 <= 0) {
                        ?>
                        <td><img src="<?= $img['image_url'] ?>" alt="<?= $carte['name'] ?>"></td>
                        <?php
                        $counter2++;
                    }
                }
                ?>
            </div>
            <div class="col detail">
                <ul class="card-data-info">
                    <li>
                        <span class="text-info">Type</span>
                        <span>
                            <a class="link-light" href="index.php?ctrl=card&action=detailType&type=<?= $carte['type'] ?>"
                                target="_blank">
                                <?= $carte['type'] ?>
                            </a>
                        </span>
                    </li>

                    <?php
                    if (isset($carte['attribute'])) {
                        ?>
                        <li>
                            <span class="text-info">Element</span>
                            <span>
                                <a class="link-light"
                                    href="index.php?ctrl=card&action=detailElement&attribute=<?= $carte['attribute'] ?>"
                                    target="_blank">
                                    <?= $carte['attribute'] ?>
                                </a>
                            </span>
                        </li>
                        <?php
                    }
                    ?>
                    <li>
                        <span class="text-info">Race</span>
                        <span>
                            <?php
                            ?>
                            <a class="link-light" href="index.php?ctrl=card&action=detailRace&race=<?= $carte['race'] ?>"
                                target="_blank">
                                <?= $carte['race'] ?>
                            </a>
                    </li>

                    <?php
                    if (isset($carte['level'])) {
                        ?>
                        <li>
                            <span class="text-info">Level/Rank</span>
                            <span>
                                <a class="link-light" href="index.php?ctrl=card&action=detailLevel&level=<?= $carte['level'] ?>"
                                    target="_blank">
                                    <?= $carte['level'] ?>
                                </a>
                            </span>
                        </li>
                        <?php
                    }
                    if (isset($carte['linkval'])) {
                        ?>
                        <li>
                            <span class="text-info">Link Valor</span>
                            <span>
                                <a class="link-light"
                                    href="index.php?ctrl=card&action=detailLinkVal&linkval=<?= $carte['linkval'] ?>"
                                    target="_blank">
                                    <?= $carte['linkval'] ?>
                                </a>
                            </span>
                        </li>
                        <?php
                    }
                    if (isset($carte['linkmarkers'])) {
                        ?>
                        <li>
                            <span class="text-info">Link Marker</span>
                            <span>
                                <?php
                                foreach ($carte['linkmarkers'] as $linkmarker) {
                                    ?>
                                    <a class="link-light"
                                        href="index.php?ctrl=card&action=detailLinkMarkers&linkmarkers=<?= $linkmarker ?>"
                                        target="_blank">

                                        <?= $linkmarker ?> <br>
                                    </a>
                                    <?php
                                }
                                ?>
                            </span>
                        </li>
                        <?php
                    }
                    if (isset($carte['scale'])) {
                        ?>
                        <li>
                            <span class="text-info">Pendulum Scale</span>
                            <span>
                                <a class="link-light" href="index.php?ctrl=card&action=detailScale&scale=<?= $carte['scale'] ?>"
                                    target="_blank">
                                    <?= $carte['scale'] ?>
                                </a>
                            </span>
                        </li>
                        <?php
                    }
                    if (isset($carte['atk'])) {
                        ?>
                        <li>
                            <span class="text-info">Attaque</span>
                            <span>
                                <a class="link-light" href="index.php?ctrl=card&action=detailAttack&atk=<?= $carte['atk'] ?>"
                                    target="_blank">
                                    <?= $carte['atk'] ?>
                                </a>
                            </span>
                        </li>
                        <?php
                    }
                    if (isset($carte['def'])) {
                        ?>
                        <li>
                            <span class="text-info">Defense</span>
                            <span>
                                <a class="link-light" href="index.php?ctrl=card&action=detailDefense&def=<?= $carte['def'] ?>"
                                    target="_blank">
                                    <?= $carte['def'] ?>
                                </a>

                            </span>
                        </li>
                        <?php
                    }
                    ?>
                    <li>
                        <span class="text-info">Archetype</span>
                        <?php
                        if (isset($carte['archetype'])) {
                            ?>
                            <span>
                                <a class="link-light"
                                    href="index.php?ctrl=card&action=detailArchetype&archetype=<?= strtolower($carte['archetype']) ?>"
                                    target="_blank"> <?= $carte['archetype'] ?>
                                </a>
                            </span>
                            <?php
                        } else {
                            ?>
                            <span>No Archetype</span>
                            <?php
                        }
                        ?>
                    </li>
                </ul>
                <div class="text-center effect">
                    <h4>Description/effect</h4>
                    <p>
                        <?= $carte['desc'] ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    </div>

    <?php
} elseif (Core\Session::getUser()) {
    foreach ($card as $carte) {
        ?>
        <div class="main3">
            <h1 class="p-3 primetitle2 text-light">
                <?= ucwords($carte['name']) ?>
            </h1>
        </div>
        <hr>
        <div class="conteneur">
            <div class="col detail">
                <?php
                $counter2 = 0;
                foreach ($carte['card_images'] as $img) {
                    if ($counter2 <= 0) {
                        ?>
                        <td><img src="<?= $img['image_url'] ?>" alt="<?= $carte['name'] ?>"></td>
                        <?php
                        $counter2++;
                    }
                }
                ?>
            </div>
            <div class="col detail">
                <ul class="card-data-info">
                    <li>
                        <span class="text-info">Type</span>
                        <span>
                            <a class="link-light" href="index.php?ctrl=card&action=detailType&type=<?= $carte['type'] ?>"
                                target="_blank">
                                <?= $carte['type'] ?>
                            </a>
                        </span>
                    </li>

                    <?php
                    if (isset($carte['attribute'])) {
                        ?>
                        <li>
                            <span class="text-info">Element</span>
                            <span>
                                <a class="link-light"
                                    href="index.php?ctrl=card&action=detailElement&attribute=<?= $carte['attribute'] ?>"
                                    target="_blank">
                                    <?= $carte['attribute'] ?>
                                </a>
                            </span>
                        </li>
                        <?php
                    }
                    ?>
                    <li>
                        <span class="text-info">Race</span>
                        <span>
                            <?php
                            ?>
                            <a class="link-light" href="index.php?ctrl=card&action=detailRace&race=<?= $carte['race'] ?>"
                                target="_blank">
                                <?= $carte['race'] ?>
                            </a>
                    </li>

                    <?php
                    if (isset($carte['level'])) {
                        ?>
                        <li>
                            <span class="text-info">Level/Rank</span>
                            <span>
                                <a class="link-light" href="index.php?ctrl=card&action=detailLevel&level=<?= $carte['level'] ?>"
                                    target="_blank">
                                    <?= $carte['level'] ?>
                                </a>
                            </span>
                        </li>
                        <?php
                    }
                    if (isset($carte['linkval'])) {
                        ?>
                        <li>
                            <span class="text-info">Link Valor</span>
                            <span>
                                <a class="link-light"
                                    href="index.php?ctrl=card&action=detailLinkVal&linkval=<?= $carte['linkval'] ?>"
                                    target="_blank">
                                    <?= $carte['linkval'] ?>
                                </a>
                            </span>
                        </li>
                        <?php
                    }
                    if (isset($carte['linkmarkers'])) {
                        ?>
                        <li>
                            <span class="text-info">Link Marker</span>
                            <span>
                                <?php
                                foreach ($carte['linkmarkers'] as $linkmarker) {
                                    ?>
                                    <a class="link-light"
                                        href="index.php?ctrl=card&action=detailLinkMarkers&linkmarkers=<?= $linkmarker ?>"
                                        target="_blank">

                                        <?= $linkmarker ?> <br>
                                    </a>
                                    <?php
                                }
                                ?>
                            </span>
                        </li>
                        <?php
                    }
                    if (isset($carte['scale'])) {
                        ?>
                        <li>
                            <span class="text-info">Pendulum Scale</span>
                            <span>
                                <a class="link-light" href="index.php?ctrl=card&action=detailScale&scale=<?= $carte['scale'] ?>"
                                    target="_blank">
                                    <?= $carte['scale'] ?>
                                </a>
                            </span>
                        </li>
                        <?php
                    }
                    if (isset($carte['atk'])) {
                        ?>
                        <li>
                            <span class="text-info">Attaque</span>
                            <span>
                                <a class="link-light" href="index.php?ctrl=card&action=detailAttack&atk=<?= $carte['atk'] ?>"
                                    target="_blank">
                                    <?= $carte['atk'] ?>
                                </a>
                            </span>
                        </li>
                        <?php
                    }
                    if (isset($carte['def'])) {
                        ?>
                        <li>
                            <span class="text-info">Defense</span>
                            <span>
                                <a class="link-light" href="index.php?ctrl=card&action=detailDefense&def=<?= $carte['def'] ?>"
                                    target="_blank">
                                    <?= $carte['def'] ?>
                                </a>

                            </span>
                        </li>
                        <?php
                    }
                    ?>
                    <li>
                        <span class="text-info">Archetype</span>
                        <?php
                        if (isset($carte['archetype'])) {
                            ?>
                            <span>
                                <a class="link-light"
                                    href="index.php?ctrl=card&action=detailArchetype&archetype=<?= strtolower($_GET['archetype']) ?>"
                                    target="_blank">
                                    <?= $_GET['archetype'] ?>
                                </a>
                            </span>
                            <?php
                        } else {
                            ?>
                            <span>No Archetype</span>
                            <?php
                        }
                        ?>
                    </li>
                </ul>
                <div class="text-center effect">
                    <h4>Description/effect</h4>
                    <p>
                        <?= $carte['desc'] ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    </div>

    <?php
} else {
    foreach ($card as $carte) {
        ?>
        <div class="main3">
            <h1 class="p-3 primetitle2 text-light">
                <?= ucwords($carte['name']) ?>
            </h1>
        </div>
        <hr>
        <div class="conteneur">
            <div class="col detail">
                <?php
                $counter2 = 0;
                foreach ($carte['card_images'] as $img) {
                    if ($counter2 <= 0) {
                        ?>
                        <td><img src="<?= $img['image_url'] ?>" alt="<?= $carte['name'] ?>"></td>
                        <?php
                        $counter2++;
                    }
                }
                ?>
            </div>
            <div class="col detail">
                <ul class="card-data-info">
                    <li>
                        <span class="text-info">Type</span>
                        <span>
                            <a class="link-light" href="index.php?ctrl=card&action=detailType&type=<?= $carte['type'] ?>"
                                target="_blank">
                                <?= $carte['type'] ?>
                            </a>
                        </span>
                    </li>

                    <?php
                    if (isset($carte['attribute'])) {
                        ?>
                        <li>
                            <span class="text-info">Element</span>
                            <span>
                                <a class="link-light"
                                    href="index.php?ctrl=card&action=detailElement&attribute=<?= $carte['attribute'] ?>"
                                    target="_blank">
                                    <?= $carte['attribute'] ?>
                                </a>
                            </span>
                        </li>
                        <?php
                    }
                    ?>
                    <li>
                        <span class="text-info">Race</span>
                        <span>
                            <?php
                            ?>
                            <a class="link-light" href="index.php?ctrl=card&action=detailRace&race=<?= $carte['race'] ?>"
                                target="_blank">
                                <?= $carte['race'] ?>
                            </a>
                    </li>

                    <?php
                    if (isset($carte['level'])) {
                        ?>
                        <li>
                            <span class="text-info">Level/Rank</span>
                            <span>
                                <a class="link-light" href="index.php?ctrl=card&action=detailLevel&level=<?= $carte['level'] ?>"
                                    target="_blank">
                                    <?= $carte['level'] ?>
                                </a>
                            </span>
                        </li>
                        <?php
                    }
                    if (isset($carte['linkval'])) {
                        ?>
                        <li>
                            <span class="text-info">Link Valor</span>
                            <span>
                                <a class="link-light"
                                    href="index.php?ctrl=card&action=detailLinkVal&linkval=<?= $carte['linkval'] ?>"
                                    target="_blank">
                                    <?= $carte['linkval'] ?>
                                </a>
                            </span>
                        </li>
                        <?php
                    }
                    if (isset($carte['linkmarkers'])) {
                        ?>
                        <li>
                            <span class="text-info">Link Marker</span>
                            <span>
                                <?php
                                foreach ($carte['linkmarkers'] as $linkmarker) {
                                    ?>
                                    <a class="link-light"
                                        href="index.php?ctrl=card&action=detailLinkMarkers&linkmarkers=<?= $linkmarker ?>"
                                        target="_blank">

                                        <?= $linkmarker ?> <br>
                                    </a>
                                    <?php
                                }
                                ?>
                            </span>
                        </li>
                        <?php
                    }
                    if (isset($carte['scale'])) {
                        ?>
                        <li>
                            <span class="text-info">Pendulum Scale</span>
                            <span>
                                <a class="link-light" href="index.php?ctrl=card&action=detailScale&scale=<?= $carte['scale'] ?>"
                                    target="_blank">
                                    <?= $carte['scale'] ?>
                                </a>
                            </span>
                        </li>
                        <?php
                    }
                    if (isset($carte['atk'])) {
                        ?>
                        <li>
                            <span class="text-info">Attaque</span>
                            <span>
                                <a class="link-light" href="index.php?ctrl=card&action=detailAttack&atk=<?= $carte['atk'] ?>"
                                    target="_blank">
                                    <?= $carte['atk'] ?>
                                </a>
                            </span>
                        </li>
                        <?php
                    }
                    if (isset($carte['def'])) {
                        ?>
                        <li>
                            <span class="text-info">Defense</span>
                            <span>
                                <a class="link-light" href="index.php?ctrl=card&action=detailDefense&def=<?= $carte['def'] ?>"
                                    target="_blank">
                                    <?= $carte['def'] ?>
                                </a>

                            </span>
                        </li>
                        <?php
                    }
                    ?>
                    <li>
                        <span class="text-info">Archetype</span>
                        <?php
                        if (isset($carte['archetype'])) {
                            ?>
                            <span>
                                <a class="link-light"
                                    href="index.php?ctrl=card&action=detailArchetype&archetype=<?= strtolower($carte['archetype']) ?>"
                                    target="_blank">
                                    <?= $carte['archetype'] ?>
                                </a>
                            </span>
                            <?php
                        } else {
                            ?>
                            <span>No Archetype</span>
                            <?php
                        }
                        ?>
                    </li>
                </ul>
                <div class="text-center effect">
                    <h4>Description/effect</h4>
                    <p>
                        <?= $carte['desc'] ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    </div>

    <?php
}



$title = ucfirst($carte['name']);

?>