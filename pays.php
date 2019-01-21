<?php
require_once "layout/header.php";
require_once "layout/menu.php";
require_once "model/database.php";

$id = $_GET["id"];
$destination = getOneEntity("pays",$id);
$sejours = getAllSejoursByPays($id);


?>

    <main>

        <section class="sejours container">

            <h2 class="underline"><?= $destination["titre"]; ?></h2>

            <div class="sejours-article">

                <?php foreach  ($sejours as $sejour) : ?>

                <article class="yucatan">
                    <a href="yucatan.html" title="Trésors du Yucatan">
                        <img src="<?= $sejour["image"]; ?>" alt="photo Yucatan">
                    </a>
                    <h3><?= $sejour["titre"]; ?></h3>
                    <ul>
                        <li><?= $sejour["duree"]; ?></li>
                        <li>à partir de 3290€</li>
                        <li class="level1 level">niveau</li>
                    </ul>

                    <a class="btn" href="yucatan">en savoir plus</a>

                    <?php endforeach; ?>


            </div>
        </section>





        
    </main>

    <?php require_once "layout/footer.php" ; ?>