<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$titre = $_POST['titre'];
$destination_id = $_POST['destination_id'];
$description = $_POST['description'];
$duree = $_POST['duree'];
$prix_base = $_POST['prix_base'];


// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../images/" . $filename);

insertSejour($titre, $destination_id, $description, $duree, $filename, $prix_base);

header('Location: index.php');