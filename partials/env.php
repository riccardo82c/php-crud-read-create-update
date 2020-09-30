<!-- connect var -->

<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbhotel";



$host = "http://localhost"; /* server */
$folder = ""; /* cartella */

// path iniziale
$basepath = $host.$folder; /* http://localhost/ */



$conn = new mysqli($servername,$username,$password,$dbname);