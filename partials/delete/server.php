<?php

include __DIR__ . '/../env.php';

$id = $_POST['id'];

if($conn && $conn->connect_error){
  die('ricerca fallita');
} 
 else{

	$stmt = $conn->prepare("DELETE FROM stanze WHERE id = ?");

	$stmt->bind_param("i",$id);

	$stmt->execute();

	var_dump($stmt);

	if ($stmt->affected_rows > 0) {
		header("location: $localhost/main.php?id=$id" );
	} else {
		header("location: $localhost/main.php?id=null" );
	}

  /* $sql = "DELETE FROM stanze WHERE id = $id ";
  $result = $conn->query($sql);

  if($result) {
	header("location: $localhost/main.php?id=$id" );

  } else {
	header("location: $localhost/main.php?id=null" );
  } */
} 
$conn->close();

 ?>