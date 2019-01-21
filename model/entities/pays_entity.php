<?php



function insertPays(string $titre) {
    global $connection;

    $query = "INSERT INTO pays (titre) VALUES (:titre)";

    $stmt = $connection->prepare($query);
    $stmt-> bindParam(":titre", $titre);
    $stmt->execute();

}

function updatePays(int $id, string $titre) {
    global $connection;

    $query = "UPDATE pays SET titre = :titre WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt-> bindParam(":id", $id);
    $stmt-> bindParam(":titre", $titre);
    $stmt->execute();

}
