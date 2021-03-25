<?php
    include 'class/class.apiKeys.php';
    include 'class/class.user_bio.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            $tb_handle = new user_bio();

            if (isset($_POST['userId']) && !empty(trim($_POST['userId']))) {
                
                $userId = trim($_POST['userId']);

                $tb_handle->getUserBio($userId);
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