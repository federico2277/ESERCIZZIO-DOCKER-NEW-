<?php

$localhost = "mio_dbserver";
$my_user = "root";
$my_password = "ciccio";
$my_db = "mysql";

$conn = new mysqli( $localhost ,$my_user, $my_password, $my_db);

// Check connection
if ($conn -> connect_error) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

// Perform query
if ($result = $conn -> query("SELECT * FROM user")) {
  echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  $result -> free_result();
}

$conn -> close();
?>
