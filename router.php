<?php
	$controller = $_GET['controller'];
	$action = $_GET['action'];
	$css = $_GET['css'];
	
	
// TODO: this can be a huge security problem.????
	
	
	// print($file_name);
	// print($action);
	
	switch ($controller) {
		case 'opauth.php':
			$controller = 'done';
			$action = 'render_view';
			$class_name = "$controller";
			$file_name = "/var/www/html/TradeYoKickz/" . str_replace('_', '/', $class_name) . '.php';
			echo $file_name;
			require_once $file_name;
		break;
		case 'done.php':
			break;
		default:
			$action = 'render_view';
			$class_name = "Controller_$controller";
			$file_name = "/var/www/html/TradeYoKickz/" . str_replace('_', '/', $class_name) . '.php';
			require_once($file_name);
			(new $class_name())->$action();
			break;
	}


	


	// if ($controller === 'opauth.php'){

	// }else{
	// 	(new $class_name())->$action();
	// }
	// if($controller === 'opauth'){
		
	// }else{
		
	// }		
