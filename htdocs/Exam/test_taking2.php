<?php
if (isset($_POST["submit"])) {
	$quiz_name = $_POST["quiz_name"];
}

require_once 'dbh.inc.php';

session_start();

$_SESSION['quiz_name']=$quiz_name;


if($query = MysqLi_query($conn,"SELECT * from $quiz_name")){
    $row = MysqLi_fetch_assoc($query);
    $q1 = $row['q1'];
    $q2 = $row['q2'];
    $q3 = $row['q3'];
    $q4 = $row['q4'];
    $q5 = $row['q5'];
    $q6 = $row['q6'];
    $q7 = $row['q7'];
    $q8 = $row['q8'];
}else{
	echo "ll";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Taking Test</title>
	<style type="text/css"></style>
</head>
<body style="background-color: green">
	%div
	<section>
		<h2 style="color: white">Taking Test</h2>
			<form action='test_taking3.php' method="post">
				<input type="text" name="name" placeholder="input your name">
				<br><?php echo $q1; ?>
				<input type="text" name="ans-1" placeholder="input answer to that">
				<br><?php echo $q2; ?>
				<input type="text" name="ans-2" placeholder="input answer to that">
				<br><?php echo $q3; ?>
				<input type="text" name="ans-3" placeholder="input answer to that">
				<br><?php echo $q4; ?>
				<input type="text" name="ans-4" placeholder="input answer to that">
				<br><?php echo $q5; ?>
				<input type="text" name="ans-5" placeholder="input answer to that">
				<br><?php echo $q6; ?>
				<input type="text" name="ans-6" placeholder="input answer to that">
				<br><?php echo $q7; ?>
				<input type="text" name="ans-7" placeholder="input answer to that">
				<br><?php echo $q8; ?>
				<input type="text" name="ans-8" placeholder="input answer to that">
				<button type="submit" name="submit">Finished+Submit</button>
			</form>
	</section>

</body>
</html>


