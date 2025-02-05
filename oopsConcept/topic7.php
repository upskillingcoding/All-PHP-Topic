<?php

$const = "<h2>Constant</h2>
        <p>Constant are those which are not change the value</p>
        <li>when we create constant than do not create the object to call the function </li>
        <li>you can simply call the self:: and function name</li>";

echo $const ."<hr>";


class ConstName{
    const collegName = "FIET College";

    function getCollegeName(){
        // echo self::collegName;
        echo ConstName::collegName;
    }
}

echo ConstName::collegName;
echo "<br>";

$obj = new ConstName();
$obj->getCollegeName();

?>