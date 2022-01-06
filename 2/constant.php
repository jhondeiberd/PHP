<?php

$a = 34;
const THIS_WILL_NOT_CHANGE = "I am great !";
define("ANOTHER_CONSTANT", "I am not so great!");


echo "Hello $a <br />";
echo "Hello " . THIS_WILL_NOT_CHANGE . "<br />";

$b = THIS_WILL_NOT_CHANGE;

