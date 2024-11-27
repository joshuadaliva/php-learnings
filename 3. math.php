<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="POST">
		<label>x:</label> <br>
		<input type="text" name="x" /><br>
		<label>y:</label> <br>
		<input type="text" name="y" /><br>
		<input type="submit" value="total" />
	</form>
</body>
</html>


<?php

	//math

	$x = $_POST['x'];
	$y = $_POST['y'];
	$total = null;

	// $total = abs($x); //removes the sign
	// $total = round($x); // round up the number 
	// $total = floor($x); // always round down
	// $total = ceil($x); // always round up
	// $total = pow($x, $y); // exponent
	// $total = sqrt($x); // square root
	// $total = max($x, $y); // find the max value
	// $total = min($x, $y); // finds the min value
	// $total = pi(); // pi
	// $total = rand(1,6) ; // random number 
	echo $total;


?>