<!DOCTYPE html>
<html>
<head>
	<?php 
	include 'links.php'; 
	?>
</head>
<body>
   <?php
   		include 'navbar.php';
   		session_start();
		if ($_SESSION['isLoggedIn'] === 'true') {

		}else{
			header('Location: http://www.tradeyokickz.com/View/login.php');
		}
   ?>
   <h1 class="oswald center" style="margin-top:35px;"><?= $_SESSION['email']; ?></h1>
   <div class="jumbotron profile">
   		<div class="well picWell profilePic">
   			<div class="black"><img class="resize" src='http://33.media.tumblr.com/0a3fe7ba4bcbf4ddf86571fa578107dd/tumblr_inline_n9a7esa7SB1s7qct1.jpg' /></div>
   		</div>
   		<div class="well infoWell">
   			<p>Name: <?= $_SESSION['name']; ?></p>
   			<?php
   			$email = $_SESSION['email'];
   			$id = $_SESSION['id']; 
   			if (is_null($_SESSION['email'])) {
   				echo "<p>Facebook ID: $id </p>";
   			}else{
   				echo "<p>Email: $email </p>";
   			}
   			?>
   		</div>
   </div>
   <h1 class="oswald center">Post Made By <?= $_SESSION['name']; ?>:</h1>
   <div>
   <?php
   	require_once "/var/www/html/TradeYoKickz/autoload.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . '/Db.php';
	$email = $_SESSION['email'];
	$id = $_SESSION['id'];
	$db = Db::pdo();
	$sql = "SELECT * FROM trade_post_info WHERE email = '$email'";
	$statement = $db->query($sql);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach ($result as $post) { ?>
				<div class='container' style="margin-bottom:30px;">
					<table class="table table-hover">
						<tr>
							<td><?= $post['title'] ?></td>
							<td><?= $post['want'] ?></td>
							<td><?= $post['size'] ?></td>
							<td><?= $post['city'] ?></td>
							<td><?= $post['state'] ?></td>
							<td><?= $post['country'] ?></td>
						</tr>
					</table>
				</div>

	<?php
	}
	?>
	<?php
	$sql = "SELECT * FROM trade_post_info WHERE id = '$id'";
	$statement = $db->query($sql);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach ($result as $post) { ?>
				<div class='container' style="margin-bottom:30px;">
					<table class="table table-hover">
						<tr>
							<td><?= $post['title'] ?></td>
							<td><?= $post['want'] ?></td>
							<td><?= $post['size'] ?></td>
							<td><?= $post['city'] ?></td>
							<td><?= $post['state'] ?></td>
							<td><?= $post['country'] ?></td>
						</tr>
					</table>
				</div>
   </div>
   <?php
}
   ?>
   </body>
</body>
</html>