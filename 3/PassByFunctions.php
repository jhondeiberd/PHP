<?php

function doSomething(&$a) {
    $a = 5;
}

$z = 20;doSomething($z);
echo $z;