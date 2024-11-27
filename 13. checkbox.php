<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="POST">
		<input type="checkbox" name="pizza" value="pizza" /> pizza<br>
		<input type="checkbox" name="hotdog" value="hotdog" />hotdog<br>
		<input type="checkbox" name="tacco" value="tacco" />tacco<br>
		<input type="submit" name="confirm" value="confirm" />
	</form>
</body>
</html>


<?php
	
	if (isset($_POST['confirm'])) {
		if (isset($_POST['pizza'])) {
			echo "you like pizza <br>";
		}
		if (isset($_POST['hotdog'])) {
			echo "you like hotdog <br>";
		}
		if (empty($_POST['tacco'])) {
			echo "you dont tacco <br>";
		}

	}

?>







