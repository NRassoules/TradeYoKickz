<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
		include "links.php";
	?>
</head>
<body>
	<?php
		
		$fName = $_POST["fName"];
		$lName = $_POST["lName"];
		$user = $_POST["username"];
		$email = $_POST["email"];
		$phone_number = $_POST["phone_number"];
		$user_password = $_POST['password'];
		$user_password = password_hash($user_password, PASSWORD_DEFAULT);

		$dsn = 'mysql:dbname=tradeyokickz_db;host=localhost;port=3306';
		$username = 'root';
		$password = 'ps138@school.com';
		try {
		    $db = new PDO($dsn, $username, $password); // also allows an extra parameter of configuration
		} catch(PDOException $e) {
		    die('Could not connect to the database:<br/>' . $e);
		}
		$add_to_table_user_details = $db->prepare("INSERT INTO user_details VALUES(:fName,:lName,:username,:email,:phone_number,:user_password)");
		if (empty($fName) or empty($lName) or empty($user) or empty($email) or empty($phone_number)) { ?>

			<META http-equiv="refresh" content="7;URL=http://www.tradeyokickz.com/register.php">
			<h1 style="font-family:'Oswald',sans-serif;text-align:center;width:70%;margin:auto;margin-bottom:3000px;margin-top:100px;">One of the fields were left blank you will be redirected in 7 seconds. Please, Try again!</h1> 
	<?php

		}
		else{
			$add_to_table_user_details->execute(
				[
					':fName' => $fName,
					':lName' => $lName,
					':username' => $user,
					':email' => $email,
					':phone_number' => $phone_number,
					':user_password' => $user_password
				]
			);
		}
		
	?>
	
	<?php include "navbar.php";?> 
	<div class="well registerSuccess">
		<p>You have succesfully registered! Log In here</p>
	</div>
	<?php include "log_in_box.php" ?>
</body>
</html>
