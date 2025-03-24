<?php

$arr = [80, 30, 50, 140, 20, 10];
$len = count($arr);

// -----------------------  1st Approach  ------------------------ 

if($len > 0){
    for($i = 0; $i < $len - 1; $i++){
        for($j = 0; $j < $len - $i - 1; $j++) {
            if($arr[$j] > $arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
}

echo "Largest:". $arr[$len-1].", Smallest:". $arr[0]."<br/>";


// -----------------------  2nd Approach  ------------------------ 


$largest = $arr[$len-1];
$smallest = $arr[0];

foreach($arr as $val){
    if($val > $largest){
        $largest = $val;
    }

    if($val < $smallest){
        $smallest = $val;
    }
}

echo "Largest:". $largest.", Smallest:". $smallest;