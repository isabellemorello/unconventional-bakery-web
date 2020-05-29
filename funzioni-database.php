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
function inserisci_utente($username, $password)
{
    $conn = dbConnect();
    $pwd_hash = cipher_pwd($password);
    $sql = "INSERT INTO ubw_customer (user_username, user_password) VALUES ('" . $username . "', '" . $pwd_hash . "');";
    if (!$conn->query($sql)) {
        echo '<div class="alert alert-danger"><strong>Attenzione errore nella query:</strong> ' . $sql . "\n" . mysqli_error($sql) . '</div>';
    } else {
        echo '<div class="alert alert-success">
				<strong>Utente inserito con successo</strong>
			  </div>';
        echo '<div class="button-login"><ul list-group list-group-horizontal>
        <li class="list-group-item"><a href="index-ubw.html" type="button" class="btn btn-secondary">Torna alla Homepage</a></li>' . ' ' .
            '<li class="list-group-item"><a href="index-ubw.html" type="button" class="btn btn-secondary">Vai al Catalogo</a></li></ul></div>';
    }
    mysqli_close($conn);
}

// Cifratura della password con md5
function cipher_pwd($password)
{
    md5($password);
    return $_POST['password'];
}

//stampo la lista degli utenti
function lista_utenti()
{
    $risultato = array();
    $conn = dbConnect();
    $sql = "SELECT * FROM ubw_customer";
    $risposta = $conn->query($sql) or die("Errore nella query: " . $sql . "\n" . mysqli_error($sql));

    while ($riga = mysqli_fetch_row($risposta)) {  //restituisce una riga della tabella sc_users altrimenti FALSE
        $risultato[] = $riga;
    }
    mysqli_close($conn);
    return $risultato;  //ritorno l'array risultato
}
