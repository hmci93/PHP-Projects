<?php
    include 'class/class.user_profile.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            if (isset($_POST['username']) && !empty(trim($_POST['username']))) {

                $tb_handle = new user_profile();

                $username = strip_tags(trim($_POST['username']));
                
                $chkRes = $tb_handle->chkUser($username);
                
                if ($chkRes == 'Already Exists') {
                    $ar = array('message' => 'User Already Exists');
                    echo json_encode($ar);
                }
                else {
                    //Assign Variables
                    $tb_handle->username = $username;
                    $tb_handle->block_status = 0;
    
                    //calling function
                    $tb_handle->insert();
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