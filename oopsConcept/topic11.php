<?php


interface ProductDetails{

    function image();
    function ownerDetails();

}

class Products implements ProductDetails{
    public function image(){
        echo "Imega";
    }
    public function ownerDetails(){
        echo "Ritik";
    }
}

$obj = new Products();
$obj->image();








?>