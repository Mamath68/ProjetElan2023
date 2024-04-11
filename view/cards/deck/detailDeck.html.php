<?php
// $card = $result['card']['data'];
$decks = $result['data']['decks'];
?>
<div class="main2">
    <button class="openbtn" onclick="openNav()">☰</button>
    <h1 class="p-3 primetitle text-light">Detail du Deck</h1>
</div>

<?php
if (App\Session::isAdmin()) {

    foreach ($decks as $deck) {

        // var_dump($deck);
?>
        <h1 class="p-3 primetitle text-light">Ce Deck S'appelle
            <?= $deck->getDeckName() ?>
        </h1>
    <?php
        // '<a href="index.php?ctrl=card&action=detailCard&name='.$card['name'].'">Le nom de la carte</a>'

    }
} else if (App\Session::getUser()) {
    foreach ($decks as $deck) {

        // var_dump($deck);
    ?>
        <h1 class="p-3 primetitle text-light">Ce Deck S'appelle
            <?= $deck->getDeckName() ?>
        </h1>
    <?php
        // '<a href="index.php?ctrl=card&action=detailCard&name='.$card['name'].'">Le nom de la carte</a>'

    }
} else {
    foreach ($decks as $deck) {

        // var_dump($deck);
    ?>
        <h1 class="p-3 primetitle text-light">Ce Deck S'appelle
            <?= $deck->getDeckName() ?>
        </h1>
<?php
        // '<a href="index.php?ctrl=card&action=detailCard&name='.$card['name'].'">Le nom de la carte</a>'

    }
}
$title = $deck->getDeckName();

include_once("note_deck.php");
include_once("comment_deck.php");
