<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $number = 10;
    $number = 1000;
    $number = "Edwin";
    echo $number . "<br>";

    define("NAME", 1000);
    echo NAME;


    const CONSTANT = 'Hello World';


    echo CONSTANT;


    const ANOTHER_CONST = CONSTANT . '; Goodbye World';

    echo ANOTHER_CONST;


    $ANIMALS = array('dog', 'cat', 'bird');

    echo ANIMALS[1]; // outputs "cat"


    // Works as of PHP 7

    define('ANIMALS', array(

        'dog',

        'cat',

        'bird'

    ));

    echo ANIMALS[1]; // outputs "cat"

    ?>
</body>

</html>