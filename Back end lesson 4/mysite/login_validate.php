<?php
//    print_r($_POST);
    $error_login_msg = "";

    if(empty($_POST)) {
        // first loading without data   --> Array()
//         echo "First loading";
    }
    else {
        // second or more loading with data --> Array( [name]=>xxx [password]=>xxx )
//        echo "Second or later loading ";

        // Need to data validation
        $error_name_msg = "";
        $error_password_msg = "";
        $error_count = 0;
        $error_login_msg = "";

        if(empty($_POST['name'])){
            $error_name_msg = "Please enter your name";
            $error_count++;
        }
        else {
            $name = $_POST['name'];
        }
        if(empty($_POST['password'])){
            $error_password_msg = "Please enter your password";
            $error_count++;
        }
        else {
            $password = $_POST['password'];
        }

        if($error_count == 0) {
            //check the database or save to

            require ("connect.php");
            $sql = "Select * from logins
            where name = '$name' and password = '$password';
            ";

            // echo $sql;
            //if only 1 row is returned, means login success;
            //if no row is returned, means login fail

            $result = mysqli_query($con, $sql);
            $rowcount = mysqli_num_rows($result);

            if($rowcount == 1) {
                session_start();
                $_SESSION['name'] = $name;
                $_SESSION['status'] = 'ok';
                header("location:menu.php");
            }
            else {
                $error_login_msg = "Please enter your name or password again";
            }

            $name = "";
            $password = "";
        }

    }

    //    echo "<p>Error Count $error_count";
    //    echo "<p>Name: " . $_POST['name'];
    //    echo "<p>Password: " . $_POST['password'];
    //    echo "<p>$error_name_msg";
    //    echo "<p>$error_password_msg";


?>
<h1>Login with validation in single file</h1>

<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>">

    Name:
    <input type="text" name="name" value="<?php echo $name; ?>"/>
    <?php if(!empty($error_name_msg)) echo $error_name_msg ?>
    <p></p>

    Password:
    <input type="password" name="password" value="<?php echo $password; ?>"/>
    <?php if(!empty($error_password_msg)) echo $error_password_msg ?>
    <p></p>

    <input type="submit" value="Login" />

</form>

<?php if(!empty($error_login_msg)) {echo $error_login_msg;} ?>