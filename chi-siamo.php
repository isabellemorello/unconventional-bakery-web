<?php
session_start();

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
          <li class="nav-item active">
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
    <h2 class="pb-4" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
      Chi siamo</h2>
    <div class="px-4 py-5 rounded shadow">
      <p>Nel centro di Udine c’è un locale dove potrete riscoprire le vecchie tradizioni. <br>
        Ecco, è proprio di tradizione che ci contraddistingue, in particolare di quella del fare il
        pane,
        quello vero, preparato con lo sforzo e la passione di alzarsi alle 4 del mattino e impastare.
        Sembra
        facile, ma unire dei semplici ingredienti come l’acqua e la farina per creare quella fragranza,
        quel
        profumo che la mattina si percepisce nell’aria, è una vera e propria arte.</p>
      <br>
      <div style="text-align: center">
        <img src="images/esterno.JPG" alt="esterno" width="40%" class="mb-3 rounded shadow" style="margin-left: auto; margin-right: auto">
      </div> <br>
      <p>Sono ormai quasi 60 anni che in via del Gelso, nel centro storico di Udine, si trova il Panificio
        Purinan. Gestito prima dal nonno Mario e dalla nonna Pia, il panificio è passato ora ai figli
        Andrea
        e Roberto che ormai sono aiutati, a loro volta dai, figli. <br>
        Il classico panificio nel 2011 è diventato “Unconventional Bakery” per offrire oggi ora anche
        servizio di bar, paninoteca, pizza al trancio, pranzi veloci, ma rimane comunque uno dei
        panifici
        storici di Udine, con la sua storia familiare dal
        sapore di tradizione, che continua nel tempo e riscopre le vecchie usanze. </p>
      <br>
      <div style="text-align: center">
        <img src="images/bancone-pane.JPG" alt="bancone-pane" width="40%" class="mb-3 rounded shadow" style="margin-left: auto; margin-right: auto">
      </div> <br>
      <p>Nella nostra "Unconventional Bakery" potrete trovare diversi tipi di pane tra cui quello all'olio
        extravergine di oliva, pane ai 5 cereali, pane al latte, pane alle olive, pane alla zucca, ma
        anche
        latte, gnocchi di patate freschi, biscotti artigianali,
        croissant, fagottini di mela, pasticceria mignon, torte sacher, pastiera napoletana, crostate
        varie,
        gubane, focacce dolci, panettoni artigianali, focacce salate,
        pizza a lunga lievitazione, e tanto altro! <br>
        Da oggi potrete anche ordinare online nella pagina del sito dedicata all'e-commerce. Basta
        registrati, scegliere i prodotti che più ti piacciono, pagare semplicemente con paypal e poi
        scegliere se farti consegnare a casa la merce oppure se ritirarla direttamente in negozio.
      </p><br>
      <div style="text-align: center">
        <img src="images/divisa-purinan.JPG" alt="divisa-purinan" width="40%" class="mb-3 rounded shadow" style="margin-left: auto; margin-right: auto">
      </div><br>
    </div>
  </main>


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

  <!-- ----------------------------------------------------------------------------------- -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>