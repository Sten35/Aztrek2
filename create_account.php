<?php
require_once "model/database.php";
require_once "functions.php";

getHeader("créer un compte", "formulaire de création de compte");

?>

<form action="create_account_query.php" method="post">
    <p>
        <label>Nom</label>
        <input type="text" name="nom" placeholder="Nom" required>
    </p>
    <p>
        <label>Prénom</label>
        <input type="text" name="prenom" placeholder="prenom" required>

    </p>
    <p>
        <label>Email</label>
        <input type="email" name="email" placeholder="email" required>
    </p>
    <p>
        <label>Mot de passe</label>
        <input type="password" name="mot_de_passe" placeholder="mot de passe" required>

    </p>


        <input type="submit" value="Créer un compte">


</form>
