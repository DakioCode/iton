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
    <title>Iton - New modern Social Network</title>
    <link rel="stylesheet" type="text/css" href="/main/style.css">
</head>

<body>
    <nav>
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

    <section class="cards">
        <?php

        $query = $db->query("SELECT * FROM posts LIMIT 15;");

        $fetch = $query->fetchAll();

        foreach ($fetch as $result) {
        ?> <div class="card cardg">
                <h1><?= $result["title"] ?></h1>
                <p class="content"><?= $result["content"] ?></p>
                <p class="author"><?= $result["author"] ?></p>
            </div> <?php
                }

                    ?>

        <!-- <div class="card cardg">
            <h1>[TITRE]</h1>
            <p class="content">[CONTENT]</p>
            <p class="author">[AUTHOR]</p>
        </div>
        <div class="card cardd">
            <h1>[TITRE]</h1>
            <p class="content">[CONTENT]</p>
            <p class="author">[AUTHOR]</p>
        </div>
        <div class="card cardg">
            <h1>[TITRE]</h1>
            <p class="content">[CONTENT]</p>
            <p class="author">[AUTHOR]</p>
        </div>
        <div class="card cardd">
            <h1>[TITRE]</h1>
            <p class="content">[CONTENT]</p>
            <p class="author">[AUTHOR]</p>
        </div> -->
    </section>
</body>

</html>