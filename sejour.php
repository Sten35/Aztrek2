<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$sejour = getOneSejour($id);
$departs = getAllDepartsBySejour($id);

getHeader($sejour["titre"], $sejour["description"]);
getMenu();
?>


<main>

    <section class="sejours container">

        <h2 class="underline"> <?=$sejour["titre"]  ; ?></h2>

        <div class="sejours-article">

            <article class="yucatan">
                <a href="yucatan.html" title="<?=$sejour["titre"]  ; ?>">
                    <img src="images/<?= $sejour["image"]; ?>" alt="<?=$sejour["titre"]  ; ?>">
                </a>

                <ul>
                    <li> <?= "durée : " . $sejour["duree"] . " jours"; ?></li>
                    <li><?= "A partir de " . $sejour["prix_base"] . " €"; ?></li>
                    <li><?="Niveau " . $sejour["difficulte"]; ?></li>
                </ul>

                <p>

                    <?=$sejour["description"]; ?>


                </p>


            </article>


        </div>

        <table>
            <tr>
                <th>Du</th>
                <th>Au</th>
                <th>Prix</th>
                <th>Valider votre voyage</th>
            </tr>
            <tr>
<?php foreach ($departs as $depart) : ?>
                <td><?=$depart["date_depart"]  ; ?></td>
                <td><?=$depart["date_retour"]  ; ?></td>
                <td><?=$depart["prix"]  ; ?></td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
            <?php endforeach; ?>

        </table>

    </section>

</main>

<?php getFooter(); ?>