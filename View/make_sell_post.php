<!DOCTYPE html>
<html>
<head>
	<title>TradeYoKickz</title>
	<?php
		include "links.php";
    ?>
</head>
<body>
	<?php  
		include "navbar.php";
	?>
	<div class="well tradePostWell">
	<div class="container-fluid postContainer">
		<h1 class="center oswald">Making a <strong style="color:#ec3724">sell</strong> post.</h1>
		<Br>
			<form style="margin:auto;width:70%" action="sell_action.php" method="POST">
				<div class="form-group formPost">
					<label for="Title">Title:</label>
					<input name="title" type="text" placeholder="Selling Custom Horaces" class="form-control" />
				</div>
				<div class="form-group formPost">
					<label for="sneaker">Name of the sneaker that you would like sell:</label>
					<input name="sneaker" type="text" placeholder="Custom Horace's" class="form-control" />
				<div class="form-group formPost">
					<label for="condition">Condition of the sneaker you have:</label>
					<input type="number" placeholder="9.5" class="form-control">
				</div>	
				<div class="form-group formPost">
					<label for="condition">How much are you willing to sell them for:</label>
					<input name="price" type="number" placeholder="250" class="form-control">
				</div>
				<div class="form-group formPost">
					<label for="size">Size of the sneaker:</label>
					<input name="size"type="number" placeholder="9.5" class="form-control">
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
							<p>Select your country.</p>
							<option value="USA">United States</option>
						</select>
					</div>
					<div class="form-group formPost">
						<label for="desc">Description:</label>
						<textarea rows="6" cols="80" name="desc" class="form-control desc" placeholder="My Horaces are in MINT condition and custom. Taking $250 no less."></textarea>
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
</body>
</html>