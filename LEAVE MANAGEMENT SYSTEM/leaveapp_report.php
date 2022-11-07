<?php
session_start();

if ($_SESSION["Login"] != "YES") 
	header("Location: login.php");
?>

<html>

<head>
	<title>Leave Applications Report</title>
	<link rel="stylesheet" href="./css/table.css"/>
<head>

	<body>

		<h1>Leave Applications Report</h1>

		<?php
		require("./DATABASE_FILES/config.php");

		$sql = "SELECT * FROM form ORDER BY name";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) { 	?>

			<table width="600" border="1" cellspacing="0" cellpadding="3">

				<tr>
					<th align="center">Name</th>
					<th align="center">ID</th>
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
						<td><?php echo $rows['name']; ?></td>
						<td><?php echo $rows['id']; ?></td>
						<td><?php echo $rows['StartDate']; ?></td>
						<td><?php echo $rows['EndDate']; ?></td>
						<td><?php echo $rows['days']; ?></td>
						<td><?php echo $rows['reason']; ?></td>
						<td><?php echo $rows['status']; ?></td>
					</tr>

				<?php }

				mysqli_close($conn);

				?>

			</table>

		<?php 
        }

		?>
		<br><br>
		<button id="homepage" onclick="window.location.href='check_login.php';">Back to Home Page</button>
	</body>

</html>