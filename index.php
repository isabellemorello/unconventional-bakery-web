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
          <li class="nav-item active">
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
          <li class="nav-item">
            <a class="nav-link" href="/unconventional-bakery-web/registrazione.php"><i class="fas fa-user"></i> Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/unconventional-bakery-web/carrello.php"><i class="fas fa-shopping-cart"></i> Carrello</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- ----------------------------------------------------------------------------------- -->

  <!-- Carosello immagini pasticceria -->
  <div class="container-fluid bg-dark mb-4 shadow-sm">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div id="caroselloPasticceria" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#caroselloPasticceria" data-slide-to="0" class="active"></li>
            <li data-target="#caroselloPasticceria" data-slide-to="1"></li>
            <li data-target="#caroselloPasticceria" data-slide-to="2"></li>
            <li data-target="#caroselloPasticceria" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/esterno.JPG" class="d-block w-100" alt="Esterno">
            </div>

            <div class="carousel-item">
              <img src="images/entrata-1.JPG" class="d-block w-100" alt="Entrata">
            </div>

            <div class="carousel-item">
              <img src="images/bancone-pane.JPG" class="d-block w-100" alt="Pane">
            </div>

            <div class="carousel-item">
              <img src="images/alcolici.JPG" class="d-block w-100" alt="Bar">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#caroselloPasticceria" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#caroselloPasticceria" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- ----------------------------------------------------------------------------------- -->
  <main class="container mb-5">
    <h2 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; padding: 10px 0px;">
      Purinan – Unconventional Bakery
    </h2>

    <div class="mt-3 mb-5">
      <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner
        (try to re-size this window).</p>
    </div>

    <!--Grid Column Bar-Pasticceria, Panificio, Winery-->

    <div class="row rounded shadow px-3 pt-3 pb-4">
      <div class="col-lg-4">
        <div class="card border-0">
          <div class="card-body">
            <div class="card-title mb-0">
              <h4 class="mb-0" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Bar -
                Pasticceria
              </h4>
            </div>
          </div>
          <img src="images/caffe.jpg" class="card-img rounded shadow" alt="caffe" />
          <div class="card-body">
            <p class="card-text text-justify">E' possibile degustare qualsiasi tipologia di bevanda; caffè, orzo,
              ginseng, oltre a prodotti per la
              colazione preparati al momento come spremute.
              Oltre 60 anni di esperienza nel settore della produzione artigianale, cura nei particolari, studi su
              nuove tecniche di realizzazione, progettazione e allestimento della tua torta.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card border-0">
          <div class="card-body">
            <div class="card-title mb-0">
              <h4 class="mb-0" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                Panificio
              </h4>
            </div>
          </div>
          <img src="images/pane2.jpg" class="card-img rounded shadow" alt="pane" />
          <div class="card-body">
            <p class="card-text text-justify">Da oltre 60 anni il panificio Purinan è il più conosciuto
              a Udine. Nel panificio Purinan si respira la
              tradizione, in particolare di quella del fare il pane, quello vero,
              preparato con lo sforzo e la passione di alzarsi alle 4 del mattino e impastare. Sembra facile, ma
              unire dei semplici ingredienti come l’acqua e la farina per creare quella fragranza, quel profumo
              che la mattina si percepisce nell’aria, è una vera e propria arte.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card border-0">
          <div class="card-body">
            <div class="card-title mb-0">
              <h4 class="mb-0" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                Winery
              </h4>
            </div>
          </div>
          <img src="images/prosciutti.JPG" class="card-img rounded shadow" alt="winery" />
          <div class="card-body">
            <p class="card-text text-justify">Non solo pane, non solo pasticceria, il panificio Purinan
              è anche vineria in città! Potrete trovare
              una selezione di vini delle più pregiate cantine Friulane del Collio e dei Colli Orientali del
              Friuli. Inoltre, in
              collaborazione con il prosciuttificio DOK Dall'AVa, potrete degustare il miglior prosciutto di San
              Daniele.
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>

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
</body>

</html>