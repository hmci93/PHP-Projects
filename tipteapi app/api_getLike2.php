<?php

    include 'class/class.user_likes.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            if (!empty(trim($_POST['userId'])) && !empty(trim($_POST['type']))) {
                
                $tb_handle = new user_likes();

                $user_id = trim($_POST['userId']);
                $asset_type = strtolower(trim($_POST['type']));

                //calling function
                $tb_handle->getUserLikes($user_id, $asset_type);
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