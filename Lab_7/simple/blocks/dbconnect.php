<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "mydata2";

    $connection = mysqli_connect($server,$user,$password,$dbname);
    if(!$connection){
        die("Connection Error!!!");
    }
?>