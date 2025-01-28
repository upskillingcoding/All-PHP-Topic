<?php

$prog = "Create a program to find the sum of an array of numbers";
echo $prog . "<br>" ."<hr>";

$array = [1, 2, 3, 4, 5, 10];
$totalSum = 0;
for($i=0; $i<count($array); $i++){
    $totalSum += $array[$i];
}
echo "The Sum of array is ". $totalSum;


?>