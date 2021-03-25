<?php

    include 'class/class.user_status.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            if (!empty(trim($_POST['username'])) && !empty(trim($_POST['lat'])) && !empty(trim($_POST['long'])) && !empty(trim($_POST['likes']))) {
                
                $tb_handle = new user_status();

                $username = strip_tags(trim($_POST['username']));
                $lat_deg = strip_tags(trim($_POST['lat']));
                $long_deg = strip_tags(trim($_POST['long']));
                $likes = strip_tags(strtolower(trim($_POST['likes'])));

                //converting degree to radian
                $pi = pi();
                $lat_rad = $lat_deg*($pi/180);
                $long_rad = $long_deg*($pi/180);

                //Assign Variables 
                $tb_handle->username = $username;
                $tb_handle->status = 'Available';
                $tb_handle->latitude = $lat_rad;
                $tb_handle->longitude = $long_rad;
                $tb_handle->likes = $likes;

                //calling function
                $tb_handle->insert();
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