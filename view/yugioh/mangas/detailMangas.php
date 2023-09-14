<?php
$mangas = $result["data"]["mangas"];
// $auteur = $result["data"]["auteur"];
// var_dump($auteur);

foreach ($mangas as $manga) {

  ?>
  <div class="main2">
    <button class="openbtn" onclick="openNav()">☰</button>
    <h1 class="p-3 primetitle text-light">
      <?= $manga->getMangasName() ?>
    </h1>
  </div>
  <div class="main3">
    <h1 class="p-3 primetitle text-light">
      <?= $manga->getMangasName()?>
    </h1>
  </div>

  <div class="container text-center mangasdetail">
    <div class="row">
      <div class="col detail"><img src="<?= $manga->getImg() ?>" class="img-fluid"></div>
      <div class="col detail">
        <div>De : Kazuki Takahashi</div>
      </div>
    </div>
    <div class="row">
      <div class="col detail">
        <section>
          <div>
            <h2>Synopsis</h2>
          </div>
          <div>
            <?= $manga->getHistoire() ?>
          </div>
        </section>
      </div>
    </div>
  </div>
  <?php
}

$title = $manga->getMangasName()
  ?>