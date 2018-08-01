<?php

/**
 * Retourne la liste des projets
 * @return array Liste des projets
 */
function getAllSejours(int $limit = 999): array {
    global $connexion;

    $query = "SELECT
                sejour.*,
                pays.nom AS pays
            FROM sejour
            INNER JOIN pays ON pays.id = sejour.pays_id
            LIMIT :limit;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllSejoursByPays(int $id): array {
    global $connexion;
    $query = "SELECT
                sejour.*,
                pays.nom as pays
            FROM sejour
            INNER JOIN pays ON pays.id = sejour.pays_id          
            WHERE pays.id = :id;";
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetchAll();
}

function insertSejour(string $titre, string $duree, string $difficulte, string $description_longue, string $description, string $image, int $pays_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO sejour (titre, duree, difficulte, description_longue, description, image, pays_id) VALUES (:titre, :duree, :difficulte, :description_longue, :description, :image, :pays_id)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":difficulte", $difficulte);
    $stmt->bindParam(":description_longue", $description_longue);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}

function updateSejour(int $id, string $titre, string $duree, string $difficulte, string $description, string $description_longue, string $image, int $pays_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE sejour
                SET titre = :titre,
                    duree = :duree,
                    difficulte = :difficulte,
                    description_longue = :description_longue,
                    image = :image,
                    description = :description,
                    pays_id = :pays_id
                WHERE id = :id
            ";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":difficulte", $difficulte);
    $stmt->bindParam(":description_longue", $description_longue);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}