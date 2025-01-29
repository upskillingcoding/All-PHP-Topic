<?php

    $prog = "Write a PHP program to reverse a string ";
    echo $prog . "<br>". "<hr>";


    echo " using predefined Function";
    $str = "My Name Is Ritik Gupta";
    $revStr = strrev($str);
    echo "This String is $str and Reverse String is : -". $revStr;


    echo "<br><br> WithOut Using Predefined Function <hr>";


    $str1 = "My Name Is Ritik Baniya";
    $reverseStr = "";
    for($i=strlen($str1) -1; $i >= 0; $i--){
        $reverseStr .= $str1[$i];
    }
    echo "Reverse String :- ". $reverseStr;

?>