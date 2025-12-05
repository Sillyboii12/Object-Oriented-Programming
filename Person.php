<?php

class Person{
    private $name;
    private $age;

    function showInfo(){
        echo $this->name ." ". $this->age . " gadi";
    }

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}

$person1 = new Person("Adrians", 16);


$person1->showInfo();