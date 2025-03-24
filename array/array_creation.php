<?php

// $arr[] = 4;
// $arr[] = 3;
// $arr[] = 6;
// $arr[] = 8;

$arr = [10, 20, 30, 40];

if($arr){
    foreach($arr as $key => $val){
        echo $key." - ".$val."<br />";
    }
}