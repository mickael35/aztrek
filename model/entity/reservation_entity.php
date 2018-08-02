<?php

function insertReservation($nb_personne, $depart_id, $utilisateur_id): int {
    /* @var $connexion PDO */
    global $connexion;
    $query = "INSERT INTO reservation (nb_personne, valider, utilisateur_id, depart_id) VALUES (:nb_personne, 0, :utilisateur_id, :depart_id)";
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":nb_personne", $nb_personne);
    $stmt->bindParam(":depart_id", $depart_id);
    $stmt->bindParam(":utilisateur_id", $utilisateur_id);
    $stmt->execute();
    return $connexion->lastInsertId();
}