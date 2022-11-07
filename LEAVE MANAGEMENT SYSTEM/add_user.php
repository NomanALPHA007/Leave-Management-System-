<?php
session_start();
require("./DATABASE_FILES/config.php");

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

$new_id = $_POST["id"];
$new_username = $_POST["username"];
$new_password = $_POST["password"];
$new_level = $_POST["level"];


$sql = "INSERT INTO user(username, id, password, level) VALUES ('$new_username', '$new_id','$new_password','$new_level')";

if (mysqli_query($conn, $sql)) {
	echo '<script>
			alert("New user data created");
			window.location.href="check_login.php";
		 </script>';
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
