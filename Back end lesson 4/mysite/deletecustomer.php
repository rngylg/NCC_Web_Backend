<h1>Delete Customer</h1>

<?php

    $con = mysqli_connect("localhost", "root", "password", "myshop");

    $sql = "Select * from customers";

    $result = mysqli_query($con, $sql);

    print_r($result);
    echo "<p></p>";


    //to extract 1 row from the table
    $rowcount = mysqli_num_rows($result);
    echo "<p>Number of rows: $rowcount</p>";
    echo "<p></p>";


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
                <td><a href='deletecustomer2.php?cid=$cid'>Delete</a></td>
            </tr>
        ";

    }

    echo "</table>";

?>


<!-- <table border=1 cellpadding=10>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Gender</th>
    </tr>

    <tr>
        <td>1</td>
        <td>Yannies</td>
        <td>9253</td>
        <td>F</td>
    </tr>

    <tr>
        <td>2</td>
        <td>Vivian</td>
        <td>9617</td>
        <td>F</td>
    </tr>

    <tr>
        <td>3</td>
        <td>Antonia</td>
        <td>9246</td>
        <td>F</td>
    </tr>
</table> -->