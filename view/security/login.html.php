<h1 class="p-3 text-light">Se Connecter</h1>

<div class="login">
    <div class="logos">
        <img src="././public/img/fanart.jpg" alt="img">
    </div>

    <div class="container formulaire text-center">
        <form action="index.php?ctrl=security&action=login" method="post" enctype="multipart">

            <div class="mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="mb-3 text-center">
                <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
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