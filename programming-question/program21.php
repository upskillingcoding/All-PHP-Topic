<?php
$prog = "Create a PHP program to count the number of words in a string.";
echo $prog . "<hr>";

$str = "Hello My Name is Ritik Gupta";
$countWord = str_word_count($str);
echo "The Total Word in this String $str is ".$countWord . " words";


?>