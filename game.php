<!DOCTYPE html>
<html>
<head>
	<?php

		if (isset($_POST["hardcoreMode"])) {
			$hardcore = 1;
			$hardcoreCSS = "h";
		} else {
			$hardcore = 0;
			$hardcoreCSS = "";
		}
	?>
	<meta charset="utf-8">
	<title>Memory - Game</title>
	<link rel="stylesheet" href="./styles/game.css" type="text/css">
	<link rel="stylesheet" href="./styles/flip-card.css" type="text/css">
	<link rel="stylesheet" href="./styles/difficultyStyles/cardStyleDifficulty<?php include "backendFunctions/functions.php"; echo $_POST["dif"].$hardcoreCSS?>.css" type="text/css">
	<script type="text/javascript" src="js/functions.js"></script>
</head>

<body onload="innitGame()">
	<?php
		// If we have a player in a POST variable, we save the data

		if(isset($_POST["playerName"])){
			saveResult($_POST["playerName"], $_POST["playerLevel"], $_POST["playerTime"], $_POST["playerTries"]);
			unset($_POST["playerName"]);
			unset($_POST["playerTries"]);
		}
		
		$maxTime;
		switch ($_POST["dif"]) {
		 	case 1:
		 		$maxTime = 45;
		 		break;
		 	case 2:
		 		$maxTime = 60;
		 		break;
	 		case 3:
		 		$maxTime = 90;
		 		break;
	 		case 4:
		 		$maxTime = 120;
		 		break;
	 		case 5:
		 		$maxTime = 140;
		 		break;
		 	case 6:
		 		$maxTime = 220;
		 		break;
		} 

		echo "<script> setTimer($maxTime) </script>";
	?>
	<div id="headerContainer">
		<div id="cancelContainer">

			<!-- Cancel button -->

			<a href="index.php"><button id="cancel" class="btn" >Cancel</button></a>
		</div>

		<div id="timerContainer">

			<!-- Timer -->

			<p>Timer = </p><p id="timer"></p>
		</div>

		<div id="counterContainer">

			<!-- Player tries -->

			<p id="tries">Tries = 0</p>
		</div>
	</div>
	

	<div id="cardsContainer">

		<!-- Card's board -->

		<?php

			if (isset($_POST["hardcoreMode"])) {
				$hardcore = 1;
			} else {
				$hardcore = 0;
			}

			generateCards($_POST["dif"], $hardcore);		

		?>
	</div>
</body>
</html>
