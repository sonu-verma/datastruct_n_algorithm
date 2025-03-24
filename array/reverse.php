<?php

$arr = [1,2,3,4,5,6];

$len = count($arr);
$loop = round(count($arr) / 2);

for($i = 0; $i < $loop ; $i++){
    $tem = $arr[$i];
    $arr[$i] = $arr[$len-1];
    $arr[$len-1] = $tem;
    $len--;
}

echo "<pre>";
print_r($arr )."<br />";
