<?php

$arr = [5,0,3,9,2];

$max = 0;

foreach($arr as $num){
    if($max > $num){
        continue;
    } else {
        $max = $num;
    }
}

echo "The maximum number is: " . $max;

