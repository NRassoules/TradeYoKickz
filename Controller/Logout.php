<?php
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'] . '/Db.php';
	$db = Db::pdo();
	print_r($_SESSION);
	$email = $_SESSION['email'];
		$statement = $db->prepare("UPDATE user_details SET login_state = '0' WHERE email = '$email'");
		$statement->execute();
	$id = $_SESSION['id'];
		$statement = $db->prepare("UPDATE user_details SET login_state = '0' WHERE id = '$id'");
		$statement->execute();
		session_unset();
	header('Location: http://www.tradeyokickz.com/');
		
	
	