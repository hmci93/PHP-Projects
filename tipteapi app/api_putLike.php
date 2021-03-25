<?php

    include 'class/class.user_likes.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            if (!empty(trim($_POST['userId'])) && !empty(trim($_POST['assetId'])) && !empty(trim($_POST['type'])) && !empty(trim($_POST['owner']))) {
                
                $tb_handle = new user_likes();

                $user_id = strip_tags(trim($_POST['userId']));
                $asset_id = strip_tags(trim($_POST['assetId']));
                $asset_type = strip_tags(trim($_POST['type']));
                $asset_owner = strip_tags(trim($_POST['owner']));

                date_default_timezone_set("Asia/Kolkata");
                $liked_date = date("d/m/Y H:i:s");

                //Assign Variables 
                $tb_handle->user_id = $user_id;
                $tb_handle->asset_id = $asset_id;
                $tb_handle->asset_type = strtolower($asset_type);
                $tb_handle->asset_owner = $asset_owner;
                $tb_handle->liked_date = $liked_date;

                //calling function
                $tb_handle->checkLikeRow();
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