<?php  
$surfix = "results";
if (isset($_POST["submit"])) {
	$table_name = $_POST["table_name"];
	$q1 = $_POST["q1"];
	$ans1 = $_POST["ans1"];
	$q2 = $_POST["q2"];
	$ans2 = $_POST["ans2"];
	$q3 = $_POST["q3"];
	$ans3 = $_POST["ans3"];
	$q4 = $_POST["q4"];
	$ans4 = $_POST["ans4"];
	$q5 = $_POST["q5"];
	$ans5 = $_POST["ans5"];
	$q6 = $_POST["q6"];
	$ans6 = $_POST["ans6"];
	$q7 = $_POST["q7"];
	$ans7 = $_POST["ans7"];
	$q8 = $_POST["q8"];
	$ans8 = $_POST["ans8"];
}
$table_result = $table_name.$surfix;
require_once 'dbh.inc.php';

$sql = "CREATE TABLE $table_name(
q1 VARCHAR(60),
ans1 VARCHAR(60),
q2 VARCHAR(60),
ans2 VARCHAR(60),
q3 VARCHAR(60),
ans3 VARCHAR(60),
q4 VARCHAR(60),
ans4 VARCHAR(60),
q5 VARCHAR(60),
ans5 VARCHAR(60),
q6 VARCHAR(60),
ans6 VARCHAR(60),
q7 VARCHAR(60),
ans7 VARCHAR(60),
q8 VARCHAR(60),
ans8 VARCHAR(60)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . $conn->error;
}


$sql = "CREATE TABLE $table_result(
name varchar(20),
score int(10)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . $conn->error;
}

/*$rename= mysqli_query($conn,"ALTER TABLE tests RENAME TO '$table_name'");

if($rename !== FALSE)
{
   echo("The table has been renamed.");
}else{
   echo("The table has not been renamed.");
}

//ALTER TABLE  RENAME TO 
/*$sql = "INSERT INTO user (q1,ans1,q2,ans2,) 
VALUES ('$name','$password','$identity')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
*/

$sql = "INSERT INTO $table_name (q1, ans1,q2, ans2, q3, ans3, q4, ans4, q5, ans5, q6, ans6, q7, ans7, q8, ans8) 
VALUES ('$q1','$ans1','$q2','$ans2','$q3','$ans3','$q4','$ans4','$q5','$ans5','$q6','$ans6','$q7','$ans7','$q8','$ans8')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


//header("Location: index.php");





