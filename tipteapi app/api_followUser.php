<?php
    include 'class/class.user_profile.php';
    include 'class/class.apiKeys.php';
    include 'class/class.following2.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {
            if (isset($_POST['username']) && isset($_POST['follow_username']) && !empty(trim($_POST['username'])) && !empty(trim($_POST['follow_username']))) {

                $tb_handle = new user_profile();
                $tb_handle1 = new following();

                $username = strip_tags(trim($_POST['username']));
                $follow_username = strip_tags(trim($_POST['follow_username']));

                $user_id = $tb_handle->getUserProfId($username);
                $fol_user_id = $tb_handle->getUserProfId($follow_username);

                if (($user_id != 'Not Found' && $fol_user_id != 'Not Found') || ($user_id != '' && $fol_user_id != '')) {
                    
                    $tb_handle1->chkFollow($user_id, $fol_user_id);
                }
            }
            else {
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