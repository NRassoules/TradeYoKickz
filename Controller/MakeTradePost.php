<?php
	require_once "/var/www/html/TradeYoKickz/autoload.php";
		class Controller_MakeTradePost extends Controller{
			public function render_view(){
				require self::VIEW_BASE_PATH . 'trade_post.php';
			}
		}