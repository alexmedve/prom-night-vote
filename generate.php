<?php
    //connect to DB
    $con = mysqli_connect("localhost", "root", "", "poll");
    $length = 2;

    for($i=1; $i<=500; $i++)
    {
        $token = bin2hex(random_bytes($length));
        $code = "INSERT INTO users (code) VALUES('$token')";
        $run_code = mysqli_query($con, $code);
    }
?>