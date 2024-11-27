
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="POST">
		<label>enter your username: </label><br>
		<input type="text" name="email" placeholder="enter your email" /><br>
		<label>enter your password: </label><br>
		<input type="text" name="password" placeholder="enter your password" /><br>
		<input type="submit" name="login" value="login" />
		<input type="submit" name="signup" value="signup" />
	</form>
</body>
</html>


<?php
	
	if (isset($_POST['login'])) {
		echo "the signup was decalred <br>";
		if (empty($_POST['email'])) {
			echo "please provide the email ";
		}
		else if(empty($_POST['password'])){
			echo "please provide the  password";
		}
	}
	else{
		echo "the signup was not clicked";
	}

?>




	
<!-- 	// isset() return true if the variable is declared and not null
	// empty() return true if the variable is not declared, null , "", and false

	// $name = null;

	// if(isset($name)){
	// 	echo "this variable has a value";
	// }else{
	// 	echo "this variable does not have a value";
	// }

	// if(empty($name)){
	// 	echo "this variable is empty";
	// }else{
	// 	echo "this variable is not empty";
	// } -->
