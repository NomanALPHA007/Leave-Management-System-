<?php

require ("config.php");

////// ADMINS ///////////////////////////////////////////////

$sql = "INSERT INTO user (username, id, password, level)
VALUES ('Walter', '7771', 'walt100', 1);";


$sql .= "INSERT INTO user (username, id, password, level)
VALUES ('Jesse', '7772', 'jess100', 1);";
//////////////////////////////////////////////////////////////




/// MANAGERS ////////////////////////////////////////////////////

$sql .= "INSERT INTO user (username, id, password, level)
VALUES ('Hasan', '7773', 'hasan100', 2);";


$sql .= "INSERT INTO user (username, id, password, level)
VALUES ('Nobel', '7774', 'nobel100', 2);";

////////////////////////////////////////////////////////////////




/// STAFFS /////////////////////////////////////////////////////

$sql .= "INSERT INTO user (username, id, password, level)
VALUES ('John', '7775','john100', 3);";


$sql .= "INSERT INTO user (username, id, password, level)
VALUES ('Tashrif', '7776','tashrif100', 3);";

///////////////////////////////////////////////////////////////



if (mysqli_multi_query($conn, $sql)) {

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>
