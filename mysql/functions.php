<?php include "db.php"; ?>
<?php

function showAllData()
{
    global $connection;

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed');
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];

        echo "<option value='$id'>$id</option>";
    }
}

function UpdateTable()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE `users` SET `username`='[$username]',`password`='[$password]' WHERE `id`= $id";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed');
    }
}

function deleteRows()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM `users` WHERE `id`= $id";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed');
    }
}
