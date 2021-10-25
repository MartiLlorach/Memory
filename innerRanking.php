<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./styles/innerRanking.css">
</head>
<body>
	<div>
		<?php
			include "./backendFunctions/functions.php";

			$orderedPlayers = sortGames();

			$cont = 1;
			foreach ($orderedPlayers as $player) {
				echo "
					<div class=player>
						<div class=left>$cont. $player[0]</div> <div class=right>$player[1] punt</div>
					</div>
				";
				$cont++;
			}
				
				
		?>		
	</div>
</body>
</html>