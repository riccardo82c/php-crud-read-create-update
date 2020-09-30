<?php

include __DIR__ . '/../env.php';

$id = $_POST['id'];



if($conn && $conn->connect_error){
  die('ricerca fallita');
} 
 else{

  $sql = "DELETE FROM stanze WHERE id = $id ";
  $result = $conn->query($sql);
 
} 

$conn->close();

/* $location = __DIR__ . "/../../main.php"; */


header("location: ../../main.php" ); 

 ?>