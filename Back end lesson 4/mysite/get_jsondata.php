<?php

    $data = array();

    array_push($data, array("id"=>"1", "name"=>"Peter", "age"=>"18"));
    array_push($data, array("id"=>"2", "name"=>"Jack", "age"=>"16"));
    array_push($data, array("id"=>"3", "name"=>"Venus", "age"=>"21"));
    array_push($data, array("id"=>"4", "name"=>"Kate", "age"=>"19"));

//    print_r($data);

    // convert to JSON format

    $json_data = json_encode($data);
//    echo "<p></p>";
    echo $json_data;

?>