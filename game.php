<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Memory - Game</title>
	<link rel="stylesheet" href="./styles/game.css" type="text/css">
	<link rel="stylesheet" href="./styles/flip-card.css" type="text/css">
	<script type="text/javascript" src="js/functions.js"></script>
</head>

<body>
	<?php
		include "backendFunctions/functions.php";

		// If we have a player in a POST variable, we save the data

		if(isset($_POST["playerName"])){
			saveResult($_POST["playerName"], $_POST["playerLevel"], $_POST["playerTime"], $_POST["playerTries"]);
			unset($_POST["playerName"]);
			unset($_POST["playerTries"]);
		}
	
	?>
	<div id="counterContainer">

		<!-- Player tries -->

		<p id="tries">Tries = 0</p>
	</div>

	<div id="cardsContainer">

		<!-- Card's board -->

		<?php

			generateCards($_GET["difficulty"]);


			$cardsArray = [["blueEyesWhiteDragon","blueEyesWhiteDragon"], 
			["darkMagician","darkMagician"], 
			["potOfGreed","potOfGreed"], 
			["redEyesBlackDragon","redEyesBlackDragon"],
			["BBusterDrake","BBusterDrake"],
			["ExodiatheForbiddenOne","ExodiatheForbiddenOne"],
			["LeftArmoftheForbiddenOne","LeftArmoftheForbiddenOne"],
			["LeftLegoftheForbiddenOne","LeftLegoftheForbiddenOne"],
			["RightArmoftheForbiddenOne","RightArmoftheForbiddenOne"],
			["RightLegoftheForbiddenOne","RightLegoftheForbiddenOne"],
			["MegalosmasherX","MegalosmasherX"],
			["ToonBusterBlader","ToonBusterBlader"],
			["Buten","Buten"],
			["MessengerofPeace","MessengerofPeace"],
			["ReturnoftheDragonLords","ReturnoftheDragonLords"],
			["ThornofMalice","ThornofMalice"],
			["FloodgateTrapHole","FloodgateTrapHole"],
			["MirrorForce","MirrorForce"],
			["CalloftheHaunted","CalloftheHaunted"],
			["GemKnightPearl","GemKnightPearl"],
			["FormulaSynchron","FormulaSynchron"]
			];					
					
			foreach ($cardsArray as $key) {
				$random = rand(0,count($cardsArray)-1);
			 	$nameCard = $cardsArray[$random];


		?>
	</div>
</body>
</html>
