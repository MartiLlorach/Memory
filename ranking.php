<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="./styles/general.css">
</head>
<body>
	<?php
		$array = explode("\n", file_get_contents("HallOfFame.txt"));
		print_r($array);
	?>
</body>
</html>