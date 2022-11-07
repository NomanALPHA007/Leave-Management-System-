<?php
session_start();

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

if ($_SESSION["LEVEL"] == 1 || $_SESSION["LEVEL"] == 2) {

?>

<html>
	<head>
		<title>View Leave Applications</title>
        <link rel="stylesheet" href="./css/table.css" type="text/css" />
	<head>
		
	<body>

		<h1>All Leave Applications Applied by Staffs</h1>

		<?php
		require("./DATABASE_FILES/config.php");

		$sql = "SELECT * FROM NewApplication";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) { ?>

			<table width="600" border="1" cellspacing="0" cellpadding="3">
				<tr>
					<th align="center">Name</th>
					<th align="center">ID</th>
					<th align="center">Start Date</th>
					<th align="center">End Date</th>
					<th align="center">Days</th>
					<th align="center">Reason</th>
					<th align="center">Status</th>
					<th align="center">Approval</th>
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
						<td align="center">

						<a href="approve.php?Staffid=<?php echo $rows['id']; ?>">
						Approve/Reject</a>
						</td>
					</tr>
			<?php }
		}
	} else {
		echo "<h3>You are not authorized to access this page.</h3>";
	}

	mysqli_close($conn);
	?>
			</table>

			<br><br>
			<button id="homepage" onclick="window.location.href='check_login.php';">Back to Home Page</button>

	</body>

</html>