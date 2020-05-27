<?php
include('fuzioni-database.php');
?>
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
                        <a class="navbar-brand" href="#"><img class="logo" src="images/logo-purinan-traspartente2.png" alt="logo" style="width:180px"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="myNavbar" style="margin-top: 10px; padding: 10px 10px; background-color: #585859;">
                        <ul class="nav navbar-nav">
                            <li class="active;"><a href="index-ubw.html" style="background-color: #585859;">Home</a>
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
                            <li><a href="catalogo.html">Catalogo</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <li class="active;"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>
                                    Carrello</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="main" style="flex-grow: 1">
            <div class="container" style="margin-top:80px; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">
                <h2>Registrazione</h2>
            </div>
        </div>
        <br>
        <!-- ---------------------------------------------------------------------------------------- -->

        <!-- form per l'inserimento di dati sul DB -->
        <div class="col-md-4" style="text-align: center;">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: #585859; border: none">Registrati</button>
            </form>
        </div>
        <!-- ---------------------------------------------------------------------------------------- -->

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
                    <a href="https://www.facebook.com/purinanbakery/" class="fa fa-facebook" target="_blank"> <img class="social-facebook" src="images/logo-fb.png" width="30px"> </a>
                    <a href="https://www.instagram.com/purinan_bakery/" class="fa fa-instagram" target="_blank">
                        <img class="social-insta" src="images/insta-logo-rosso.png" width="30px">
                    </a>
                </div>
            </div>
        </footer>

    </div>
</body>

</html>