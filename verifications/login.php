<?php

function login_verification()
{
    $db = new PDO("mysql:host=localhost;dbname=iton;charset=utf8", "root", "root");

    $password = $_POST["password"];
    $username = $_POST["username"];

    $query = $db->query("SELECT username FROM members WHERE pass='$password';");

    $fetch = $query->fetchAll();
    if ($fetch[0]["username"] === $username) {
        print_r("Bienvenue $username !");

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["connected"] = true;
    } else {
        print_r("Utilisateur inconnu");
    }
}
