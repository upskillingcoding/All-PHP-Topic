<?php

    $prog = "Write a PHP program to reverse a string ";
    echo $prog . "<br>". "<hr>";


    echo " using predefined Function";
    $str = "My Name Is Ritik Gupta";
    $revStr = strrev($str);
    echo "This String is $str and Reverse String is : -". $revStr;


    echo "<br><br> WithOut Using Predefined Function <hr>";


    $str1 = "My Name Is Ritik Baniya";
    $reverseStr = "";       //initialize an empty string to hold the reverse string
    for($i=strlen($str1) -1; $i >= 0; $i--){        // looping through string in reverse order
        $reverseStr .= $str1[$i];                       // append each character through the loop
    }
    echo "Reverse String :- ". $reverseStr;


    echo "<br><hr>";
    $str2 = "RITIK GUPTA";
    $strlen = strlen($str2);
    for($i=($strlen-1); $i>=0; $i--){
        echo $str2[$i];
    }

?>