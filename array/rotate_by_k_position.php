<?php

$newArr = [];

$arr = [3,7,8,9,10,11];
$k = 3;
$len = count($arr);


for($i = $len - $k; $i <= $len - 1; $i++){
    $newArr[] = $arr[$i];
    unset($arr[$i]);
}


echo "<pre>";
// print_r($arr);
// print_r($newArr);
// print_r(array_merge($newArr, $arr));

// approach 2

echo "// approach 2 <br />";

$arr = [3,7,8,9,10,11];
$k = 3;
$len = count($arr);
$k = $k % $len;
$nArr = $arr;

for($i = 0 ; $i < $k; $i++){
    $last = $nArr[$len - 1];

    for($j = $len - 1; $j > 0; $j--){
        $nArr[$j] = $nArr[$j - 1];    
    }

    $nArr[0] = $last;
}



print_r($nArr);