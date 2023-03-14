<?php

class Car
{
    function MoveWheels()
    {
        echo "Wheels move";
    }
}



if (method_exists('Car', 'MoveWheels')) {
    echo "It exist";
} else {
    echo "It does not exist";
}
