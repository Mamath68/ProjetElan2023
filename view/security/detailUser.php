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

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card p-3 py-4">
                    <div class="text-center">
                        <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" width="100" class="rounded-circle" alt="<?= Core\Session::getUser()->getPseudo() ?>">
                    </div>
                    <div class="text-center mt-3">
                        <h5 class="mt-2 mb-0">
                            <?= Core\Session::getUser()->getPseudo() ?>
                        </h5>
                        <span>Willkommen Administrator</span>

                        <ul class="social-list">
                            <li>Email Addresse <br>
                                <?= Core\Session::getUser()->getEmail() ?>
                            </li>
                            <li>RegistrierungsDatum <br>
                                <?= Core\Session::getUser()->getRegisterDate() ?>
                            </li>
                        </ul>
                        <div class="buttons">
                            <button class="btn btn-success px-4 ms-3"><a class="link-light" href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"> Meine Publikation
                                </a></button>
                            <button class="btn btn-secondary px-4 ms-3"><a class="link-light" href="index.php?ctrl=security&action=editUser&id=<?= Core\Session::getUser()->getId() ?>">Meine Infos ändern</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } else if (Core\Session::getUser()) {
?>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card p-3 py-4">
                    <div class="text-center">
                        <img src="public/img/<?= Core\Session::getUser()->getAvatar() ?>" width="100" class="rounded-circle" alt="<?= Core\Session::getUser()->getPseudo() ?>">
                    </div>
                    <div class="text-center mt-3">
                        <h5 class="mt-2 mb-0">
                            <?= Core\Session::getUser()->getPseudo() ?>
                        </h5>
                        <span>Willkommen Duellant</span>

                        <ul class="social-list">
                            <li>Email Addresse <br>
                                <?= Core\Session::getUser()->getEmail() ?>
                            </li>
                            <li>RegistrierungsDatum <br>
                                <?= Core\Session::getUser()->getRegisterDate() ?>
                            </li>
                        </ul>
                        <div class="buttons">
                            <button class="btn btn-success px-4 ms-3"><a class="link-light" href="index.php?ctrl=socialnetwork&action=findPublicationsByUsers&id=<?= Core\Session::getUser()->getId() ?>"> Meine Publikation
                                </a></button>
                            <button class="btn btn-warning px-4 ms-3"><a class="link-light" href="index.php?ctrl=security&action=deleteAccountForm&id=<?= Core\Session::getUser()->getId() ?>">Account Löschen</a></button>
                            <button class="btn btn-secondary px-4 ms-3"><a class="link-light" href="index.php?ctrl=security&action=editUser&id=<?= Core\Session::getUser()->getId() ?>">Meine Infos ändern</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php }
$title = "Mein Benutzerprofil";

?>