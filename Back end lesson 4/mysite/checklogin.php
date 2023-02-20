<?php

    $name = $_POST['name'];
    $password = $_POST['password'];

    include("connect.php");

    $sql = "Select * from logins
                where name = '$name' and password = '$password';
           ";

    $result = mysqli_query($con, $sql);
    $rowcount = mysqli_num_rows($result);

    if ($rowcount == 1) {
        echo "ok";
    }
    else {
        echo "not ok";
    }
?>