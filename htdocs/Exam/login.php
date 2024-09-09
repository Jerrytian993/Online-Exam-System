<?php
require 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page of Login in</title>
</head>
<body style="background-color: green">
	<section>
		<h2>The Login</h2>
			<form action="login.inc.php" method="post">
				<input type="text" name="name" placeholder="input registered name...">
				<input type="password" name="password" placeholder="input password">
				<button type="submit" name="submit">LOGIN</button>
			</form>
	</section>

</body>
</html>