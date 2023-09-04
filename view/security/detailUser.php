<div class="main2">
    <button class="openbtn" onclick="openNav()">☰</button>
    <h1 class="p-3 primetitle text-light">
        <?= Core\Session::getUser()->getPseudo() ?>
    </h1>
</div>
<div class="main3">
    <h1 class="p-3 primetitle text-light">
        <?= Core\Session::getUser()->getPseudo() ?>
    </h1>
</div>
<?php
if (Core\Session::isAdmin()) {
    ?>

    <div class="card text-center user ">
        <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
        <div class="card-body">
            <p class="card-text">Bienvenue administrateur</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Addresse Email
                <?= Core\Session::getUser()->getEmail() ?>
            </li>
            <li class="list-group-item">Date D'inscription <br>
                <?= Core\Session::getUser()->getRegisterDate() ?>
            </li>
        </ul>
        <div class="card-body">
            <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                class="card-link btn btn-primary"> Mes Publications
            </a>
            <a href="index.php?ctrl=security&action=deleteAccountForm&id=<?= Core\Session::getUser()->getId() ?>"
                class="card-link btn btn-warning">Delete
                Account</a>
        </div>
    </div>

<?php } else if (Core\Session::getUser()) {
    ?>
        <div class="card text-center user ">
            <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
            <div class="card-body">
                <h5 class="card-title">
                <p class="card-text">Bienvenue Duelliste</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Addresse Email
                <?= Core\Session::getUser()->getEmail() ?>
                </li>
                <li class="list-group-item">Date D'inscription <br>
                <?= Core\Session::getUser()->getRegisterDate() ?>
                </li>
            </ul>
            <div class="card-body">
            <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"
                class="card-link btn btn-primary"> Mes Publications
            </a>
            <a href="index.php?ctrl=security&action=deleteAccountForm&id=<?= Core\Session::getUser()->getId() ?>"
                class="card-link btn btn-warning">Delete
                Account</a>
            </div>
        </div>

<?php }
$title = "Mon Profil Utilisateur";

?>