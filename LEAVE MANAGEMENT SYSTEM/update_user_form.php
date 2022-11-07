<?php
session_start();

if ($_SESSION["Login"] != "YES")
	header("Location: login.php");

if ($_SESSION["LEVEL"] == 1) {
?>
<html>

<head>
	<title>Update/Edit User Details</title>
	<link rel="stylesheet" href="./css/table.css" type="text/css" />
</head>

<body>

	<h1>Update User Info Form</h1>
	<br><br>
	<?php
	$id = $_GET['Staffid'];
	require("./DATABASE_FILES/config.php");
	$sql = "SELECT * FROM user WHERE id='$id'";
	$result = mysqli_query($conn, $sql);
	$rows = mysqli_fetch_assoc($result);
	?>

	<?php
	$name = $rows['username'];
	$password = $rows['password'];
	$level = $rows['level'];
	?>

	<form name="form1" method="post" action="update_user_info.php">
		<table class="center" border="0" cellspacing="5" cellpadding="0">

			<tr>
				<th align="center">&nbsp;</td>
				<th class="Username" align="center">Username</th>
				<th class="password" align="center">Password</th>
				<th class="level" align="center">Level</th>
				<th align="center">&nbsp;</td>
			</tr>
			
			<tr>
				<td align="center"><input name="id" type="hidden" id="id" value="<?php echo $rows['id']; ?>"></td>
				<td align="center"><input name="username" type="text" id="username" size="20" value="<?php echo $rows['username'] ?>"></td>
				<td align="center"><input name="password" type="text" id="password" size="10" value="<?php echo $rows['password'] ?>"></td>
				<td align="center"><input name="level" type="text" id="level" size="1" value="<?php echo $rows['level'] ?>"></td>
				<td align="center"><input type="submit" id="update" name="Submit" value="Update"></td>
			</tr>

		</table>
		<br><br>
	</form>
	<button id="homepage" onclick="window.location.href='check_login.php';">Back to Home Page</button>
</body>

</html>

<?php

mysqli_close($conn);
}
?>