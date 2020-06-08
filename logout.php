<?php
session_start();

include("sessioni.php");

endSession();

header("refresh: 0; url = /unconventional-bakery-web/index.php");
