<?php

$prog = "Create a PHP program to check if a string contains only digits.";
echo "$prog <br><hr>";

$strDigit = "123456";
if(ctype_digit($strDigit)){
    echo "String Contain Only Digit";
}
else{
    echo "String Cann't Contain Only Digit";
}

?>