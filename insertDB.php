<?php
$servername = "localhost";
$username = "cs300";
$password = "admin";
$dbname = "contact";


$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$subject = str_replace("","",$subject);
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO info (firstName, lastName, email, subject)
VALUES ('$firstName', '$lastName', '$email', '$subject')";

if (mysqli_query($conn, $sql)) {
  echo "Message sent";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>