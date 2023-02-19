<?php

    $cid = $_GET['cid'];

    $con = mysqli_connect("localhost", "root", "password", "myshop");

    $sql = "Select * from customers where cid = $cid";

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);

    $name = $row['name'];
    $phone = $row['phone'];
    $gender = $row['gender'];
    $photo = $row['photo'];

    // echo "$name $phone $gender $photo";

?>

<h1>Update Customer</h1>

<form method="post" action="updatecustomer3.php" enctype="multipart/form-data"> 

    <input type = "hidden" name = "cid" value = "<?php echo $cid; ?>" />


    Name:<input type="text" name="name" value="<?php echo $name; ?>"/>
    <p></p>

    Phone:<input type="text" name="phone" value="<?php echo $phone; ?>"/>
    <p></p>
    
    Gender:<input type="radio" name="gender" value="M"<?php if($gender == "M") echo "checked" ?>/>M 
           <input type="radio" name="gender" value="F"<?php if($gender == "F") echo "checked" ?>/>F
    <p></p>

    Please select photo to upload:<input type="file" name="photo" />
    <br>
    <img src="images/<?php echo $photo; ?>" width="50px" />
    <p></p>

    <input type="submit" value="Update" />

</form> 