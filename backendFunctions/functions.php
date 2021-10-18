<?php
    function saveResult($name, $tries){
        $hallOfFame = fopen("HallOfFame.txt", "a");
        $results = $name."#".$tries."\n";
        fwrite($hallOfFame, $results);
    }
?>