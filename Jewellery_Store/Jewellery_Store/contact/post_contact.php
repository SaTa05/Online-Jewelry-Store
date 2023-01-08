<?php
$conn = new mysqli("localhost","root","","bbjewels");

if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
$name = mysqli_escape_string($conn, $_POST['name']);
$email = mysqli_escape_string($conn, $_POST['email']);
$phone = mysqli_escape_string($conn, $_POST['phone']);
$description = mysqli_escape_string($conn, $_POST['description']);

$contact_query = "insert into contact (name, email, phone, description) values ('$name', '$email', '$phone','$description');";

if ($conn->query($contact_query) === TRUE) {
    header('location: a.php?message=We will contact you soon&type=success');
  } else {
    // header('location: product.php?signup_success=You have Registered Successfully');
  }
  
  $con->close();


?>