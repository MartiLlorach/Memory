<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./styles/innerRanking.css">
</head>
<body>
	<div>
		<?php
			$players = explode("\n", file_get_contents("HallOfFame.txt"));
			array_pop($players);
			$cont = 1;
			foreach ($players as $player) {
				$player = explode("#", $player);
				echo "
				<div class=player>
					<div class=left>$cont. $player[0]</div> <div class=right>punt</div>
				</div>
			";
			}	
		?>		
	</div>
</body>
</html>