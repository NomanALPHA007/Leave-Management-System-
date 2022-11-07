<?php

require ("config.php");

$sql = "INSERT INTO form (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7773', 'Hasan','2020-04-15','2020-04-17', 3, 'Sick', 'Approve');";

$sql .= "INSERT INTO form (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7773', 'Hasan','2020-05-15','2020-05-20', 6, 'Tired', 'Approve');";

$sql .= "INSERT INTO form (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7774', 'Nobel','2020-07-15','2020-07-16', 2, 'Travelling', 'Reject');";

$sql .= "INSERT INTO form (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7776', 'Tashrif','2020-04-15','2020-04-19', 5, 'Family Problem', 'Approve');";

$sql .= "INSERT INTO form (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7775', 'John','2020-05-25','2020-05-26', 2, 'Tired', 'Approve');";

$sql .= "INSERT INTO form (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7774', 'Nobel','2021-01-11','2021-01-13', 3, 'Family Problem', 'Approve');";

$sql .= "INSERT INTO form (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7775', 'John','2021-03-10','2021-03-17', 8, 'Travelling', 'Reject');";

$sql .= "INSERT INTO form (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7776', 'Tashrif','2021-03-16','2021-03-17', 2, 'Personal Problem', 'Approve');";

$sql .= "INSERT INTO form (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7775', 'John','2021-06-16','2021-06-18', 3, 'Sick', 'Approve');";

$sql .= "INSERT INTO form (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7776', 'Tashrif','2021-04-15','2021-04-16', 2, 'Sick', 'Approve');";

$sql .= "INSERT INTO form (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7775', 'John','2021-07-10','2021-07-17', 8, 'Travelling', 'Reject');";

$sql .= "INSERT INTO form (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7774', 'Nobel','2021-02-25','2021-02-26', 2, 'Sick', 'Approve');";

$sql .= "INSERT INTO form (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7775', 'John','2021-09-10','2021-09-15', 6, 'Tired', 'Reject');";

$sql .= "INSERT INTO form (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7776', 'Tashrif','2021-06-11','2021-06-16', 6, 'Sick', 'Approve');";

$sql .= "INSERT INTO form (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7775', 'John','2021-11-09','2021-11-11', 3, 'Travelling', 'Approve');";

$sql .= "INSERT INTO form (id, name, StartDate, EndDate, days, reason, status)
VALUES ('7776', 'Tashrif','2021-07-15','2021-07-16', 2, 'Sick', 'Reject');"; 



if (mysqli_multi_query($conn, $sql)) {

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>
