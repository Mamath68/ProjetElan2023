<h1 class="p-3 primetitle text-light">Réponse du Commentaire</h1>
<?php

/*************************************************************************************************************
                                            Commentaire
 *************************************************************************************************************/
if ($result["data"]['comment']) {
    foreach ($comments = $result["data"]['comment'] as $comment) {
        if ($comment->getImage()) {
?>
            <div class="card bg-primary text-center commentaireReponse">
                <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                <div class="card-body">
                    <p class="card-text text-center text-light">
                        <?= ucfirst($comment->getBody()) ?>
                    </p>
                    <p class="card-text text-center text-light"><strong>
                            <?= $comment->getCommentDate() ?>
                        </strong></p>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="card bg-primary text-center commentaireReponse">
                <div class="card-body">
                    <p class="card-text text-center text-light"><strong>
                            <?= ucfirst($comment->getBody()) ?>
                        </strong></p>
                    <p class="card-text text-center text-light"><strong>
                            <?= $comment->getCommentDate() ?>
                            </stong>
                    </p>
                </div>
            </div>
    <?php
        }
    }
} else {
    ?>
    <h2><strong>Pas de Commentaires pour cette publication!</strong></h2>";
    <?php
}

/*************************************************************************************************************
                                            Réponses du Commentaire
 *************************************************************************************************************/
if ($result["data"]['reponses']) {
    foreach ($reponses = $result["data"]['reponses'] as $reponse) {
        if ($reponse->getImg()) {
    ?>
            <div class="card mb-5 bg-dark text-light reponse">
                <div class="row ligne g-0">
                    <div class="col-md-4">
                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                    </div>
                    <div class="col-md-7 commentsize">
                        <div class="card-body">
                            <p class="card-text text-center text-light">
                                <?= ucfirst($reponse->getBody()) ?>
                            </p>
                            <p class="card-text text-center text-light">
                                <small class="text-body-light">
                                    <?= $reponse->getReponseDate() ?>
                                </small>
                            </p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialNetwork&action=deleteReponse&id=<?= $reponse->getId() ?>" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        } else {
        ?>
            <div class="card mb-5 bg-dark text-light reponse2">
                <div class="col-md-2">
                    <div class="card-body">
                        <p class="card-text text-center text-light">
                            <?= ucfirst($reponse->getBody()) ?>
                        </p>
                        <p class="card-text text-center "><small class="text-body-light">
                                <?= $reponse->getReponseDate() ?>
                            </small>
                        </p>
                    </div>
                </div>
                <div class="editdelete">
                    <a href="index.php?ctrl=socialNetwork&action=deleteReponse&id=<?= $reponse->getId() ?>" class="card-link btn btn-primary link-light">Supprimer</a>
                </div>
            </div>
    <?php
        }
    }
} else {
    ?>
    <h2><strong>Pas de Réponse à ce commentaire!</strong></h2>
<?php
}

$title = "Blog";

include_once("addAnswer.html.php");
