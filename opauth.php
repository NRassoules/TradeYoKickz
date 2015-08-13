<?php
session_set_cookie_params(0, '/', '.TradeYoKickz.com');
session_start();	
define('CONF_FILE', dirname(__FILE__).'/opauth/opauth/lib/Opauth/'.'opauth.conf.php');
define('OPAUTH_LIB_DIR', dirname(dirname(__FILE__)).'/TradeYoKickz/opauth/opauth/lib/Opauth/');
/**
* Load config
*/
if (!file_exists(CONF_FILE)) {
	trigger_error('Config file missing at '.CONF_FILE, E_USER_ERROR);
	exit();
}
require CONF_FILE;
/**
 * Instantiate Opauth with the loaded config
 */
require OPAUTH_LIB_DIR.'Opauth.php';
$Opauth = new Opauth( $config );


