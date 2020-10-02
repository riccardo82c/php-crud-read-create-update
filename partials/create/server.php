<?php
include __DIR__ . '/../env.php';
include __DIR__ . '/../database.php';
include __DIR__ . '/test.php';

if (empty($_POST['room_number']) || empty($_POST['floor']) ||
    (empty($_POST['beds']))) {
    header("location: $basepath/create.php?check=false");
} elseif (checkRoom($_POST['room_number'], $conn)) {
    header("location: $basepath/create.php?check=noRoom");
} else {
    $roomNumber = $_POST['room_number'];
    $floor = $_POST['floor'];
    $beds = $_POST['beds'];
    $sql = "INSERT INTO stanze (room_number, floor, beds, created_at, 	updated_at) VALUES (?, ?, ?,NOW(),NOW()  )";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iii", $roomNumber, $floor, $beds);
    $stmt->execute();

    if ($stmt && $stmt->affected_rows > 0) {
        header("location: $basepath/info.php?id=$stmt->insert_id&&flag='ok'");
    } elseif ($stmt) {
        header("location: $basepath/update.php?check=error");
    } else {
        header("location: $basepath/update.php?check=error");
    }

    $stmt->close();
    $conn->close();
}
