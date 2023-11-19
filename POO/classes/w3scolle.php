<?php
class Car{

public $model;
public $color;
public $annee;

function __construct($model, $color,$annee){

    $this->model = $model;

    $this->color = $color;

    $this->annee = $annee;


}
public function message(){
    return "My car is a " . $this->color . " " . $this->model . $this->annee . "!";

}



}
$myCar = new Car("red", "bmw", 1999);
var_dump($myCar);