<?php
$data = $result['race']['data'];
?>

<h1>Race: <?= $data[0]['race'] ?> Monster</h1>

<div class="card-list">
    <?php
    if ($data) {
    ?>
        <?php
        foreach ($data as $card) {
        ?>
            <div class="card-item">
                <h3>
                    <a href="index.php?ctrl=card&action=detailcard&id=<?= $card['id'] ?>" target="_blank"> <?= $card['name'] ?></a>
                </h3>
                <img src="<?= $card['card_images'][0]['image_url'] ?>" alt="<?= $card['type'] ?>">
                <h2 class="mt-2">
                    <a href="index.php?ctrl=card&action=detailtype&type=<?= $card['type'] ?>" target="_blank"> <?= $card['type'] ?></a>
                </h2>
            </div>
        <?php
        }
    } else {
        ?>
        <p>Aucune carte n'a été trouvée.</p>
    <?php
    }
    ?>
</div>

<?php
$title = "Race" . " : " . $card['race'];
