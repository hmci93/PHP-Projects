<?php
  if (isset($_POST['submit'])) {
    $p_username = $_POST['username'];
    $p_password = $_POST['password'];

    include_once("../class/class.login.php");
    $tb_handle = new login();

    $tb_handle->username=$p_username;
    $tb_handle->password=$p_password;

    $tb_handle->verifyUser($tb_handle->username,$tb_handle->password);
  }
?>
