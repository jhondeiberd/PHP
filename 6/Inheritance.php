<?php
class Animal {
    public int $numberOfLegs;
    public float $weight;
    public float $height;
    public string $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function eat() {
        echo "crunch crunch";
    }

    public function talk() {
        echo "$this->name is talking";
    }
}

class Cat extends Animal {
    private int $claws;

    public function meow() {
        echo "asdasa";
    }

    public function __construct(string $name,int $claws)
    {
        parent::__construct($name);
        $this->claws = $claws;
    }

}
class Bird extends Animal {

    public function talk()  //override talk
    {
        echo "$this->name chirp chirp";
        //parent::talk(); //super in java
                          //base in C#
    }
}

/*
$myCat = new Cat("CC", 34);
$myBird = new Bird("BB");
$myBird->talk();
$myCat->talk();
*/








