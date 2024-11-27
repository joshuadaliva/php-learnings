<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body style="display: flex; justify-content: center; align-items: center ; min-height: 100vh; flex-direction: column;">
	<form action="get_post.php" method="POST">
		<label>Enter your username: </label><br>
		<input type="text" name="email" placeholder="enter your username" required /><br>
		<input type="password" name="password" placeholder="enter your password" required /><br>
		<input type="submit" name="login" value="submit">
	</form>
	<?php

	$username = $_POST["email"];
	$password = $_POST['password'];

	echo "{$username} {$password}";

?>
</body>
</html>

<!-- in default get and post are associative array -->


