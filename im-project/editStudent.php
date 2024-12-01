<?php



require("config.php");


// edit
if($_SERVER['REQUEST_METHOD'] == "GET"){
	$student_id = mysqli_real_escape_string($conn, $_GET['student_id']);

	$stmt = $conn->prepare("SELECT * FROM students WHERE id = ?");
	$stmt->bind_param("i", $student_id);
	$stmt -> execute();
	$result = $stmt -> get_result();

	if($result -> num_rows > 0){

		$student = $result -> fetch_assoc();
		$res = [
			'status' => 200,
			'message' => "student fetch successfully",
			'data' => $student
		];
		echo json_encode($res);
		return false;
	}
	else{
		$res = [
			'status' => 404,
			'message' => "student id not found"
		];
		echo json_encode($res);
		return false;
	}

}



?>