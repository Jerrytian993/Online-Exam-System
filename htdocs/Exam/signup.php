<?php
require 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page of Signing up</title>
</head>
<body style="background-color: green">
	<section>
		<h2 style="margin-left: 600px; margin-top: 100px; font-size: 40px; color: white">The Sign up</h2>
			<form style="margin-left: 600px" action="signup.inc.php" method="post">
				<input type="text" name="name" placeholder="input your name..." ><br>
				<input type="password" name="password" placeholder="input your password"><br>
				<select name="identity">
					<option value="student">student</option>
					<option value="teacher">teacher</option>
				</select>
				<button type="submit" name="submit">Sign Up Now</button>
			</form>
	</section>

</body>
</html>