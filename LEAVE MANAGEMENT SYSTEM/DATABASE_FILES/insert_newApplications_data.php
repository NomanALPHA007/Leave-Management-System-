<?php

require("config.php");


$sql = "INSERT INTO NewApplication (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7775', 'John','2022-01-15','2022-01-20', 6, 'Travelling', 'Decision Pending');";


$sql .= "INSERT INTO NewApplication (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7776', 'Tashrif','2022-03-18','2022-03-19', 2, 'Personal Problem', 'Decision Pending');";


if (mysqli_multi_query($conn, $sql)) {

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
