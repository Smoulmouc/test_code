<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    try {
        require_once "dbh.inc.php";

        $query = "UPDATE clients SET prenom = :prenom, nom = :nom,
        email = :email, mot_de_passe = :mot_de_passe WHERE id = 8;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":prenom", $prenom);
        $stmt->bindParam(":nom", $nom);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":mot_de_passe", $mot_de_passe);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../create.php");

        die();
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
} else {
    header("Location: ../create.php");
}