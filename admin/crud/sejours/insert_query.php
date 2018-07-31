<?php
require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire
$titre = $_POST["titre"];
$duree = $_POST["duree"];
$difficulte = $_POST["difficulte"];
$description_longue = $_POST["description_longue"];
$description = $_POST["description"];
$pays_id = $_POST["pays_id"];

// Upload de l'image
$image = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];

move_uploaded_file($tmp, "../../../uploads/" . $image);

// Enregistrement en base de données
insertSejour($titre, $duree, $difficulte, $description_longue, $description, $image, $pays_id);

// Redirection vers la liste
header("Location: index.php");