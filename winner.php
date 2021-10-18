<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>memory</title>
	<link rel="stylesheet" type="text/css" href="./styles/winner.css">
</head>
<body>
	<div class="main">
		<div class="winner">
			<h1>YOU WON!</h1>
		</div>
		<div class="player-input-row">
			<form method="POST" action="index.php">
				<input id="playerName" name="playerName" type="text" placeholder="Your player name">
				<input id="playerTries" name="playerTries" type="number" hidden value="<?php echo $_COOKIE["tries"]?>">
				<input type="submit" value="Main menu">
				<input type="submit" value="Play Again" formaction="game.php">
			</form>
		</div>
		<div class="bottom-row">
			<div class="bottom-left">
				<button id="playAgain" class="btn btn-primary">Play again</button>
			</div>
			<div class="bottom-right">
				<button id="mainPage" class="btn btn-primary">Turn to main page</button>
			</div>
		</div>
	</div>
</body>
</html>