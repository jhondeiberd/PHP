<?php

//redirect("index.php");
//header("location:index.php");
//header("location", "index.php");

//
//function hr(){
//    return "<hr/>";
//
//}
//
//hr ();

//$t = array(array('a','b','c'), array('d','e','f'));
$t = array(1 => "A", 3 => "B", 5 => "C", 7 => "D", "E", "F");
//echo $t[1][1];
foreach ($t as $k => $v){
    echo "$v-$k";
}



?>

