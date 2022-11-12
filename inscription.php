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

            <form action="" method="GET">
                <h1>Inscription</h1>

                <label><b>Adresse E-Mail</b></label>
                <input type="email" name="email" placeholder="Entrer votre adresse e-mail" required>

                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="new_username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="new_password" required>

                <label><b>Confirmation mot de passe</b></label>
                <input type="password" name="password_confirm" placeholder="Confirmez votre mot de passe" required>

                <input type="submit" id='submit' value='Inscription' >
                <p align="center">Déjà un compte ? <a href="/index.php">Se Connecter</a>.</p>
            </form>
        </div>
    </body>
</html>
