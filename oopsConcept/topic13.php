<?php

$traitover = "Method Traits Overriding <hr>";
echo $traitover;

trait ParentCompany1{
    function getEmp(){
        echo 100;
    }
}

trait ParentCompany2{
    function getEmp(){
        echo 300;
    }
}

class company{
    use ParentCompany1;
    use ParentCompany2{
        ParentCompany1::getEmp insteadof ParentCompany2;
        ParentCompany2::getEmp as getEmpCompany;
    }

    // function getEmp(){
    //     echo 500;
    // }
}

$cmp = new company();
$cmp->getEmp();
echo "<br>";
$cmp->getEmpCompany();



?>