<?php

$prog = "Write a PHP program that check if a string is a palindrome or not ";
echo $prog . "<hr> <br>";

$str = "MAd1am";
$strLower = strtolower($str);     // convert the string in lower case
$strRemove = str_replace(" ", " ", $strLower);  //remove the whitespace
$strRev = "";                               // add the blank string
$length = strlen($strRemove);           // find the length of the string
for($i=($length-1); $i>=0; $i--){               // looping the string
    $strRev = $strRev.$strRemove[$i];             // append the string
}

if($strRemove === $strRev){                 // compare the two string
    echo $str. " is the Palindrome";
}
else{
    echo $str. " is not the Palindrome";
}





?>