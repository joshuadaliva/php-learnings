<?php
	
	// cookie = a users information that is stored in a browser/ stored as associative array
	
	// 	      	  key        value    time expired       path
	setcookie("fav_food", "pizza", time() + (86400 * 2), "/");

	//looping through cookie
	foreach($_COOKIE as $key => $value){
		echo "key: $key and value: $value <br>";
	}

	if (isset($_COOKIE['fav_food'])) {
		echo "BUY SOME {$_COOKIE['fav_food']}";
	}
	else{
		echo "I DONT KNOW YOUR FAV FOOD";
	}

?>