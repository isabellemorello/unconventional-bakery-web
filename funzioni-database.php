<?php
// Funzione per la connessione al database db_purinan_ubw
function dbConnect()
{
    $db = mysqli_connect("127.0.0.1", "root", "", "db_purinan_ubw");

    if (!$db) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    }
    return $db;
}

// Inserimento utenti
function inserisci_utente($username, $password, $hash_type)
{
    $conn = dbConnect();
    $pwd_hash = cipher_pwd($password, $hash_type);
    $sql = "INSERT INTO ubw_customer (user_username, user_password) VALUES ('" . $username . "', '" . $pwd_hash . "');";
    if (!$conn->query($sql)) {
        echo '<div class="alert alert-danger"><strong>Attenzione errore nella query:</strong> ' . $sql . "\n" . mysqli_error($sql) . '</div>';
    } else {
        echo '<div class="alert alert-success">
				<strong>Utente inserito con successo</strong>
			  </div>';
        echo '<div class="button-login">
            <a href="index-ubw.html" type="button" class="btn btn-secondary">Torna alla Homepage</a>' . ' ' .
            '<a href="index-ubw.html" type="button" class="btn btn-secondary">Vai al Catalogo</a></div>';
    }
    mysqli_close($conn);
}
