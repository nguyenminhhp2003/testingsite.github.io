<?php
  $servername = "localhost";
  $username = "phong";
  $password = "ubuntu";
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password,"myDB");
//   echo var_dump($conn);
  echo "<br>";
  
  
  $sql = "CREATE TABLE customer (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
  )";
  $conn->query($sql);
  if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
?>