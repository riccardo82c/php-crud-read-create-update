<?php

include __DIR__ . '/../env.php';
include __DIR__ . '/../database.php';

$sql = "SELECT id, room_number, floor FROM `stanze` ORDER BY room_number ASC";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $results = [];
    while ($row = $result->fetch_assoc()) {
        $results[] = $row;
    }
} elseif ($result) {
    die('Nessun resultato');
} else {
    die('Query error');
}

$conn->close();

?>