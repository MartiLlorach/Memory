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
		unset($_SESSION['gameSave']);


		$pairs;
		switch($_SESSION["dif"]){
			case 1:
				$pairs = 4;
				break;
			case 2:
				$pairs = 6;
				break;
			case 3:
				$pairs = 8;
				break;
			case 4:
				$pairs = 10;
				break;
			case 5:
				$pairs = 15;
				break;
			case 6:
				$pairs = 20;
				break;

		}


		saveResult($_SESSION["playerName"], $_SESSION["dif"], $_COOKIE['time'], $_COOKIE['tries']-$pairs, $_SESSION["hardcoreMode"]);
	?>
	<main>
		<div class="winner">
			<h1>YOU WIN!</h1>
		</div>

		<div class="player-input-row">
			<div class="message">
				<p>Congratulations,
				<?php echo $_SESSION["playerName"]; ?>
				! You won in <?php echo $_COOKIE["tries"]?> turns!</p>
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
