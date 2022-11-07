<?php
session_start();
require("./DATABASE_FILES/config.php");

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");
?>
<?php
if ($_SESSION["LEVEL"] == 1 || $_SESSION["LEVEL"] == 2) {

    $id = $_SESSION["Staffid"];
    $startdate = $_SESSION["StartDate"];
    $enddate = $_SESSION["EndDate"];

    $sql = "SELECT * FROM NewApplication WHERE id='$id' 
            AND StartDate='$startdate' AND EndDate='$enddate'";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_assoc($result);

    $id = $rows['id'];
    $name = $rows['name'];
    $StartDate = $rows['StartDate'];
    $EndDate = $rows['EndDate'];
    $days = $rows['days'];
    $reason = $rows['reason'];
    $status = $_POST['Approval'];

    $sql = "INSERT INTO form(id, name, StartDate, EndDate, days, reason, status) VALUES ('$id','$name','$StartDate','$EndDate','$leavedays', '$reason', '$status')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>
                window.location.href="delete_NewApplication.php";
            </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

        mysqli_close($conn);
}

?>
<br><br>
<button id="homepage" onclick="window.location.href='check_login.php';">Back to Home Page</button>

</body>

</html>