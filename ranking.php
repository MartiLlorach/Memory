<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="./styles/ranking.css">
</head>
<body>
	<div id='username'>
		<?php session_start();
			if (isset($_SESSION['playerName'])){
				echo $_SESSION['playerName'];
			}
		?>
	</div>
	<div class="mainDiv">
		<div class="title">
			<h2>Ranking</h2>
		</div>
		<div class="rankingContainer">
			<?php include 'innerRanking.php'; ?>
		</div>
		<div class="button-container">
			<a href="index.php"><button class="btn">Main menu</button></a>
		</div>
	</div>

</body>
</html>
