<?php
/*
 * Interfaces:
 *      - Cannot create that object.
 *      - Contract.
 *          inheritor must define all methods mentioned.
 *      - Nothing can be defined inside interface.
 */
interface Annoying {
    public function buzz();
}

class Bug implements Annoying {
    public function buzz(){}
}

class Police implements Annoying {
    public function buzz(){}
}

function smack(Annoying $o) {
    $o->buzz();
}

$a = new Police();
$a->buzz();
$b = new Bug();

smack($a);
smack($b);