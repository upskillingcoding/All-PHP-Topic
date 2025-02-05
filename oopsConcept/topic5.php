<?php
$modifier = "<h2>Access Modifier</h2>
            <ul>
                <p>Access Modifier decides where we can access the method and properties</p>
                <li>Type of Access Modifier</li>
                <li>Public : Access everywhere</li>
                <li>Protected : Access inherit class</li>
                <li>Private : Access inside the current class only </li>
            </ul>";
echo $modifier . "<hr>";

// ***********************************************************************************
echo "Private Method it is used for basicall condition <br>";
class Teacher{

    private function questionPaper(){
        echo "question for student";
    }

    function exam(){
        $this->questionPaper();
    }

}

$obj = new Teacher();
$obj->exam();
// **********************************************************************************
echo " <hr>";
echo "Protected Method <br>";

class Bank{
    protected function childAccount(){
        echo "The Child Acoount Balance is 70,000";
    }
}

class Parents extends Bank{
    function checkBalance(){
        $this->childAccount();
    }
}


$bankObj = new Parents();
$bankObj->checkBalance();
// ***********************************************************************************
echo " <hr>";
echo "Public Method <br>";

class BestName {
    function names(){
        echo "Rohan";
    }
}

$bestName = new BestName();
$bestName->names();


?>