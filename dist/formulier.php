<!DOCTYPE html>
<html lang="nl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish-portfolio - Bootstrap Theme</title>

    <link rel="apple-touch-icon" sizes="180x180" href="../dist/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../dist/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../dist/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../dist/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="../dist/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="../dist/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="../dist/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS: Bootstrap, stylish portfolio, FA5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylish-portfolio.min.css">

    <!-- CSS: eigen stylesheet -->
    <link rel="stylesheet" href="css/webBureau.css">

</head>

<body id="page-top">

<!-- Navigation -->
<nav>
    <input type="checkbox" id="hamburger" name="hamburger" />
    <label class="hamburger" for="hamburger"></label>
    <div class="menu-container">
        <div class="menu"></div>
        <div class="links">
            <ul>
                <li>
                    <a class="js-scroll-trigger" href="index.html#page-top">Kwallie <img class="js-scroll-trigger" src="../dist/img/favicon/favicon.ico" alt="Favicon"></a>
                </li>
                <li>
                    <a class="js-scroll-trigger" href="index.html#who">Wie zijn wij?</a>
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
<div id="container_php">
    <h1>Bedankt voor het invullen van het formulier</h1>

<h3 id='voornaam'><span class='text-capitalize'>
    </span> hier heb je je formulier: </h3>
    <p id='naam' class='text-justify'><span class='font-weight-bold'> Naam:</span><span class='text-capitalize'> <?php echo $_POST["voornaam"]; echo str_repeat('&nbsp;', 1);echo $_POST["achternaam"];?>
    <p id='email' class='text-justify'><span class='font-weight-bold'> Email: </span> <span class='text-capitalize'><?php echo $_POST["email"];?></p>
    <p id='nummer' class='text-justify'><span class='font-weight-bold'> nummer:</span><span class='text-capitalize'> <?php echo $_POST["landcode"];?></span><span class='text-capitalize'></span><span class='text-capitalize'></span><?php echo $_POST["nummer"];?></p>
    <p id='bericht'> <span class='font-weight-bold'>uw bericht:</span></p><p class='text-justify'><?php echo $_POST["bericht"];?><span class='text-capitalize'>
</span></p></div>


    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p class="text-muted small mb-0">Copyright &copy; Kwallie 2020</p>
        </div>
    </footer>
</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- JS: jQuery, Bootstrap, stylish portfolio -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="js/stylish-portfolio.min.js"></script>

</body>

</html>

