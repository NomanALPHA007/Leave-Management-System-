<?php
session_start();

if($_SESSION["Login"] != "YES")
    header("Location: login.php");

if ($_SESSION["LEVEL"] == 1) {
?>

<!DOCTYPE html>
<html>
    <head>
        <title>User Registration Form</title>
        <link rel="stylesheet" href="./css/table.css" type="text/css" />
		<script src="./JAVASCRIPT/validateUser.js"></script>
    </head>

    <body>

    <h1>Add User Form</h1>

	<form name="userform" method="post" action="add_user.php" onsubmit="return uservalidation()">
		<table border="0">
            <tr>
				<td>User ID: </td>
				<td><INPUT type="text" name="id" size="50"></td>
			</tr>
			<tr>
				<td>Username: </td>
				<td><INPUT type="text" name="username" size="50"></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><INPUT type="text" name="password" size="50"></td>
			</tr>
			<tr>
				<td>User Level (1-Admin, 2-Manager, 3-Staff): </td>
				<td><input type="" name="level" size="50"></td>
			</tr>
			<tr>
				<td></td>
				<td align="center"><br /><input type="submit" class="add" name="button1" value="Add"></td>
			</tr>
		</table>
	</form>
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