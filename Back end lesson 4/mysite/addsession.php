<h1>Add Session</h1>


<?php

    //client can have two types of connections to the server
    //1st method: stateless
    // -> client and server will not remember each other
    //2nd method: stateful
    // -> client and server will remember each other

    //session is a stateful connection to the server
    //just like a phone call
    //the server will assign an session id to each client
    //the client will present the session id to the server
    //how to store id? -> using cookies


    session_start();

    // using the session id, you can store something on the server

    $_SESSION['name'] = "Vivian Lam";
    $_SESSION['age'] = 16;


?>