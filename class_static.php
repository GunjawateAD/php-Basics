<?php

class Car
{
    static $wheel = 4;
    var $hood = 1;
    
    static function MoveWheels()
    {
        Car::$wheel = 10;
    }

}

$bmw = new Car();

Car::MoveWheels();
echo Car::$wheel;




