<?php
if (!function_exists('ottieni_utente')) {
    include("funzioni-database.php");
}

function invia_conferma_registrazione($email)
{
    $result = ottieni_utente($email);

    if ($result->num_rows > 0) { //chiamare la proprietà num_rows sull'oggetto result
        $utente = mysqli_fetch_array($result);

        $hash = sha1($utente["user_email"] . $utente["user_password"]);
        $name = $utente["user_username"];
        $email = $utente["user_email"];
        $subject = "Conferma la tua e-mail";

        $message  = '<!DOCTYPE html><html><body>';
        $message .= 'Ciao ' . $name . '!<br><br>';
        $message .= 'Per confermare la tua e-mail, clicca <a href="https://purinanbakery.altervista.org/unconventional-bakery-web/confirm.php?hash=' . $hash . '">qui</a>.';
        $message .= '</body></html><br><br>';

        $headers = [
            'From' => 'Purinan Bakery <apache@purinanbakery.altervista.org>',
            'MIME-Version' => '1.0',
            'Content-Type' => 'text/html; charset="utf-8"',
            'Content-Transfer-Encoding' => '8bit'
        ];

        return mail($email, $subject, $message, $headers);
    }

    return false;
}
