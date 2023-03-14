<?php
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if ($connection) {
        echo "We are connected";
    } else {
        die("Database Connection Failed");
    }

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<div class="container">
    <div class="col-sm-6">
       <?php 
        while($row = mysqli_fetch_assoc($result))
        {
            ?>
            <pre>

            <?php
            print_r(($row));
            ?>

            <pre>
            <?php
        }
       ?>
    </div>
</div>

<body>

</body>

</html>