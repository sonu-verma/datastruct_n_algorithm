<?php

$arr = [0, 15, 0, 30, 12];
$len = count($arr);


// remove zero from array
$posNum = 0;
echo "<pre>";
foreach($arr as $val){
    if($val != 0){
        $arr[$posNum] = $val;
        $posNum++;
    }
}

print_r($arr);

for($i = $posNum; $i < $len; $i++){
    $arr[$i] = 0;
}


for($i = 0; $i < $posNum; $i++){
    for($j = 0; $j < $posNum - $i - 1; $j++){
        if($arr[$j] > $arr[$j+1]){
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;

        }
    }
}

print_r($arr);