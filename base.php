<?php
if (getenv('APPLICATION_ENV') == 'development') {
    require __DIR__ . '/vendor/autoload.php';
    SassCompiler::run("scss/", "css/");
}

function open_page($page, $num_page) {
?>

<!DOCTYPE html>
 <html lang="fr">
 <head>
 	<title><?php echo $page; ?> - Cristina Asensio - Web-designer Intégrateur</title>
 	<meta charset="utf-8">
    <meta name="description" content="Diplômée d'une formation de niveau III Web-designer intégrateur et Designer graphique. Je suis désireuse de mettre mes compétences a disposition de votre entréprise.>  
    <meta name="keywords" content="Web-designer, intégrateur, html5, css3, js, jquery, javascript, graphiste, graphisme, designer, ui, ux, responsive, logos, flyers, charte graphique">
    <meta name="author" content="Cristina ASENSIO" />
    <meta name="copyright" content="© Cristina Asensio." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Optional theme et mon css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
 </head>
 <body>
    <div class="btn-navigation">
        <div class="barre"></div>
        <div class="barre"></div>
        <div class="barre"></div>
    </div>
    <nav id="navtoggle" class="fluid-container">
        <div>
            <div>
                <!-- <a href="index.php"> -->
                    <img src="img/picto-cristina.svg" title="picto cristina" alt="picto cristina">
                <!-- </a> -->
            </div>
            <ul class="nav flex-column">
                <li class="nav-item<?php if ($num_page == 1) { echo " active"; } ?>">
                    <a class="nav-link" href="index.php">A propos</a>
                </li>
                <li class="nav-item<?php if ($num_page == 2) { echo " active"; } ?>">
                    <a class="nav-link" href="portfolio.php">Portfolio</a>
                </li>
                <li class="nav-item<?php if ($num_page == 3) { echo " active"; } ?>">
                    <a class="nav-link" href="cv.php">Cv</a>
                </li>
                <li class="nav-item<?php if ($num_page == 4) { echo " active"; } ?>">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>        
            </ul>
            <div class="logos-container">
                <div class="logos">
                    <a href="https://www.linkedin.com/feed/" target="_blank"><span class="fa fa-linkedin-square" aria-hidden="true"></span></a>
                    <a href="https://twitter.com/NithienGaming" target="_blank"><span class="fa fa-twitter-square" aria-hidden="true"></span></a>
                    <a href="https://www.facebook.com/CristinaDesignerGraphique/" target="_blank"><span class="fa fa-facebook-square" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
    </nav>
<?php
}

function close_page() {
?>
    <?php include('./footer.php'); ?>

     <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
 </body>
 </html> 

<?php
}
?>