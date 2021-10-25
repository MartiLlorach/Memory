<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Memory - Game</title>
	<link rel="stylesheet" href="./styles/game.css" type="text/css">
	<link rel="stylesheet" href="./styles/flip-card.css" type="text/css">
	<script type="text/javascript" src="js/functions.js"></script>
</head>

<body onload="innitTimer()">
	<?php
		session_start();
		$_SESSION['playerName'] = $_POST['playerName'];
		
	?>
	
	<div id="headerContainer">
		<div id="cancelContainer">

			<!-- Cancel button -->

			<a href="index.php"><button id="cancel" class="btn" >Cancel</button></a>
		</div>

		<div id="timerContainer">

			<!-- Timer -->

			<p>Timer = </p><p id="timer"></p>
		</div>

		<div id="counterContainer">

			<!-- Player tries -->

			<p id="tries">Tries = 0</p>
		</div>
	</div>
	

	<div id="cardsContainer">

		<!-- Card's board -->

		<?php

			// We make an array with all the cards and then we choose them randomly

			$cardsArray = ["blueEyesWhiteDragon","blueEyesWhiteDragon", 
			"darkMagician","darkMagician", 
			"potOfGreed","potOfGreed", 
			"redEyesBlackDragon","redEyesBlackDragon"];					
					
			foreach ($cardsArray as $key) {
				$random = rand(0,count($cardsArray)-1);
			 	$nameCard = $cardsArray[$random];

				echo "
					<div class='card' name='$nameCard' state='unflipped' onclick='flip(this)'>	
						<div class='card-inner'>
							<div class='card-front'>
								<img src='./images/$nameCard.png'>
							</div>
							<div class='card-back'>
								<img src='./images/backCards.jpeg'>
							</div>
						</div>
					</div>						
					";

				array_splice($cardsArray,$random,1);
			 }
			?>
	</div>
</body>
</html>
