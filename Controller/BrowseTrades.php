<?php 
	session_start();
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
		$description = $_POST['desc'];
		$img = $_POST['image'];
		$postid = uniqid();
		$emailPost = $_SESSION['email'];
		$idPost = $_SESSION['id'];
		if (is_null($_POST['title'])) {
		header('Location http://www.tradeyokickz.com/Controller/BrowseTrades.php');	
		}else{
		$add_to_trade_post_details = $db->prepare("INSERT INTO trade_post_details (title,want,size,city,state,country,email,id,post_id,description,image) VALUES (:title,:want,:size,:city,:state,:country,:email,:id,:post_id,:description,:image)");
		$add_to_trade_post_details->execute(
				[
					':title' => $title,
					':want' => $want,
					':size' => $size,
					':city' => $city,
					':state' => $state,
					':country' => $country,
					':email' => $emailPost,
					':id' => $idPost,
					'post_id' => $postid,
					':description' => $description,
					':image' => $img
				]
			);
		
		}
		$sql = "SELECT * FROM trade_post_details ORDER BY time DESC";
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

			foreach ($result as $post) { 
			$post_id = $post['post_id']; ?>
					<tr class="clickable-row">
							<td><a class='red' href="http://www.tradeyokickz.com/View/expanded_post.php?id=<?= $post_id ?>"><?= $post['title'] ?></a></td>
							<td><?= $post['want'] ?></td>
							<td><?= $post['size'] ?></td>
							<td><?= $post['city'] ?></td>
							<td><?= $post['state'] ?></td>
							<td><?= $post['country'] ?></td>
						</a>
					</tr>
				
			<?php
			}
		?>
		</table>