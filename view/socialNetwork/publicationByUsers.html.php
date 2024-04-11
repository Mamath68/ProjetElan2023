<h1 class="p-3 text-light">Mes publications Personnelles</h1>

<?php
if ($result["data"]['publications']) {
      foreach ($publications = $result["data"]['publications'] as $publication) {
            if ($publication->getImg()) {
?>
                  <div class="card bg-dark text-center publication">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                              <p class="card-text text-center link-light"><a href="index.php?ctrl=socialnetwork&action=viewCommentByPublication&id=<?= $publication->getId() ?>"><strong>
                                                <?= ucfirst($publication->getBody()) ?>
                                          </strong></p></a>
                              <p class="card-text text-center text-light"><strong>
                                          <?= $publication->getUser()->getPseudo() ?>
                                    </strong></p>
                              <p class="card-text text-center text-light"><strong>
                                          <?= $publication->getPublicationDate() ?>
                                    </strong></p>
                        </div>
                        <div class="editdelete">
                              <a href="index.php?ctrl=socialNetwork&action=viewCommentByPublication&id=<?= $publication->getId() ?>" class="card-link btn btn-primary link-light">Commenter</a>
                              <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                  </div>
            <?php
            } else {
            ?>
                  <div class="card bg-dark text-center publication">
                        <div class="card-body">
                              <p class="card-text text-center link-light"><a href="index.php?ctrl=socialNetwork&action=viewCommentByPublication&id=<?= $publication->getId() ?>"><strong>
                                                <?= ucfirst($publication->getBody()) ?>
                                          </strong></p></a>
                              <p class="card-text text-center text-light"> <strong>
                                          <?= $publication->getPublicationDate() ?>
                                    </strong></p>
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
include_once("addPublication.php");
$title = "Mes Publications Personnelles";
