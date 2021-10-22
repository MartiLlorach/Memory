<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Memory - Winner</title>
	<link rel="stylesheet" type="text/css" href="./styles/winner.css">
</head>

<body>
	<main>
		<div class="winner">
			<h1>YOU WIN!</h1>
		</div>

		<div class="player-input-row">

			<p>Congratulations! You won in <?php echo $_COOKIE["tries"]?> turns!</p>
			<p>Insert your name to save your score!</p>

			<!-- The form that manages all the player name and score -->

			<form method="POST" action="index.php">
				<input class="inputField" id="playerName" name="playerName" type="text" placeholder="Your player name">
				<input id="playerLevel" name="playerLevel" type="number" hidden value="0">
				<input id="playerTime" name="playerTime" type="number" hidden value="0">
				<input id="playerTries" name="playerTries" type="number" hidden value="<?php echo ($_COOKIE["tries"] -4)?>">
				<input type="submit" value="Main menu" class="btn">
				<input type="submit" value="Play Again" formaction="game.php" class="btn">
			</form>
		</div>
	</main>
</body>
</html>