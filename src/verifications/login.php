<?php

require 'src/data/get_database.php';

function login_verification()
{
    $db = get_database();

    $password = $_POST["password"];
    $username = $_POST["username"];

    $query = $db->query("SELECT username FROM members WHERE pass='$password';");

    $fetch = $query->fetchAll();
    if ($fetch[0]["username"] === $username) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["connected"] = true;

        header("Location:/main/");
    } else {
        print_r("Utilisateur inconnu");
        if (isset($_SESSION["username"])) {
            unset($_SESSION["username"]);
            unset($_SESSION["connected"]);
        }
    }
}
