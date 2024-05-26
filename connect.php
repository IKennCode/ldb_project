<?php
    $con = new mysqli('localhost', 'root', '', 'infosystemdatabase');

    // if(!$con) {
    //     die(mysqli_error($con));
    // }
    if ($con->connect_error) {
        die('Connection failed: ' . $con->connect_error);
    }
?>


<!-- // if(!$con) {
    //     echo "Connection Successfully!";
    // }else {
    //     die(mysqli_error($con));
    // } -->