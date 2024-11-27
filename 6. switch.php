 

 <?php

 	$grade = "A";

 	switch($grade){
 		case "A":
 			echo "you did great";
 			break;
 		case 'B':
 			echo "you did good";
 			break;
 		case 'C':
 			echo "better luck next time";
 			break;
 		default:
 			echo "hello <br>";
 			break;
 	}


 	$date = date("l");

 	switch($date){
 		case "Monday":
 			echo "its Monday";
 			break;
 		case 'Tuesday':
 			echo "its Tuesday";
 			break;
 		case 'Wednesday':
 			echo "its Wednesday";
 			break;
 		case "Thursday":
 			echo "its Thursday";
 			break;
 		case 'Friday':
 			echo "its Friday";
 			break;
 		case 'Saturday':
 			echo "its Saturday";
 			break;
 		case 'Sunday':
 			echo "its Sunday";
 			break;
 		default:
 			echo "hello";
 			break;
 	}


?>