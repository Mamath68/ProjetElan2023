<div class="main2">
    <button class="openbtn" onclick="openNav()">☰</button>
    <h1 class="p-3 primetitle text-light">Se Connecter</h1>
</div>
<div class="login">
    <div class="logos">
        <img src="././public/img/fanart.jpg" alt="img">
    </div>

    <div class="container formulaire text-center">
        <form action="index.php?ctrl=security&action=login" method="post" enctype="multipart">

            <div class="mb-3">
                <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo" required>
            </div>
            <div class="mb-3 text-center">
                <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe"
                    required>
            </div>
            <button type="submit" class="btn btn-success reject3">Se connecter</button>
        </form>
        <li>
            <button type="submit" class="btn btn-primary reject2">
                <a class="dropdown-item link-light" href="index.php?ctrl=security&action=registerForm">
                    Pas encore de compte? S'inscrire
                </a>
            </button>
        </li>
    </div>
</div>
<?php
$title = "Se Connecter";

?>