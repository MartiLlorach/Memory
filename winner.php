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
		saveResult($_SESSION["playerName"], "0",$_COOKIE['time'], $_COOKIE['tries']-4,"0");
		$_SESSION["playerName"]=$_SESSION['playerName'];

	?>
	<main>
		<div class="winner">
			<h1>YOU WON!</h1>
		</div>

		<div class="player-input-row">

			<p>Congratulations! You won in <?php echo $_COOKIE["tries"]?> turns!</p>
			<p>Insert your name to save your score!</p>

			<!-- The form that manages all the player name and score -->

			<form method="POST" action="index.php">
				<input class="inputField" id="playerName" name="playerName" type="text" placeholder="Your player name" disabled="true">
				<input id="playerLevel" name="playerLevel" type="number" hidden value="0">
				<input id="playerTime" name="playerTime" type="number" hidden value="0">
				<input id="playerTries" name="playerTries" type="number" hidden value="<?php echo ($_COOKIE["tries"] -4)?>">
				<input type="submit" value="Main menu" class="btn">
				<input type="submit" value="Ranking" formaction="ranking.php" class="btn">
				<input type="submit" value="Play Again" formaction="game.php" class="btn">
			</form>
		</div>
	</main>
</body>
</html>