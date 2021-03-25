<?php

include 'class/class.apiKeys.php';
include 'class/class.user_profile.php';

$api_ob = new api_keys();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {
        if (isset($_FILES["avatarImg"]["name"]) && isset($_POST['userId']) && !empty($_FILES["avatarImg"]["name"]) && !empty(trim($_POST['userId']))) {
            
            $tb_handle = new user_profile();

            $userId = trim($_POST['userId']);

            $chkRes = $tb_handle->chkUser($userId);

            if ($chkRes == 'Already Exists') {
                // File upload path
                $targetDir = "uploads/profImg/";
                $fileName = basename($_FILES["avatarImg"]["name"]);
                $targetFilePath = $targetDir.basename($_FILES["avatarImg"]["name"], '.'.pathinfo($fileName,PATHINFO_EXTENSION)).'_'.mt_rand(1000, 9999).'.'.pathinfo($fileName,PATHINFO_EXTENSION);
                $fileType = pathinfo($fileName,PATHINFO_EXTENSION);

                // Allow certain file formats
                $allowTypes = array('jpg','png','jpeg','svg');

                if (in_array(strtolower($fileType), $allowTypes)) {
                    // Upload file to server
                    if(move_uploaded_file($_FILES["avatarImg"]["tmp_name"], $targetFilePath)) {
                        //change permission
                        chmod($targetFilePath, 0755);

                        $tb_handle->changeAvatar($targetFilePath, $userId);
                    }
                    else {
                        $ar = array('message' => 'Uploading Failed !!!');
                        echo json_encode($ar);
                    }
                }
                else {
                    $ar = array('message' => 'Invalid Image Type !!!');
                    echo json_encode($ar);
                }
            }
            else {
                $ar = array('message' => 'User Not Registered..');
            }
        }
        else if (isset($_POST['avatarURL']) && isset($_POST['userId']) && !empty(trim($_POST['avatarURL'])) && !empty(trim($_POST['userId']))) {
            
            $tb_handle = new user_profile();

            $userId = trim($_POST['userId']);
            $avatarUrl = trim($_POST['avatarURL']);

            $chkRes = $tb_handle->chkUser($userId);

            if ($chkRes == 'Already Exists') {
                $tb_handle->changeAvatar($avatarUrl, $userId);
            }
            else {
                $ar = array('message' => 'User Not Registered..');
            }
        }
        else if ((empty($_FILES["avatarImg"]["name"]) && empty(trim($_POST['userId']))) || (empty(trim($_POST['avatarURL'])) && empty(trim($_POST['userId'])))) {
            $ar = array('message' => 'All Fields Are Mandatory');
            echo json_encode($ar);
        }
    }
    else {
        $ar = array('message' => 'Unauthorized Access');
        echo json_encode($ar);
    }
}

?>