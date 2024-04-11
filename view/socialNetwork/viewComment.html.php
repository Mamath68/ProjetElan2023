<h1 class="p-3 text-light">Commentaire de la Publication</h1>

<?php
/*************************************************************************************************************
                                            Publication
 *************************************************************************************************************/
if (!empty($result["data"]['publication'])) {
    foreach ($publications = $result["data"]['publication'] as $publication) {
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
if ($result["data"]['comments']) {
    foreach ($comments = $result["data"]['comments'] as $comment) {
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

$title = "Blog";


include_once("addComment.html.php");
