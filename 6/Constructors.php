<?php
/*
 * Job of constructor:
 *      -> Define/Set values before the object is used.
 */

class Administrator {
    private int $_age;
    private string $_firstName;

    //Constructor (Method)
    //Only called once.
    //Only during the object Creation.
    public function __construct(string $firstName, int $age) {
        $this->_age = $age;
        $this->_firstName = $firstName;

    }
    //No Overloading Allowed in PHP

    public function getAge(): int {
        return $this->_age;
    }

}

$a = new Administrator("reza", 34); //Calling Student Constructor
echo $a->getAge();
