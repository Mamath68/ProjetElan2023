<div class="main2">
    <button class="openbtn" onclick="openNav()">☰</button>
    <h1 class="p-3 primetitle text-light">
        <?= App\Session::getUser()->getPseudo() ?>
    </h1>
</div>
<div class="main3">
    <h1 class="p-3 primetitle text-light">
        <?= App\Session::getUser()->getPseudo() ?>
    </h1>
</div>
<?php
if (App\Session::isAdmin()) {
?>

    <div class="card text-center user ">
        <img src="public/img/<?= App\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
        <div class="card-body">
            <p class="card-text">Bienvenue administrateur</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Addresse Email
                <?= App\Session::getUser()->getEmail() ?>
            </li>
            <li class="list-group-item">Date D'inscription <br>
                <?= App\Session::getUser()->getRegisterDate() ?>
            </li>
        </ul>
        <div class="card-body">
            <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= App\Session::getUser()->getId() ?>" class="card-link btn btn-primary">Les Publications
            </a>
        </div>
    </div>

<?php } else if (App\Session::getUser()) {
?>
    <div class="card text-center user ">
        <img src="public/img/<?= App\Session::getUser()->getAvatar() ?>" class="card-img-top" alt="avatar">
        <div class="card-body">
            <h5 class="card-title">
                <p class="card-text">Bienvenue Duelliste</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Addresse Email
                <?= App\Session::getUser()->getEmail() ?>
            </li>
            <li class="list-group-item">Date D'inscription <br>
                <?= App\Session::getUser()->getRegisterDate() ?>
            </li>
        </ul>
        <div class="card-body">
            <a href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= App\Session::getUser()->getId() ?>" class="card-link btn btn-primary"> Mes Publications
            </a>
            <a href="index.php?ctrl=security&action=deleteAccountForm&id=<?= App\Session::getUser()->getId() ?>" class="card-link btn btn-warning">Delete
                Account</a>
        </div>
    </div>

<?php }
$title = "Mon Profil Utilisateur";

?>