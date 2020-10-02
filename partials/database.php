<!-- Connect with DB -->

<?php

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn && $conn->connect_error) {
    die('Errore connessione DB' . $dbname);
}

?>