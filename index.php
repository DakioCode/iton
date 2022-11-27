<?php
// Error reporting + session
error_reporting(E_ERROR);
session_start();

require 'src/verifications/login.php';

if (isset($_POST["username"])) {
    login_verification();
};
?>

<!DOCTYPE html>
<!-- <img src="https://dev-to-uploads.s3.amazonaws.com/uploads/articles/th5xamgrr6se0x5ro4g6.png" alt="Logo d'Iton" id="logo"> -->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iton - New modern Social Network</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4d19b4a050.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="container">
        <form action="" method="POST">
            <h1>Connexion</h1>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='Connexion'>
            <p align="center">C'est la première fois ? <a href="/inscription.php">S'inscrire</a>.</p>
        </form>
    </div>
</body>

</html>