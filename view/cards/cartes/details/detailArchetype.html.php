<?php
$data = $result['archetype']['data']
?>

<h1>Archetype : <?= $data[0]['archetype'] ?></h1>
<div class="card-list">
    <?php
    if ($data) {
        foreach ($data as $card) {
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

$title = "Archetype : " . " " . $card['archetype'];
