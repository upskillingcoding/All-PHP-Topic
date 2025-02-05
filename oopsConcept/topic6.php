<?php
    $polymorphism = "<h2>Polymorphism</h2>
                    <p>Polymorphism means the same method behaves differently in different classes. It is of :-</p>
                    <li>Method Overriding</li>
                    <li>Method OverLoading(using __call())</li>
                    <li>Interfaces</li>";
    echo $polymorphism ."<hr>";

    echo "Method OverRiding :- when the same function will create on parent class and child class and inherit the class than only call on child class function <br>";


    class Student{
        function tooperMarks(){
            echo '98.8%';
        }

        function age(){
            echo "The Age of student is ". 10;
        }
    }

    class Teacher extends student{
        function age(){
            echo "The Age of Teacher  is ". 40;
        }
    }

    $obj = new Teacher();
    $obj->tooperMarks();
    echo "<br>";
    $obj->age();



?>