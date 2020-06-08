<?php
function startSession($email)
{
    if (isset($_SESSION["login"])) {
        session_unset();
    }

    $_SESSION["login"] = md5($_SERVER["HTTP_USER_AGENT"] . $_SERVER["REMOTE_ADDR"]);
    $_SESSION["email"] = $email;
}

function endSession()
{
    session_unset();
    session_destroy();
}
