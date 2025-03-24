<?php

$arr1 = [10,20,30,40,50];
$arr2 = [60,70,80];

// foreach($arr1 as $val){
//     $arr2[] = $val;
// }

echo "<pre>";
// print_r($arr2);

// Approach 2 

$newArr = [];
$len1 = count($arr1);
$len2 = count($arr2);

$totalLength = $len1 + $len2;

for($i = 0; $i < $totalLength; $i++){
    if($i < $len1){
        $newArr[] = $arr1[$i];
    }else{
        $newArr[] = $arr2[$i - $len1];
    }
}

print_r($newArr);