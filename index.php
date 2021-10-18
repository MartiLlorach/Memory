<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>memory</title>
	<link rel="stylesheet" type="text/css" href="./styles/welcome.css">
</head>
<body>
	<?php
		include "backendFunctions/functions.php";

		if(isset($_POST["playerName"])){
			saveResult($_POST["playerName"], $_POST["playerTries"]);
			unset($_POST["playerName"]);
			unset($_POST["playerTries"]);
		}
	
	?>
	<div class="main">
		<div class="logo">
			<h1>Me-Mo-Ry!</h1>
		</div>
		<div class="bottom-row">
			<div class="bottom-left">
				<a href="game.php"><button id="playButton" class="btn btn-primary">Play</button></a>
				<button id="rankButton" class="btn btn-secondary">Ranking</button>
			</div>
			<div class="bottom-right">
				<p>
					Welcome player you've stepped into the magical world of memory. </br>To start playing you must press the play button. Once activated you will be able to observe a board with turned cards, your goal to win the game is turn these cards and find the ones that are the same... But be careful! When you can't find a pair of cards, your score will be affected. Your goal is get all the pairs failing as little as possible!
				</p>
			</div>
		</div>
	</div>
</body>
</html>