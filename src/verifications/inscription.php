<?php

function inscription_verification(): bool | string
{    
    $db = new PDO("mysql:host=localhost;dbname=iton;charset=utf8", "root", "root");

    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordConfirm = $_POST["password_confirm"];

    if (!$password === $passwordConfirm) {
        return "PasswordMatchError";
    }

    $query = $db->query("SELECT username FROM members;");

    $fetch = $query->fetchAll();

    foreach ($fetch as $result) {
        if ($result === $username) {
            return "UserExistsError";
        }
    }

    return true;
}
