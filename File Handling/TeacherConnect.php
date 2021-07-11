<?php
$User = filter_input(INPUT_POST, 'uname');
$passwd = filter_input(INPUT_POST, 'passwrd');




if (!empty($User)) {
    if (!empty($passwd)) {

        // $host = "localhost";
        // $dbusername = "root";
        // $dbpassword = "";
        // $dbname = "studentdb";
        // // Create connection
        // $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
        // if (mysqli_connect_error()) {
        //     die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        // } else {
        //     $sql="SELECT * FROM teacherlogin";
        //     if ($conn->query($sql)) {
        //          header("location:../Thanks_portfolio.php");
               

        //     } else {
        //         echo "Error: " . $sql . "" . $conn->error;
        //     }
        //     $conn->close();
        // }
        if($User == 'DSATM' and $passwd == 'ISEDSATM'){
            header("location:./teacher.php");
            die();
        }
        else{
            header("location:./index.php");
        }

    } else {
        header("location:./index.php");
        die();
    }
    } else {
        header("location:./index.php");
    die();
    }
?>
