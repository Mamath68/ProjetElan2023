<div class="main2">
    <button class="openbtn" onclick="openNav()">☰</button>
    <h1 class="p-3 primetitle text-light">Liste des Animés</h1>
</div>
<div class="main3">
    <h1 class="p-3 primetitle text-light">Liste des Animés</h1>
</div>

<?php

$animes = $result["data"]["animes"];
?>

<table class="table text-center animes">
    <thead>
      <tr>
      <th scope="col">Titre</th>
      <th scope="col">Affiche</th>
      <th scope="col">Details</th>
      </tr>
    </thead>
    <?php
foreach ($animes as $anime) {
  ?>
  <tbody class="fs-4 fw-semibold">
      <tr>
        <td><?=$anime->getAnimeName()?></td>
        <td><img src="<?=$anime->getImg()?>" class="img-fluid"></td>
        <td><a class="link-light" href="index.php?ctrl=anime&action=findeAnimeDurchId&id=<?=$anime->getId()?>">Details</a></td>
      </tr>
      <?php
}

$title = "Listes des Animés";

?>

</tbody>
      </table>
