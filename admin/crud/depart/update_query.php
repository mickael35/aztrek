<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$date_depart = $_POST["date_depart"];
$prix = $_POST["prix"];
$nb_place = $_POST["nb_place"];



updateDepart($id, $date_depart, $prix, $nb_place);

header("Location: index.php");