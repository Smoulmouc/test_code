<?php

function is_input_empty($email, $mot_de_passe)
{
    if (empty($email) || empty($mot_de_passe)) {
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

function is_email_wrong(bool|array $result)
{
    if (!$result) {
        return true;
    } else {
        return false;
    } 
}

function is_mdp_wrong(string $mdp, string $mdp_hash)
{
    if (!password_verify($mdp, $mdp_hash)) {
        return true;
    } else {
        return false;
    } 
}