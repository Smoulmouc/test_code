<?php
session_start();

$_SESSION["email"] = "admin@gmail.com";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
        echo $_SESSION["email"];
    ?>
</body>
</html>