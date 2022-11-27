<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$conn = mysqli_connect('127.0.0.1', 'root', '', 'Go');
if (!$conn){
  die("Connection failed: " . mysqli_connect_error());
}
?>
