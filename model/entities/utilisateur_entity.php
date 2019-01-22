<?php

function getUtilisateurByEmailMotDePasse(string $email, string $password)
{
    global $connection;

    $query = "
    SELECT *
    FROM utilisateur
WHERE email = :email
AND mot_de_passe = SHA1(:password)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    return $stmt->fetch();

}

function getUtilisateurByNomPrenom(string $nom, string $prenom)
{
    global $connection;

    $query = "
    SELECT *
    FROM utilisateur
WHERE nom = :nom
AND prenom = :prenom
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->execute();

    return $stmt->fetch();

}

