<?php
// Funzione per la connessione al database db_purinan_ubw
function dbConnect()
{
    $database_ubw = mysqli_connect("127.0.0.1", "root", "", "db_purinan_ubw"); // CORRETTO (controllato sul database in "Privilegi")

    if (!$database_ubw) {
        echo "Errore: impossibile connettersi al database." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL; //fornisce il codice dell'errore
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL; //fornisce la descrizione dell'errore
    }
    return $database_ubw;
}

// Inserimento utenti
function inserimento_utente($name, $email, $passwordHash, $city, $address, $number)
{
    $conn = dbConnect();
    $sql = "INSERT INTO ubw_customer (user_username, user_email, user_password, user_city, user_address, user_number) 
            VALUES ('" . $name . "', '" . $email . "', '" . $passwordHash . "', '" . $city . "', '" . $address . "','" . $number . "');";
    if (!$conn->query($sql)) {
        echo '<div class="alert alert-danger"><strong>Attenzione errore nella query:</strong> ' . $sql . "\n" . mysqli_error($conn) . '</div>';
    } else {
        echo '<div class="alert alert-success">
				<strong>Utente registrato con successo.</strong>
			  </div>';
        echo '<div>
                <a href="index-ubw.html" class="btn btn-secondary">Torna alla Homepage</a>
                <a href="catalogo.html" class="btn btn-secondary" id="catalogo">Vai al Catalogo</a>
            </div>';
    }
    mysqli_close($conn);
}

// Catalogo
