<h1>Customer Details</h1>

<a href="listcustomer.php">Back</a>
<p></p>

<?php

    $cid = $_GET['cid'];

    // echo $cid;

    $con = mysqli_connect("localhost", "root", "password", "myshop");

    $sql = "Select * from customers where cid = $cid";

    // echo $sql;

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);

    // print_r($row);
    $name = $row['name'];
    $gender = $row['gender'];
    $phone = $row['phone'];
    $photo = $row['photo'];

    echo "<h1>Your name is: $name</h1>";

    echo "<h2>Your gender is: $gender</h2>";

    echo "<h2>Your phone is: $phone</h2>";

    echo "<img src='images/$photo' width='200'/>";

?>

