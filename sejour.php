<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$sejour = getOneEntity("sejour", $id);

getHeader($sejour["titre"], $sejour["description"]);
getMenu();
?>


<main>

    <section class="sejours container">

        <h2 class="underline">Yucatan</h2>

        <div class="sejours-article">

            <article class="yucatan">
                <a href="yucatan.html" title="Trésors du Yucatan">
                    <img src="images/photo-yucatan.jpg" alt="photo Yucatan">
                </a>
                <h3>Trésors du Yucatan</h3>
                <ul>
                    <li>6 jours</li>
                    <li>à partir de 3290€</li>
                    <li class="level1 level">niveau</li>
                </ul>

                <p>

                    Adsiduitati frustra quo numerando cum omnem eadem hortatore ubi incognitus cum incognitus per
                    haerebis adscitus et et dierum et adsiduitati vel ad et adscitus dierum nec incognitus indiscretus
                    illo illo dierum aetatem tandem amicitiam vero et eadem indiscretus conteres adsiduitati confisus
                    numerando stipite quo et quo si dederis perferenda clientes per nec feceris ad et defueris et
                    frustra paria adsiduitati interrogatus eadem adfabilitate repentinus amicitiam conteres confisus et
                    clientes et te dederis ut ut nec unde aetatem amicitiam reverteris adsiduitati nec reverteris tandem
                    dierum si reverteris stipite clientes aetatem adsiduitati si cum aetatem venias ambigente dierum
                    repentinus hesterno miser aetatem.

                </p>

                <a class="btn" href="yucatan">Réserver</a>

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
                <td>01/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
            <tr>
                <td>01/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
            <tr>
                <td>01/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
            <tr>
                <td>01/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
            <tr>
                <td>01/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
        </table>

    </section>

</main>

<?php getFooter(); ?>