<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Main Game</title>
	<link rel="stylesheet" href="./styles/gameStyle.css" type="text/css">
	<link rel="stylesheet" href="./styles/flip-card.css" type="text/css">
	<script type="text/javascript" src="js/functions.js"></script>
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
	<div id="counterContainer">
		<p id='counter'>Cont = 0</p>
	</div>
	<div id="cardsContainer">
				<?php
					$cardsArray=["blueEyesWhiteDragon","blueEyesWhiteDragon",
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
