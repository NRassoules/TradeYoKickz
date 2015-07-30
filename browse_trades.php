<!DOCTYPE html>
<html>
<head>`
	<title>TradeYoKickz</title>
	<?php include 'links.php'; ?>
</head>
<body>
	<div class="container">
	<?php
		include "navbar.php";

		$dsn = 'mysql:dbname=tradeyokickz_db;host=localhost;port=3306';
		$username = 'root';
		$password = 'ps138@school.com';
		try {
		    $db = new PDO($dsn, $username, $password); // also allows an extra parameter of configuration
		} catch(PDOException $e) {
		    die('Could not connect to the database:<br/>' . $e);
		}
		$title = $_POST['title'];
		$want = $_POST['want'];
		$size = $_POST['size'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$country = $_POST['country'];

		$add_to_trade_post_details = $db->prepare("INSERT INTO trade_post_info VALUES (:title,:want,:size,:city,:state,:country)");
		$add_to_trade_post_details->execute(
				[
					':title' => $title,
					':want' => $want,
					':size' => $size,
					':city' => $city,
					':state' => $state,
					':country' => $country
				]
			);
		$sql = "SELECT * FROM trade_post_info";
		$statement = $db->query($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		//var_dump($result);

		?>
		<table class="table table-hover">
				<th>Title</th>
				<th>Willing To Trade For</th>
				<th>Size</th>
				<th>City</th>
				<th>State</th>
				<th>Country</th>
		<?php 
			foreach ($result as $post) {  ?>
			<tr>
				<td><?= $post['title'] ?></td>
				<td><?= $post['want'] ?></td>
				<td><?= $post['size'] ?></td>
				<td><?= $post['city'] ?></td>
				<td><?= $post['state'] ?></td>
				<td><?= $post['country'] ?></td>
			</tr>
			<?php
			}
		?>
		</table>
	
</body>
</html>