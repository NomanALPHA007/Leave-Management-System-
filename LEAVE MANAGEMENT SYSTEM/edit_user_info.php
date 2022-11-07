<?php
session_start();

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

if ($_SESSION["LEVEL"] == 1) {

?>

	<html>

		<head>
			<title>Edit User Info</title>
			<link rel="stylesheet" href="./css/table.css" type="text/css" />
		<head>

		<body>

			<h1>User Data List</h1>

			<?php
			require("./DATABASE_FILES/config.php");

			$sql = "SELECT * FROM user";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) { 	?>

				<table width="600" border="1" cellspacing="0" cellpadding="3">

					<tr>
						<th align="center">Userame</th>
						<th align="center">Password</th>
						<th align="center">Level</th>
						<th align="center">Update</th>
						<th align="center">Delete</th>
					</tr>

					<?php
					while ($rows = mysqli_fetch_assoc($result)) {
					?>
						<tr>
							<td><?php echo $rows['username']; ?></td>
							<td><?php echo $rows['password']; ?></td>
							<td><?php echo $rows['level']; ?></td>
							<td align="center"> <button><a href="update_user_form.php?Staffid=<?php echo $rows['id']; ?>">Update</a></button> </td>
							<td align="center"> <button><a href="delete_user_info.php?Staffid=<?php echo $rows['id']; ?>">Delete</a></button> </td>
						</tr>
				<?php
					}
				} else {
					echo "<h3>There is no data to show</h3>";
				}

				mysqli_close($conn);
				?>

				</table>
				<br><br>
				<button id="homepage" onclick="window.location.href='check_login.php';">Back to Home Page</button>
<?php	
} 
             
else if ($_SESSION["LEVEL"] != 1) {
	echo "<p>You are not authorized to view this page</p>";
	echo "<p><a href='logout.php'>Logout</a></p>";
}
?>

		</body>

	</html>