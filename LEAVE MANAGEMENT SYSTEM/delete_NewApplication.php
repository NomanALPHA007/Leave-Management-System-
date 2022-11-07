<?php
session_start();
require("./DATABASE_FILES/config.php");

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

if ($_SESSION["LEVEL"] == 1 || $_SESSION["LEVEL"] == 2) {
	$id = $_SESSION["Staffid"];
    $startdate = $_SESSION["StartDate"];
    $enddate = $_SESSION["EndDate"];

	$sql = "DELETE FROM NewApplication WHERE id='$id' 
			AND StartDate='$startdate' AND EndDate='$enddate'";

	if (mysqli_query($conn, $sql)) {

		echo '<script>
				alert("Approval of Application done successfully");
				window.location.href="check_login.php";
			  </script>';

	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
}