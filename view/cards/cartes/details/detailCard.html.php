<?php
if ($result['card']['data']) {
    foreach ($cards = $result['card']['data'] as $card) {
?>
        <div class="card-area">
            <div class="column1">
                <div class="card-image">
                    <figure>
                        <img title="<?= $card['name'] ?>" loading="lazy" src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['name'] ?>" />
                    </figure>
                </div>
            </div>
            <div class="column2">
                <div class="card-name">
                    <h1>
                        <?= $card['name'] ?>
                    </h1>
                </div>
                <ul class="card-data-info">
                    <?php
                    if ($card['type'] == "Spell Card" || $card['type'] == "Trap Card") {
                    ?>
                        <li>
                            <span class="card-data-header text-info">
                                Type
                            </span>
                            <span class="card-data-cost card-data-subheader">
                                <i class="fa-solid fa-book"></i>
                                <a href="#">
                                    <?= $card['race'] . ' ' . $card['type'] ?>
                                </a>
                            </span>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li>
                            <span class="card-data-header text-info">
                                Type
                            </span>
                            <span class="card-data-cost card-data-subheader">
                                <i class="fa-solid fa-book"></i>
                                <a href="index.php?ctrl=card&action=detailType&type=<?= $card['type'] ?>" target="_blank">
                                    <?= $card['type'] ?>
                                </a>
                            </span>
                        </li>
                        <li>
                            <span class="card-data-header text-info">
                                Typing
                            </span>
                            <span class="card-data-cost card-data-subheader">
                                <?php
                                if ($card['race'] == 'Continuous') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Continuous.png" alt="Continuous" title="Continuous" loading="lazy">
                                <?php } elseif ($card['race'] == 'Aqua') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Aqua.png" alt="Aqua" title="Aqua" loading="lazy">
                                <?php } elseif ($card['race'] == 'Psychic') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Psychic.png" alt="Psychic" title="Psychic" loading="lazy">
                                <?php } elseif ($card['race'] == 'Beast') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Beast.png" alt="Beast" title="Beast" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Beast-Warrior') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Beast-Warrior.png" alt="Beast-Warrior" title="Beast-Warrior" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Counter') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Counter.png" alt="Counter" title="Counter" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Cyberse') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Cyberse.png" alt="Cyberse" title="Cyberse" loading="lazy">
                                <?php } elseif ($card['race'] == 'Dinosaur') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Dinosaur.png" alt="Dinosaur" title="Dinosaur" loading="lazy">
                                <?php } elseif ($card['race'] == 'Divine-Beast') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Divine-Beast.png" alt="Divine-Beast" title="Divine-Beast" loading="lazy">
                                <?php } elseif ($card['race'] == 'Dragon') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Dragon.png" alt="Dragon" title="Dragon" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Equip') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Equip.png" alt="Equip" title="Equip" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Fairy') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Fairy.png" alt="Fairy" title="Fairy" loading="lazy">
                                <?php } elseif ($card['race'] == 'Field') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Field.png" alt="Field" title="Field" loading="lazy">
                                <?php } elseif ($card['race'] == 'Fiend') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Fiend.png" alt="Fiend" title="Fiend" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Fish') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Fish.png" alt="Fish" title="Fish" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Illusion') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Illusion.png" alt="Illusion" title="Illusion" loading="lazy">
                                <?php } elseif ($card['race'] == 'Insect') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Insect.png" alt="Insect" title="Insect" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Machine') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Machine.png" alt="Machine" title="Machine" loading="lazy">
                                <?php } elseif ($card['race'] == 'Normal') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Normal.png" alt="Normal" title="Normal" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Plant') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Plant.png" alt="Plant" title="Plant" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Pyro') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Pyro.png" alt="Pyro" title="Pyro" loading="lazy">
                                <?php } elseif ($card['race'] == 'Quick-Play') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Quick-Play.png" alt="Quick-Play" title="Quick-Play" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Reptile') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Reptile.png" alt="Reptile" title="Reptile" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Ritual') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Ritual.png" alt="Ritual" title="Ritual" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Rock') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Rock.png" alt="Rock" title="Rock" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Sea Serpent') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Sea Serpent.png" alt="Sea Serpent" title="Sea Serpent" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Spellcaster') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Spellcaster.png" alt="Spellcaster" title="Spellcaster" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Thunder') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Thunder.png" alt="Thunder" title="Thunder" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Warrior') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Warrior.png" alt="Warrior" title="Warrior" loading="lazy">
                                <?php } elseif ($card['race'] == 'Winged Beast') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Winged Beast.png" alt="Winged Beast" title="Winged Beast" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Wyrm') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Wyrm.png" alt="Wyrm" title="Wyrm" loading="lazy" />
                                <?php } elseif ($card['race'] == 'Zombie') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Zombie.png" alt="Zombie" title="Zombie" loading="lazy" />
                                <?php } else { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/icons/race/Creator-God.png" alt="Creator-God" title="Creator-God" loading="lazy" />
                                <?php } ?>
                                <a href="index.php?ctrl=card&action=detailRace&race=<?= $card['race'] ?>" target="_blank">
                                    <?= $card['race'] ?>
                                </a>
                            </span>
                        </li>
                    <?php
                    }
                    if (isset($card['attribute'])) {
                    ?>
                        <li>
                            <span class="card-data-header text-info">
                                Attribute
                            </span>
                            <span class="card-data-cost card-data-subheader">
                                <?php if ($card['attribute'] == 'DARK') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/DARK.jpg" alt="DARK" title="DARK" loading="lazy">
                                <?php } elseif ($card['attribute'] == 'LIGHT') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/LIGHT.jpg" alt="LIGHT" title="LIGHT" loading="lazy">
                                <?php } elseif ($card['attribute'] == 'WATER') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/WATER.jpg" alt="WATER" title="WATER" loading="lazy">
                                <?php } elseif ($card['attribute'] == 'WIND') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/WIND.jpg" alt="WIND" title="WIND" loading="lazy">
                                <?php } elseif ($card['attribute'] == 'EARTH') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/EARTH.jpg" alt="EARTH" title="EARTH" loading="lazy">
                                <?php } elseif ($card['attribute'] == 'FIRE') { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/FIRE.jpg" alt="FIRE" title="FIRE" loading="lazy">
                                <?php } else { ?>
                                    <img class="card-typing-icon" src="https://images.ygoprodeck.com/images/cards/DIVINE.jpg" alt="DIVINE" title="DIVINE" loading="lazy">
                                <?php } ?>
                                <a href="index.php?ctrl=card&action=detailAttribute&attribute=<?= $card['attribute'] ?>" target="_blank">
                                    <?= $card['attribute'] ?>
                                </a>
                            </span>
                        </li>
                    <?php
                    }

                    if (isset($card['level'])) {
                    ?>
                        <li>
                            <span class="card-data-header text-info">
                                Level/Rank
                            </span>
                            <span class="card-data-cost card-data-subheader">
                                <img class="card-typing-icon" src="https://ygoprodeck.com/wp-content/uploads/2017/01/level.png" alt="level : <?= $card['level'] ?>" title="level : <?= $card['level'] ?>" loading="lazy" />
                                <a href="index.php?ctrl=card&action=detailLevel&level=<?= $card['level'] ?>" target="_blank">
                                    <?= $card['level'] ?>
                                </a>
                            </span>
                        </li>
                    <?php
                    }
                    if (isset($card['scale'])) {
                    ?>
                        <li>
                            <span class="card-data-header text-info">
                                Pendulum Scale
                            </span>
                            <span class="card-data-cost card-data-subheader">
                                <img class="card-typing-icon" src="https://www.db.yugioh-card.com/yugiohdb/external/image/parts/icon_pendulum.png" alt="scale : <?= $card['scale'] ?>" title="scale : <?= $card['scale'] ?>" loading="lazy" />
                                <a href="index.php?ctrl=card&action=detailScale&scale=<?= $card['scale'] ?>" target="_blank">
                                    <?= $card['scale'] ?>
                                </a>
                            </span>
                        </li>
                    <?php
                    }
                    if (isset($card['linkval'])) {
                    ?>
                        <li>
                            <span class="card-data-header text-info">
                                Link Value
                            </span>
                            <span class="card-data-cost card-data-subheader">
                                <img class="card-typing-icon" src="https://ygoprodeck.com/wp-content/uploads/2017/01/level.png" alt="link : <?= $card['linkval'] ?>" title="link : <?= $card['linkval'] ?>" loading="lazy" />
                                <a href="index.php?ctrl=card&action=detailLinkVal&linkval=<?= $card['linkval'] ?>" target="_blank">
                                    <?= $card['linkval'] ?>
                                </a>
                            </span>
                        </li>
                    <?php
                    }

                    if (isset($card['atk'])) {
                    ?>
                        <li>
                            <span class="card-data-header text-info">
                                ATK
                            </span>
                            <span class="card-data-cost card-data-subheader">
                                <img class="card-typing-icon" src="public/img/swords.png" title=" attack : <?= $card['atk'] ?>" loading="lazy" />
                                <a href="index.php?ctrl=card&action=detailAttack&atk=<?= $card['atk'] ?>" target="_blank">
                                    <?= $card['atk'] ?>
                                </a>
                            </span>
                        </li>
                    <?php
                    }
                    if (isset($card['def'])) {
                    ?>
                        <li>
                            <span class="card-data-header text-info">
                                DEF
                            </span>
                            <span class="card-data-cost card-data-subheader">
                                <i class="fa-solid fa-shield" title="defense : <?= $card['def'] ?>"></i>
                                <a href="index.php?ctrl=card&action=detailDefense&def=<?= $card['def'] ?>" target="_blank">
                                    <?= $card['def'] ?>
                                </a>
                            </span>
                        </li>
                    <?php
                    }
                    if (isset($card['archetype'])) {
                    ?>
                        <li>
                            <span class="card-data-header text-info">
                                Archetype
                            </span>
                            <span class="card-data-cost card-data-subheader">
                                <img class="card-typing-icon" title="archetype : <?= $card['archetype'] ?>" src="public/img/roundflask.png" alt="<?= $card['archetype'] ?>" />
                                <a href="index.php?ctrl=card&action=detailArchetype&archetype=<?= strtolower($card['archetype']) ?>" target="_blank">
                                    <?= $card['archetype'] ?>
                                </a>
                            </span>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li>
                            <span class="card-data-header text-info">
                                Archetype
                            </span>
                            <span class="card-data-cost card-data-subheader">
                                <img class="card-typing-icon" src="public/img/roundflask.png" alt="no archetype" />
                                <a>
                                    This Card has no Archetype
                                </a>
                            </span>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
                <?php
                if (isset($card['pend_desc'])) {
                ?>
                    <h4>
                        Pendulum Effect:
                    </h4>
                    <div class="card-text ">
                        <?= $card['pend_desc'] ?>
                    </div>
                    <hr>
                    <h4>
                        Monster Text / Monster Effect
                    </h4>
                    <div class="card-text ">
                        <?= $card['monster_desc'] ?>
                    </div>
                <?php
                } else {
                ?>
                    <h4>
                        Card description/effect
                    </h4>
                    <div class="card-text ">
                        <?= $card['desc'] ?>
                    </div>
                <?php
                } ?>
                <hr>
            </div>
        </div>
<?php
    }
}



$title = ucfirst($card['name']);

?>