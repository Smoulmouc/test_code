<?php

declare(strict_types= 1);

function signup_inputs()
{
    if (isset($_SESSION["signup_data"]["prenom"]))
    {
        echo '<input type="text" name="prenom" placeholder="prenom" value="' . $_SESSION["signup_data"]["prenom"] . '">';
    } else {
        echo '<input type="text" name="prenom" placeholder="prenom">';
    }

    if (isset($_SESSION["signup_data"]["nom"]))
    {
        echo '<input type="text" name="nom" placeholder="nom" value="' . $_SESSION["signup_data"]["nom"] . '">';
    } else {
        echo '<input type="text" name="nom" placeholder="nom">';
    }

    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_taken"]) && !isset($_SESSION["errors_signup"]["email_invalid"]))
    {
        echo '<input type="text" name="email" placeholder="email" value="' . $_SESSION["signup_data"]["email"] . '">';
    } else {
        echo '<input type="text" name="email" placeholder="email">';
    }

    echo '<input type="password" name="mot_de_passe" placeholder="mot de passe">';
}

function check_signup_errors()
{
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach ($errors as $error) {
            echo "<p style='color: red;'> $error</p>";
        }

        unset($_SESSION['errors_signup']);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo "<br>";
        echo "<p style='color: green;'>Successfully signed up!</p>";
    }
}