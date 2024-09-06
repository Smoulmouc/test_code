<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Création de compte</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="title-container">
            <h2 class="title">Création de compte</h2>
        </div>

        <form class="login-form" action="login.php" method="post">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" class="input-field" required>    

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" class="input-field" required>    

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" class="input-field" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" class="input-field" required>

            <button type="submit" class="submit-button">Créer</button>
        </form>

        <a href="http://localhost/test_php">
            <button class="create-account-button">Connexion</button>
        </a>
    </div>
</body>
</html>
