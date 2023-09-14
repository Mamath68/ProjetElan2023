<div class="main2">
    <button class="openbtn" onclick="openNav()">☰</button>
    <h1 class="p-3 primetitle text-light">Liste des Mangas</h1>
</div>
<div class="main3">
    <h1 class="p-3 primetitle text-light">Liste des Mangas</h1>
</div>

<?php

$mangas = $result["data"]["mangas"];
?>

<table class="table text-center mangas">
    <thead>
      <tr>
      <th scope="col">Titre</th>
      <th scope="col">Affiche</th>
      <th scope="col">Details</th>
      </tr>
    </thead>
    <?php
foreach ($mangas as $manga) {
  ?>
  <tbody class="fs-4 fw-semibold">
      <tr>
        <td><?=$manga->getMangasName()?></td>
        <td><img src="<?=$manga->getImg()?>" class="img-fluid"></td>
        <td><a class="link-light" href="index.php?ctrl=mangas&action=findeMangasDurchId&id=<?=$manga->getId()?>">Details</a></td>
      </tr>
      <?php
}

$title = "Listes des Mangas";

?>

</tbody>
      </table>
