<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer le compte</title>
    <link rel="stylesheet" href="css/test.css">
</head>
<body>
    <div class="container">
        <div class="title-container">
            <h2 class="title">Supprimer le compte</h2>
        </div>

        <form action="includes/user_delete.inc.php" method="post">
            <input type="text" name="email" placeholder="email">
            <input type="password" name="mot_de_passe" placeholder="mot de passe">
            <button>Supprimer</button>
        </form>

        <a><button onclick="history.back()">Retour</button></a>
    </div>
</body>
</html>
