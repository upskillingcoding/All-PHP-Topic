<?php

$prog = "Write a PHP program to find the largest number in an array using prefine function";
echo $prog . "<br>" . "<hr>";

$num = [10, 51, 20, 85, 90, 10, 30];
$largestNum = max($num);
echo "The largest Number of an Array is " . $largestNum . "<hr> <br>";


$prog1 = "without using predefined Function";
echo $prog1 . "<br>" . "<hr>";

$num1 = [10, 51, 20, 85, 90, 10, 30];
$maxValue = $num[0];
for($i=0; $i<count($num1); $i++){
    if($num1[0] > $maxValue){
        $maxValue = $num1[$i];
    }
}

echo "The largest Number of an Array is " . $maxValue;

?>