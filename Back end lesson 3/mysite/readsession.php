<h1>Read Session</h1>


<?php

    session_start();
    // create a new session or continue an existing session

    $name = $_SESSION['name'];

    $age = $_SESSION['age'];

    echo "Your name is $name<p>";

    echo "Your age is $age<p>";

?>