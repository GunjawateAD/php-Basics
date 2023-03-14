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