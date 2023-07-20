<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="cms";

    $conn=mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("Connection Failed:" . mysqli_connect_error());
    }
?>