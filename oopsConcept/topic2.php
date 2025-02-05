<?php

$var = "<ul>
        <h2>Class</h2>
            <li>Class is a blue print for create object.</li>
            <li>Template that define the variable and methods for a specific type of object</li>
        <h2>Object</h2>
            <li>An object is an instance/copy of a class</li>
            <li>we cab create multiple objects</li>
      </ul>";
echo $var . "<hr>";

class MyClass{

    public $additionPoint = 30; // create a variable and if you want to get this value than using the $this and than get the value.
    function add(){     //create a method
        $sum = 4 + 9;
        echo "The sum of 4 and 9 is " . ($sum + $this->additionPoint);
    }

    function substration(){
        $sub = 9-4;
        echo "The substraction of 9 and 4 is ".$sub;
    }
}

$obj = new MyClass();
$obj->add();
echo "<br>";

$obj->substration();



?>