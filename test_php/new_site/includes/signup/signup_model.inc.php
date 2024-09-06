<?php

declare(strict_types= 1);

function get_email(object $pdo, string $email)
{
    $query = "SELECT email FROM clients WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $email, string $mot_de_passe, string $prenom, string $nom)
{
    $query = "INSERT INTO clients (prenom, nom, email, mot_de_passe) VALUES 
    (:prenom, :nom, :email, :mot_de_passe);";
    $stmt = $pdo->prepare($query);

    $option = [
        'cost' => 12
    ];
    $hash_mdp = password_hash($mot_de_passe, PASSWORD_BCRYPT, $option);

    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":mot_de_passe", $hash_mdp);
    $stmt->execute();
}