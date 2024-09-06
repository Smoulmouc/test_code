<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/login/login_view.inc.php';
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
            <h2 class="title">Connexion</h2>
        </div>

        <form action="includes/login/login.inc.php" method="post">
            <input type="text" name="email" placeholder="email">
            <input type="password" name="mot_de_passe" placeholder="mot de passe">

            <button>Connexion</button>
        </form>

        <?php 
        check_login_errors();
        ?>

        <a href="http://localhost/test_php/new_site/create.php">
            <button>Créer un compte</button>
        </a>
        <br>
        <a href="http://localhost/test_php/new_site/index.php">
            <button>Accueil</button>
        </a>
    </div>
    </body>
</html>
