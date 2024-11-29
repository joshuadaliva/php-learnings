
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
		<label>usernamae: </label>
		<input type="text" name="username" placeholder="enter your username" /><br>
		<input type="submit" name="submit" />
	</form>
</body>
</html>




<?php
	
	// $_SERVER = use to get information about the webpage That contains headers, paths , and script locations. information about this are created 
	// by the web server
	
	
	// iterate to all information about the webpage
	// foreach($_SERVER as $key => $value){
	// 	echo "$key : $value <br>" ;
	// }

	
	// keys to be interested : REQUEST_METHOD AND PHP_SELF
	// PHP_SELF IS VULNERABLE TO XSS , SO ALWAYS SANITIZE THE INPUT

	// this method is recommended than isset for checking is the form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$username = htmlspecialchars($_POST['username']);
		echo "hi {$username}";
	}




	


?>