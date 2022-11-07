<?php
session_start();

if ($_SESSION["Login"] != "YES")
    header("Location: login.php");
?>
<html>

    <head>
        <title>Approval of Leave Application</title>
        <link rel="stylesheet" href="./css/table_report.css" type="text/css" />
    <head>


    <body>

        <h1>Approve/Decline Leave Application</h1>

        <?php
        $id = $_GET['Staffid'];

        require("./DATABASE_FILES/config.php");

        $sql = "SELECT * FROM NewApplication WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_assoc($result);

        ?>

        <form name="form1" method="post" action="update_leave.php">
        <table border=1 cellspacing="5" cellpadding="0">

            <tr>
            <td align="center">ID</td>
            <td align="center"><?php echo $rows['id']; ?></td>
            </tr>

            <tr>
            <td align="center">Name</td>
            <td align="center"><?php echo $rows['name']; ?></td>
            </tr>

            <tr>
            <td align="center">Start Date</td>
            <td align="center"><?php echo $rows['StartDate']; ?></td>
            </tr>

            <tr>
            <td align="center">End Date</td>
            <td align="center"><?php echo $rows['EndDate']; ?></td>
            </tr>

            <tr>
            <td align="center">Amount of Days</td>
            <td align="center"><?php echo $rows['days']; ?></td>
            </tr>

            <tr>
            <td align="center">Reason</td>
            <td align="center"><?php echo $rows['reason']; ?></td>
            </tr>

        </table>

        <br>
        <input type="submit" name="Approval" value="Approve">
        <input type="submit" name="Approval" value="Reject">

        </form>

        <button id="homepage" onclick="window.location.href='check_login.php';">Back to Home Page</button>

    </body>

</html>

<?php

mysqli_close($conn);

?>