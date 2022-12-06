<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="/assets/logo.png">
        <title>Iton - New modern Social Network</title>
        <link rel="stylesheet" type="text/css" href="/account/style.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <script src="/account/script.js" defer></script>
    </head>
    <body class="html" id="html">
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

        <!-- Profile viewer -->
        <section class="cards">
            <div class="card">
                <div class="top">
                    <img src="/assets/pp.png">
                    <!-- 32 characters max in the nickname (here there is 29-30 characters) -->
                    <h1>Nom d'utilisateur sympathique</h1>
                </div>
                <p class="description">Voici une courte description afin de tester la taille de la police et des marges car quand il y aura le php je ne pourais plus essayer (si j'ai push c'est que tu peux le supprimer). La hauteur de la carte est réglée sur auto.</p>
            </div>
        </section>
    </body>
</html>