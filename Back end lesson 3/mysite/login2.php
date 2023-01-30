<?php
    include("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "Select * from logins
            where name = '$username' and password = '$password';
            ";

    // echo $sql;
    

    //if only 1 row is returned, means login success;
    //if no row is returned, means login fail

    $result = mysqli_query($con, $sql);
    $rowcount = mysqli_num_rows($result);

    if($rowcount == 0) {
        echo "Login Failure";
    }
    else if($rowcount == 1) {
        echo "Login Success";

        session_start();

        $_SESSION['name'] = $username;
        $_SESSION['status'] = 'ok';
        header("location:menu.php");

    }

?>