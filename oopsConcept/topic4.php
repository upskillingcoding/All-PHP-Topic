<?php
$inheritance = "<h2>Inheritance</h2>
                <ul>
                    <li>Inheritance in php allow a class to inherit propertied and method from another class.</li>
                    <li>passing the feature of parent to child.</li>
                    <li>The extends keyword is used to indicate inheritanc.e</li>
                    <li>PHP support single inheritance meaning a class can inherit from onlu one parent class.</li>
                    <li>The child class can override methods of the parent class by redefining them</li>
                </ul>";
echo $inheritance . "<hr>";


class Auth{
    function login($userType){
        echo "$userType Login";
    }
}
class Student extends Auth{
    function totalStudent(){
        echo "The Total Student in the School is ". 1101;
    }
}

class Teacher extends Auth{
    function totalTeacher(){
        echo "The Total Teacher in the School is ". 101;
    }
}



$obj = new Student();
$obj->login("Student");echo "<br>";
$obj->totalStudent();

echo "<br>";

$obj = new Teacher();
$obj->login("Teacher");echo "<br>";
$obj->totalTeacher();
?>