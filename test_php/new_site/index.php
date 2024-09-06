<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/login/login_view.inc.php';
require_once 'includes/signup/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/test.css">
</head>

<body>
    <div class="container">
        <div class="title-container">
            <h2 class="title">Accueil</h2>
        </div>

        <h3>
            <?php
            output_email();
            ?>
        </h3>
        <a href="http://localhost/test_php/new_site/login.php">
            <button>Connexion</button>
        </a>
        <br>
        <a href="http://localhost/test_php/new_site/logout.php">
            <button>Déconnexion</button>
        </a>
        <br>
        <a href="http://localhost/test_php/new_site/create.php">
            <button>Créer un compte</button>
        </a>
    </div>
    </body>
</html>