<?php

$arr = [2, 4, 3, 5, 7, 8, 9, 6];
$target = 10;
$n = count($arr);
$paired = [];
for($i = 0; $i < $n; $i++){
    for($j = 0; $j < $n; $j++){

        // echo $arr[$i] ."+". $arr[$j] ."=". $arr[$i] + $arr[$j]."<br />";
        if($arr[$i] + $arr[$j] == $target){
            // check if the pair already exists in the paired array
            $exists = false;
            foreach($paired as $pair){
                if(($pair[0] == $arr[$i] && $pair[1] == $arr[$j]) || ($pair[0] == $arr[$j] && $pair[1] == $arr[$i])){
                    $exists = true;
                }
            }
 
            if(!$exists){
                $paired[] = [$arr[$i], $arr[$j]];
                echo "Pair found: ".$arr[$i]." + ".$arr[$j]." = ".$target."<br />";
            }
        }
    }

    // echo "<br /><br /><br />--------------------------------------------------<br /><br /><br />";
}

// print_r($paired);