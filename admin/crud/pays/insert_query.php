<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$libelle = $_POST["pays"];

insertCategorie($pays);

header("Location: index.php");