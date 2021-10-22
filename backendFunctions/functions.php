<?php

// This function take a name and tries ands saves them in HallOfFame.txt, each item is separated by # and each entry by a \n

    function saveResult($name, $level, $time, $tries){
        $hallOfFame = fopen("HallOfFame.txt", "a");
        $results = $name."#".$level."#".$time."#".$tries."\n";
        fwrite($hallOfFame, $results);
    }

    // This function handles all the functions to generate the cards

    function generateCards($difficulty){

        $gameTable = difficultySelector($difficulty);

		$cardsArray = cardsSelection($gameTable["columns"], $gameTable["rows"]);
      
        printCards($cardsArray);

    }

    // This function returns the columns and rows depending on difficulty

    function difficultySelector($difficulty) {
        if ($difficulty == "1") {
            return ["columns" => 4, "rows" => 2];

        } elseif ($difficulty == "2") {
            return ["columns" => 4, "rows" => 3];

        } elseif ($difficulty == "3") {
            return ["columns" => 4, "rows" => 4];

        } elseif ($difficulty == "4") {
            return ["columns" => 5, "rows" => 4];

        } elseif ($difficulty == "5") {
            return ["columns" => 6, "rows" => 5];

        } elseif ($difficulty == "6") {
            return ["columns" => 8, "rows" => 5];
        }
    }

    // This function returns an array of cards randomly selected

    function cardsSelection($columns, $rows) {
        $quantityOfCards = ($columns * $rows) / 2;
        $gameCards = [];

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
        ["FormulaSynchron","FormulaSynchron"],
        ["MagicianofBlackChaos","MagicianofBlackChaos"],
        ["BlackPendant","BlackPendant"],
        ["GalaxySerpent","GalaxySerpent"],
        ["DarkMagicianGirl","DarkMagicianGirl"]
        ];

        for ($i=0; $i < $quantityOfCards; $i++) { 
            $randomCouple = rand(0,count($cardsArray)-1);
            array_push($gameCards, $cardsArray[$randomCouple]);
            array_splice($cardsArray, $randomCouple, 1);
        }

        return $gameCards;
    }

    // This function prints the cards into the webpage

    function printCards($cardsArray) {

        $cardsIntoPlay = count($cardsArray) * 2;

        for ($i=0; $i < $cardsIntoPlay; $i++) { 
            $random = rand(0, count($cardsArray)-1);
		 	$nameCard = $cardsArray[$random][0];
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

			array_splice($cardsArray[$random], 0,1);

            if(count($cardsArray[$random]) == 0) {
                array_splice($cardsArray, $random, 1);
            }
        }
    }

?>