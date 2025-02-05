<?php

$abstract = "<h2>Abstract Class</h2>
            <li>Template that defined method for a child class </li>
            <li>when we declare in abstract keyword than those method are declare in child (mandantory)</li>
            <li>In Abstract class, we declare methods write implementation in child class</li>";

echo $abstract ."<hr>";


abstract class mainParts{
    abstract function makeEngineColor();
    abstract function makeBodyColor();
    function makeWheelColor(){
        echo "Black Color";
    }
}

class parts extends mainParts{
    function makeEngineColor(){
        echo "The Engineer Color Black";
    }

    function makeBodyColor(){
        echo "Tha Car Body color is Gray";
    }
}


$obj = new parts();
$obj->makeEngineColor();
echo "<br>";
$obj->makeWheelColor();

?>