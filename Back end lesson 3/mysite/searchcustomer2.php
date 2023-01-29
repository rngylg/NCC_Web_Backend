<?php

    $keyword = $_GET['keyword'];

    $con = mysqli_connect("localhost", "root", "password", "myshop");

    $sql = "Select * from customers
            where name like '%$keyword%'
                or phone like '%$keyword%'
            ";

    // echo $sql;

    $result = mysqli_query($con, $sql);

    $rowcount = mysqli_num_rows($result);

    if($rowcount == 0) {
        echo "<h2>No matching record(s)</h2>";
    }
    else {
        echo "<h2>$rowcount matching record(s) found</h2>";
    }


    echo "
    <table border=1 cellpadding=10>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>Details</th>
        </tr>
    ";

    for($i=0; $i<$rowcount; $i++) {

        $row = mysqli_fetch_array($result);

        $cid = $row['cid'];
        $name = $row['name'];
        $phone = $row['phone'];
        $gender = $row['gender'];
        // echo "$cid $name $phone $gender";
        // //print_r($row);
        // echo "<p></p>";

        echo "
            <tr>
                <td>$cid</td>
                <td>$name</td>
                <td>$phone</td>
                <td>$gender</td>
                <td><a href='listcustomer2.php?cid=$cid'>More</a></td>
            </tr>
        ";


    }

    echo "</table>";

?>