<?php


function getUtilisateurByNomPrenom(string $nom , string $prenom) {
    global $connection;

    $query = "
    SELECT *
    FROM utilisateur
WHERE nom = :nom
AND prenom = :prenom
    ";

    $stmt = $connection->prepare($query);
    $stmt-> bindParam(":nom", $nom);
    $stmt-> bindParam(":prenom", $prenom);
    $stmt->execute();

    return $stmt->fetch();

}

