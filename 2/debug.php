<?php

function console_log($data)
{
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}

$a = array('a' => 'apple', 'b' => 'banana', 'c' => array('x', 'y', 'z'));
print_r($a);

console_log($a);