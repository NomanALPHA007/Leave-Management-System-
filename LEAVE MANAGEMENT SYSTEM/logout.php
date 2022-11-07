<?php
session_start();

if (isset($_SESSION['username'])) {
	unset($_SESSION['username']);
}

if(isset($_COOKIE['username']) and isset($_COOKIE['password'])) { 
	setcookie("username", $myusername, time() - 86400);
	setcookie("password", $mypassword, time() - 86400);
}

session_destroy();
header('Location: login.php');

exit;
