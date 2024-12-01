<?php

	function sanitizeInput($name, $email, $phone, $course) {
    	// Sanitize name
	    $name = trim($name);
	    $name = stripslashes($name);
	    $name = htmlspecialchars($name);

	    // Sanitize email
	    $email = trim($email);
	    $email = stripslashes($email);
	    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

	    // Sanitize phone
	    $phone = trim($phone);
	    $phone = stripslashes($phone);
	    $phone = preg_replace('/[^0-9]/', '', $phone);

	    // Sanitize course
	    $course = trim($course);
	    $course = stripslashes($course);
	    $course = htmlspecialchars($course);

	    return [
	        'name' => $name,
	        'email' => $email,
	        'phone' => $phone,
	        'course' => $course
	    ];
	}

?>