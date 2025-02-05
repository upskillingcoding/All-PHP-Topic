<?php

$construction = "<h2>Constructor</h2>
                <ul>
                    <li>A special functioni in a class</li>
                    <li>It Call automatically when an object is created</li>
                    <li> __construct is fixed name for constructor</li>
                </ul>";
echo $construction . "<hr>";



class Constructor {

    function __construct(){
        $this->setName();
        echo "<br>";
        echo "This is Constructor Call";
    }

    function setName(){
        echo "Ritik Gupta";
    }

}

$obj = new Constructor();


?>