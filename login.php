<?php
//session_start();
include("funzioni-database.php");
/*
if (isset($_SESSION["mySession"])) {
    header("");
    exit;
}

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $passwordHash = sha1($_POST["password"]);
    } else {
        echo "Compila tutti i campi.";
    }
    */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Purinan Unconventional Bakery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
</head>

<body>
  <div>
    <header class="sticky-top">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <a class="navbar-brand" href="#">
          <img src="images/logo-purinan-traspartente2.png" height="44" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="chi-siamo.html">Chi Siamo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="catalogo.php">Catalogo</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#"><i class="fas fa-user"></i> Log In <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="carrello.html"><i class="fas fa-shopping-cart"></i> Carrello</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main class="container my-4">
      <h2 class="mb-4">Registrazione</h2>
      <div class="alert alert-secondary" role="alert">
        Effettua la registrazione per poter procedere con gli acquisti online.<br>
        Dopo aver eseguito l'accesso avrai subito la possibilità di andare a sfogliare il catalogo e comprare i dolci che più preferisci.
      </div>
      <!-- ---------------------------------------------------------------------------------------- -->

      <?php
      // SESSIONE
      /*$_SESSION["mySession"] = sha1($password, $email);
        login($email, $password);
		echo " <h3><p style='color:green';><strong> Complimenti, ti sei appena loggato pagina </strong></p></h3>" ;
		// echo "Tra pochi secondi verrai reindirizzato alla pagina precedente";
		// header("Refresh: 4; url=session_index.php");*/

      ?>

      <!-- ---------------------------------------------------------------------------------------- -->

      <!-- Form per l'inserimento di dati sul DB -->
      <div class="row justify-content-center">
        <div class="col-md-4">
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <!-- Validazione del FORM -->
            <!-- E-MAIL -->
            <div class="form-group">
              <label for="email">Inserisci l'E-mail</label>
              <input type="text" name="email" class="form-control" id="email">
            </div>
            <br>

            <!-- PASSWORD -->
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password">
            </div>
            <br>

            <!-- CHECKBOX -->
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <!-- BOTTONE -->
            <button type="submit" class="btn btn-dark btn-block">Accedi</button>
          </form>
        </div>
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

  </div>
</body>

</html>