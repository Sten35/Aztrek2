<?php
require_once __DIR__ . "/../config/parameters.php";
require_once __DIR__ . "/../functions.php";

$user = GetCurrentUser();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>Aztrek | <?= $title; ?></title>
    <meta name="description" content="<?= $description; ?>">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.sidr.light.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
<header class="main-header">


    <div class="container">
        <div class="site-title">
            <a href="index.php" title="Accueil">

                <img src="images/logo Aztrek final.png" alt="Logo" class="logo">
            </a>
        </div>
        <div class="header-content">
            <nav class="header-nav">
                <ul>
                    <li>
                        <a href="">02 23 45 67 32</a>
                    </li>
                    <li>
                        <a href="">Contactez-nous</a>
                    </li>
                    <li>
                        <a href="">Ma sélection</a>
                    </li>
                    <?php if (isset($user)) : ?>
                        <li><a href="#"><i class="fa fa-user"></i> <?= $user["email"]; ?></a></li>
                        <li><a href="<?= SITE_ADMIN . "logout.php"; ?>"><i class="fa fa-sign-out"></i> Déconnexion</a></li>
                    <?php else: ?>
                        <li><a href="<?= SITE_ADMIN; ?>"><i class="fa fa-sign-in"></i> Log in</a></li>
                        <li><a href="<?= SITE_URL . "create_account.php"; ?>"><i class="fa fa-user-plus"></i>créer un compte</a></li>
                    <?php endif; ?>
                </ul>
            </nav>

        </div>
    </div>


    <h1>Aztrek l'aventure la nature les trekk les randonnées</h1>