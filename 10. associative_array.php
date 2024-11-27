
<!-- associative array - an array made of key value pair -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="POST">
		<label>enter a country : </label><br>
		<input type="text" name="country" /> <br>
		<input type="submit" name="submit" value="submit" />
	</form>
</body>
</html>


<?php
	$capitals = ["USA" => "Washington", "Japan" => 'Kyoto' , "South Korea" => "Seoul"];

	$capital = $capitals[$_POST["country"]];

	echo "$capital";

?>



	 <!-- $capitals = ["USA" => "Washington", "Japan" => 'Kyoto' , "South Korea" => "Seoul"];

	// echo $capitals["Japan"]; //accessing individual elements using key

	


	// for accessing all item in an array
	// foreach($capitals as $key => $value){
	// 	echo "$key : $value <br>";
	// }



	// $capitals["USA"] = "LAS VEGAS"; // changing an individual item
	// array_pop($capitals); // deleting last element
	// array_shift($capitals); // deleting first element
	// $keys = array_keys($capitals); // getting the keys
	// $values = array_values($capitals); //getting the values

	// foreach($values as $value){
	// 	echo "$value";
	// } 
 -->

