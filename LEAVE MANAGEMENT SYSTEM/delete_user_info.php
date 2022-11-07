<?php
session_start();
require("./DATABASE_FILES/config.php");

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

if ($_SESSION["LEVEL"] == 1) {
	$id = $_GET['Staffid'];
	
	$sql = "DELETE FROM user WHERE id = '$id'";
	
	
	if (mysqli_query($conn, $sql)) {
		echo '<script>
				alert("User data deleted!");
				window.location.href="check_login.php";
			  </script>';
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
}


