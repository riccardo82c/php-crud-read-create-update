<?php

include __DIR__ . '/../env.php';
include __DIR__ . '/../database.php';

$id = $_POST['id'];
$roomNumber = $_POST['room_number'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];

$stmt = $conn->prepare("UPDATE stanze SET room_number = ?, floor = ?, beds = ? WHERE id = ?");
$stmt->bind_param("iiii", $roomNumber, $floor, $beds, $id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    /* ho modificato qualcosa */
    header("location: $basepath/info.php?id=$id&flag=ok");
} else if ($stmt->affected_rows == 0) {
    /* non ho modificato nulla */
    header("location: $basepath/update.php?id=$id&flag=no");
} else {
    /* errore campo inserito non valido */
    header("location: $basepath/update.php?id=$id&flag=ko");
}

$stmt->close();
$conn->close();
?>