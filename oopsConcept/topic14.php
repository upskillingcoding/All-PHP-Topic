<?php
 include('topic14A.php');
 include('topic14B.php');
    $namespace = "<h2>NameSpace</h2>
                <li>They allow for better organization by grouping classes that work together to perform a task</li>
                <li>They allow the same name to be used for more than one class</li>";
    echo $namespace ."<hr>";


    $obj = new student\joiningDate();
    $obj->studentDate();

    echo "<br>";

    $obj1 = new teacher\joiningDate();
    $obj1->TeachertDate();
?>