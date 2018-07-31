<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST["nom"];
$image = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
$description = $_POST["description"];
move_uploaded_file($tmp, "../../../uploads/" . $image);

insertPays($pays, $nom, $image, $description);

header("Location: index.php");