<?php

$arr = [0, 15, 0, 30, 12];

$len = count($arr);

for($i = 0; $i < $len; $i++){
    for($j = 0; $j < $len; $j++){
        if($arr[$j] == 0 ){
            $temp = $arr[$j];
            $arr[$j] = $arr[$i];
            $arr[$i] = $temp;
        }
    }
}


echo "<pre>";
print_r($arr);