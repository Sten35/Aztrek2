<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$titre = $_POST['titre'];

updatePays($id, $titre);

header('Location: index.php');
