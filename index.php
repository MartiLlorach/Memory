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
					Bienvenido jugador! Acabas de adentrarte en el mundo mágico de la memoria ambientado en Yu-Gi-Oh. 
					Para empezar a jugar debes pulsar el botón de play. Una vez accionado podrás observar un tablero con cartas giradas, tu objetivo para ganar la partida es girar estas cartas y encontrar las que són iguales... Pero cuidado! Cuando no encuentres una pareja de cartas tu puntuación se verá afectada. Tu objetivo es sacar todas las parejas fallando lo menos posible!
				</p>
			</div>
		</div>
	</div>
</body>
</html>