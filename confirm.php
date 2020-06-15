<?php
include("funzioni-database.php");

$hash = $_GET["hash"];

if (isset($hash)) {
    $result = conferma_email($hash);

    if ($result) {
        header('Location: /unconventional-bakery-web/login.php');
    }
}
