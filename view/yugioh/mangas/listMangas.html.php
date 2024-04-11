  <h1 class="p-3 primetitle text-light">Liste des Mangas</h1>

  <table class="table text-center text-light">
    <thead>
      <tr>
        <th scope="col">Titre</th>
        <th scope="col">Affiche</th>
        <th scope="col">Details</th>
      </tr>
    </thead>
    <?php
    if ($result["data"]["mangas"]) {
      foreach ($mangas = $result["data"]["mangas"] as $manga) {
    ?>
        <tbody class="fs-4 fw-semibold">
          <tr>
            <td><?= $manga->getMangasName() ?></td>
            <td><img src="<?= $manga->getImg() ?>" class="img-fluid"></td>
            <td><a class="link-light" href="index.php?ctrl=mangas&action=findMangasById&id=<?= $manga->getId() ?>">Details</a></td>
          </tr>
        <?php
      }
    } else {
        ?>
          <tr class="text-light text-center">
            <td colspan="3">Pas de Mangas</td>
          </tr>
      <?php
    }
      ?>

      </tbody>
  </table>
  <?php

  $title = "Listes des Mangas";

  ?>