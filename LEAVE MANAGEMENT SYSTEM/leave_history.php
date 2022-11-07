<?php
session_start();

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");
?>

<html>

    <head>
        <title>Leave Applications History</title>
        <link rel="stylesheet" href="./css/table.css"/>
    </head>

    <body>

        <?php
        require("./DATABASE_FILES/config.php");

        $findid = $_SESSION['id'];
        $sql = "SELECT * FROM form WHERE id LIKE '%$findid%'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

        ?>

            <h1>Your Leave History</h1>

            <table>
                <tr>
                    <td> Username : </td>
                    <td> <?php echo $_SESSION["USER"]   ?> </td>
                </tr>


                <tr>
                    <td> ID : </td>
                    <td> <?php echo $_SESSION["id"]   ?> </td>
                </tr>
            </table>
            <br>
            <br>


            <table width="600" border="1" cellspacing="0" cellpadding="3">

                <tr>
                    <th align="center">Start Date</th>
                    <th align="center">End Date</th>
                    <th align="center">Amount of Days</th>
                    <th align="center">Reason</th>
                    <th align="center">Status</th>
                </tr>

                <?php
                while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $rows['StartDate']; ?></td>
                        <td><?php echo $rows['EndDate']; ?></td>
                        <td><?php echo $rows['days']; ?></td>
                        <td><?php echo $rows['reason']; ?></td>
                        <td><?php echo $rows['status']; ?></td>
                    </tr>
            <?php
                }
            } else {
                echo '<script>alert("No records found")</script>';
            }

            mysqli_close($conn);
            ?>

            </table>
            <br><br>
            <button id="homepage" onclick="window.location.href='check_login.php';">Back to Home Page</button>
    </body>

</html>