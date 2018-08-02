<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$utilisateur = current_user();

$montant = $_POST["montant"];
$projet_id = $_POST["projet_id"];
$utilisateur_id = $utilisateur["id"];

insertParticipation($montant, $projet_id, $utilisateur_id);


