<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Memory - Winner</title>
	<link rel="stylesheet" type="text/css" href="./styles/winner.css">
</head>

<body>
	<?php
		session_start();
		include "backendFunctions/functions.php";
		saveResult($_SESSION["playerName"], $_SESSION["dif"], $_COOKIE['time'], $_COOKIE['tries']-4, $_SESSION["hardcoreMode"]);
	?>

	<main>
		<div class="winner">
			<h1>YOU WIN!</h1>
		</div>

		<div class="player-input-row">
			<div class="message">
				<p>Congratulations! You won in <?php echo $_COOKIE["tries"]?> turns!</p>
				<p>Insert your name to save your score!</p>
			</div>

			<!-- Buttons to go to all the options -->
			<div class="navigation">
				<a href="index.php"><button id="mainMenuButton" class="btn">Main Menu</button></a>
				<a href="ranking.php"><button id="rankingButton" class="btn">Ranking</button></a>
				<a href="game.php"><button id="playAgainButton" class="btn">Play Again</button></a>
			</div>
		</div>
	</main>
</body>
</html>