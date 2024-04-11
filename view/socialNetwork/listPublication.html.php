<?php

$publications = $result["data"]['publications'];


?>
<?php
/*************************************************************************************************************
                                           SI ADMINISTRATEUR
 *************************************************************************************************************/
if (App\Session::isAdmin()) {
      /************************************************************************************************************
                                                  Publication
       ***********************************************************************************************************/
?>
      <h1 class="p-3 text-light">Mur de Publication</h1>
      <?php
      if (!empty($publications)) {
            foreach ($publications as $publication) {
                  if ($publication->getImg()) {
      ?>
                        <div class="card bg-dark text-center publication">
                              <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                              <div class="card-body">
                                    <p class="card-text text-center link-light">
                                          <strong>
                                                <?= ucfirst($publication->getBody()) ?>
                                          </strong>
                                    </p>
                                    <p class="card-text text-center text-light">
                                          <strong>
                                                <?= $publication->getUser()->getPseudo(); ?>
                                          </strong>
                                    </p>
                                    <p class="card-text text-center text-light">
                                          <strong>
                                                <?= $publication->getPublicationDate(); ?>
                                          </strong>
                                    </p>
                              </div>
                              <div class="editdelete">
                                    <a class="card-link btn btn-primary link-light" href="index.php?ctrl=socialNetwork&action=viewCommentByPublication&id=<?= $publication->getId() ?>">Commenter</a>
                                    <a class="card-link btn btn-primary link-light" href="#">Supprimer</a>
                              </div>
                        </div>
                  <?php
                  } else {
                  ?>
                        <div class="card bg-dark text-center publication">
                              <div class="card-body">
                                    <p class="card-text text-center link-light">
                                          <strong>
                                                <?= ucfirst($publication->getBody()) ?>
                                          </strong>
                                    </p>
                                    <p class="card-text text-center text-light">
                                          <strong>
                                                <?= $publication->getUser()->getPseudo(); ?>

                                          </strong>
                                    </p>
                                    <p class="card-text text-center text-light">
                                          <strong>
                                                <?= $publication->getPublicationDate() ?>
                                          </strong>
                                    </p>
                              </div>
                              <div class="editdelete">
                                    <a href="index.php?ctrl=socialNetwork&action=viewCommentByPublication&id=<?= $publication->getId() ?>" class="card-link btn btn-primary link-light">Commenter</a>
                                    <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
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
      SI SIMPLE UTILISATEUR
       *************************************************************************************************************/
} else if (App\Session::getUser()) {

      if (!empty($publications)) {
            foreach ($publications as $publication) {
                  if ($publication->getImg()) {
            ?>
                        <div class="card bg-dark text-center publication">
                              <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                              <div class="card-body">
                                    <p class="card-text text-center link-light">
                                          <strong>
                                                <?= ucfirst($publication->getBody()) ?>
                                          </strong>
                                    </p>
                                    <p class="card-text text-center text-light">
                                          <strong>
                                                <?= $publication->getUser()->getPseudo(); ?>
                                          </strong>
                                    </p>
                                    <p class="card-text text-center text-light">
                                          <strong>
                                                <?= $publication->getPublicationDate(); ?>
                                          </strong>
                                    </p>
                              </div>
                              <div class="editdelete">
                                    <a class="card-link btn btn-primary link-light" href="index.php?ctrl=socialNetwork&action=viewCommentByPublication&id=<?= $publication->getId() ?>">Commenter</a>
                                    <a class="card-link btn btn-primary link-light" href="#">Supprimer</a>
                              </div>
                        </div>
                  <?php
                  } else {
                  ?>
                        <div class="card bg-dark text-center publication">
                              <div class="card-body">
                                    <p class="card-text text-center link-light">
                                          <strong>
                                                <?= ucfirst($publication->getBody()) ?>
                                          </strong>
                                    </p>
                                    <p class="card-text text-center text-light">
                                          <strong>
                                                <?= $publication->getUser()->getPseudo(); ?>

                                          </strong>
                                    </p>
                                    <p class="card-text text-center text-light">
                                          <strong>
                                                <?= $publication->getPublicationDate() ?>
                                          </strong>
                                    </p>
                              </div>
                              <div class="editdelete">
                                    <a href="index.php?ctrl=socialNetwork&action=viewCommentByPublication&id=<?= $publication->getId() ?>" class="card-link btn btn-primary link-light">Commenter</a>
                                    <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
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
}

$title = "Blog";
include_once("addPublication.html.php");
