<?php

function getAllDeparts() {
    global $connexion;
    $query = "SELECT
                depart.*,
                pays.nom AS pays,
                sejour.titre AS sejour
            FROM depart
            INNER JOIN sejour ON sejour.id = depart.sejour_id          
            INNER JOIN pays ON pays.id = sejour.pays_id;";
    $stmt = $connexion->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getAllDepartsBySejour(int $id) {
    global $connexion;

    $query = "SELECT
                depart.*,
                depart.nb_place - IFNULL(SUM(IF(reservation.valider, reservation.nb_personne, 0)), 0) AS places_restantes
            FROM depart
            INNER JOIN sejour ON sejour.id = depart.sejour_id   
            LEFT JOIN reservation ON reservation.depart_id = depart.id
            WHERE sejour.id = :id
            GROUP BY depart.id;";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertDepart(string $date_depart, string $prix, string $nb_places, int $sejour_id): int {
    /* @var $connexion PDO */
    global $connexion;
    $query = "INSERT INTO depart (date_depart, prix, nb_place, sejour_id) VALUES (:date_depart, :prix, :nb_place, :sejour_id)";
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":nb_place", $nb_places);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->execute();
    return $connexion->lastInsertId();
}

function updateDepart(int $id, string $date_depart, string $prix, string $nb_place) {
    /* @var $connexion PDO */
    global $connexion;
    $query = "UPDATE depart
                SET date_depart = :date_depart,
                    prix = :prix,
                    nb_place = :nb_place                           
                WHERE id = :id
            ";
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":nb_place", $nbre_place);
    $stmt->execute();
}