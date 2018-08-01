<?php

require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire
$id = $_POST["id"];
$duree = $_POST["duree"];
$difficulte = $_POST["difficulte"];
$titre = $_POST["titre"];
$description = $_POST["description"];
$description_longue = $_POST["description_longue"];
$pays_id = $_POST["pays_id"];


// Upload de l'image
if ($_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {
    $sejour = getOneEntity("sejour", $id);
    $photo = $sejour["image"];
} else {
    $photo = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];

    move_uploaded_file($tmp, "../../../uploads/" . $photo);
}

// Enregistrement en base de données
updateSejour($id, $titre, $duree, $difficulte, $description, $description_longue, $photo, $pays_id);

// Redirection vers la liste
header("Location: index.php");
