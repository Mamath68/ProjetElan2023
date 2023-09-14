<div class="main2">
    <button class="openbtn" onclick="openNav()">☰</button>
    <h1 class="p-3 primetitle text-light">S'enregister</h1>
</div>

<div class="register">
    <div class="logos">
        <img src="././public/img/fanart.jpg" alt="img">
    </div>
    <div class="container formulaire text-center">
        <form action="index.php?ctrl=security&action=register" method="post" enctype="multipart">

            <div class="mb-3">
                <input input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="file" name="avatar" class="form-control" placeholder="Insert Your Avatar">
            </div>
            <div class="mb-3">
                <input type="password" name="password" id="password" placeholder="Mot de passe" class="form-control"
                    required>
            </div>
            <div class="mb-3">
                <input type="password" name="confirmpassword" id="password" placeholder="Confirmer Mot de passe"
                    class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Enregistrer</button>
        </form>
        <li>
            <button type="submit" class="btn btn-primary">
                <a class="dropdown-item link-light" href="index.php?ctrl=security&action=loginForm">
                    Déja un Compte? Connectez Vous
                </a>
            </button>
        </li>
    </div>
</div>
<?php
$title = "Sich Einschreiben";

?>