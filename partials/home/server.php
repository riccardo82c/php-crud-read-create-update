<?php

include __DIR__ . '/../env.php';



if($conn && $conn->connect_error){
  echo 'Connessione fallita' .$conn->connect_error;
  die();
} 
 else{

  $sql = "SELECT id, room_number, floor FROM `stanze` ORDER BY room_number ASC";
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