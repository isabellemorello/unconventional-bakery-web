<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "templates/styles.php"; ?>
  <title>Purinan Unconventional Bakery</title>
</head>

<body>
  <header class="sticky-top">
    <?php include "templates/navbar.php"; ?>
  </header>

<!-- ----------------------------------------------------------------------------------- -->

<div class="main" style="flex-grow: 1" method="POST">
            <div class="container" style="margin-top:80px; margin-left: 30px; margin-right: 30px;">
                <h2 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; padding: 10px 0px;">
                    Catalogo</h2>
                <h4 class="container" style="border-radius: 5px; background-color: #cfcfd3; padding: 10px;">Benvenuti
                    nello shop online di "Purinan - Unconventional Bakery"!</h4>
                <p>Qui troverete il catalogo di tutti i prodotti che sono acquistabili online.</p>
                <p>L'acquisto è molto semplice: basta passare con il mouse sopra la foto del prodotto desiderato e
                    cliccare. Il prodotto verrà aggiunto automaticamente al carrello.</p>
                <p>Per vedere tutti i prodotti che sono stati aggiunti al carrello e completare l'acquisto, basta andare
                    nella sezione "Carrello", dove si possono aggiungere le quantità per prodotto selezionato.</p>
            </div>
        </div>
        <br>

  <!-- ----------------------------------------------------------------------------------- -->

  <main class="container py-5">
    <?php include "templates/catalogo.php"; ?>
  </main>

  <!-- ----------------------------------------------------------------------------------- -->

  <footer class="bg-dark text-light py-4">
    <?php include "templates/footer.php"; ?>
  </footer>

  <!-- ----------------------------------------------------------------------------------- -->

  <?php include "templates/scripts.php"; ?>
</body>

</html>