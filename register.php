<!DOCTYPE html>
<html>
<head>
	<title>TradeYoKickz</title>
	<?php include "links.php" ?>
</head>
<body>
	<?php
		include "navbar.php";
	?>
	<section id="bg3"></section>
	<div class="well registerWell">
		<form action="register_action.php" method="POST">
		  <div class="form-group">
		    <label for="fName">First Name</label>
		    <span class="glyphicon glyphicon-user"></span><input type="text" class="form-control" placeholder="John" name="fName">
		  </div>
		  <div class="form-group">
		    <label for="lName">Last Name</label>
		     <span class="glyphicon glyphicon-user"></span><input type="text" class="form-control" placeholder="Doe"  name="lName">
		  </div>
		  <div class="form-group">
		    <label for="email">Email address</label>
		    <span class="glyphicon glyphicon-envelope"></span><input type="email" class="form-control" placeholder="Email"  name="email">
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <span class="glyphicon glyphicon-lock"></span><input type="password" class="form-control" placeholder="Password" name="password">
		  </div>
		   <div class="form-group">
		    <label for="username">Username</label>
		    <span class="glyphicon glyphicon-comment"></span><input type="text" class="form-control" placeholder="iLoveOGs595" name="username">
		  </div>
		   <div class="form-group">
		    <label for="phone_number">Phone Number</label>
		    <span class="glyphicon glyphicon-phone"></span><input type="text" class="form-control" placeholder="eg.'1(718)-555-4137'"  name="phone_number">
		  </div>
		  <button type="submit" class="registerButton">Register</button>
		</form>
	</div>
	<script type="text/javascript">
	</script>
</body>
</html>