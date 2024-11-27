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
	<a href="home.php">home</a><br>
</body>
</html>


<?php
	
	$_SESSION['username'] = "brocode";
	$_SESSION['password'] = "pizza123";

	echo "{$_SESSION['username']} <br>";
	echo "{$_SESSION['password']} <br>";
	
?>

<!-- 

	session is a superglobal variable that stores information about the user to be use across multiple pages
	when a user start a session it gives a session id


	when using form for the first time and when you tried to check if it is not empty it will return true
	but in the seconds time it will return false since it has a session 

 -->