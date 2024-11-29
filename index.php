<?php
	
	// hashing - use to convert text to letter , numbers and symbols in mathematical form
	// password_hash defualt uses bcrypt
	
	$password = "daliva321";

	$hash = password_hash($password, PASSWORD_DEFAULT);

	if (password_verify("daliva321", $hash)) {
		echo "you may now enter";
	}
	else{
		echo "you cannot enter";
	}

	// echo "$hash";

?>