<?php
	
	// $foods = array("mango", "orange", "apple");

	// or

	$foods = ["mango", "orange", "apple"];


	// echo $foods[1]; //accessing individual elements

	// accessing all elements
	// foreach($foods as $food) {
	// 	echo "$food <br>";
	// }


	// edit an specific element
	// $foods[1] = "pineapple";


	// array_push($foods, "pineapple", "kiwi"); // use to add element
	// array_pop($foods); //deletes the last element in an array
	// array_shift($foods); //deletes the first element
	// $foods = array_reverse($foods);
	// echo count($foods); counts the elements

	foreach($foods as $food){
		echo "$food <br>" ;
	}


?>