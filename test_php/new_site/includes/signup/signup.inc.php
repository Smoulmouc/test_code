<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    try {

        require_once '../dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        // ERRORS HANDLERS
        $errors = [];

        if (is_input_empty($email, $mot_de_passe, $prenom, $nom)) {
            $errors["empty_input"] = "Fill in all fields!";
        }
        if (is_email_invalid($email)) {
            $errors["email_invalid"] = "Invalide email used!";
        }
        if (is_email_taken($pdo, $email)) {
            $errors["email_taken"] = "Email already taken!";
        }

        require_once '../config_session.inc.php';

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;

            $signup_data = [
                "prenom" => $prenom,
                "nom" => $nom,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signup_data;

            header("Location: ../../create.php");
            die();
        }

        create_user($pdo, $email, $mot_de_passe, $prenom, $nom);

        header("Location: ../../create.php.?signup=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
} else {
    header("Location: ../create.php");
    die();
}