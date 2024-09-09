<?php
require 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: black">
	<section>
		<h2 style="color: white">The Test Creator</h2>
			<form action="testcreation.inc.php" method="post">
				<input type="text" name="table_name" placeholder="input the test name">
				<br><input type="text" name="q1" placeholder="input 1st question">
				<input type="text" name="ans1" placeholder="input answer to that">
				<br><input type="text" name="q2" placeholder="input 2nd question">
				<input type="text" name="ans2" placeholder="input answer to that">
				<br><input type="text" name="q3" placeholder="input 3rd question">
				<input type="text" name="ans3" placeholder="input answer to that">
				<br><input type="text" name="q4" placeholder="input 4th question">
				<input type="text" name="ans4" placeholder="input answer to that">
				<br><input type="text" name="q5" placeholder="input 5th question">
				<input type="text" name="ans5" placeholder="input answer to that">
				<br><input type="text" name="q6" placeholder="input 6th question">
				<input type="text" name="ans6" placeholder="input answer to that">
				<br><input type="text" name="q7" placeholder="input 7th question">
				<input type="text" name="ans7" placeholder="input answer to that">
				<br><input type="text" name="q8" placeholder="input 8th question">
				<input type="text" name="ans8" placeholder="input answer to that">
				<button type="submit" name="submit">Create Test</button>
			</form>
	</section>
</body>
</html>


