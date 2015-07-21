<!DOCTYPE html>
<html>
<head>
	<?php 
		include "links.php";
	?>
</head>
<body>
	<?php 
		include "navbar.php";
	?>
	<section id="bg3"></section>
	<div class="well logInWell" style="background-color: rgba(220,220,220,.6);">
		<form class="logInGroup" action="log_in_action.php">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="Username" class="form-control logIn" />
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control logIn" />
			</div>
			<a href="#" class="oswald link"><p>Having trouble logging in?</p></a>
			<a href="register.php" class="oswald link"><p>Do you need to create an account?</p></a>
		</form>
		<button class="registerButton">Log In</button>
	</div>
</body>
</html>