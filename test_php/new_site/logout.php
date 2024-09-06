<?php
require_once 'includes/config_session.inc.php';
//require_once 'includes/logout/logout_view.inc.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
    <title>Logout</title>
    <link rel="stylesheet" href="css/test.css">
</head>

<body>
    <div class="container">
        <div class="title-container">
            <h2 class="title">Logout</h2>
        </div>

        <form action="includes/logout/logout.inc.php" method="post">
            <button>Logout</button>
        </form>
    </div>
    </body>
</html>