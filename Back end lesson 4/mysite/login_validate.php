<?php

    // first loading without data   --> Array()
    print_r($_POST);
    if(empty($_POST)) {
        echo "First loading";
    }
    else {
        echo "Second or later loading ";

        // Need to data validation
        $error_name_msg = "";
        $error_password_msg = "";
        $error_count = 0;

        if(empty($_POST['name'])){
            $error_name_msg = "Please enter your name";
            $error_count++;
        }
        if(empty($_POST['password'])){
            $error_password_msg = "Please enter your password";
            $error_count++;
        }

    }

    echo "<p>Error Count $error_count";
    echo "<p>Name: " . $_POST['name'];
    echo "<p>Password: " . $_POST['password'];
    echo "<p>$error_name_msg";
    echo "<p>$error_password_msg";


    // second or more loading with data --> Array( [name]=>xxx [password]=>xxx )


?>

<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>">
    Name:
    <input type="text" name="name" />
    <?php if(!empty($error_name_msg)) echo $error_name_msg ?>
    <p></p>

    Password:
    <input type="password" name="password" />
    <?php if(!empty($error_password_msg)) echo $error_password_msg ?>
    <p></p>

    <input type="submit" value="Login" />

</form>