<?php 
	require_once "/var/www/html/TradeYoKickz/autoload.php";
	class Controller_Index extends Controller{
		public function render_view(){
			require_once self::VIEW_BASE_PATH . "index.php";
		}
	}
	render_view();