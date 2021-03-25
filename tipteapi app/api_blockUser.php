<?php
    include 'class/class.user_profile.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            $tb_handle = new user_profile();

            // if data parameter available
            if (isset($_POST['userId']) && isset($_POST['blockValue']) && !empty(trim($_POST['userId'])) && !empty(trim($_POST['blockValue']))) {
                
                $up_id = trim($_POST['userId']);
                $blockValue = trim($_POST['blockValue']);

                if ($blockValue == 1) {
                    $blockRes = $tb_handle->blockUser($up_id, $blockValue);
                    $blockRes_obj = json_decode($blockRes, true);

                    if ($blockRes_obj['message'] == 'User Updated Successfully') {
                        header("Location: http://api.tipteapi.com/admin/process/userListProcess.php?msg=us");
                    }
                    else {
                        header("Location: http://api.tipteapi.com/admin/process/userListProcess.php?msg=uf");
                    }
                } else {
                    $blockValue = 0;
                    $blockRes = $tb_handle->blockUser($up_id, $blockValue);
                    $blockRes_obj = json_decode($blockRes, true);
    
                    if ($blockRes_obj['message'] == 'User Updated Successfully') {
                        header("Location: http://api.tipteapi.com/admin/process/userListProcess.php?msg=us");
                    }
                    else {
                        header("Location: http://api.tipteapi.com/admin/process/userListProcess.php?msg=uf");
                    }
                }
            }
            else {
                $ar = array('message' => 'All Fields Mandatory');
                echo json_encode($ar);
            }
        }
        else {
            $ar = array('message' => 'Unauthorized Access');
            echo json_encode($ar);
        }
    }
?>