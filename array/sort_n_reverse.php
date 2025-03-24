<?php

$arr = [150,20,5,78,2,3,10];

$len = count($arr);

if($len > 0){
    for($i = 0; $i < $len - 1; $i++){
        for($j = 0; $j < $len - 1 - $i; $j++){
            if($arr[$j] > $arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
}


$halfLen = $len / 2;

for($i = 0; $i < $halfLen; $i++){
    $temp = $arr[$len - 1];
    $arr[$len-1] = $arr[$i];
    $arr[$i] = $temp;

    $len--;
}

echo "<pre>";
print_r($arr);

// $a = 10;
// $b = 20;

// $a = ($a + $b) - $a;
// $b = ($b + $a) - $a;