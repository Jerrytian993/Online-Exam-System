<?php
require 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		The Test
	</title>
</head>
<body style="background-color: blue">
	<section>
		<h2 style="color: gray">Choose Quiz</h2>
			<form action="test_taking2.php" method="post">
				<br><input type="text" name="quiz_name" placeholder="input the name of the quiz">
				<button type="submit" name="submit">Take The Quiz</button>
			</form>
	</section>

</body>
</html>

