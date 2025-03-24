<?php


$arr = [10,20,30,50,40,60];

if(isset($arr)){
    // echo array_sum($arr);
    $sum = 0;
    foreach($arr as $val){
        $sum += $val;
    }

    echo "sum:".$sum;
}