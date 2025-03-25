<?php


$arr = [50,10,20,30,40,50];
$len = count($arr);

$second = $arr[0];
$largest = $arr[0];

for($i = 0; $i < $len -1; $i++) {
   for($j = 0; $j < $len - 1 - $i; $j++){
        if($arr[$j] > $arr[$j+1]){
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;
        }
   }
   $second = $arr[$i];
   $largest = $arr[$i+1];
}

print_r($arr);
echo $second;

// approach 2

$arr2 = [50, 10, 20, 30, 40, 50];

$largest = 0;
$second = 0;

foreach ($arr2 as $num) {
    if ($num > $largest) {
        $second = $largest;  // Update second highest before changing largest
        $largest = $num;
    } elseif ($num > $second && $num != $largest) {
        $second = $num;  // Update second only if it's smaller than largest
    }
}

if ($second == 0) {
    echo "No second highest value found.";
} else {
    echo "Second highest number: " . $second;
}