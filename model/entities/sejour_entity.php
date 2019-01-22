<?php


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
