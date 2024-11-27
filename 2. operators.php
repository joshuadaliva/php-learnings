

<?php
	
	$x = 10;
	$y = 2;
	$total = null;

	//aritmetic operator

	$total = $x + $y;
	echo "addition : $total <br>";

	$total = $x - $y;
	echo "subtraction: $total <br>";

	$total = $x / $y;
	echo "division : $total <br>";

	$total = $x * $y;
	echo "multiplication: $total <br>";

	$total = $x ** $y;
	echo "exponential: $total <br>";


	// increment and decrement operator

	$count = 0;
	$count++;
	echo "the current count using increment is : $count <br>";
	$count--;
	echo "the current count using decrement is : $count <br>";
	$count+=20;
	echo "the current count using add value is $count <br>";
	$count-=10;
	echo "the current count using subract value is $count";

?>