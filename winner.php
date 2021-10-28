<!DOCTYPE html>
<html>
<head>
	
	
	<meta charset="utf-8">
	<title>Memory - Winner</title>
	<link rel="stylesheet" type="text/css" href="./styles/winner.css">
	<script type="text/javascript" src="js/functions.js">
		
	</script>
	
</head>

<body >
	<script type="text/javascript" src="./js/functions.js"></script>
	<script type="text/javascript">
		setTimeout(()=>{
			audioApplause();
		}, 4000)
	</script>

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

			<p>Congratulations! You won in <?php echo $_COOKIE["tries"]?> turns!</p>
			<p>Insert your name to save your score!</p>

			<!-- Buttons to go to all the options -->

			<a href="index.php"><button id="mainMenuButton" class="btn">Main Menu</button></a>
			<a href="ranking.php"><button id="rankingButton" class="btn">Ranking</button></a>
			<a href="game.php"><button id="playAgainButton" class="btn">Play Again</button></a>
		</div>
	</main>
	
</body>

</html>