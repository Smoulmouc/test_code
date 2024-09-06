<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM clients WHERE email = :email AND
        mot_de_passe = :mot_de_passe";

        $stmt = $pdo->prepare($query);

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