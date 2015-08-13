<?php
	session_start(); 
?>
<div id="twitterbootstrap">
	<div class="navbar navbar-fixed-top" style="background-color:rgba(10,10,10,.7);border:none;">
		<div class="navbar-inner">
			<div class="container">
				<ul class="nav navbar-nav">
					<li><a href="http://www.tradeyokickz.com/View/register.php" style="margin-left:0;">Register</a></li>
					<li><a href="http://www.tradeyokickz.com/View/trade.php">Trade</a></li>
					<li><a href="http://www.tradeyokickz.com/View/index.php" style="font-size:34px;font-family:'Oswald',sans-serif;font-weight:700;">TradeYoKickz</a></li>
					<li><a href="http://www.tradeyokickz.com/View/buy.php">Buy</a></li>
					<li><a href="http://www.tradeyokickz.com/View/login.php">Login</a></li>
					<?php
						if (is_null($_SESSION['email'])){

						}else{
							echo "<div class='email'>" . $_SESSION['email'] ."<a href='http://www.tradeyokickz.com/Controller/Logout.php'><button class='registerButton smallText'>Log Out</button></a></div>";
						}
						if (is_null($_SESSION['id'])) {
							
						}else{
							echo "<div class='email'>" . $_SESSION['name'] ."<a href='http://www.tradeyokickz.com/Controller/Logout.php'><button class='registerButton smallText'>Log Out</button></a></div>";	
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>