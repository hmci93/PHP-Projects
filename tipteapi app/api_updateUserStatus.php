<?php

    include 'class/class.user_profile.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            $tb_handle = new user_profile();
            
            //updating user status along with location
            if (!empty(trim($_POST['username'])) && !empty(trim($_POST['lat'])) && !empty(trim($_POST['long'])) && !empty(trim($_POST['status']))) {
                
                $username = strip_tags(trim($_POST['username']));
                $lat_deg = strip_tags(trim($_POST['lat']));
                $long_deg = strip_tags(trim($_POST['long']));
                $status = strip_tags(trim($_POST['status']));
                
                //converting degree to radian
                $pi = pi();
                $lat_rad = $lat_deg*($pi/180);
                $long_rad = $long_deg*($pi/180);
                
                //calling function
                $msg = $tb_handle->updateUserStatusWithLoc($username, $status, $lat_rad, $long_rad);
                if ($msg == 'Successfully Updated' || $msg == 'Updating Failed') {
                    $ar = array('message' => 'Successfully Updated');
                    echo json_encode($ar);
                }
                if ($msg == 'Error Updating') {
                    $ar = array('message' => 'Sorry.....Updating Failed');
                    echo json_encode($ar);
                }
            }

            //updating user location
            else if (!empty(trim($_POST['username'])) && !empty(trim($_POST['lat'])) && !empty(trim($_POST['long'])) && empty(trim($_POST['status']))) {
                
                $username = strip_tags(trim($_POST['username']));
                $lat_deg = strip_tags(trim($_POST['lat']));
                $long_deg = strip_tags(trim($_POST['long']));

                //converting degree to radian
                $pi = pi();
                $lat_rad = $lat_deg*($pi/180);
                $long_rad = $long_deg*($pi/180);
                
                //calling function
                $msg = $tb_handle->updateUserLoc($username, $lat_rad, $long_rad);
                if ($msg == 'Successfully Updated' || $msg == 'Updating Failed') {
                    $ar = array('message' => 'Successfully Updated');
                    echo json_encode($ar);
                }
                if ($msg == 'Error Updating') {
                    $ar = array('message' => 'Sorry.....Updating Failed');
                    echo json_encode($ar);
                }
                
            }

            //updating user status to busy or offline or online
            else if (!empty(trim($_POST['username'])) && empty(trim($_POST['lat'])) && empty(trim($_POST['long'])) && !empty(trim($_POST['status']))) {
                            
                $username = strip_tags(trim($_POST['username']));
                $status = ucfirst(strtolower(strip_tags(trim($_POST['status']))));
                                
                //calling function
                $msg = $tb_handle->updateUserStatus($username, $status);
                if ($msg == 'Successfully Updated' || $msg == 'Updating Failed') {
                    $ar = array('message' => 'Successfully Updated');
                    echo json_encode($ar);
                }
                if ($msg == 'Error Updating') {
                    $ar = array('message' => 'Sorry.....Updating Failed');
                    echo json_encode($ar);
                }
            }

            else if (!isset($_POST['username']) && !isset($_POST['lat']) && !isset($_POST['long']) && !isset($_POST['status'])) {
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