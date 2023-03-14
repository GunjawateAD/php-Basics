<?php
if (isset($_POST['submit'])) {

    $name = array("Edwin","Student","Avishkar","Swapnil","Maria");

    $minimum = 5;
    $maximum = 10;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (strlen($username) < $minimum) {
        echo "Username has to be longer than five";
    } elseif (strlen($username) > $maximum) {
        echo "Username cannot be longer than 10";
    }

    if(!in_array($username, $name)){
        echo "Sorry You Canot Login";
    }else{
        echo "Welcome";
    }

    // echo "Hello" . $username;
    // echo "Your Password is" . $password;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="form.php" method="post">
        <input type="text" name="username" placeholder="Enter Username"><br>
        <input type="password" name="password" placeholder="Enter Password"><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>