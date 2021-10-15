<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Main Game</title>

  <link rel="stylesheet" href="../styles/gameStyle.css" type="text/css">
</head>
<body>
	<div id="counterContainer">
		<p id='counter'>Cont=0</p>
	</div>
	<div id="tableContainer">
				<?php
					$cardsArray=["heart","heart",
								"club","club",
								"diamond","diamond",
								"spade","spade"];					
					
					foreach ($cardsArray as $key) {
						$random = rand(0,count($cardsArray)-1);
					 	$nameCard = $cardsArray[$random];
						echo "<div name='$nameCard' state='unflipped' onlcick='flip(this)'>
								<img src='../images/club.png'>
								</div>'";
						array_splice($cardsArray,$random,1);
					 }
					?>
	</div>
</body>
</html>
