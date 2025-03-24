<?php

$arr = [1,2,3,4,5,1,23,4,5,6,1,2,3,4,5,2];
$target = 23;

$newArr = [];

foreach($arr as $val){
    if(isset($newArr[$val])){
        $newArr[$val] += 1;
    }else{
        $newArr[$val] = 1;
    }
}


if(isset($newArr[$target])){
    echo $target. " value occurrences ". $newArr[$target]. " times";
}else{
    echo $target." value not found in array";
}