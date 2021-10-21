<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="./styles/ranking.css">
</head>
<body>
	<?php
		$array = explode("\n", file_get_contents("HallOfFame.txt"));
		print_r($array);
	?>
	<br>
	<a href="index.php"><button class="btn">Main menu</button></a>
</body>
</html>