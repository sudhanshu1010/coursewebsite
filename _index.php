<?php 
    $insert = false;

    $server = "localhost";
    $username = "root";
    $password = "";

    // for making connection
    $con = mysqli_connect($server, $username, $password);

    if(!$con) {
        die("connection to the server failed due to" . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $pswd = $_POST['pswd'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `xypodb`.`xypo` (`name`, `email`, `pswd`, `dt`) VALUES ('testName', 'test@name.com', 'nopswd@1234', current_timestamp());";
    
    if($con->query($sql) == true) {
        // flag for successful insertion
        $insert = true;
    } else {
        echo "ERROR : $sql <br> $con->error";
    }

    $con -> close();
?>