<?php
$prog = "Create a PHP program to replace all spaces in a string with an underscore.";
echo $prog . "<hr> Using Predfined Function <br>";

$str = "Hello My Name Is Ritik Gupta From Bareilly While working In Delhi NCR";
$strReplace = str_replace(" ", "_", $str);
echo $strReplace;


echo "<hr> Using WithOut Predefined Function <br>";
$str1 = "Hello My Name Is Ritik Gupta From Bareilly While working In Delhi NCR";
$strNew = "";
for($i=0; $i<strlen($str1); $i++){
    if($str1[$i] == " "){
        $strNew .= "_";
    }
    else {
        $strNew .= $str1[$i];
    }
}
echo $strNew;

?>