<?php  


if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$password = $_POST["password"];
	$identity = $_POST["identity"];
}


require_once 'dbh.inc.php';

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (name, password, identity) 
VALUES ('$name','$password','$identity')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
