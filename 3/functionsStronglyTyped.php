<?php
function discountForElderly(string $name,int $yearBorn) {

    if (!is_numeric($yearBorn)){
        echo "Incorrect age, needs to be an integer in this format: 1987";
        return;
    }
    $age = date("Y") - $yearBorn;
    $discount = false;
    if ($age >= 65) {
        $discount = true;
    }

    echo "Hello $name, you are ";
    if ($discount){
        echo "entitled to 200 $ discount.";
    }
    else {
        echo "Not entitled to any discount";
    }
}

discountForElderly("1344", "1234");





