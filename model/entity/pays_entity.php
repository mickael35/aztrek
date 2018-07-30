<?php

function insertPays(string $libelle): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO categorie (libelle) VALUES (:libelle)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}

function updatePays(int $id, string $nom, string $description, string $photo) {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE pays SET nom = :nom, description = :description, photo = :photo WHERE id = :id";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":photo", $photo);
    $stmt->execute();
}