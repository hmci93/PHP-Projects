<?php
    include 'class/class.user_profile.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            if (isset($_POST['username']) && isset($_POST['disp_name']) && isset($_POST['lat']) && isset($_POST['long']) && !empty(trim($_POST['username'])) && !empty(trim($_POST['disp_name'])) && !empty(trim($_POST['lat'])) && !empty(trim($_POST['long']))) {

                $tb_handle = new user_profile();

                $username = strip_tags(trim($_POST['username']));
                $disp_name = strip_tags(trim($_POST['disp_name']));
                $lat_deg = strip_tags(trim($_POST['lat']));
                $long_deg = strip_tags(trim($_POST['long']));
                
                //converting degree to radian
                $pi = pi();
                $lat_rad = $lat_deg*($pi/180);
                $long_rad = $long_deg*($pi/180);
                
                $chkRes = $tb_handle->chkUser($username);
                
                if ($chkRes == 'Already Exists') {
                    $userStatus = 'Online';
                    $res1 = $tb_handle->updateUserStatusWithLoc($username, $userStatus, $lat_rad, $long_rad);
                    if ($res1 == 'Successfully Updated') {
                        $ar = array('message' => 'User Already Exists');
                        echo json_encode($ar);
                    }
                }
                else {
                    //Assign Variables
                    $tb_handle->username = $username;
                    $tb_handle->reserved1 = $disp_name;
                    $tb_handle->block_status = 0;
                    $tb_handle->reserved2 = 'Online';
                    $tb_handle->reserved3 = $lat_rad;
                    $tb_handle->reserved4 = $long_rad;
    
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