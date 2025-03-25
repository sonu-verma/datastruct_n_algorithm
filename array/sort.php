<?php

$arr = [5,4,3,2,1,6,7,8,9];

$len = count($arr);
for($i = 0; $i < $len -1; $i++) {
    for($j = 0; $j < $len - $i -1; $j++) {
        if($arr[$j] > $arr[$j+1]){
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;
        }
    }
}

echo "<pre>";
print_r($arr);