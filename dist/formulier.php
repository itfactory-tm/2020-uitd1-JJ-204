<!DOCTYPE html>
<html lang="nl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Webbureau Kwallie. Uw website, onze zorg.">
    <meta name="author" content="Maxim Snoeys, Wouter De Smet, Jente Janssens">

    <title>Kwallie - Home</title>


    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./img/favicon/site.webmanifest">
    <link rel="mask-icon" href="./img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="./img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="./img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS: Bootstrap, stylish portfolio, FA5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylish-portfolio.min.css">

    <!-- CSS: eigen stylesheet -->
    <link rel="stylesheet" href="css/webBureau.css">


</head>

<body id="page-top">

<!-- Navigation -->
<nav>

    <input type="checkbox" id="hamburger" name="hamburger"/>
    <label class="hamburger" for="hamburger"></label>
    <div class="menu-container">
        <div class="menu"></div>
        <div class="links">
            <ul>
                <li>
                    <a class="js-scroll-trigger" href="index.html#page-top">Kwallie <img class="js-scroll-trigger"
                                                                                         src="../dist/img/favicon/favicon.ico"
                                                                                         alt="Favicon"></a>
                </li>
                <li>
                    <a class="js-scroll-trigger" href="index.html#wie">Wie zijn wij?</a>
                </li>
                <li>
                    <a class="js-scroll-trigger" href="index.html#portfolio">Portfolio</a>
                </li>
                <li>
                    <a class="js-scroll-trigger" href="index.html#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container2">
        <h1 class="text-center">Bedankt voor contact met ons op te nemen!</h1>
        <h3 id='voornaam' class="text-center">Hieronder een kort overzichtje van uw gegevens: </h3>
        <div class="row">
            <div class="col-12">
                <p id='naam' class='text-justify'><span class="bold">Naam: </span><?php echo $_POST["voornaam"];
                    echo str_repeat('&nbsp;', 1);
                    echo $_POST["achternaam"]; ?></p>
                <p id='email' class='text-justify'><span class="bold">E-mail: </span><?php echo $_POST["email"]; ?></p>
                <p id='nummer' class='text-justify'><span
                        class="bold">Nummer: </span><?php echo $_POST["landcode"]; ?><?php echo $_POST["nummer"]; ?></p>
                <p id='bericht' class="text-justify"><span class="bold">Uw bericht: </span></p>
                <p class='text-justify'><?php echo $_POST["bericht"]; ?>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p class="text-muted small mb-0"><a href="https://www.thomasmore.be/">Thomas More</a> &copy; Kwallie 2020</p>
        </div>
    </footer>
</div>
<!-- JS: jQuery, Bootstrap, stylish portfolio -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="js/stylish-portfolio.min.js"></script>

</body>

</html>

