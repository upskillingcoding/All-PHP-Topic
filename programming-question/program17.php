<?php

$prog = "Write a PHP program to remove all vowels from a string.";
echo $prog . "<hr> <br>";

$str = "Hello EveryOne My Name Is Ritik Gupta and I am From Bareilly Uttar Pradesh";
$strLower = strtolower($str);
$strNew = "";
for($i=0; $i<strlen($strLower); $i++){
    if(in_array($strLower[$i], ['a','e','i','o', 'u'])){
        $strNew .= $str[$i];
    }
}

echo "Remove All The Vowel in this String $str and final String is $strNew";


?>