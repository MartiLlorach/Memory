<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Memory - Main Page</title>
	<link rel="stylesheet" type="text/css" href="./styles/index.css">
	<script type="text/javascript" src="js/functions.js"></script>
</head>

<body >
	<main>
		<?php
		session_start();
		unset($_SESSION['gameSave']);
		?>

		<!-- Logo -->

		<div class="logo">
			<h1>Me-Mo-Ry!</h1>
		</div>

		<!-- Form Username -->

		<div class="userForm">
			<form method="POST" action="game.php">
				<input class="inputField" id="playerName" name="playerName" type="text" placeholder="Your player name" oninput="validateBtn('playerName', 'btn-primary')">

		</div>

		<div class="bottom-row">

			<!-- Buttons -->

			<div class="bottom-left">
				<div class="nav-buttons">
					<input type="submit" value="Play" formaction="game.php" class="btn btn-primary" id="btn-primary" disabled="true">
					<button id="rankButton" class="btn btn-secondary" formaction="ranking.php">Ranking</button>
				</div>
					<h2>Difficulty Selector</h2>
					<div class="difficulty-buttons">
					<div id="difficulty-selector-left">
						<input type="radio" id="dif1" name="dif" value="1" checked>
						<label for="dif1">Tristan</label>
						<input type="radio" id="dif2" name="dif" value="2">
						<label for="dif2">Joey</label>
						<input type="radio" id="dif3" name="dif" value="3">
						<label for="dif3">Bakura</label>
					</div>
					<div id="difficulty-selector-right">
						<input type="radio" id="dif4" name="dif" value="4">
						<label for="dif4">Yugi</label>
						<input type="radio" id="dif5" name="dif" value="5">
						<label for="dif5">Kaiba</label>
						<input type="radio" id="dif6" name="dif" value="6">
						<label for="dif6">Atem</label>
					</div>
				</div>
				<div>
					<input type="checkbox" id="hardcoreMode" name="hardcoreMode" value="activated">
					<label for="hardcoreMode">Enter The Shadow Realm (Advanced Mode)</label>
				</div>
				</form>
			</div>

			<!-- Instructions -->
			
			<div class="bottom-right">
				<h2>Welcome human, you've stepped into the magical world of Me-Mo-Ry!</h2>
				<p>To start playing you must press the play button. Once activated you will be able to see a board filled with cards. Your goal is to turn these cards and to find pairs... But be careful! When you don't flip a pair your score will be affected. Your goal is to get all the pairs, while failing the least possible!</p>
			</div>

		</div>
	</main>
</body>
</html>