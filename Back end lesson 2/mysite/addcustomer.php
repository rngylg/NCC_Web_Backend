<h1>Add New Customer</h1>

<form method="post" action="addcustomer2.php" enctype="multipart/form-data"> 
    Name:<input type="text" name="name" />
    <p></p>

    Phone:<input type="text" name="phone" />
    <p></p>
    
    Gender:<input type="radio" name="gender" value="M"/>M <input type="radio" name="gender" value="F"/>F
    <p></p>

    Please select photo to upload:<input type="file" name="photo" />
    <p></p>

    
    <input type="submit" value="Add" />

</form> 