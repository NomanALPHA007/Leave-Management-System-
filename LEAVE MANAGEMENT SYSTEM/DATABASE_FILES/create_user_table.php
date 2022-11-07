<?php

require_once ("config.php");


$sql = "CREATE TABLE IF NOT EXISTS user(
 		username varchar(50),
        id varchar(15),
 		password varchar(20),
		level int(1))";
    
if (mysqli_query($conn, $sql)) {

} else {
  echo "Error creating table: " . mysqli_error($conn);
}
