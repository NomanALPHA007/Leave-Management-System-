<?php

$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS mydatabase";
if (mysqli_query($conn, $sql)) {

} else {
  echo "Error creating database: " . mysqli_error($conn);
}

