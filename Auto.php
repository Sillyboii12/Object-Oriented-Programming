<?php

class Auto{
    public $model;
    public $mark;
    public $year;

    function __construct($model, $mark, $year) {
        $this->model = $model;
        $this->mark = $mark;
        $this->year = $year;
    }
    function showInfo() {
        return $this->model . $this->mark . $this->year;
    }

    function set_model($model){
        $this->model = $model;
    }
     function set_mark($mark){
        $this->mark = $mark;
    }
     function set_year($year){
        $this->year = $year;
    }
}

class ElektroAuto extends Auto{
    public $batteryCapacity;

    function __construct($model, $mark, $year, $batteryCapacity){
        $this->model = $model;
        $this->mark = $mark;
        $this->year = $year;
        $this->batteryCapacity = $batteryCapacity;
    }

    function showBatteryInfo(){
        return $this->batteryCapacity;
    }
}

$car1 = new Auto("","","");
$car1->set_model("Supra");
$car1->set_mark("Toyota");
$car1->set_year(2024);

$car2 = new ElektroAuto("Toyota ", "Supra ", 2024, 100);


echo $car1->showInfo();
