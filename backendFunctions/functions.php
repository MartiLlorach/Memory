<?php

// This function take a name and tries ands saves them in HallOfFame.txt, each item is separated by # and each entry by a \n

    function saveResult($name, $level, $time, $errors, $hardcore){
        $hallOfFame = fopen("HallOfFame.txt", "a");
        $results = $name."#".$level."#".$time."#".$errors."#".$hardcore."\n";
        fwrite($hallOfFame, $results);
    }

    function aasort (&$array, $key) {
        $sorter = array();
        $ret = array();
        reset($array);
        foreach ($array as $ii => $va) {
            $sorter[$ii] = $va[$key];
        }
        asort($sorter);
        foreach ($sorter as $ii => $va) {
            $ret[$ii] = $array[$ii];
        }
        $array = array_reverse($ret);

    }

    function setPuntuation($game){
        // game = name + level + time + errors + advanced
        $username = $game[0];
        $level = intval($game[1]);
        $time = intval($game[2]);
        $errors = intval($game[3]);
        $advanced = intval($game[4]);
        $puntuation = (10 + (($time+5)**($level/2)) - ($errors**(1/2) * 5));
        $puntuation = $puntuation + (1.5 * $puntuation * $advanced);
        if ($puntuation<=0) {
            $puntuation = 1;
        }
        return [$username, $puntuation];
    }   
    
    function sortGames(){
        $games = explode("\n", file_get_contents("HallOfFame.txt"));
        array_pop($games);

        $puntuatedGames = [];
        foreach ($games as $game) {
            $game = explode("#", $game);
            $puntuation = setPuntuation($game);
            array_push($puntuatedGames, [$puntuation[0], floor($puntuation[1])]); 
        }
        aasort($puntuatedGames,1);
        return $puntuatedGames;
    }


    // This function handles all the functions to generate the cards

    function generateCards($difficulty, $hardcore){

        $gameTable = difficultySelector($difficulty, $hardcore);
        
        if ($hardcore == 1) {
            echo "<script> extraCards = ".$gameTable["rows"].";</script>";
        }

        $cardsArray = cardsSelection($gameTable["columns"], $gameTable["rows"], $hardcore);
      
        printCards($cardsArray);

    }

    // This function returns the columns and rows depending on difficulty

    function difficultySelector($difficulty, $hardcore) {
        if ($difficulty == "1") {
            return ["columns" => 4 + $hardcore, "rows" => 2];

        } elseif ($difficulty == "2") {
            return ["columns" => 4 + $hardcore, "rows" => 3];

        } elseif ($difficulty == "3") {
            return ["columns" => 4 + $hardcore, "rows" => 4];

        } elseif ($difficulty == "4") {
            return ["columns" => 5 + $hardcore, "rows" => 4];

        } elseif ($difficulty == "5") {
            return ["columns" => 6 + $hardcore, "rows" => 5];

        } elseif ($difficulty == "6") {
            return ["columns" => 8 + $hardcore, "rows" => 5];
        }
    }

    // This function returns an array of cards randomly selected

    function cardsSelection($columns, $rows, $hardcore) {
        $quantityOfCards = (($columns - $hardcore) * $rows) / 2;
        $gameCards = [];
        $extraCards = [];

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
        ["DragonLordToken","DragonLordToken"],
        ["BESBigCoreMK3","BESBigCoreMK3"],
        ["JunkSynchron","JunkSynchron"],
        ["Amaterasu","Amaterasu"],
        ["GiltiGearfriedtheMagicalSteelKnight","GiltiGearfriedtheMagicalSteelKnight"],
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
        
        if ($hardcore == 1){
            for ($i = 0 ; $i < $rows; $i++){
                $randomCard = rand(0,count($cardsArray)-1);
                array_push($extraCards, $cardsArray[$randomCard][0]);
                array_splice($cardsArray, $randomCard, 1);
            }

            array_push($gameCards, $extraCards);
        }

        return $gameCards;
    }

    // This function prints the cards into the webpage

    function printCards($cardsArray) {

        while(count($cardsArray) > 0) { 
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

    function printEasterEgg(){
        echo "
            <div id='containerEasterEgg'>
                <div id='head' class='EGcard' state='unflipped'>
                    <div class='card-inner'>
                        <div class='card-front'>
                            <img src='./images/ExodiatheForbiddenOne.png'>
                        </div>
                        <div class='card-back'>
                            <img src='./images/backCards.jpeg'>
                        </div>
                    </div>
                </div>
                <div id='leftArm' class='EGcard' state='unflipped'>
                    <div class='card-inner'>
                        <div class='card-front'>
                            <img src='./images/LeftArmoftheForbiddenOne.png'>
                        </div>
                        <div class='card-back'>
                            <img src='./images/backCards.jpeg'>
                        </div>
                    </div>
                </div>
                <div id='leftLeg' class='EGcard' state='unflipped'>
                    <div class='card-inner'>
                        <div class='card-front'>
                            <img src='./images/LeftLegoftheForbiddenOne.png'>
                        </div>
                        <div class='card-back'>
                            <img src='./images/backCards.jpeg'>
                        </div>
                    </div>
                </div>
                <div id='rightArm' class='EGcard' state='unflipped'>
                    <div class='card-inner'>
                        <div class='card-front'>
                            <img src='./images/RightArmoftheForbiddenOne.png'>
                        </div>
                        <div class='card-back'>
                            <img src='./images/backCards.jpeg'>
                        </div>
                    </div>
                </div>
                <div id='rightLeg' class='EGcard' state='unflipped'>
                    <div class='card-inner'>
                        <div class='card-front'>
                            <img src='./images/RightLegoftheForbiddenOne.png'>
                        </div>
                        <div class='card-back'>
                            <img src='./images/backCards.jpeg'>
                        </div>
                    </div>
                </div>
            </div>
            <div id='exodiaGif'>
                <img src='./images/exodia.gif'>
            </div>
        ";
    }

?>