<?php



require("config.php");
require_once("sanitize.php");



// add
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['save_student'])) {
    $sanitizedData = sanitizeInput($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['course']);


    if($sanitizedData['name'] == null || $sanitizedData['email'] == null || $sanitizedData['phone'] == null || $sanitizedData['course'] == null){
    	$res =[
    		'status' => 422,
    		'message' => 'all fields required'
    	];

    	echo json_encode($res);
    	return false;
    }


    $stmt = $conn->prepare("INSERT INTO students (name, email, phone, course) VALUES (?, ?, ?, ?)");
	$stmt->bind_param("ssss", $sanitizedData['name'], $sanitizedData['email'], $sanitizedData['phone'], $sanitizedData['course']);
    
    if($stmt -> execute()){
    	$res =[
    		'status' => 200,
    		'message' => 'Stundent created successfully'
    	];

    	echo json_encode($res);
    	return false;
    }
    else{
    	$res =[
    		'status' => 500,
    		'message' => 'student not created'
    	];

    	echo json_encode($res);
    	return false;
    }


    $stmt -> close();

}

$conn -> close();

?>