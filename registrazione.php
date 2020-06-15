<?php
session_start();

include("funzioni-database.php");
include("sessioni.php");
include("mail.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous">
  <title>Purinan Unconventional Bakery</title>
</head>

<body>
  <header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
      <a class="navbar-brand" href="/unconventional-bakery-web/index.php">
        <img src="images/logo-purinan-traspartente2.png" height="44" alt="Logo" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/unconventional-bakery-web/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/unconventional-bakery-web/chi-siamo.php">Chi Siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/unconventional-bakery-web/catalogo.php">Catalogo</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <?php
          if (isset($_SESSION["login"])) {
            echo '<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
              . '<i class="fas fa-user"></i> ' . $_SESSION["email"] .
              '</a>
              <div class="dropdown-menu" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/unconventional-bakery-web/logout.php">Log Out</a>
                <a class="dropdown-item" href="/unconventional-bakery-web/rimuovi-utente.php">Elimina profilo</a>
              </div>
            </li>';
            echo '<li class="nav-item">
              <a class="nav-link" href="/unconventional-bakery-web/carrello.php"><i class="fas fa-shopping-cart"></i> Carrello</a>
            </li>';
          } else {
            echo '<li class="nav-item">
            <a class="nav-link" href="/unconventional-bakery-web/login.php"><i class="fas fa-user"></i> Log In</a>
          </li>';
          }
          ?>
        </ul>
      </div>
    </nav>
  </header>

  <main class="container mt-4 mb-5">
    <h2 class="mb-4" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; padding: 10px 0px;">Registrazione</h2>

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
      $signUpSuccess = inserimento_utente($name, $email, $passwordHash, $city, $address, $number);
      if ($signUpSuccess) {
        invia_conferma_registrazione($email);
      }
    }

    function clean_input($data) //fortifica la validazione del FORM
    {
      $data = trim($data); //trim --> toglie caratteri non necessari negli input dell'utente
      $data = stripslashes($data); //stripslashes --> rimuove i back-slash dai dati input dell'utente
      $data = htmlspecialchars($data); //htmlspacialchars --> Converte i caratteri speciali in HTML:
      //ulteriore metodo di validazione del form
      return $data;
    }

    if ($submit_ok && $signUpSuccess) {
      echo '<div class="alert alert-success">Registrazione avvenuta.<br>Ti verrà inviata una mail per confermare la registrazione.</div>';
    } else {
      echo '<div class="alert alert-secondary mb-5" role="alert">
      Effettua la registrazione per poter procedere con gli acquisti online.<br>
      Dopo aver eseguito l\'accesso avrai subito la possibilità di andare a sfogliare il catalogo e comprare i dolci che più preferisci.
    </div>';
    }

    ?>

    <!-- ---------------------------------------------------------------------------------------- -->

    <!-- Form per l'inserimento di dati sul DB -->
    <div class="row justify-content-center">
      <div class="col-md-5">
        <p class="text-danger mb-4">* Campo obbligatorio</p>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <!-- Validazione del FORM -->
          <!-- NOME e COGNOME -->
          <div class="form-group">
            <label for="username">Nome e Cognome</label>
            <input type="text" name="name" value="<?php echo $name; ?>" class="form-control <?php echo ($nameErr != "") ? "is-invalid" : ""; ?>" id="username">
            <?php
            if ($nameErr != "") {
              echo '<div class="invalid-feedback">' . $nameErr . '</div>';
            }
            ?>
          </div>

          <!-- E-MAIL -->
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" name="email" value="<?php echo $email; ?>" class="form-control <?php echo ($emailErr != "") ? "is-invalid" : ""; ?>" id="email">
            <?php
            if ($emailErr != "") {
              echo '<div class="invalid-feedback">' . $emailErr . '</div>';
            }
            ?>
          </div>

          <!-- CITTÀ -->
          <div class="form-group">
            <label for="city">Città e Provincia</label>
            <input type="text" name="city" value="<?php echo $city; ?>" class="form-control <?php echo ($cityErr != "") ? "is-invalid" : ""; ?>" id="city">
            <?php
            if ($cityErr != "") {
              echo '<div class="invalid-feedback">' . $cityErr . '</div>';
            }
            ?>
          </div>

          <!-- INDIRIZZO -->
          <div class="form-group">
            <label for="address">Indirizzo</label>
            <input type="text" name="address" value="<?php echo $address; ?>" class="form-control <?php echo ($addressErr != "") ? "is-invalid" : ""; ?>" id="address">
            <?php
            if ($addressErr != "") {
              echo '<div class="invalid-feedback">' . $addressErr . '</div>';
            }
            ?>
          </div>

          <!-- NUMERO DI TELEFONO -->
          <div class="form-group">
            <label for="number">Numero di Telefono</label>
            <input type="text" name="number" value="<?php echo $number; ?>" class="form-control <?php echo ($numberErr != "") ? "is-invalid" : ""; ?>" id="number">
            <?php
            if ($numberErr != "") {
              echo '<div class="invalid-feedback">' . $numberErr . '</div>';
            }
            ?>
          </div>

          <!-- PASSWORD -->
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" value="<?php echo $password; ?>" class="form-control <?php echo ($passwordErr != "") ? "is-invalid" : ""; ?>" id="password">
            <?php
            if ($passwordErr != "") {
              echo '<div class="invalid-feedback">' . $passwordErr . '</div>';
            }
            ?>
          </div>

          <!-- PASSWORD CONFIRM -->
          <div class="form-group">
            <label for="password">Conferma Password</label>
            <input type="password" name="passwordConferma" value="<?php echo $passwordConferma; ?>" class="form-control <?php echo ($passwordConfErr != "") ? "is-invalid" : ""; ?>" id="password">
            <?php
            if ($passwordConfErr != "") {
              echo '<div class="invalid-feedback">' . $passwordConfErr . '</div>';
            }
            ?>
          </div>

          <button type="submit" class="btn btn-dark btn-block mt-5">Registrati</button>
        </form>
      </div>
    </div>
  </main>

  <!-- ---------------------------------------------------------------------------------------- -->

  <!--<div class="footer" style="min-height: 100%;> -->

  <footer class="bg-dark text-light py-4">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4">
          <h5>Orari</h5>
          <ul class="list-unstyled">
            <li>Lun-Sab: 7.00–19.30</li>
            <li class="mb-3">Orario Continuato</li>
            <li>Domenica: chiuso</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Informazioni</h5>
          <ul class="list-unstyled">
            <li>Purinan Unconventional Bakery</li>
            <li>
              <a class="text-light" href="https://bit.ly/2XaykMC" target="_blank">Via del Gelso 2, Udine</a>
            </li>
            <li>Telefono: 0432 229301</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Social</h5>
          <a class="text-danger mr-2" href="https://www.facebook.com/purinanbakery" target="_blank">
            <i class="fab fa-facebook fa-2x"></i>
          </a>
          <a class="text-danger" href="https://www.instagram.com/purinan_bakery" target="_blank">
            <i class="fab fa-instagram fa-2x"></i>
          </a>
        </div>
      </div>

      <p class="text-center mb-0">Copyright &copy; Morello & Purinan</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>