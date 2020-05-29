<?php
//include('fuzioni-database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Purinan Unconventional Bakery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
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

        <?php
        // Definisco le variabili e li setto senza valori
        $nameErr = $emailErr = $passwordErr = "";
        $name = $email = $password = "";

        // Definisco i campi obbligatori           
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Nome e Cognome
            if (empty($_POST["name"])) {
                $nameErr = "Inserisci Nome e Cognome";
            } else {
                $name = test_input($_POST["name"]);
                // Controllo che il $name contenga solo lettere e spazi bianchi
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Inserire solo lettere e spazi bianchi";
                }
            }
            // Email
            if (empty($_POST["email"])) {
                $email = test_input($_POST["email"]);
                // Controllo se l'indirizzo e-mail sia scritto bene
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "E-mail non valida";
                }
            }
            // Password
            if (empty($_POST["password"])) {
                $passwordErr = "Inserisci la Password";
            } else {
                $password = test_input($_POST["password"]);
                // Controllo che la $password contenga lettere maiuscole, minuscole, numeri e caratteri speciali
                // Password deve essere lunga min 8 e max 16 caratteri
                if (
                    !preg_match_all("/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,16}$/m", $password)
                ) {
                    $passwordErr = "La password deve essere lunga tra gli 8 e i 16 carateri. \n
                    Obbligatorio inserire lettere minuscole e Maiuscole, numeri e caratteri speciali.";
                } else {
                    $passwordHash = md5($password); // Cifro la password se rispetta gli obblighi imposti sopra
                }
            }
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <!-- ---------------------------------------------------------------------------------------- -->

        <!-- Form per l'inserimento di dati sul DB -->
        <div class="col-md-4" style="text-align: center;">
            <p><span class="error">* Campo obbligatorio</span></p>
            <br><br>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <!-- NOME e COGNOME -->
                <div class="form-group">
                    <label for="username">Inserisci Nome e Cognome</label>
                    <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" id="username">
                    <span class="error">* <?php echo $nameErr; ?></span>
                </div>
                <br>
                <!-- E-MAIL -->
                <div class="form-group">
                    <label for="email">Inserisci l'E-mail</label>
                    <input type="text" name="email" value="<?php echo $email; ?>" class="form-control" id="email">
                    <span class="error">* <?php echo $emailErr; ?></span>
                </div>
                <br>
                <!-- PASSWORD -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>" class="form-control" id="password">
                    <span class="error">* <?php echo $passwordErr; ?></span>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: #585859; border: none">Registrati</button>
                <?php echo $passwordHash ?>
            </form>
        </div>
        <br>

        <!-- ---------------------------------------------------------------------------------------- -->

        <!-- * inserire tag php *
        //controllo campi completati

        /*
        if ($username = "" && $password = "") {
            //richiamo la funzione inserisci_utente();
            inserisci_utente($username, $password);
        } else {
            echo '<div class="alert alert-danger">
				<strong>Compila tutti i campi, grazie.</strong>
			  </div>';
        }
        */
        -->

        <!-- --------------------------------------------------------------------------------------- -->

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