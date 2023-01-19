<h1>My first PHP page</h1>

<?php
    // Write the PHP commands here

    // Variables
    $k1 = 100;
    $k2 = 200;

    echo "The sum is ".($k1 + $k2);
    echo "<br>";



    $n1 = "Ronnie";
    $n2 = "Ng";

    echo "<br>My name is ".$n1." ".$n2; // <br> = soft break / next line
    echo "<br>";


    // Array -- Date Structure
    $names = array("Peter", "Mary", "Sam");


    echo "<br>1st name is ".$names[0];
    echo "<br>1st name is ".$names[1];
    echo "<br>1st name is ".$names[2];
    echo "<br>";



    $marks = array(70, 80, 90);

    echo "<br>$names[0] has $marks[0] marks";
    echo "<br>$names[1] has $marks[1] marks";
    echo "<br>$names[2] has $marks[2] marks";

?>