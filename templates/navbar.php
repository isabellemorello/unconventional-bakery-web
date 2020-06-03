<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <a class="navbar-brand" href="#">
    <img src="images/logo-purinan-traspartente2.png" height="44" alt="" loading="lazy">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
    function get_navitem_class($href)
    {
      $navItemClass = ["nav-item"];

      if ($_SERVER["PHP_SELF"] == __DIR__ . $href) {
        array_push($navItemClass, "active");
      }

      return implode(" ", $navItemClass);
    }
    ?>
    <ul class="navbar-nav mr-auto">
      <li class="<?php echo get_navitem_class("/index.php"); ?>">
        <a class="nav-link" href="<?php echo __DIR__; ?>/index.php">Home</a>
      </li>
      <li class="<?php echo get_navitem_class("/chi-siamo.php"); ?>">
        <a class="nav-link" href="<?php echo __DIR__; ?>/chi-siamo.php">Chi Siamo</a>
      </li>
      <li class="<?php echo get_navitem_class("/catalogo.php"); ?>">
        <a class="nav-link" href="<?php echo __DIR__; ?>/catalogo.php">Catalogo</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-user"></i> Log In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Carrello</a>
      </li>
    </ul>
  </div>
</nav>