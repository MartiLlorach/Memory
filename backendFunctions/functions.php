<?php

// This function take a name and tries ands saves them in HallOfFame.txt, each item is separated by # and each entry by a \n

    function saveResult($name, $level, $time, $tries){
        $hallOfFame = fopen("HallOfFame.txt", "a");
        $results = $name."#".$level."#".$time."#".$tries."\n";
        fwrite($hallOfFame, $results);
    }

// taulells de 4x2, 4x3, 4x4, 5x4, 6x5, 8x5

    function generateCards($difficulty){

        var_dump(difficultySelector($difficulty));

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
    }

    function difficultySelector($difficulty) {
        if ($difficulty = 1) return $table = ["rows" => 2, "columns" => 4];
    }

?>