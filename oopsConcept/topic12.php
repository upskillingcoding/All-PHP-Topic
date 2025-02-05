<?php
$trait = "<h2>Traits is mechanism of reuse the code of single inheritance</h2> <hr>";
echo $trait;

trait parentCompant1{
    function getTotalEmp(){
        echo 200;
    }
}


trait parentCompant2{
    function getTotalOffice(){
        echo 20;
    }
    function getTotalProject(){
        echo 2;
    }
}

class company{
    use parentCompant1;
    use parentCompant2;

}

$cmp = new company();
$cmp->getTotalEmp();
echo "<br>";
$cmp->getTotalOffice();
echo "<br>";
$cmp->getTotalProject();


?>