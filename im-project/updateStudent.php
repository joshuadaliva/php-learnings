
<?php



require("config.php");
require_once("sanitize.php");



// add
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['update_student'])) {
    $sanitizedData = sanitizeInput($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['course']);
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);


    if($sanitizedData['name'] == null || $sanitizedData['email'] == null || $sanitizedData['phone'] == null || $sanitizedData['course'] == null){ 
    	$res =[
    		'status' => 422,
    		'message' => 'all fields required'
    	];

    	echo json_encode($res);
    	return false;
    }


    $stmt = $conn->prepare("UPDATE students SET name = ? , email = ? , phone = ? , course = ? WHERE id = ?");
	$stmt->bind_param("ssssi", $sanitizedData['name'], $sanitizedData['email'], $sanitizedData['phone'], $sanitizedData['course'], $student_id);
    
    if($stmt -> execute()){
    	$res =[
    		'status' => 200,
    		'message' => 'Stundent updated successfully'
    	];

    	echo json_encode($res);
    	return false;
    }
    else{
    	$res =[
    		'status' => 500,
    		'message' => 'student not updated'
    	];

    	echo json_encode($res);
    	return false;
    }


    $stmt -> close();

}

$conn -> close();

?>