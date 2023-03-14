<?php

class Car
{
    var $wheel = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    function __construct()
    {
        echo  $this->wheel = 10;
    }
}
$bmw = new Car();

$truck = new Car();

