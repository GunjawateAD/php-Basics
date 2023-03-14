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
    echo "Switch Statements" . "<br>";

    $number = 1;
    switch ($number) {
        case 1:
            echo "one" . "<br>";
            break;
        case 2:
            echo "two" . "<br>";
            break;
        case 3:
            echo "three" . "<br>";
            break;
        default:
            echo "Enter Correct number";
            break;
    }



    ?>
</body>

</html>