<?php
//$a = 1;

function z (){
    global $a;
    var_dump(isset($a));

    if (!isset($a))
        $a = 2;
    echo $a;
}

//z();
echo "<hr />";
echo $a;
echo "<hr />";
print_r($GLOBALS);
echo "<hr />";
var_dump(isset($GLOBALS['a']));
if (isset($a) || isset($GLOBALS['a'])) {
    echo "Variable a exists with value $a";
}

echo $GLOBALS['a'];