<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";


///////////// Create database/////////////

$sql = "CREATE DATABASE IF NOT EXISTS students";
if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}


?>