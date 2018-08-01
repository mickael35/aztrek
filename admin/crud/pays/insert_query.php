<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST["nom"];
$description = $_POST["description"];

// Upload de l'image
$photo = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];

move_uploaded_file($tmp, "../../../uploads/" . $photo);

insertPays($nom, $description, $photo);

header("Location: index.php");