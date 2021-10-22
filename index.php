<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Memory - Main Page</title>
	<link rel="stylesheet" type="text/css" href="./styles/index.css">
</head>

<body>
	<?php
		include "backendFunctions/functions.php";

		// If we have a player in a POST variable, we save the data

		if(isset($_POST["playerName"])){
			saveResult($_POST["playerName"],$_POST["playerLevel"], $_POST["playerTime"], $_POST["playerTries"]);
			unset($_POST["playerName"]);
			unset($_POST["playerTries"]);
		}
	
	?>

	<main>

		<!-- Logo -->

		<div class="logo">
			<h1>Me-Mo-Ry!</h1>
		</div>
		
		<div class="bottom-row">

			<!-- Buttons -->

			<div class="bottom-left">
				<a href="game.php"><button id="playButton" class="btn btn-primary">Play</button></a>
				<a href="ranking.php"><button id="rankButton" class="btn btn-secondary">Ranking</button></a>
			</div>

			<!-- Instructions -->
			
			<div class="bottom-right">
				<h2>Welcome human, you've stepped into the magical world of Me-Mo-Ry!</h2>
				<p>To start playing you must press the play button. Once activated you will be able to see a board filled with cards. Your goal is to turn these cards and to find pairs... But be careful! When you don't flip a pair your score will be affected. Your goal is to get all the pairs, while failing the least possible!</p>
			</div>

		</div>
	</main>
</body>
</html>