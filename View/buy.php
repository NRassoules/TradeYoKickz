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
		require $_SERVER['DOCUMENT_ROOT'] . "/Db.php";
		$db = Db::pdo();
		$sql = "SELECT * FROM sell_post_info";
		$statement = $db->query($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		//var_dump($result);


		?>
		<table class="table table-hover">
				<th>Title</th>
				<th>Price</th>
				<th>Size</th>
				<th>City</th>
				<th>State</th>
				<th>Country</th>
		<?php 
			foreach ($result as $post) {  ?>
			<tr>
				<td><?= $post['title'] ?></td>
				<td>$<?= $post['price'] ?></td>
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