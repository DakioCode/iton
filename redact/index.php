<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="/assets/logo.png">
        <title>Iton - New modern Social Network</title>
        <link rel="stylesheet" type="text/css" href="/redact/style.css">
        <script src="/redact/script.js" defer></script>
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
            <div class="card">
                <div class="card-top">
                    <div class="desktop">
                        <button type="cancel">Annuler</button>
                        <input type="text" class="title-box" placeholder="Votre titre" maxlength="128" />
                        <button type="submit">Poster</button>
                    </div>
                    <div class="mobile">
                        <button type="cancel">Annuler</button>
                        <button type="submit">Poster</button>
                    </div>
                    <input type="text" class="title-box-mobile" placeholder="Votre titre" maxlength="128" />
                </div>
                <textarea class="text-box" placeholder="Votre texte (2048 caractères max)" maxlength="2048"></textarea>
            </div>
        </section>
    </body>
</html>