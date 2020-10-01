<?php

include __DIR__ . '/../env.php';
if($conn && $conn->connect_error){
  die('ricerca fallita');
} 
 else{

  $id = $_POST['id'];
  $roomNumber = $_POST['room_number'];
  $floor = $_POST['floor'];
  $beds = $_POST['beds'];

	$stmt = $conn->prepare("UPDATE stanze SET room_number = ?, floor = ?, beds = ? WHERE id = ?");

	$stmt->bind_param("iiii",$roomNumber, $floor, $beds, $id);

	$stmt->execute();

	var_dump($stmt);


	if ($stmt->affected_rows > 0) {
		/* ho modificato qualcosa */
		header("location: $basepath/info.php?id=$id&flag=ok");
	} else if ($stmt->affected_rows == 0){
		/* non ho modificato nulla */
		header("location: $basepath/update.php?id=$id&flag=no" );
	} else {
		/* errore campo inserito non valido */
		header("location: $basepath/update.php?id=$id&flag=ko" );
	}
	

	/* if ($stmt->affected_rows >= 0) {
		header("location: $basepath/info.php?id=$id" );
	} else {
		header("location: $basepath/update.php?id=$id" );
	} */
} 
$stmt->close();
$conn->close();
?>