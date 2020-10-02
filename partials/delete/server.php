<?php

include __DIR__ . '/../env.php';
include __DIR__ . '/../database.php';

$id = $_POST['id'];

$stmt = $conn->prepare("DELETE FROM stanze WHERE id = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

if ($stmt->affected_rows > 0) {
    header("location: $basepath/main.php?id=$id");
} else {
    header("Location: $basepath/main.php?id=null");
}

$stmt->close();
$conn->close();

?>