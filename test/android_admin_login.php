<?php

include 'android_conn.php';

$username = $_POST['username'];
$password = $_POST['password'];
$encrypted_pass = MD5($password);


$sql = "SELECT * FROM role WHERE username = '$username' AND password = '$encrypted_pass'";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res)) {
  echo "Login Successful";
}
else {
  echo "Error";
}



?>
