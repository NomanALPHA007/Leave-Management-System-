<?php
session_start();

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

if ($_SESSION["LEVEL"] == 1 || $_SESSION["LEVEL"] == 3) { 
	$id = $_SESSION["id"];
	$name = $_POST["name"]; 
	$days = $_POST["numdays"];
	$reason = $_POST["reason"];
	$status = "Decision Pending";
	$StartDate = $_POST["start_date"];
	$EndDate = $_POST["end_date"];

	$_SESSION["Start_Date"] = $StartDate;
	$_SESSION["End_Date"] =  $EndDate;

	require("./DATABASE_FILES/config.php");

	$sql = "INSERT INTO NewApplication(id, name, StartDate, EndDate, days, reason, status) 
	VALUES ('$id','$name','$StartDate','$EndDate','$days', '$reason', '$status' )";

if (mysqli_query($conn, $sql)) {

	echo '<script>
		alert("Leave application applied!");
		window.location.href="check_login.php";
		</script>';
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
} //

