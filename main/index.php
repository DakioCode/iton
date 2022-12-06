<?php
error_reporting(E_ERROR);

session_start();

$db = new PDO("mysql:host=localhost;dbname=iton;charset=utf8", "root", "root");

for ($i; $i = 0; $i++) {
    if ($i === 30) break;

    $db->query("INSERT INTO posts (title, author, content) VALUES ('.','.','.');");
}

$limit = 15;
$posts = 0;

if (!isset($_SESSION["username"])) header("Location:/index.php");
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="/assets/logo.png">
        <title>Iton - New modern Social Network</title>
        <link rel="stylesheet" type="text/css" href="/main/style.css">
        <script src="/main/script.js" defer></script>
    </head>

    <body>
        <!-- Desktop navbar -->
        <nav class="desktop">
            <div class="onglets nav-item">
                <a href="/main/">Accueil</a>
                <div class="separation"></div>
                <a href="/redact/">Nouveau</a>
            </div>
            <div class="account nav-item">
                <a href="/account/">Mon compte</a>
                <div class="separation"></div>
                <a href="#logout">Déconnexion</a>
            </div>
        </nav>

        <!-- Mobile and tablet navbar -->
        <div class="container">
            <img src="/assets/logo.png" class="mobile-logo">
            <img src="/assets/logo_ban.png" class="tablet-logo">
            <button id="burger" class="open-main-nav">
                <span class="burger"></span>
            </button>
            <nav class="main-nav" id="main-nav">
                <ul>
                    <li><a href="/main/">Accueil</a></li>
                    <li><a href="/redact/">Nouveau</a></li>
                    <li><a href="/account/">Mon compte</a></li>
                    <li><a href="#logout">Déconnexion</a></li>
                </ul>
            </nav>
        </div>

        <!-- Post viewer -->
        <section class="cards">
            <?php

            $query = $db->query("SELECT * FROM posts LIMIT 15;");

            $fetch = $query->fetchAll();

            foreach ($fetch as $result) {
            ?> <div class="card">
                    <h1><?= $result["title"] ?></h1>
                    <p class="content"><?= $result["content"] ?></p>
                    <p class="author"><?= $result["author"] ?></p>
                </div> <?php
            }?>
        </section>
    </body>
</html>