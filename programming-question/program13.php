"<?php
$prog = "Write a PHP program to sort an array in ascending order.";
echo $prog . "<hr> <br>";

$num = [45, 10, 85, 20,10, 98, 64];
for($i=0; $i<count($num); $i++){
    for($j=0; $j<count($num) -1; $j++){
        if($num[$j] > $num[$j+1]){
            $temp = $num[$j+1];
            $num[$j+1] = $num[$j];
            $num[$j] = $temp;
        }
    }
}

echo "<pre>";
print_r($num);

echo "<hr>";

$name = ["ritik", "ashok", "shubhi", "aman"];
for($i=0; $i<count($name); $i++){
    for($j=0; $j<count($name) -1; $j++){
        if($name[$j] > $name[$j+1]){
            $temp = $name[$j+1];
            $name[$j+1] = $name[$j];
            $name[$j] =$temp;
        }
    }
}
echo "<pre>";
print_r($name);



?>