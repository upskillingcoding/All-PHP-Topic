<?php
$prog = "create a PHP program to find the factoial of a number";
echo $prog . "<br>" . "<hr>";

$facNum = 5;
$sumFac = 1;
for($i=1; $i<=$facNum; $i++){
    $sumFac *= $i;
}
echo "The factorial of $facNum is :- ". $sumFac;


?>