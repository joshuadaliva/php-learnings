
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="POST">
		<label>username</label><br>
		<input type="text" name="username" /><br>
		<label>password</label><br>
		<input type="text" name="password" /><br>
		<input type="submit" name="submit" value="submit" />
	</form>
</body>
</html>

<?php
	
	if (isset($_POST['submit'])) {
		
		
		if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $_POST['password'];
			echo "{$_SESSION['username']}";
			header("Location: home.php"); 
		}
		else{
			echo "missinng username and password";
		}
	}

?>