<?php
session_start();
require('./DATABASE_FILES/config.php');

$_SESSION["Login"] = "";

if(isset($_COOKIE['USER']) and isset($_COOKIE['PASS'])) { 
	$user= $_COOKIE['USER'];
	$pass= $_COOKIE['PASS']; 
}
?>

<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="./css/login.css">
	<script src="./JAVASCRIPT/login.js"></script>
</head>

<body>
	<div id="container">
		<p class="head">Leave Application Management System</p>
		<br />
		<br />
		<form method="post" class="form" name="login_form" action="check_login.php" onsubmit="return validateLogin()">
			<p>Username: <input type="text" size="30" value="<?php if(isset($_COOKIE["USER"])) { echo $_COOKIE["USER"]; } ?>" name="username" /></p>
			<p>Password: <input type="password" size="30" value="<?php if(isset($_COOKIE["PASS"])) { echo $_COOKIE["PASS"]; } ?>" name="password" /></p>
			<input type="checkbox" name="remember" value="1">Remember Me</input> 
			<br />
			<p><input type="submit" class="btn" value="Login" /></p>
		</form>
	</div>
</body>

</html>