<?php
    include 'class/class.user_profile.php';
    include 'class/class.apiKeys.php';
    include 'class/class.followers.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            if (isset($_POST['username']) && !empty(trim($_POST['username']))) {

                $tb_handle = new user_profile();

                $username = trim($_POST['username']);

                //calling function
                $user_id = $tb_handle->getUserProfId($username);

                if ($user_id != 'Not Found' || $user_id != '') {
                    
                    $tb_handle1 = new followers();
                    $tb_handle1->getFollower($user_id);
                }
                else {
                    $ar = array('message' => 'User Not Found');
                    echo json_encode($ar);
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