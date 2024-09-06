<?php

declare(strict_types= 1);

function is_input_empty($email, $mot_de_passe, $prenom, $nom)
{
    if (empty($email) || empty($mot_de_passe) || empty($prenom) || empty($nom)) {
        return true;
    } else {
        return false;
    }
}

function is_email_invalid($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_email_taken(object $pdo, string $email)
{
    if (get_email($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}

function create_user(object $pdo, string $email, string $mot_de_passe, string $prenom, string $nom)
{
    set_user($pdo, $email, $mot_de_passe, $prenom, $nom);
}