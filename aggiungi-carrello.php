<?php
session_start();
include("sessioni.php");

if (!isset($_SESSION["login"])) {
    header("Location: /unconventional-bakery-web/login.php");
} else {
    $articoloId = $_GET["id"]; // prende l'id dal query parameter
    $quantitaRichiesta = isset($_GET["quantita"]) ? max($_GET["quantita"], 0) : 1; // altrimenti mi aggiunge solo 1 articolo di default

    if (!isset($_SESSION["carrello"])) {
        $_SESSION["carrello"] = array(); // creo una variabile di sessione chiamata carrello
    }

    /* $_SESSION["carrello"] = [
        "1" => 2,
        "2" => 2,
        "4" => 1,
        ...
    ]; */

    if ($quantitaRichiesta > 0) {
        $_SESSION["carrello"][$articoloId] = $quantitaRichiesta;
    } else {
        unset($_SESSION["carrello"][$articoloId]);
    }

    $redirezione = isset($_GET["referrer"]) ? $_GET["referrer"] : "/unconventional-bakery-web/catalogo.php";
    header("Location: " . $redirezione);
}
