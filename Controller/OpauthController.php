<?php
	require_once "/var/www/html/TradeYoKickz/autoload.php";
		class Controller_OpauthController extends Controller{ 
			public function render_view(){
				 return false;
			}
			public function Facebook(){
				require '/var/www/html/TradeYoKickz/opauth.php';
			}
			public function Google(){
				require '/var/www/html/TradeYoKickz/opauth.php';
			}
		}