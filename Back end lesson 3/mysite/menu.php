<?php

    session_start();

    if($_SESSION['status'] != "ok") {
        header("location:login.php");
    }
    else {
        $login_name = $_SESSION['name'];
    }
?>




<h1> ANC eShop Management System</h1>

<ul>
    <li>Customer Management
        <ul>
            <li><a href="addcustomer.php">Add New Customer</a></li>
            <li><a href="listcustomer.php">List All Cusomter</a></li>
            <li><a href="updatecustomer.php">Update Customer</a></li>
            <li><a href="deletecustomer.php">Delete Cusomter</a></li>
            <li><a href="searchcustomer.php">Search Cusomter</a></li>
        </ul>
    </li>
    <li>Product Management</li>
    <li>Invoice Management</li>
    <li><a href="logout.php">Logout</li>
</ul>