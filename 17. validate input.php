<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method ="POST">
		<label>username: </label><br>
		<input type="text" name="username" placeholder="enter a username" /><br>
		<input type="text" name="age" placeholder="enter your age" /> <br>
		<input type="text" name="email" placeholder="enter your email" /> <br>
		<input type="submit" name="submit" value="submit" />		
	</form>
</body>
</html>


<?php
	
	if (isset($_POST['submit'])) {
		$age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
		$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
		// if(empty($age)){
		// 	echo "the age is empty";
		// }
		// else{
		// 	echo "you are $age";
		// }

		if(empty($email)){
			echo "the email is empty";
		}
		else{
			echo "you are $email";
		}
	}

?>

