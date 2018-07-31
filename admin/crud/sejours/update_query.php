<?php

require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire
$id = $_POST["id"];
$Titre = $_POST["Titre"];
$nb_de_jour = $_POST["nb_de_jour"];
$difficulte = $_POST["difficulte"];
$titre = $_POST["titre"];
$description = $_POST["description"];
$description_longue = $_POST["description_longue"];
$photo = $_POST["photo"];

// Upload de l'image
if ($_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {
    $sejour = getOneEntity("sejour", $id);
    $photo = $sejour["image"];
} else {
    $photo = $_FILES["photo"]["name"];
    $tmp = $_FILES["photo"]["tmp_name"];

    move_uploaded_file($tmp, "../../../uploads/" . $photo);
}

// Enregistrement en base de données
updateSejour($id, $nb_de_jour, $titre, $description, $description_longue, $photo);

// Redirection vers la liste
header("Location: index.php");
