<?php
$static = "<h2>Static Keyword</h2>
          <p>Static metgod and property are when we dont create object and call</p>";

echo $static ."<hr>";


class Honda {

    static public $countryName = "Japan";
    static function companyName(){
        echo "honda city";
    }
}
Honda::companyName();
echo Honda::$countryName;


?>