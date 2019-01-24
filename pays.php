<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$destination = getOneEntity("pays", $id);
$sejours = getAllSejoursByPays($id);

getHeader($destination["titre"], "Pays de Astrek");
getMenu();
?>

    <main>

        <section class="sejours container">

            <h2 class="underline"><?= $destination["titre"]; ?></h2>

            <div class="sejours-article">

                <?php foreach ($sejours as $sejour) : ?>
                    <article class="yucatan">
                        <a href="sejour.php?id=<?= $sejour["id"]; ?>" title="<?= $sejour["titre"]; ?>">
                            <img src="images/<?= $sejour["image"]; ?>" alt="<?= $sejour["titre"]; ?>">
                        </a>
                        <h3><?= $sejour["titre"]; ?></h3>
                        <ul>
                            <li><?= "durée : " . $sejour["duree"] . " jours"; ?></li>
                            <li><?= $sejour["prix_base"] ." €"; ?></li>
                            <li><?= "niveau " . $sejour["difficulte"]; ?></li>
                        </ul>
                        <a class="btn" href="sejour.php?id=<?= $sejour["id"]; ?>">en savoir plus</a>
                    </article>
                <?php endforeach; ?>

            </div>

        </section>


    </main>

<?php getFooter(); ?>