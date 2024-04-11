<?php

if ($result["data"]["animes"]) {
    foreach ($animes = $result["data"]["animes"] as $anime) {

?>
        <h1 class="p-3 text-light">
            <?= $anime->getAnimeName() ?>
        </h1>
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
} else {
    echo "Aucun animé pour cet id";
}

$title = $anime->getAnimeName();
?>