<?php include("connect.php"); ?>
<h1>Add Customer 2</h1>

<?php

    //Print out the values of $_GET arrary(built-in)
    // print_r($_GET); 
    // print_r($_POST);

    $filename = $_FILES['photo']['name'];
    $tempname = $_FILES['photo']['tmp_name'];
    // echo "$filename $tempname";
    move_uploaded_file($tempname, "images/".$filename);


    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];

    //echo "<p>$name $phone $gender";

    if($con) {
        // echo "<p>Conneted</p>";

        $sql = "Insert into customers(name, phone, gender, photo)
                values ('$name', '$phone', '$gender', '$filename');
                ";

        // just to check if $sql is correctly typed
        // echo $sql;
        
        $result = mysqli_query($con,$sql);

        //echo $result;
        if($result) {
            echo "<h2>New Customer is added</h2>";
        }
        else {
            echo "<h2>Cannot add customer</h2>";
        }
        echo "<p></p><a href='menu.php'>Back to Menu</a>";
    }

    else {
        echo "Cannot Connect";
    }


?>