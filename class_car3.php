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
$truck = new Car();
echo $bmw->wheel . "<br>";
echo $truck->wheel = 10 . "<br>";

$truck->CreateDoors();
echo $truck->doors;
