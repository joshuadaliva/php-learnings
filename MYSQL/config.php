 <?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  throw new Exception("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>