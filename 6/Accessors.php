<?php
class Z {
    public const HAPPY = false;
}
class Accessors {
    private int $_private;   //means only the object itself can modify.
    public int $public = 1000; //Every has access to this field. Until they see the reference
    protected int $protected;  //Only accessible by itself and childrens(inheritance)

    public const HAPPY = true;

    public function createConstant($value) {
        define("CONSTANT_FIELD", $value);
    }


    public function modifyPrivate() {
        $_private = 4;
        $this->_private = 0;
        $this->public = 0;
        $this->protected = 0;
        $this->HAPPY = false; //Not accessing the constant. Creating a new variable.
        echo Accessors::HAPPY; //Correct Way of Accessing Constant.
    }
}

$obj = new Accessors();
$obj->public = 0;
//$obj->_private = 0;
//$obj->protected = 0;
echo $obj::HAPPY;
echo Accessors::HAPPY;
echo Z::HAPPY;

$obj->createConstant(5);
