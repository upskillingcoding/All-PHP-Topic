<?php

$final = "<h2>Final Keyword</h2>
        <p>When we create class and you want to do not inherit the class than use the final and same as method </p>";
echo $final ."<hr>";

class Honda {
   final function companyName(){
        echo "Honda";
    }
}

class car extends Honda{
    // function companyName(){ //Cannot override final method Honda::companyName() 
    //     echo "Honda city";
    // }
}

$obj = new car();
$obj->companyName();



?>