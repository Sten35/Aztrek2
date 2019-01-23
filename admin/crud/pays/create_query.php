<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$titre = $_POST['titre'];

insertPays($titre);

header('Location: index.php');
