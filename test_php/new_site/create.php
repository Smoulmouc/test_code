<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Création de compte</title>
    <link rel="stylesheet" href="css/test.css">
</head>

<body>
    <div class="container">
        <div class="title-container">
            <h2 class="title">Création de compte</h2>
        </div>

        <form action="includes/signup/signup.inc.php" method="post">
            <?php
            signup_inputs();
            ?>
            <button>Créer</button>
        </form>

        <a href="http://localhost/test_php/new_site/login.php">
            <button>Connexion</button>
        </a>
        <br>
        <a href="http://localhost/test_php/new_site/index.php">
            <button>Accueil</button>
        </a>

        <?php
        check_signup_errors();
        ?>
    </div>
</body>
</html>
