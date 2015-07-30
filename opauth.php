<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php	
	define('CONF_FILE', dirname(__FILE__).'/opauth/lib/Opauth/'.'opauth.conf.php');

	if (!file_exists(CONF_FILE)) {
		trigger_error('Config file missing at '.CONF_FILE, E_USER_ERROR);
		exit();
	}

	require CONF_FILE;
	require 'opauth/lib/Opauth/Opauth.php';
	$Opauth = new Opauth( $config );

?>

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>

</script>
</body>
</html>


