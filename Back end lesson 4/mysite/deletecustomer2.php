<?php

    $cid = $_GET['cid'];

    $con = mysqli_connect("localhost", "root", "password", "myshop");

    $sql = "Delete from customers where cid = $cid";


    echo $sql;

    $result = mysqli_query($con, $sql);

    if($result) {
        echo "Record is deleted";

        header("location:deletecustomer.php");
    }
    else {
        echo "Record cannot be deleted";
    }
?>