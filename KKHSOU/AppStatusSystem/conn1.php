<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="app_status";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
    {
        die("Connection Failed".mysqli_connect_error());
    }

?>
