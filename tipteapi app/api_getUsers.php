<?php
    include 'class/class.user_profile.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            $tb_handle = new user_profile();

            // if data parameter available
            if (isset($_POST['data']) && !empty(trim($_POST['data'])) && empty(trim($_POST['userId']))) {
                
                $data = trim($_POST['data']);

                if ($data == 'all') {
                    $tb_handle->getAllUsers();
                }
            }
            
            // if userId parameter available
            if (isset($_POST['userId']) && !empty(trim($_POST['userId'])) && empty(trim($_POST['data']))) {
                
                $userId = trim($_POST['userId']);

                $tb_handle->getSpecificUser($userId);
            }
            else if (empty(trim($_POST['data'])) && empty(trim($_POST['userId']))) {
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