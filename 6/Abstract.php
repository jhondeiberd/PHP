<?php
/*
 *  Abstract Rules:
 *      -> Same as interface.
 *              A semi-contract.
 *      -> Cannot create that object
 */

abstract class Person {
    private string $_fName, $_lName;
    public abstract function someMethod();
    public function getFullName() {
    return $this->_fName . " " . $this->_lName;
    }
}
class Student extends Person {}
class Teacher extends Person {}
class Administrator extends Person {}

$s = new Student();
$t = new Teacher();
$p = new Person();