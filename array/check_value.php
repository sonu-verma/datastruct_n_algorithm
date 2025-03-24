<?php

$arr = [10,20,30,40,50];
$target = 10;

var_dump(isset($arr[$target]));

if(in_array($target ,$arr)){
    echo $target." is available.";
} else {
    echo $target." is not available.";
}

$gg = &$arr;

print_r($gg );