<?php
//db connection settings
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="bbjewels"; // Database name

$conn = new mysqli("localhost","root","","bbjewels");

if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>