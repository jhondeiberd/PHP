<?php

/*
 * NOT ALLOWED.
 */

class A {
    public function z() {}
}
class B {
    public function z() {}
}
class C extends A, B{ //Suppose inherits from A & B

}

$obj = new C();
$obj->z(); //WHICH method z() is it calling.
//A->z() or B->z();