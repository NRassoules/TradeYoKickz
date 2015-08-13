<?php 
	
	abstract class Controller{
		const VIEW_BASE_PATH = "/var/www/html/TradeYoKickz/View/";
		const VIEW_CSS_BASE_PATH = "/var/www/html/TradeYoKickz/View/";
		abstract public function render_view();
		
	}