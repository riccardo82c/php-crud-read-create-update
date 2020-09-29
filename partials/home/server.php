<?php

include __DIR__ . '/../env.php';

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn && $conn->connect_error){
  echo 'Connessione fallita' .$conn->connect_error;
} 
 else{

  $sql = "SELECT id, room_number, floor FROM `stanze`";
  $result = $conn->query($sql);

  if($result && $result->num_rows > 0){
    $results = [];
    while($row = $result->fetch_assoc()){ 
      $results[] = $row;
    }

  }
  elseif ($result) {
    echo "0 results";
  } else {
    echo "query error";
  }

} 



$conn->close();

 ?>