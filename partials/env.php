<!-- connect var -->
<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbhotel";

$host = "http://localhost"; /* server */
$folder = "/Repo/php-crud-read-create-update"; /* cartella */

// path iniziale
$basepath = $host . $folder; /* http://localhost/Repo/php-crud-read-create-update */

$conn = new mysqli($servername, $username, $password, $dbname);
