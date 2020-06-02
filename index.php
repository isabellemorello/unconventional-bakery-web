<!DOCTYPE html>
<html lang="en">

<head>
    <title>Purinan Unconventional Bakery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="page" style="min-height: 100vh; display: flex; flex-direction: column;">
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                        height: 80px; background-color: #585859;">
                <!--Qui (nel tag "nav") si può cambiare il font della navbar inserendo uno style-->
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img class="logo" src="images/logo-purinan-traspartente2.png"
                                alt="logo" style="width:180px"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="myNavbar"
                        style="margin-top: 10px; padding: 10px 10px; background-color: #585859;">
                        <ul class="nav navbar-nav">
                            <li class="active;"><a href="#" style="background-color: #585859; color: white">Home</a>
                            </li>
                            <!--
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul> 
                        </li> -->
                            <li><a href="chi-siamo.html">Chi siamo</a></li>
                            <li><a href="catalogo.php">Catalogo</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="registrazione.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                            </li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <li><a href="carrello.html"><span class="glyphicon glyphicon-shopping-cart"></span>
                                    Carrello</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="main" style="flex-grow: 1">
            <div class="container" style="margin-top:80px; margin-bottom: auto;">
                <div id="myCarousel" class="carousel slide" data-ride="carousel"
                    style="width:100%; text-align: center; margin-left: auto; margin-right: auto; background-color: #585859">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" style="background-color: #585859;">
                        <div class="item active">
                            <img src="images/esterno.JPG" alt="esterno"
                                style="width:50%; text-align: center; margin-left: auto; margin-right: auto;">
                        </div>

                        <div class="item">
                            <img src="images/entrata-1.JPG" alt="Entrata"
                                style="width:50%; text-align: center; margin-left: auto; margin-right: auto;">
                        </div>

                        <div class="item">
                            <img src="images/bancone-pane.JPG" alt="Pane"
                                style="width:50%; text-align: center; margin-left: auto; margin-right: auto;">
                        </div>

                        <div class="item">
                            <img src="images/alcolici.JPG" alt="Bar"
                                style="width:50%; text-align: center; margin-left: auto; margin-right: auto;">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div style="margin-left: 30px; margin-right: 30px;">
            <h2 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; padding: 10px 0px;">
                Purinan -
                Unconventional
                Bakery</h2>

            <p>
                In this example, the navigation bar is hidden on small screens and replaced by a button in the top
                right
                corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
        </div>
    </div>


    <!--Grid Column Bar-Pasticceria, Panificio, Winery-->

    <div class="container-fluid width: 100%">
        <div class="row">
            <div class="col-md-4" style="text-align:center">
                <h3 style="padding: 15px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Bar -
                    Pasticceria
                </h3>
                <p>
                    <img src="images/caffe.jpg" alt="caffe"
                        style="width:80%; text-align: center; margin-left: auto; margin-right: auto;"></p>
                <p style="text-align: justify; padding: 10px;">E' possibile degustare qualsiasi tipologia di bevanda;
                    caffè, orzo,
                    ginseng, oltre a prodotti per la
                    colazione preparati al momento come spremute.
                    Oltre 60 anni di esperienza nel settore della produzione artigianale, cura nei particolari, studi su
                    nuove tecniche di realizzazione, progettazione e allestimento della tua torta.
                </p>

            </div>

            <div class="col-md-4" style="text-align: center">
                <h3 style="padding: 15px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                    Panificio</h3>
                <p>
                    <img src="images/pane2.jpg" alt="pane"
                        style="width:80%; text-align: center; margin-left: auto; margin-right: auto;">
                </p>
                <p style="text-align: justify; padding: 10px;">Da oltre 60 anni il panificio Purinan è il più conosciuto
                    a Udine. Nel
                    panificio Purina si respira la
                    tradizione, in particolare di quella del fare il pane, quello vero,
                    preparato con lo sforzo e la passione di alzarsi alle 4 del mattino e impastare. Sembra facile, ma
                    unire dei semplici ingredienti come l’acqua e la farina per creare quella fragranza, quel profumo
                    che la mattina si percepisce nell’aria, è una vera e propria arte.
                </p>
            </div>

            <div class="col-md-4" style="text-align: center">
                <h3 style="padding: 15px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                    Winery</h3>
                <p>
                    <img src="images/prosciutti.JPG" alt="winery"
                        style="width:80%; text-align: center; margin-left: auto; margin-right: auto;">
                </p>
                <p style="text-align: justify; padding: 10px;">Non solo pane, non solo pasticceria, il panificio Purinan
                    è anche vineria
                    in città! Potrete trovare
                    una selezione di vini delle più pregiate cantine Friulane del Collio e dei Colli Orientali del
                    Friuli. Inoltre, in
                    collaborazione con il prosciuttificio DOK Dall'AVa, potrete degustare il miglior prosciutto di San
                    Daniele.
                </p>
            </div>
        </div>
    </div>

    <!--<div class="footer" style="min-height: 100%;> -->

    <footer class="navbar navbar-light" style="background-color:#585859;
                         color: white;">

        <div class="col-6 col-md-4" style="text-align:center">
            <h2>Orari</h2>
            <p>Lun-Sab: 7.00-19.30</p>
            <p>Orario Continuato</p>
            <p>Domenica: chiuso</p>
        </div>

        <div class="col-6 col-md-4" style="text-align: center">
            <h2>Informazioni</h2>
            <p>Purinan Unconventional Bakery</p>
            <p><a href="https://bit.ly/2XaykMC" target="_blank" style="color: white;">Via del Gelso 2, Udine</a>
            </p><br>
            <p>Copyright &copy; Morello & Purinan</p>
        </div>

        <div class="col-6 col-md-4" style="text-align: center">
            <h2>Social</h2>
            <div>
                <style>
                    .fa:hover {
                        opacity: 0.7;
                    }
                </style>
                <!--Facebook
                        <a href="#" class="btn-floating btn-lg btn-fb" type="button" role="button">
                            <i class="fab fa-facebook-f"></i></a>-->
                <a href="https://www.facebook.com/purinanbakery/" class="fa fa-facebook" target="_blank"> <img
                        class="social-facebook" src="images/logo-fb.png" width="30px"> </a>
                <a href="https://www.instagram.com/purinan_bakery/" class="fa fa-instagram" target="_blank">
                    <img class="social-insta" src="images/insta-logo-rosso.png" width="30px">
                </a>
            </div>
        </div>
    </footer>

    </div>
</body>

</html>