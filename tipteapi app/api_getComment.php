<?php

    include 'class/class.user_comments.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['api_key']) && $api_ob->checkAPI(trim($_GET['api_key'])) === 'Exist') {

            if (!empty($_GET['assetId']) && !empty($_GET['type'])) {
                
                $tb_handle = new user_comments();

                $asset_id = trim($_GET['assetId']);
                $asset_type = strtolower(trim($_GET['type']));
                
                //calling function
                $tb_handle->getUserComments($asset_id, $asset_type);
            }
            else {
                $ar = array('message' => 'Sorry....No Data Received');
                echo json_encode($ar);
            }
        }
        else {
            $ar = array('message' => 'Unauthorized Access');
            echo json_encode($ar);
        }
    }
?>