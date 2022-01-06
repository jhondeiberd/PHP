<?php
/*
 * OOP Object Oriented Programming
 *      paradigms
 *
 * See things as objects
 *      Real Things (watch, light, TV, Projector)
 *      Virtual Things (User, DatabaseManager, CSS Loader,....
 *
 *
 * 2 Rules to Live by:
 *      1. CLEAN CODE
 *      2. Separation of Concern
 *
 */

//Class (Blueprint) :: This defines the objects attributes and actions.
class Teacher {}
class Course {
    private array $_students;
    private Teacher $_teacher;
}
class Student {
    //attributes, fields, properties, class variables, class members
    //Defines the characteristics of that object.
    private $_id;
    private $_firstName;
    private $_lastName;
    private $_courses = array();
    private $_attendingSchool;
    private $_totalGrade;
    private $_tuitionLeftToPay;

    public function drop($course) : void {

    }

    public function payTuition($amount) : bool {

    }
}
class Foundation {}
class Cause {
    private string $_purpose;
    private float $_goal;
    private float $_totalDonation;
    private array $_donators;
    private Foundation $foundation;

    public function emailDonators() {

    }

    public function findDonators() {

    }

    public function donate($amount, $donator) {

    }
}

$rohit = new Administrator();
$safaldeep = new Administrator();

$rezaWantsToGoToCuba = new Cause();
$cancer = new Cause();