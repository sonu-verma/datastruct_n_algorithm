<?php

$arr = [1, 2, 2, 3, 1];
$newArr = [];
if(count($arr)){
    foreach($arr as $value){
        if(in_array($value, $newArr) === false){
            $newArr[$value] = 1;
        }else{
            $newArr[$value]  += 1;
        }
    }
}

echo "<pre>";
print_r($newArr);