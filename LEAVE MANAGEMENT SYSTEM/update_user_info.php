<?php
session_start();
require("./DATABASE_FILES/config.php");

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

$id = $_POST["id"];
$username = $_POST["username"];
$password = $_POST["password"];
$level = $_POST["level"];

$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
$_SESSION["level"] = $level;


$sql = "UPDATE user SET username='$username', password='$password', level='$level' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
	echo '<script>
			alert("User data updated!");
			window.location.href="check_login.php";
		  </script>';
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
