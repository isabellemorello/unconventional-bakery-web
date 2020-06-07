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
                <a href="index.php" class="btn btn-secondary">Torna alla Homepage</a>
                <a href="catalogo.php" class="btn btn-secondary" id="catalogo">Vai al Catalogo</a>
            </div>';
    }
    mysqli_close($conn);
}

// Catalogo
function ottieni_catalogo()
{
    $conn = dbConnect();
    $sql = "SELECT * FROM ubw_product ORDER BY product_ID;";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) {
        echo '<div class="col mb-5">
                <div class="card border-0 shadow">
                <img src=' . $row["product_image"] . ' class="card-img-top" alt="' . $row["product_name"] . '">
                <div class="card-body">
                    <h5 class="card-title">' . $row["product_name"] . '</h5>
                    <h6 class="card-subtitle mb-4 text-muted">' . $row["product_price"] . '€/pz</h6>
                    <button class="btn btn-dark btn-block">Aggiungi al Carrello</button>
                </div>
                </div>
            </div>';
    }
    mysqli_close($conn);
}

function login()
{
    $email = $password = "";
    $conn = dbConnect();
    $sql = "SELECT * FROM ubw_customer WHERE user_email = '$email'
    AND user_password = '$password'";

    echo $sql;

    /*$result = mysqli_query($conn, $sql);
    
    $rows = mysqli_num_rows($result);
    if ($rows >= 1)  {
            echo "Login completato";
            header("refresh : 3; url = index-ubw.php");
        } else {
            echo "Dati non corretti. Ricontrolla.";
        }

	$num_rows = mysqli_num_rows($result);
	if ($num_rows >= 1) {
		echo '<div class="alert alert-success">
					<strong>Utente esistente nel databse</strong>
			    </div>';
	};   */
}
