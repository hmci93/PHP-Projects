<?php
    //starting session
    session_start();

    include '../../class/class.admin.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
            
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            $hashed_password = hash("sha256", $password);

            $tb_handle = new admin();

            $res = $tb_handle->checkUser($username, $hashed_password);
            $res_obj = json_decode($res, true);

            if ($res_obj['username'] == 'Unauthorized') {
                header("Location: http://api.tipteapi.com/admin/index.php?msg=unauthorized");
            }
            else {
                $_SESSION['user'] = $res_obj['username'];
                header("Location: http://api.tipteapi.com/admin/ui/dashboard.php");
            }
        }
    }
?>