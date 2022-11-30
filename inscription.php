<?php
error_reporting(E_ERROR);

session_start();

$db = new PDO("mysql:host=localhost;dbname=iton;charset=utf8", "root", "root");

require 'src/verifications/inscription.php';

$verification = inscription_verification();

if (isset($_POST["email"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    if ($verification) {
        $db->query("INSERT INTO members (username, pass, email) VALUES ('$username', '$password', '$email')");
        $_SESSION["username"] = $username;
        $_SESSION["connected"] = true;
    } else if ($verification === "PasswordMatchError") {
        print_r("Les mots-de-passe ne correspondent pas.");
    } else if ($verification === "UserExistsError") {
        print_r("L'utilisateur nommé $username existe déjà.");
    } else {
        print_r("Erreur inconnue");
    }
}
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
</head>

<body>
    <div id="container">

        <form action="" method="POST">
            <h1>Inscription</h1>

            <label><b>Adresse E-Mail</b></label>
            <input type="email" name="email" placeholder="Entrer votre adresse e-mail" required>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <label><b>Confirmation mot de passe</b></label>
            <input type="password" name="password_confirm" placeholder="Confirmez votre mot de passe" required>

            <button type="submit">Connexion</button>
            <p align="center">Déjà un compte ? <a href="/index.php">Se Connecter</a>.</p>
        </form>
    </div>
</body>

</html>