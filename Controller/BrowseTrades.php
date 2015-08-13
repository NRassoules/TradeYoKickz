<?php 
	require_once "/var/www/html/TradeYoKickz/autoload.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . '/Db.php';
	require_once $_SERVER['DOCUMENT_ROOT'] .'/View/browse_trades.php';

		
		$db = Db::pdo();
		$title = $_POST['title'];
		$want = $_POST['want'];
		$size = $_POST['size'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$country = $_POST['country'];
		if (is_null($_POST['title'])) {
			
		}else{
		$add_to_trade_post_details = $db->prepare("INSERT INTO trade_post_info (title,want,size,city,state,country) VALUES (:title,:want,:size,:city,:state,:country)");
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
		}
		$sql = "SELECT * FROM trade_post_info";
		$statement = $db->query($sql);
		$statement->execute();
		$result = $statement->fetchAll();
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