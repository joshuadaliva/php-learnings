<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="POST">
		<input type="radio" name="credit-name" value="Visa" /> Visa<br>
		<input type="radio" name="credit-name" value="Mastercard" />Mastercard<br>
		<input type="radio" name="credit-name" value="American express" />American express<br>
		<input type="submit" name="confirm" value="confirm" />
	</form>
</body>
</html>





<?php
	
	if (isset($_POST['confirm'])) {
		if (isset($_POST['credit-name'])) {
			$credit_card = $_POST['credit-name'];
			echo "$credit_card";
		}
		else{
			echo "please select a value";
		}
	}

?>


<!-- 
	1. isset is good for checking inputs
	2. in default super globals is associative array
	3. when you clicked the button (submit) will be included to the POST , other button is not
	4. empty inputs will not be included inside the post


 -->





