<?php
/*
 * Circumvent multiple inheritance problem.
 */

interface A {
    public function z();
}
interface B {
    public function z();
}

class C implements A, B {
    public function z() {
        echo "Z";
    }
}

$obj = new C();
$obj->z();


function callA(A $obj) {
    $obj->z();
}
function callB(B $obj) {
    $obj->z();
}
callA($obj);
callB($obj);

