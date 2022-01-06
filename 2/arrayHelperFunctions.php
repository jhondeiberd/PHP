<?php
function console_log($data)
{
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}

$a = [1,2,3,4];
$b = ["a", "b", "c", "d"];
$c = array( "a" => 1, "b" => 2);
$d = array("b" => 2, "a" =>1);


//Ascending Order
//sort($a);   //Sort by Key
//asort($a);  //Sort by Value
arsort($d); //Sort in reverse

//Descending Order
//rsort($a);
//ksort($a);  //Sort by Value
//krsort($a);


var_dump($d);
