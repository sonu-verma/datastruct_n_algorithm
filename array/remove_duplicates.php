<?php

$arr = [10,20,10,25,20,30,40];
$newArr = [];

echo "<pre>";
print_r($arr);

$index = 0;
foreach($arr as $key=>$val) {
    if(isset($newArr[$val])) {
        $newArr[$val] += 1;
        unset($arr[$key]);
    } else {
        $newArr[$val] = 1;
    }
}

print_r(array_values($arr));
