<?php

    // print_r($_FILES);

    $filename = $_FILES['photo']['name'];

    $tempname = $_FILES['photo']['tmp_name'];

    echo "$filename $tempname";

    move_uploaded_file($tempname, "images/".$filename);

?>