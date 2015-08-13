<!DOCTYPE html>
<html>
<head>
	<title>TradeYoKickz</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<?php
	error_reporting(E_ALL);

	class Post {

		public $username, $sneaker, $price, $location, $title, $rating;

		public function __construct($username, $sneaker, $price, $location, $rating ){
			$this->username = $username;
			$this->title = $title;
			$this->price = $price;
			$this->location = $location;
			$this->sneaker = $sneaker;
			$this->rating = $rating;

		}
	}

	$blam = new Post("Nikolas Rassoules", "Chicago Jordan 10s", "$200", "Bronx, NY", "99%");
	?>
			<h1 class='title'><?= $blam->sneaker ?></h1>
			<div class="userInfo">
				<h3 class=''><?= $blam->username ?></h3>
				<br>
				<h3 class=""><?= $blam->price ?></h3>
				<br>
				<h3 class=""><?= $blam->location ?></h3>
				<br>
				<h3 class="">Seller rating: <?= $blam->rating ?></h3>
				<button id="purchase">Buy Now</button>
			</div>
			<div id="galleryBox">
				<img src="http://sneakerbardetroit.com/wp-content/uploads/2014/06/air-jordan-10-retro-red-cement-20152.jpg" class="sneakerPic">
			</div>
			<h3 class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. 
			</h3>
			<div id="contactFooter">
				<?php
					/**
					 * 
					 */
					 class ContactInfo 
					 {
					 	public $name, $phone, $city, $state, $country;
					 	
					 	function __construct($name, $phone, $city, $state, $country, $email)
					 	{
					 		$this->name = $name;
					 		$this->phone = $phone;
					 		$this->city = $city;
					 		$this->state = $state;
					 		$this->country = $country;
					 		$this->email = $email;
					 	}
					 } 
					 $boom = new ContactInfo("Nikolas Rassoules", "718-825-7537", "Bronx", "New York", "USA", "nrassoules@gmail.com");
				 ?>
				 <h3 class="center contactInfo">Contact <?= $blam->username ?> at <?= $boom->email ?>.</h3>
			</div>

	
</body>
</html>