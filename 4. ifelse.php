<?php
	

	
	$age = 9;

	if ($age < 18) {
		echo "you are a minor";
	}
	else if ($age == 10) {
		echo "you are a kid";
	}
	else{
		echo "you are a 18+";
	}


	// logical operator
	// || = or
	// && = and
	// ! = not

	$adult = true;

	if($adult || 18){
		echo "you are may enter now";
	}
	else{
		echo "you cannot enter";
	}


?>