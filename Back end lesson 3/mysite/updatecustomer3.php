<?php

    $upload_photo_flag = 0;

    if($_FILES['photo']['name'] != "") {

        $filename = $_FILES['photo']['name'];
        $tempname = $_FILES['photo']['tmp_name'];
        move_uploaded_file($tempname, "images/".$filename);
        $upload_photo_flag = 1;
    }


    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $cid = $_POST['cid'];

    // echo "$name $phone $gender";

    $con = mysqli_connect("localhost", "root", "password", "myshop");

    if($upload_photo_flag == 0) {

        $sql = "Update customers
                set name = '$name', gender = '$gender', phone = '$phone'
                where cid = $cid;
                ";

    }

    else if($upload_photo_flag == 1) {

        $sql = "Update customers
                set name = '$name', gender = '$gender', phone = '$phone', photo = '$filename'
                where cid = $cid;
                ";

    }

    // echo $sql;

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("location:updatecustomer.php");
    }
    else {
        echo "Cannot udpate";
    }

?>