<?php
$score = 0;
if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$ans_1 = $_POST["ans-1"];
	$ans_2 = $_POST["ans-2"];
	$ans_3 = $_POST["ans-3"];
	$ans_4 = $_POST["ans-4"];
	$ans_5 = $_POST["ans-5"];
	$ans_6 = $_POST["ans-6"];
	$ans_7 = $_POST["ans-7"];
	$ans_8 = $_POST["ans-8"];
}
require_once 'dbh.inc.php';
session_start();
$quiz_name = $_SESSION['quiz_name'];
$quiz_results = $quiz_name.'results';

if($query = MysqLi_query($conn,"SELECT * from $quiz_name")){
    $row = MysqLi_fetch_assoc($query);
    $ans1 = $row['ans1'];
    $ans2 = $row['ans2'];
    $ans3 = $row['ans3'];
    $ans4 = $row['ans4'];
    $ans5 = $row['ans5'];
    $ans6 = $row['ans6'];
    $ans7 = $row['ans7'];
    $ans8 = $row['ans8'];
}
echo $ans1;
if ($ans_1 == $ans1) {
	$score = $score + 1;
}
if ($ans_2 == $ans2) {
	$score = $score + 1;
}
if ($ans_3 == $ans3) {
	$score = $score + 1;
}
if ($ans_4 == $ans4) {
	$score = $score + 1;
}
if ($ans_5 == $ans5) {
	$score = $score + 1;
}
if ($ans_6 == $ans6) {
	$score = $score + 1;
}
if ($ans_7 == $ans7) {
	$score = $score + 1;
}
if ($ans_8 == $ans8) {
	$score = $score + 1;
}

echo $score;

$sql = "INSERT INTO $quiz_results (name, score) 
VALUES ('$name', '$score')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

