<?php

function getAllSejours(): array
{
    global $connection;

    $query = "
    SELECT 
          sejour.*,
          difficulte.libelle AS difficulte
    FROM sejour
    INNER JOIN difficulte ON sejour.difficulte_id = difficulte.id
    ";


    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}


function getAllSejoursByPays(int $id): array
{
    global $connection;

    $query = "
    SELECT 
          sejour.*,
          difficulte.libelle AS difficulte
    FROM sejour
    INNER JOIN difficulte ON sejour.difficulte_id = difficulte.id
    WHERE sejour.destination_id = :id
  ";


    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();

}


function getOneSejour(int $id): array
{
    global $connection;

    $query = "
    SELECT 
          sejour.*, 
          difficulte.libelle AS difficulte
    FROM sejour
    INNER JOIN difficulte ON sejour.difficulte_id = difficulte.id
    WHERE sejour.id = :id
  ";


    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();

}


function getAllDepartsBySejour(int $id): array
{
    global $connection;

    $query = "
  SELECT 
        depart.*,
        sejour.titre as sejour,
      sejour.duree as duree,
      DATE_FORMAT(depart.date_depart, '%d-%m-%Y') as date_depart,
      DATE_FORMAT(DATE_ADD(date_depart, INTERVAL duree DAY), '%d-%m-%Y') as date_retour
         
  FROM depart
  INNER JOIN sejour  on depart.sejour_id = sejour.id
  WHERE depart.sejour_id = :id
";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();

}