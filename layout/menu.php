<?php
require_once __DIR__ . "/../model/database.php";
require_once __DIR__ . '/../functions.php';

$user = GetCurrentUser();

$destinations = getAllEntities("pays");
?>


<nav class="main-nav">
    <div class="menu-icon">
        <img src="./images/menu-icon.png" alt="Menu">
    </div>
    <div class="main-menu">
        <ul class="container">
            <li>
                <a href="#">Pays</a>
                <ul>
                    <?php foreach ($destinations as $destination) : ?>
                        <li>
                            <a href="pays.php?id=<?= $destination["id"]; ?>"> <?= $destination["titre"]; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li>
                <a href="#">Voyages guidés</a>
            </li>
            <li>
                <a href="#">Voyages sur mesure</a>
            </li>
        </ul>
    </div>

    <form class="search-form" action="#" method="GET">
        <input type="text" name="keywords" placeholder="Rechercher">
        <input type="submit" name="send" value="Valider">
    </form>

</nav>

</header>
