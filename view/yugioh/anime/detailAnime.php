<?php
$animes = $result["data"]["animes"];

foreach ($animes as $anime) {

?>
    <div class="main2">
        <button class="openbtn" onclick="openNav()">☰</button>
        <h1 class="p-3 primetitle text-light">
            <?= $anime->getAnimeName() ?>
        </h1>
    </div>
    <div class="main3">
        <h1 class="p-3 primetitle text-light">
            <?= $anime->getAnimeName() ?>
        </h1>
    </div>
    <div class="container text-center animesdetail">
        <div class="row">
            <div class="col detail"><img src="<?= $anime->getImg() ?>" class="img-fluid"></div>
            <div class="col detail">
                <?php
                // foreach ($casting as $casting) {
                ?>
                <div> De : Kazuki Takahashi</div>
                <?php
                // echo '<div>' . 'Personnages : <?=$casting['Personnage']</div>';// }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col detail">
                <section>
                    <div>
                        <h2>Synopsis</h2>
                    </div>
                    <div>
                        <?= $anime->getHistoire() ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php
}

$title = $anime->getAnimeName();
?>