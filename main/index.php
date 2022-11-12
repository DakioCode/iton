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
                <a href="/logout.php">Déconnexion</a>
            </div>
        </nav>

        <div id="redact">
            <h3>Rédaction</h3>
            <label>Titre</label>
            <input type="text" name="post_title" required>

            <label>Texte</label>
            <textarea name="content_area" rows="8" cols="80"></textarea>
        </div>

        <section class="cards">
            <div class="card cardg">
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
            </div>
        </section>

    </body>
</html>
