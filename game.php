<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Memory - Game</title>
	<link rel="stylesheet" href="./styles/game.css" type="text/css">
	<link rel="stylesheet" href="./styles/flip-card.css" type="text/css">
	<link rel="stylesheet" href="./styles/cardStyle<?php include "backendFunctions/functions.php"; echo difficultySelector($_GET["dif"])["columns"]?>Columns.css" type="text/css">
	<script type="text/javascript" src="js/functions.js"></script>
</head>

<body>
	<?php
		// If we have a player in a POST variable, we save the data

		if(isset($_POST["playerName"])){
			saveResult($_POST["playerName"], $_POST["playerLevel"], $_POST["playerTime"], $_POST["playerTries"]);
			unset($_POST["playerName"]);
			unset($_POST["playerTries"]);
		}
	
	?>
	<div id="counterContainer">

		<!-- Player tries -->

		<p id="tries">Tries = 0</p>
	</div>

	<div id="cardsContainer">

		<!-- Card's board -->

		<?php
			generateCards($_GET["dif"]);		

		?>
	</div>
</body>
</html>
