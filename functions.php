<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <?php

    function init()
    {
        say_Something();
        echo "<br>";
        calculate();
    }

    function calculate()
    {
        echo 456 + 345;
    }

    function say_Something()
    {
        echo "Hello Students, This is Function say_Something";
    }

    init();

    ?>

</body>

</html>