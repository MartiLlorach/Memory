<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Main Game</title>
  	<link rel="stylesheet" href="./styles/gameStyle.css" type="text/css">
	<script type="text/javascript" src="js/functions.js"></script>
</head>
<body>
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
						echo "<div class='card' name='$nameCard' state='unflipped' onclick='flip(this)'>
								<img src='./images/backCards.jpeg'>
								</div>";
						array_splice($cardsArray,$random,1);
					 }
					?>
	</div>
</body>
</html>
