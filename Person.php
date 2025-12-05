<?php

class Person{
    private $name;
    private $age;

    function showInfo(){
        echo $this->name ." ". $this->age . " gadi \n";
    }

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function set_name($name){
        $this->name = $name;
    }

    function set_age($age){
        $this->age = $age;
    }
}

class Teacher extends Person{
    function showPresentation(){
        echo "Presentation in process";
    }

}

class Student extends Person{
    function doExam(){
        echo "Doing exam";
    }
}

$person1 = new Person("Adrians", 16);
$person2 = new Person("Anna", 30);
$student1 = new Student("Jēkabs", 16);
$student1 = new Student("Olivers", 15);
$teacher1 = new Student("Inta", 43);




$student1->doExam();
