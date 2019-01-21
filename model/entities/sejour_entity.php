<?php



function getAllSejoursByPays(int $id) : array {
    global $connection;

    $query = "
    SELECT 
          sejour.*,
          difficulte
           
    FROM sejour
    INNER JOIN difficulte ON sejour.id = difficulte.sejour_id
  
  ";


    $stmt = $connection->prepare($query);
    $stmt-> bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();

}
