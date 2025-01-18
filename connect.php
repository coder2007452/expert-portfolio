<?php
error_reporting(0); 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "main";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn){
        //echo "Connected Established";
    }
    else{
        echo "Not Connected".mysqli_connect_error();
    }
?>