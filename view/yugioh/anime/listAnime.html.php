  <h1 class="p-3 text-light">Liste des Animés</h1>


  <table class="table text-center text-light">
    <thead>
      <tr>
        <th scope="col">Titre</th>
        <th scope="col">Affiche</th>
        <th scope="col">Details</th>
      </tr>
    </thead>
    <?php
    if ($result["data"]["animes"]) {
      foreach ($animes = $result["data"]["animes"] as $anime) {
    ?>
        <tbody class="fs-4 fw-semibold">
          <tr>
            <td><?= $anime->getAnimeName() ?></td>
            <td><img src="<?= $anime->getImg() ?>" class="img-fluid"></td>
            <td><a class="link-light" href="index.php?ctrl=anime&action=findAnimeById&id=<?= $anime->getId() ?>">Details</a></td>
          </tr>
        <?php
      }
    } else {
        ?>
        <tr class="text-light text-center">
          <td colspan="3">Pas D'Animes</td>
        </tr>
      <?php
    }

    $title = "Listes des Animés";

      ?>

        </tbody>
  </table>