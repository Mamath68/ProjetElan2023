<?php
$user = $result['data']['user'];
// var_dump($user);
?>
    <h1 class="p-3 text-light"> Bienvenue sur la page Profil de
        <?= $user->getPseudo() ?>
    </h1>

<div class="card text-center user ">
    <img src="public/img/<?= $user->getAvatar() ?>" class="card-img-top" alt="avatar">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Addresse Email
            <?= $user->getEmail() ?>
        </li>
        <li class="list-group-item">Date D'inscription <br>
            <?= $user->getRegisterDate() ?>
        </li>
        <!-- <li class="list-group-item">A third item</li> -->
    </ul>
    <div class="card-body">
        <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= $user->getId() ?>"
            class="card-link btn btn-primary"> Mes Publications
        </a>
        <a href="#" class="card-link btn btn-success">Follow <i class="fa-solid fa-user-group"></i></a>
    </div>
</div>


<?php
$title = "Mon Profil Utilisateur";

?>