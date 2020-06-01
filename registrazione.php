<?php
include("funzioni-database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Purinan Unconventional Bakery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div>
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

        <main class="container">
            <div style="margin-top:80px; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; padding:10px">
                <h2>Registrazione</h2>
            </div>
            <div class="container">
                <p style="background-color: #cfcfd3; border-radius: 5px; padding: 5px 20px">
                    Effettua la registrazione per poter procedere con gli acquisti online. <br>
                    Dopo aver eseguito l'accesso avrai subito la possibilità di andare a sfogliare il catalogo e comprare i dolci che più preferisci.</p>
            </div>
            <br>
            <!-- ---------------------------------------------------------------------------------------- -->

            <?php
            // Definisco le variabili e li setto senza valori
            $nameErr = $emailErr = $passwordErr = $passwordConfErr = $addressErr = $cityErr = $numberErr = "";
            $name = $email = $password = $passwordConferma = $passwordHash = $address = $city = $number = "";
            $submit_ok = false;

            // Definisco i campi obbligatori           
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Nome e Cognome
                if (empty($_POST["name"])) {
                    $nameErr = "Inserisci Nome e Cognome";
                } else {
                    $name = clean_input($_POST["name"]);
                    // Controllo che il $name contenga solo lettere e spazi vuoti
                    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                        $nameErr = "Inserire solo lettere e spazi vuoti";
                    }
                }
                // Email
                if (empty($_POST["email"])) {
                    $emailErr = "Inserisci E-mail";
                } else {
                    $email = clean_input($_POST["email"]);
                    // Controllo se l'indirizzo e-mail sia scritto bene
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "E-mail non valida";
                    }
                }
                // Città
                if (empty($_POST["city"])) {
                    $cityErr = "Inserisci la tua città e la provincia";
                } else {
                    $city = clean_input($_POST["city"]);
                    // Controllo se l'indirizzo e-mail sia scritto bene
                    if (!preg_match("/^[a-zA-Z \(\)]*$/", $city)) {
                        $cityErr = "Inserire solo lettere e la provincia tra parentesi";
                    }
                }
                // Indirizzo
                if (empty($_POST["address"])) {
                    $addressErr = "Inserisci il tuo inidirizzo civico, necessario per le consegne a domicilio";
                } else {
                    $address = clean_input($_POST["address"]);
                    // Controllo se l'indirizzo e-mail sia scritto bene
                    if (!preg_match("/^[a-zA-Z 0-9\/°,\+\-]*$/", $address)) {
                        $addressErr = "Inserire solo lettere e numero civico";
                    }
                }
                // Numero di telefono
                if (empty($_POST["number"])) {
                    $numberErr = "Inserisci il tuo numero di telefono";
                } else {
                    $number = clean_input($_POST["number"]);
                    // Controllo se l'indirizzo e-mail sia scritto bene
                    if (!preg_match("/^[0-9\+ \-\(\)]*$/", $number)) {
                        $numberErr = "Inserire valori numerici";
                    }
                }
                // Password
                if (empty($_POST["password"])) {
                    $passwordErr = "Inserisci la Password";
                } else {
                    $password = clean_input($_POST["password"]);
                    // Controllo che la $password contenga lettere maiuscole, minuscole, numeri e caratteri speciali
                    // Password deve essere lunga min 8 e max 16 caratteri
                    if (
                        !preg_match_all("/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,16}$/m", $password)
                    ) {
                        $passwordErr = "La password deve essere lunga tra gli 8 e i 16 carateri. \n
                    Obbligatorio inserire lettere minuscole e Maiuscole, numeri e caratteri speciali.";
                    }
                }

                // Conferma password
                if (empty($_POST["passwordConferma"])) {
                    $passwordConfErr = "Riscrivi la password per confermare";
                } else {
                    $passwordConferma = clean_input($_POST["passwordConferma"]);
                    // Controlla che l'utente abbia inserito la stessa password
                    if ($_POST["password"] != $_POST["passwordConferma"]) {
                        $passwordConfErr = "La password non coincide. Ricontrolla.";
                    } else {
                        $passwordHash = sha1($password); // Cifro la password se rispetta gli obblighi imposti sopra
                    }
                }

                if ($nameErr == "" && $emailErr == "" && $passwordErr == "" && $passwordConfErr == "" && $cityErr == "" && $addressErr == "" && $numberErr == "") {
                    $submit_ok = true;
                }
            }

            if ($submit_ok) {
                inserimento_utente($name, $email, $passwordHash, $city, $address, $number);
            }

            function clean_input($data) //fortifica la validazione del FORM
            {
                $data = trim($data); //trim --> toglie caratteri non necessari negli input dell'utente
                $data = stripslashes($data); //stripslashes --> rimuove i back-slash dai dati input dell'utente
                $data = htmlspecialchars($data); //htmlspacialchars --> Converte i caratteri speciali in HTML: 
                //ulteriore metodo di validazione del form
                return $data;
            }

            ?>

            <!-- ---------------------------------------------------------------------------------------- -->

            <!-- Form per l'inserimento di dati sul DB -->
            <div class="row justify-content-center">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div>
                        <p><span class="error">* Campo obbligatorio</span></p>
                        <br><br>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <!-- Validazione del FORM -->
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
                            <!-- INDIRIZZO -->
                            <div class="form-group">
                                <label for="city">Inserisci la tua Città e la tua Provincia</label>
                                <input type="text" name="city" value="<?php echo $city; ?>" class="form-control" id="city">
                                <span class="error">* <?php echo $cityErr; ?></span>
                                <br><br>
                                <label for="address">Inserisci l'Indirizzo e il numero civico</label>
                                <input type="text" name="address" value="<?php echo $address; ?>" class="form-control" id="address">
                                <span class="error">* <?php echo $addressErr; ?></span>
                            </div>
                            <br>
                            <!-- NUMERO DI TELEFONO -->
                            <div class="form-group">
                                <label for="number">Inserisci il tuo Numero di Telefono</label>
                                <input type="text" name="number" value="<?php echo $number; ?>" class="form-control" id="number">
                                <span class="error">* <?php echo $numberErr; ?></span>
                            </div>
                            <br>
                            <!-- PASSWORD -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" value="<?php echo $password; ?>" class="form-control" id="password">
                                <span class="error">* <?php echo $passwordErr; ?></span>
                            </div>
                            <br>
                            <!-- PASSWORD CONFIRM -->
                            <div class="form-group">
                                <label for="password">Conferma Password</label>
                                <input type="password" name="passwordConferma" value="<?php echo $passwordConferma; ?>" class="form-control" id="password">
                                <span class="error">* <?php echo $passwordConfErr; ?></span>
                            </div>
                            <br>
                            <!-- CHECKBOX -->
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" style="background-color: #585859; border: none;">Registrati</button>
                            <?php echo $passwordHash; ?>
                            <!-- DA TOGLIERE-->
                        </form>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </main>
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