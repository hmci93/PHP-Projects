<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="tra_tocklai";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
            mysqli_set_charset($conn,"utf8");

    if(!$conn)
    {
        die("Connection Failed".mysqli_connect_error());
    }

?>