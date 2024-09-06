<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    try {

        require_once '../dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

        // ERRORS HANDLERS
        $errors = [];

        if (is_input_empty($email, $mot_de_passe)) {
            $errors["empty_input"] = "Remplissez tous les champs du formulaire!";
        }
        if (is_email_invalid($email)) {
            $errors["email_invalid"] = "L'email n'est pas valide!";
        }

        $result = get_email($pdo, $email);

        if (is_email_wrong($result)) {
            $errors["login_incorrect"] = "Informations de connexion incorrectes!";
        }
        if (!is_email_wrong($result) && is_mdp_wrong($mot_de_passe, $result["mot_de_passe"])) {
            $errors["login_incorrect"] = "Informations de connexion incorrectes!";
        }

        require_once '../config_session.inc.php';

        if ($errors) {
            $_SESSION["errors_login"] = $errors;

            header("Location: ../../login.php");
            die();
        }

        $new_session_id = session_create_id();
        $session_id = $new_session_id . "_" . $result["id"];
        session_id($session_id);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_email"] = htmlspecialchars($result["email"]);

        $_SESSION["last_regeneration"] = time();

        header("Location: ../../login.php.?login=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
} else {
    header("Location: ../../index.php");
    die();
}
