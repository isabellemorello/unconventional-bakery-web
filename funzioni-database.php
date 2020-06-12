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

    /*if (!$conn->query($sql)) {
        echo '<div class="alert alert-danger"><strong>Attenzione errore nella query:</strong> ' . $sql . "\n" . mysqli_error($conn) . '</div>';
    } else {
        echo '<div class="alert alert-success">
				<strong>Utente registrato con successo.</strong>
			</div>';
        echo '<div>
                <a href="index.php" class="btn btn-secondary">Torna alla Homepage</a>
                <a href="catalogo.php" class="btn btn-secondary" id="catalogo">Vai al Catalogo</a>
            </div>';
    }*/

    $success = mysqli_query($conn, $sql);

    mysqli_close($conn);
    return $success;
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
                    <img src="' . $row["product_image"] . '" class="card-img-top" alt="' . $row["product_name"] . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $row["product_name"] . '</h5>
                        <h6 class="card-subtitle mb-4 text-muted">' . $row["product_price"] . '€/pz</h6>
                        <a class="btn btn-dark btn-block" href="/unconventional-bakery-web/aggiungi-carrello.php?id=' . $row["product_ID"] . '">Aggiungi al Carrello</a>
                    </div>
                </div>
            </div>';
    }
    mysqli_close($conn);
}

// Login
function login($email, $password)
{
    $conn = dbConnect();
    $sql = "SELECT * FROM ubw_customer
    WHERE user_email = '" . $email . "'
    AND user_password = '" . $password . "';";

    $result = mysqli_query($conn, $sql);
    $userFound = mysqli_num_rows($result) == 1;

    mysqli_close($conn);
    return $userFound;
}

// Carrello
function ottieni_carrello($articoli)
{
    /* $articoli = [
        "1" => 2,
        "2" => 2,
        "4" => 1,
        ...
    ]; */

    $idArticoli = array_keys($articoli); // lista degli ID degli articoli contenuti nel carrello (1, 2, 4)

    $conn = dbConnect();
    $sql = "SELECT * FROM ubw_product WHERE product_ID IN (" . join(", ", $idArticoli) . ") ORDER BY product_ID;"; // dove il product_ID è uguale a uno dei valori del join (unisce un elenco aggingendo un separatore, in questo caso la virgola)
    $result = mysqli_query($conn, $sql);

    echo '<div class="row">';

    $subtotale = 0;
    while ($row = mysqli_fetch_array($result)) { // cicla (= scorrere i risultati) sui risultati della query
        $articoloId = $row["product_ID"]; // riguarda la tabella nel db

        $prezzoUnitario = $row["product_price"];
        $quantita = $articoli[$articoloId]; // contare numero di volte che $articoloId (presente nel database) compare in $articoli ossia nel carrello
        $prezzoTotaleArticolo = $quantita * $prezzoUnitario;
        $subtotale += $prezzoTotaleArticolo;

        echo '<div class="col-12 mt-4 mb-5">
                <div class="card border-0">
                <div class="row no-gutters">
                    <div class="col-md-4 col-lg-2">
                        <img src="' . $row["product_image"] . '" class="card-img-top" alt="' . $row["product_name"] . '">
                    </div>
                    <div class="col-md-8 col-lg-10">
                        <div class="card-body">
                            <h5 class="card-title">' . $row["product_name"] . '</h5>
                            <h6 class="card-subtitle mb-4 text-muted">' . $prezzoUnitario . '€/pz</h6>

                            <form class="form-inline" method="GET" action="/unconventional-bakery-web/aggiungi-carrello.php">
                                <input type="hidden" name="id" value="' . $articoloId . '">
                                <input type="hidden" name="referrer" value="/unconventional-bakery-web/carrello.php">

                                <input type="number" class="form-control mr-sm-2" name="quantita" value="' . $quantita . '">

                                <button type="submit" class="btn btn-dark mr-sm-2">Aggiorna</button>
                                <a class="btn btn-outline-danger" href="/unconventional-bakery-web/aggiungi-carrello.php?id=' . $articoloId . '&quantita=0&referrer=/unconventional-bakery-web/carrello.php">Rimuovi</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right font-weight-bold">' . number_format($prezzoTotaleArticolo, 2) . ' €</div>
            </div>
        </div>';
    }

    echo '</div>';

    echo '<button class="btn btn-outline-success btn-lg btn-block">
        <div class="row no-gutters">
            <div class="col font-weight-bold text-left">Procedi all\'acquisto</div>
            <div class="col-auto font-weight-bold">' . number_format($subtotale, 2) . ' €</div>
        </div>
    </button>';

    mysqli_close($conn);
}

function rimuoviUtente($email)
{
    $conn = dbConnect();
    $sql = "DELETE FROM ubw_customer WHERE user_email = '" . $email . "';";
    $result = mysqli_query($conn, $sql) or die("Errore nella query: " . $sql . "\n" . mysqli_error($sql));

    mysqli_close($conn);
    return $result;
}
