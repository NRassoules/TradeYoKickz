<!DOCTYPE html>
<html>
<head>
	<title>TradeYoKickz</title>
	<?php include "links.php"; ?>
</head>
<body>
	<?php
		include "navbar.php";
		$title = "Bordeaux 7s MINT condition!";
		$price = 375;
		$desc = "Bought them yesterday never worn willing to bargain.";
		$size = 9.5;
		$seller = "Jays4Life595";
		$rating = 75;
		$img2 = "http://sneakerbardetroit.com/wp-content/uploads/2014/12/air-jordan-7-vii-retro-2015-remastered-1.jpg";
	?>
		<h1 class="oswald center" style="margin-top:40px;"><?= $title ?></h1>
		<br>
		<div class="container postWell">
			<div class="row tradeRow">
			  <div class="col-md-6">
			  	<div class="well">
			  		<img class="postImg" src="http://6.kicksonfire.net/wp-content/uploads/2015/01/Air-Jordan-Bordeaux-7-Release-Date-1.jpg?642e0d">
			  	</div>
			  </div>
			  <div class="col-md-5">
			  	<h3 class="postText">Price $<?= $price ?></h3>
			  	<h3 class="postText">Size <?= $size ?></h3>
			  	<h3 class="postText">Seller: <?= $seller ?></h3>
			  	<h3 class="postText">Seller Rating: <?= $rating ?></h3>
			  	<button class="registerButton">Buy Now!</button>
			  </div>
			</div> 
			<div class="well picWell">
				<img src=<?= $img2?> class="secondaryImg"/>
			</div>
			<div class="well picWell">
				<img src=<?= $img2?> class="secondaryImg"/>
			</div>
			<div class="well picWell">
				<img src=<?= $img2?> class="secondaryImg"/>
			</div>
			<div class="well picWell">
				<img src=<?= $img2?> class="secondaryImg"/>
			</div>
			<div class="well" style="width:100%;margin-top:10px;">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius metus non tortor semper, in dapibus tortor mattis. In tellus felis, convallis eget quam ac, dignissim malesuada lectus. Pellentesque lorem felis, pellentesque et volutpat a, sagittis a turpis. Fusce iaculis dictum lorem, tempus iaculis lorem bibendum in. Morbi tristique, enim a molestie mollis, dui turpis fermentum elit, sit amet facilisis nisi enim id risus. Donec pretium ante sed orci consectetur suscipit. Sed in congue nisi. Phasellus vel ultricies urna. Ut neque turpis, lacinia tincidunt pellentesque in, imperdiet scelerisque ante. Nunc suscipit ligula sed tellus tempor, non malesuada felis rhoncus. Pellentesque ut nisi ac dolor viverra sodales ac in mauris. Nam mollis sagittis magna, a venenatis magna malesuada ut.</p>
			</div>
		</div>
</body>
</html>