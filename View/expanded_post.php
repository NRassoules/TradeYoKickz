<!DOCTYPE html>
<html>
<head>
	<title>TradeYoKickz</title>
	<?php include "links.php"; ?>
</head>
<body>
	<?php
		include "navbar.php";
		require_once $_SERVER['DOCUMENT_ROOT'] . '/Db.php';
		$id = $_GET['id'];
		$db = Db::pdo();
		$sql = "SELECT * FROM trade_post_details WHERE post_id = '$id'";
		$statement = $db->query($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		$name = $_SESSION['name'];
		$price = null;
		
		foreach ($result as $info){
			$title = $info['title'];
			$want = $info['want'];
			$size = $info['size'];
			$city = $info['city'];
			$state = $info['state'];
			$id = $info['id'];
			$post_id = $info['post_id'];
			$email = $info['email'];
			$description = $info['description'];
			$img = $info['image'];
		}

	?>
		<h1 class="oswald center" style="margin-top:40px;"><?= $title ?></h1>
		<br>
		<div class="container postWell">
			<div class="row tradeRow">
			  <div class="col-md-6">
			  	<div class="well">
			  		<img class="postImg" src="<?= $img ?>">
			  	</div>
			  </div>
			  <div class="col-md-5">
			  	<?php if (is_null($price)) {
			  		echo "<h3 class='postText'>Looking for trades</h3>";
			  	}else{
			  		echo '<h3 class="postText">Price $<?= $price ?></h3>';
			  	}?>
			  	<h3 class="postText">Size <?= $size ?></h3>
			  	<h3 class="postText">Seller: <?= $name ?></h3>
			  	<h3 class="postText">Seller Rating: <?= $rating ?></h3>
			  	<button class="registerButton">Trade | Buy Now!</button>
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
				<p class="bigP"><?= $description ?></p>
			</div>
		</div>
</body>
</html>