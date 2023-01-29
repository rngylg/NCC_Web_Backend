<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "Select * from logins
            where name = '$username' and password = '$password';
            ";

    echo $sql;
    
?>