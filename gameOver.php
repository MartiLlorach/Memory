<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Memory - Game Over</title>
	<link rel="stylesheet" type="text/css" href="./styles/gameOver.css">
	<link rel="stylesheet" type="text/css" href="./styles/winner.css">
</head>

<body>

	<?php
	session_start();
	unset($_SESSION['gameSave']);
	?>
	<script type="text/javascript" src="./js/functions.js"></script>
	<script type="text/javascript">
		setTimeout(()=>{
			audioYouLose();
		}, 6000)
	</script>

	<main>
		<div class="loser">
			<h1>
			<span id="ylose">YOU LOSE</span>
			<span id="l1">.</span>
			<span id="l2">.</span>
			<span id="l3">.</span>
			</h1>
		</div>

		<div class="player-input-row">

			<p> Time plays against us.  </p>
			<p> Try to defeat him next time, 
			<?php session_start();
				echo $_SESSION["playerName"];
			?>	
			!</p>

			<!-- The form that manages the action of buttons -->

			<form method="POST" action="index.php">
				<button type="submit" value="Main menu" class="btn"> Main Menu</button>
				<input type="submit" value="Ranking" formaction="ranking.php" class="btn">
				<button type="submit" value="Play Again" formaction="game.php" class="btn"> Play Again</button>
			</form>
		</div>
	</main>
</body>
</html>