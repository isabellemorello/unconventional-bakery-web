<?php
session_start();

include("funzioni-database.php");
include("sessioni.php");
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
              </div>
            </li>';
            echo '<li class="nav-item active">
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

  <!-- ----------------------------------------------------------------------------------- -->

  <main class="container mt-4 mb-5">
    <h2 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; padding: 10px 0px;">
      Carrello</h2>
    <?php
    $articoliNelCarrello = isset($_SESSION["carrello"]) ? $_SESSION["carrello"] : array();

    if (count($articoliNelCarrello) > 0) {
      echo '<div class="alert alert-secondary mt-4 mb-5">Ricordati di premere il tasto aggiorna per confermare la quantità scelta di ogni prodotto.</div>';
      ottieni_carrello($articoliNelCarrello);
    } else {
      echo '<div class="alert alert-secondary">Il carrello è vuoto. Torna al <a class="alert-link" href="/unconventional-bakery-web/catalogo.php">Catalogo</a>.</div>';
    }
    ?>
  </main>

  <!-- ----------------------------------------------------------------------------------- -->

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

  <!-- ----------------------------------------------------------------------------------- -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>