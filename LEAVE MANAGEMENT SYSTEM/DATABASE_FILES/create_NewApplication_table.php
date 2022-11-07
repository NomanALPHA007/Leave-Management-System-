<?php

require_once ("config.php");


$sql = "CREATE TABLE IF NOT EXISTS NewApplication(
		id VARCHAR(15),
 		name VARCHAR(50),
        StartDate VARCHAR(15),
		EndDate VARCHAR(15),
 		days INT(2),
		reason TEXT(50) NOT NULL,
		status VARCHAR(50))";

if (mysqli_query($conn, $sql)) {

} else {
	echo "Error creating table: " . mysqli_error($conn);
}
