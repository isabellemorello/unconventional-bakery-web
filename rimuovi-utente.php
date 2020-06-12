<?php
session_start();
include("sessioni.php");
include("funzioni-database.php");

$rimozione = false;
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
    <?php

    if (isset($_SESSION["email"])) {
        $email = $_SESSION["email"];
        $rimozione = rimuoviUtente($email);
    }
    if ($rimozione) {
        echo '<div class="alert alert-success my-5 text-center">Utente rimosso con successo!</div>';
        endSession();
        header("refresh: 3; url = /unconventional-bakery-web/index.php");
    }
    ?>
</body>

</html>