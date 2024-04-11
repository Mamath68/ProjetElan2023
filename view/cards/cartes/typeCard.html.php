    <h1 class="p-3">Les Types de Carte</h1>

    <h2 class="p-4 text-center">Il existe plusieurs types de cartes. <br>Vous trouverez ci-dessous un exemple de chaque type de cartes.</h2>

    <div class="card-list">
        <?php
        if ($result['normal']['data']) {
            //normal
            foreach ($normal = $result['normal']['data'] as $card) {
        ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['normal_tuner_monster']['data']) {
            // normal_tuner_monster
            foreach ($normal_tuner_monster = $result['normal_tuner_monster']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['effet']['data']) {
            // effet
            foreach ($effet = $result['effet']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['flip_effect_monster']['data']) {
            // flip_effect_monster
            foreach ($flip_effect_monster = $result['flip_effect_monster']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['tuner_monster']['data']) {
            // tuner_monster
            foreach ($tuner_monster = $result['tuner_monster']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['pendule_normal']['data']) {
            // pendule_normal
            foreach ($pendule_normal = $result['pendule_normal']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['pendule_effet']['data']) {
            // pendule_effet
            foreach ($pendule_effet = $result['pendule_effet']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['pendule_flip_monster']['data']) {
            // pendule_flip_monster
            foreach ($pendule_flip_monster = $result['pendule_flip_monster']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['pendulum_tuner_monster']['data']) {
            // pendulum_tuner_monster
            foreach ($pendulum_tuner_monster = $result['pendulum_tuner_monster']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['gemini_monster']['data']) {
            // gemini_monster
            foreach ($gemini_monster = $result['gemini_monster']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['spirit_monster']['data']) {
            // spirit_monster
            foreach ($spirit_monster = $result['spirit_monster']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['union_effect_monster']['data']) {
            // union_effect_monster
            foreach ($union_effect_monster = $result['union_effect_monster']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['rituel']['data']) {
            // rituel
            foreach ($rituel = $result['rituel']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['rituel_effet']['data']) {
            // rituel_effet
            foreach ($rituel_effet = $result['rituel_effet']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['magie']['data']) {
            // magie
            foreach ($magie = $result['magie']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['magie_continue']['data']) {
            // magie_continue   
            foreach ($magie_continue = $result['magie_continue']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['magie_rituel']['data']) {
            // magie_rituel    
            foreach ($magie_rituel = $result['magie_rituel']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['magie_terrain']['data']) {
            // magie_terrain
            foreach ($magie_terrain = $result['magie_terrain']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['magie_rapide']['data']) {
            // magie_rapide
            foreach ($magie_rapide = $result['magie_rapide']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['magie_equipement']['data']) {
            // magie_equipement    
            foreach ($magie_equipement = $result['magie_equipement']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['piege']['data']) {
            // piege    
            foreach ($piege = $result['piege']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['piege_continue']['data']) {
            // piege_continue    
            foreach ($piege_continue = $result['piege_continue']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['piege_contre']['data']) {
            // piege_contre    
            foreach ($piege_contre = $result['piege_contre']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        };
        if ($result['fusion']['data']) {
            // Monstre Fusion
            foreach ($fusion = $result['fusion']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['pendulum_fusion_monster']['data']) {
            // Monstre Fusion Pendule
            foreach ($pendulum_fusion_monster = $result['pendulum_fusion_monster']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['synchro']['data']) {
            // Monstre Synchro
            foreach ($synchro = $result['synchro']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['pendulum_synchro_monster']['data']) {
            // Monstre Synchro Pendule
            foreach ($pendulum_synchro_monster = $result['pendulum_synchro_monster']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['xyz']['data']) {
            // Monstre XYZ
            foreach ($xyz = $result['xyz']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['pendulum_xyz_monster']['data']) {
            // Monstre XYZ Pendule
            foreach ($pendulum_xyz_monster = $result['pendulum_xyz_monster']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
        }
        if ($result['lien']['data']) {
            // Monstre Lien
            foreach ($lien = $result['lien']['data'] as $card) {
            ?>
                <div class="card-item">
                    <h3>
                        <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                    </h3>
                    <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                    <?php
                    if ($card['type'] == 'Spell Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else if ($card['type'] == 'Trap Card') {
                    ?>
                        <h2 class="mt-2">
                            <a href="#" target="_blank"> <?= $card['race'] . ' ' . $card['type'] ?></a>
                            </a>
                        </h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="mt-2">
                            <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                        </h2>
                    <?php
                    }
                    ?>
                </div>
        <?php
            }
        }
        ?>
    </div>
    <?php
    $title = "Présentation des Cartes";
    ?>