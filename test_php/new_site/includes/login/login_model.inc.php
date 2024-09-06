<?php

declare(strict_types= 1);

function get_email(object $pdo, string $email)
{
    $query = "SELECT * FROM clients WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_mot_de_passe(object $pdo, string $mot_de_passe)
{
    $query = "SELECT * FROM clients WHERE mot_de_passe = :mot_de_passe;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":mot_de_passe", $mot_de_passe);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
