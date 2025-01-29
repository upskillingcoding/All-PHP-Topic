<?php
$prog = "Create a PHP program to count the number of vowels in a string.";
echo $prog . "<br> <hr> <br>";

$str = "MY Name Is Ritik Gupta";
$countStr = 0;
for($i=0; $i<strlen($str); $i++){
    if($str === 'a' || $str === 'e'|| $str === 'i' || $str === 'o' || $str === 'u'){
        $count += $str[$i];
    }
}

echo $countStr;

$str = "My Name Is Ritik Gupta";
$strLowCase = strtolower($str);

$wordCount = 0;
for($i=0; $i<strlen($strLowCase); $i++){
   if(in_array($strLowCase[$i], ['a', 'e', 'i', 'o', 'u'])){
        $wordCount++;
   }
}
echo $wordCount;

echo "<br><hr><br>";

$str1 = "Hello EveryOne My Name Is Ritik Baniya";
$strLower = strtolower($str1);
$count = 0;
for($i=0; $i<strlen($strLower); $i++){
    if($strLower[$i] == 'a' || $strLower[$i] == 'e' || $strLower[$i] == 'i' || $strLower[$i] == 'o' || $strLower[$i] =='u'){
        $count++;
    }
}

echo "The total vowel of this string $str1 is $count vowel words";

?>
