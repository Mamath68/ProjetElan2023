<?php

$users = $result["data"]['users'];
?>

<h1 class="p-3 text-light">Liste des Utilisateurs</h1>
<div class="container text-center">
  <table class="table users">
    <thead>
      <tr>
        <th scope="col" class="text-center">Avatar</th>
        <th scope="col" class="text-center">Pseudo</th>
        <th scope="col" class="text-center">Date Inscription</th>
      </tr>
    </thead>
    <?php
    if ($result["data"]["users"]) {
      foreach ($users as $user) {
    ?>
        <tbody>
          <tr>
            <td><img src="public/img/<?= $user->getAvatar() ?>" alt="Avatar"></td>
            <td><a href="index.php?ctrl=home&action=publicUser&id=<?= $user->getId() ?>">
                <?= $user->getPseudo() ?>
              </a></td>
            <td>
              <?= $user->getRegisterDate() ?>
            </td>
          </tr>
        <?php
      }
    } else {
        ?>
        <tr>
          <td colspan="3">Aucun utilisateur</td>
        </tr>
      <?php
    }
      ?>
        </tbody>
  </table>
</div>
<?php
$title = "Les Duellistes";

?>