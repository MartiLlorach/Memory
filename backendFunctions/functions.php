<?php

// This function take a name and tries ands saves them in HallOfFame.txt, each item is separated by # and each entry by a \n

    function saveResult($name, $level, $time, $errors){
        $hallOfFame = fopen("HallOfFame.txt", "a");
        $results = $name."#".$level."#".$time."#".$errors."\n";
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
        // game = name + level + time + errors 
        $username = $game[0];
        $level = intval($game[1]);
        $time = intval($game[2]);
        $errors = intval($game[3]);
        // $advance = intval($game[4]);
        $advanced = 0;
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

?>