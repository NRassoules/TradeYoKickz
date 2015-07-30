<!DOCTYPE html>
<html>
<head>
	<title>TradeYoKickz</title>
	<?php include "links.php"; ?>
</head>
<body>
<?php 
	include "navbar.php";
?>
<div class="well tradePostWell">
	<div class="container-fluid postContainer">
		<h1 class="center oswald">Making a <strong style="color:#ec3724">trade</strong> post.</h1>
		<Br>
			<form style="margin:auto;width:70%" action="browse_trades.php" method="POST">
				<div class="form-group formPost">
					<label for="Title">Title:</label>
					<input name="title" type="text" placeholder="Willing to trade for Bordeaux 7s 2015" class="form-control" />
				</div>
				<div class="form-group formPost">
					<label for="want">What you want:</label>
					<input name="want" type="text" placeholder="Bordeaux 7s" class="form-control" />
				</div>
				<div class="form-group formPost">
					<label for="give">What you have to give:</label>
					<input name="give" type="text" placeholder="Hare 7s" class="form-control" />
				<div class="form-group formPost">
					<label for="condition">Condition of the sneaker you have:</label>
					<input name='condition'type="number" placeholder="9.5" class="form-control">
				</div>	
				<div class="form-group formPost">
					<label for="size">Size of the sneaker you have:</label>
					<input name='size'type="number" placeholder="9.5" class="form-control">
				</div>	
				<div class="form-group formPost">
					<label for="location">Location</label>
					<div class="dropdowns">
						<select name="state" class="form-control location" placeholder="State">
							<option>Choose your state below!</option>
							<option value="New York">New York</option>
							<option value="California">California</option>
							<option value="Florida">Florida</option>
							<option value="Pennsylvania">Pennsylvania</option>
						</select>
						<select name="city" class="form-control location">
							<option>Choose your city below!</option>
							<option value="Bay Area">Bay Area</option>
							<option value="Bronx">Bronx</option>
							<option value="Brooklyn">Brooklyn</option>
							<option value="Long Island">Long Island</option>
							<option value="Manhattan">Manhattan</option>	
							<option value="Miami">Miami</option>
							<option value="Orlando">Orlando</option>
							<option value="Philidelphia">Philidelphia</option>
							<option value="Queens">Queens</option>
							<option value="Westchester County">Westchester County</option>	
						</select>
						<select name="country" class="form-control location">
							<option value="USA">United States</option>
						</select>
					</div>
					<div class="form-group formPost">
						<label for="desc">Description:</label>
						<textarea rows="6" cols="80" name="desc" class="form-control desc" placeholder="Also willing to take .... My hare's are deadstock. Willing to add cash!"></textarea>
					</div>
				</div>
				<div class="checkbox">
				    <label class="small">
				      <input type="checkbox"> Contact me via e-mail.
				    </label>
				    <Br>
				    <label class="small">
				      <input type="checkbox"> Contact me via text.
				    </label>
				 </div>
				<button class="registerButton" style="font-size:18px;margin-top:10px;margin-bottom:20px;">Submit</button>
				<button class="registerButton" style="font-size:18px;margin-top:10px;margin-bottome:20px;">Save</button>
			</form>
		</div>
	</div>
	<script type="text/javascript">

		
	    window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '1662587420694191',
	      xfbml      : true,
	      version    : 'v2.4'
	    }); 
	  
	  FB.getLoginStatus(function(response) {

	  if (response.status === 'connected') {
	    // the user is logged in and has authenticated your
	    // app, and response.authResponse supplies
	    // the user's ID, a valid access token, a signed
	    // request, and the time the access token 
	    // and signed request each expire
	    var uid = response.authResponse.userID;
	    var accessToken = response.authResponse.accessToken;
	  } else if (response.status === 'not_authorized') {
	    // the user is logged in to Facebook, 
	    // but has not authenticated your app

	    window.location = 'http://tradeyokickz.com/opauth.php';
	  } else {
	    // the user isn't logged in to Facebook.
	    window.location = 'http://tradeyokickz.com/opauth.php';
	  }
	 });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	 
	</script>
</body>
</html>