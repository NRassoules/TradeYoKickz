<!DOCTYPE html>
<html>
<head> 
	<title>TradeYoKickz : Register</title>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	  ?>
	<h1 class="registerTitle">Making your TradeYoKickz account.</h1>
	<h3 class="center subHeader">We will need your...</h3>
	<form method="post" action="register.php">
		<label for="fName">First Name: </label><input name="fName" /> 
		<br>
		<label for="lName">Last Name: </label><input name="lName" />
		<br>
		<label for="email">Email: </label><input name="email" />
		<br>
		<label for="number">Phone Number: +1- </label><input name="phone" />
		<br>
		<label for="username">Username: </label><input name="username" />
		<br>
		<input type="submit" value="Submit" class="submit" />
	</form>
	<?php
		} else if($_SERVER["REQUEST_METHOD"] === 'POST'){
			$firstName = $_POST['fName'];
			$lastName = $_POST['lName'];
			$email = $_POST['email'];
			$number = $_POST['number'];
			$username = $_POST['username']; 
			include "loginForm.php";
		}

	?>


</body>
</html>