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

$dir = __DIR__;

/* header("location:" . $dir . "/../../main.php"); */
 ?>