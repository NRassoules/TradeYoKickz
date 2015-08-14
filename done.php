<?php
			
session_set_cookie_params(0, '/', 'tradeyokickz.com');
session_start();


/**
 * Callback for Opauth
 * 
 * This file (callback.php) provides an example on how to properly receive auth response of Opauth.
 * 
 * Basic steps:
 * 1. Fetch auth response based on callback transport parameter in config.
 * 2. Validate auth response
 * 3. Once auth response is validated, your PHP app should then work on the auth response 
 *    (eg. registers or logs user in to your site, save auth data onto database, etc.)
 * 
 */
/**
 * Define paths
 */
define('CONF_FILE', dirname(__FILE__).'/opauth/opauth/lib/Opauth/'.'opauth.conf.php');
define('OPAUTH_LIB_DIR', dirname(dirname(__FILE__)).'/TradeYoKickz/opauth/opauth/lib/Opauth/');
/**
* Load config
*/
if (!file_exists(CONF_FILE)) {
	trigger_error('Config file missing at '.CONF_FILE, E_USER_ERROR);
	exit();
}
/**
 * Instantiate Opauth with the loaded config but not run automatically
 */
require 'Db.php';
require CONF_FILE;
require OPAUTH_LIB_DIR.'Opauth.php';
$Opauth = new Opauth( $config, false );
	
/**
* Fetch auth response, based on transport configuration for callback
*/
$response = null;
switch($Opauth->env['callback_transport']) {
	case 'session':
		session_start();
		$response = $_SESSION['opauth'];
		unset($_SESSION['opauth']);
		break;
	case 'post':
		$response = unserialize(base64_decode( $_POST['opauth'] ));
		break;
	case 'get':
		$response = unserialize(base64_decode( $_GET['opauth'] ));
		break;
	default:
		echo '<strong style="color: red;">Error: </strong>Unsupported callback_transport.'."<br>\n";
		break;
}
/**
 * Check if it's an error callback
 */
if (array_key_exists('error', $response)) {
	echo '<strong style="color: red;">Authentication error: </strong> Opauth returns error auth response.'."<br>\n";
}
/**
 * Auth response validation
 * 
 * To validate that the auth response received is unaltered, especially auth response that 
 * is sent through GET or POST.
 */
else{
	if (empty($response['auth']) || empty($response['timestamp']) || empty($response['signature']) || empty($response['auth']['provider']) || empty($response['auth']['uid'])) {
		echo '<strong style="color: red;">Invalid auth response: </strong>Missing key auth response components.'."<br>\n";
	} elseif (!$Opauth->validate(sha1(print_r($response['auth'], true)), $response['timestamp'], $response['signature'], $reason)) {
		echo '<strong style="color: red;">Invalid auth response: </strong>'.$reason.".<br>\n";
	} else {
		echo '<strong style="color: green;">OK: </strong>Auth response is validated.'."<br>\n";
		$id = $response['auth']['uid'];
		$email = $response['auth']['info']['email'];
		$name = $response['auth']['info']['name'];
		$dbc = Db::connect();
		$query = "SELECT * FROM user_details WHERE email = '$email'";
		$result = mysqli_query($dbc, $query);
		$row = mysqli_fetch_array($result);
		if ($row['email']) {
		  	$db = Db::pdo();
			$login_statement = $db->prepare("UPDATE user_details SET login_state = '1' WHERE email = '$email'");
			$login_statement->execute([
			]);
			$_SESSION['isLoggedIn'] = 'true';
			$_SESSION['email'] = $email;
			$_SESSION['name'] = $name;
			header('Location: http://www.tradeyokickz.com/index.php');
		 } else {
			 	$dbc = Db::connect();
				$query = "SELECT * FROM user_details WHERE id = '$id'";
				$result = mysqli_query($dbc, $query);
				$row = mysqli_fetch_array($result);
		 		if ($row['id']) {
		 			$db = Db::pdo();
					$login_statement = $db->prepare("UPDATE user_details SET login_state = '1' WHERE id = '$id'");
					$login_statement->execute([
					]);
					$_SESSION['id'] = $id;
					$_SESSION['isLoggedIn'] = 'true';
					$_SESSION['name'] = $name;

					// header('Location: http://www.tradeyokickz.com/View/index.php');
		 		}else{
					$db = Db::pdo();
				 	$create_user_statement = $db->prepare("INSERT INTO user_details (email,login_state) VALUES('$email','1')");
					$create_user_statement->execute([
					]);
					$create_user_statement = $db->prepare("INSERT INTO user_details (id,login_state) VALUES('$id','1')");
					$create_user_statement->execute([
					]);
					$_SESSION['email'] = $email;
					$_SESSION['id'] = $id;
					$_SESSION['isLoggedIn'] = 'true';
					$_SESSION['name'] = $name;
					header('Location: http://www.tradeyokickz.com/index.php');
		 		}
		 	$_SESSION['isLoggedIn'] = 'true';
		 	print_r($name);
			header('Location: http://www.tradeyokickz.com/index.php');
		 }
		
	}
}
echo "<pre>";
print_r($response);
print_r($row);
echo "</pre>";
	