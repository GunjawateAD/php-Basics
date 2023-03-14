<?php

class Car
{
    var $wheel = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    function MoveWheels()
    {
        $this->wheel = 10;
    }

    function CreateDoors()
    {
        $this->doors = 6;
    }
}

$bmw = new Car();

class Plane extends Car{
    var $wheel = 20;
}
$jet = new Plane();
// $jet->MoveWheels();
echo $jet->wheel;