<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="title-container">
            <h2 class="title">Connexion</h2>
        </div>

        <?php
        if (isset($_SESSION['error_message'])) {
            echo '<p class="error-message">' . $_SESSION['error_message'] . '</p>';
            unset($_SESSION['error_message']);
        }
        ?>

        <form class="login-form" action="login.php" method="post">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" class="input-field" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" class="input-field" required>

            <button type="submit" class="submit-button">Se connecter</button>
        </form>

        <a href="http://localhost/test_php/create.php">
            <button class="create-account-button">Créer un compte</button>
        </a>
    </div>
</body>
</html>
