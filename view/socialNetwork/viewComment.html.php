<?php

$publications = $result["data"]['publication'];
// var_dump($publications);
$comments = $result["data"]['comments'];
// var_dump($comments);

?>
<div class="main2">
    <button class="openbtn" onclick="openNav()">☰</button>
    <h1 class="p-3 primetitle text-light">Commentaire de la Publication</h1>
</div>
<div class="main3">
    <h1 class="p-3 primetitle text-light">Commentaire de la Publication</h1>
</div>
<?php
/*************************************************************************************************************
                                           SI ADMINISTRATEUR
 *************************************************************************************************************/
if (App\Session::isAdmin()) {
    /*************************************************************************************************************
                                            Publication
     *************************************************************************************************************/
    if (!empty($publications)) {
        foreach ($publications as $publication) {
            if ($publication->getImg()) {
?>
                <div class="publicom">
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getBody()) ?>
                                </strong></p>
                            <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getUser()->getPseudo()) ?>
                                </strong></p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="card bg-primary text-center publicationComment">
                    <div class="card-body">
                        <p class="card-text text-center"><strong class="text-light">
                                <?= ucfirst($publication->getBody()) ?>
                            </strong>
                        </p>
                        <p class="card-text text-center"><strong class="text-light">
                                <?= ucfirst($publication->getUser()->getPseudo()) ?>
                            </strong>
                        </p>
                        <p class="card-text text-center text-light"><strong>
                                <?= $publication->getPublicationDate() ?>
                            </strong></p>
                    </div>
                </div>
        <?php
            }
        }
    } else {
        ?>
        <h2><strong>Pas de publication ici!</strong></h2>
        <?php
    }
    /*************************************************************************************************************
                                                Commentaire de la publication
     *************************************************************************************************************/
    if (!empty($comments)) {
        foreach ($comments as $comment) {
            if ($comment->getImage()) {
        ?>
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light">
                            <?= ucfirst($comment->getBody()) ?>
                        </p>
                        <p class="card-text text-center text-light">
                            <?= ucfirst($comment->getUser()->getPseudo()) ?>
                        </p>
                        <p class="card-text text-center text-light"><strong>
                                <?= $comment->getCommentDate() ?>
                            </strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>" class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            <?php
            } else {
            ?>

                <div class="card bg-dark text-center commentaire">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><strong>
                                <?= ucfirst($comment->getBody()) ?>
                            </strong></p>
                        <p class="card-text text-center text-light"><strong>
                                <?= $comment->getCommentDate() ?>
                            </strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>" class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
        <?php
            }
        }
    } else {
        ?>
        <h2><strong>Pas de Commentaires pour cette publication!</strong></h2>
        <?php
    }
    /*************************************************************************************************************
                                              SI SIMPLE UTILISATEUR
     *************************************************************************************************************/
} else if (App\Session::getUser()) {
    /*************************************************************************************************************
                                        Publication
     *************************************************************************************************************/
    if (!empty($publications)) {
        foreach ($publications as $publication) {
            if ($publication->getImg()) {
        ?>
                <div class="publicom">
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getBody()) ?>
                                </strong></p>
                            <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getUser()->getPseudo()) ?>
                                </strong></p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="card bg-primary text-center publicationComment">
                    <div class="card-body">
                        <p class="card-text text-center"><strong class="text-light">
                                <?= ucfirst($publication->getBody()) ?>
                            </strong>
                        </p>
                        <p class="card-text text-center"><strong class="text-light">
                                <?= ucfirst($publication->getUser()->getPseudo()) ?>
                            </strong>
                        </p>
                        <p class="card-text text-center text-light"><strong>
                                <?= $publication->getPublicationDate() ?>
                            </strong></p>
                    </div>
                </div>
        <?php
            }
        }
    } else {
        ?>
        <h2><strong>Pas de publication ici!</strong></h2>
        <?php
    }
    /*************************************************************************************************************
                                                Commentaire de la publication
     *************************************************************************************************************/
    if (!empty($comments)) {
        foreach ($comments as $comment) {
            if ($comment->getImage()) {
        ?>
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light">
                            <?= ucfirst($comment->getBody()) ?>
                        </p>
                        <p class="card-text text-center text-light">
                            <?= ucfirst($comment->getUser()->getPseudo()) ?>
                        </p>
                        <p class="card-text text-center text-light"><strong>
                                <?= $comment->getCommentDate() ?>
                            </strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>" class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            <?php
            } else {
            ?>

                <div class="card bg-dark text-center commentaire">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><strong>
                                <?= ucfirst($comment->getBody()) ?>
                            </strong></p>
                        <p class="card-text text-center text-light"><strong>
                                <?= $comment->getCommentDate() ?>
                            </strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>" class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
        <?php
            }
        }
    } else {
        ?>
        <h2><strong>Pas de Commentaires pour cette publication!</strong></h2>
<?php
    }
}
$title = "Blog";


include_once("addComment.html.php");
