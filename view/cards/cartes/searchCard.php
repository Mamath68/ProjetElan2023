<?php
$name = $result['name']['data'];
$type = $result['type']['data'];
$archetype = $result['archetype']['data'];
$level = $result['level']['data'];
$race = $result['race']['data'];
$attribute = $result['attribute']['data'];
$scale = $result['scale']['data'];
$linkval = $result['linkval']['data'];
?>

<form action="index.php?ctrl=card&action=searchCard" method="get">
    <label for="type">Type:</label>
    <input type="text" id="type" name="<?= $type['type'] ?>"><br>
    <label for="archetype">Archetype:</label>
    <input type="text" id="archetype" name="<?= $type['archetype'] ?>"><br>
    <label for="level">Level:</label>
    <input type="number" id="level" name="<?= $type['level'] ?>"><br>
    <label for="race">Race:</label>
    <input type="text" id="race" name="<?= $type['race'] ?>"><br>
    <label for="attribute">Attribute:</label>
    <input type="text" id="attribute" name="<?= $type['attribute'] ?>"><br>
    <label for="scale">Scale:</label>
    <input type="number" id="scale" name="<?= $type['scale'] ?>"><br>
    <label for="linkval">Link Value:</label>
    <input type="number" id="linkval" name="<?= $type['linkval'] ?>"><br>
    <input type="submit" value="Search">
</form>

<?php
$title = "Recherches";
?>