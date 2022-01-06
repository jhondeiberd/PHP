<?php

class Singleton{
//    private static Singleton $_singleton = new Singleton(); //Eager Loading
    private static Singleton $_singleton; //Eager Loading
    private string $a, $b, $c;

    private function someMethods(){

    }

    public static function getSingleton(){
        if (Singleton::$_singleton == null) //Lazy Loading
            Singleton::$_singleton = new Singleton();
        return Singleton::$_singleton;
    }

    private function __construct()
    {
    }
}

$a = Singleton::getSingleton();
$b = Singleton::getSingleton();

