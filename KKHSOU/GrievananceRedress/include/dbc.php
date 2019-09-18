<?php
$conn = mysqli_connect("localhost","kkhsousc","Kkhsou6@ghy","webcomi1_kkh");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 $webUrl = "http://kkhsou.in/web_new/"; 
?>