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

function insertUtilisateur(string $nom, string $prenom, string $email, string $mot_de_passe) {
    global $connection;

    $query = "
    INSERT INTO utilisateur (email, mot_de_passe, nom, prenom, admin)
    VALUES (:email, SHA1(:mot_de_passe), :nom, :prenom, 0)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":mot_de_passe", $mot_de_passe);


    return $stmt->execute();

}

