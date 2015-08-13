<!DOCTYPE html>
<html>
<head>
	<?php 
		include "links.php";
	?>
</head>
<body>
	<?php 
		include "navbar.php";
	?>
<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<section id="bg3"></section>
	<div class="well tradeWell">
		<div class="container-fluid">
			<p>Login With Google</p>
			<a href="../../opauth.php/google"><button class="postButton">Google</button></a>
			<br>
			<br>
			<p>- OR -</p>
			<br>
			<p>Login with Facebook</p>
			<a href="../../opauth.php/facebook"><button class="postButton" style="font-size:20px;">Facebook</button></a>
		</div>
	</div>
	</div>
</body>
</html>