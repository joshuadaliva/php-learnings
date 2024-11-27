<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	this is a login page
	<a href="index.php">home</a><br>
</body>
</html>


<?php
	
	$_SESSION['username'] = "brocode";
	$_SESSION['password'] = "pizza123";

	echo "{$_SESSION['username']} <br>";
	echo "{$_SESSION['password']} <br>";
	
?>