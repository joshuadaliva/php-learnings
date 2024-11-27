
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="POST">
		<label>enter a number</label>
		<input type="number" name="number" />
		<input type="submit" name="submit credential" />
	</form>
</body>
</html>


<?php
	
	$counter = $_POST["number"];
	
	for ($i=0; $i < $counter ; $i++) { 
		echo $i . "<br>";
	}


?>