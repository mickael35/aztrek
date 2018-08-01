<?php

function insertPays(string $nom, string $description, string $photo): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO pays (nom, description, photo) VALUES (:nom, :description, :photo)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":photo", $photo);
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