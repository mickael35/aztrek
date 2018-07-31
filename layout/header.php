<?php
require_once 'lib/functions.php';
$utilisateur = current_user();
?>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="...">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AZTREK</title>
  <link rel="icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery.sidr.light.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/styles.css">

</head>

<body class="page-home">
  <header class="page-header">
      <ul class="inline-list">
                            <?php if (empty($utilisateur)) : ?>
                                <li>
                                    <a href="admin/register.php">
                                        <i class="fa fa-user-plus"></i>
                                        Créer un compte
                                    </a>
                                </li>
                                <li>
                                    <a href="admin/login.php">
                                        <i class="fa fa-sign-in"></i>
                                        Se connecter
                                    </a>
                                </li>
                            <?php else: ?>
                                <?php if ($utilisateur["admin"] == 1) : ?>
                                    <li>
                                        <a href="admin/">
                                            <i class="fa fa-cogs"></i>
                                            Administration
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <li>
                                    <a href="admin/logout.php">
                                        <i class="fa fa-sign-out"></i>
                                        Déconnexion
                                    </a>
                                </li>
                            <?php endif; ?>
    <div class="page-header-inner container">

      <a class="burger" href="#sidr-main">
        <i class="fa fa-bars" aria-hidden="true"></i>Menu
      </a>

      <div class="header-logo">
        <div class="logo">
          <a href="index.html" title="Accueil">
            <img src="images/logo.png" alt="Logo">
          </a>
        </div>
        <h2 class="site-title">AZTREK</h2>
      </div>
        <?php require_once 'layout/nav.php'; ?>
    </div>
  </header>

  <main>