<?php
session_start();
require("./DATABASE_FILES/config.php");

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

if ($_SESSION["LEVEL"] == 1 || $_SESSION["LEVEL"] == 3) {

?>

	<html>

	<head>
		<title>Leave Application Result</title>
		<link rel="stylesheet" href="./css/table.css"/>
	</head>

	<body>

		<?php
		$id = $_SESSION["id"];
		$sql = "SELECT * FROM NewApplication WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		$numrow = mysqli_num_rows($result);
		if ($numrow = 0) {
		$sql = "SELECT * FROM form WHERE StartDate in (SELECT MAX(StartDate) FROM form WHERE id='$id')";
		$result = mysqli_query($conn, $sql);
		}
		?>

		<h1>Latest Application Status</h1>

		<table width="600" border="1" cellspacing="0" cellpadding="3">

			<tr>
				<th align="center">Name</th>
				<th align="center">ID</th>
				<th align="center">Start Date</th>
				<th align="center">End Date</th>
				<th align="center">Number of Days</th>
				<th align="center">Reason</th>
				<th align="center">Status</th>
			</tr>

			<?php while ($rows = mysqli_fetch_assoc($result)) { ?>
				<tr>
					<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['id']; ?></td>
					<td><?php echo $rows['StartDate']; ?></td>
					<td><?php echo $rows['EndDate']; ?></td>
					<td><?php echo $rows['days']; ?></td>
					<td><?php echo $rows['reason']; ?></td>
					<td><?php echo $rows['status']; ?></td>
				</tr>
			<?php } ?>

		<table>

		<?php

		mysqli_close($conn);

} 

	?>
	<br><br>
	<button id="homepage" onclick="window.location.href='check_login.php';">Back to Home Page</button>

	</body>

	</html>