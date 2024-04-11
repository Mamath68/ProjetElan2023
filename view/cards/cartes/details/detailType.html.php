<?php
$data = $result['type']['data'];
?>

<h1><?= $data[0]['type'] ?></h1>

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
$title = $card['type'];
