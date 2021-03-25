<?php
    include 'class/class.user_profile.php';
    // include 'class/class.following2.php';
    // include 'class/class.followers2.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {
            if (!empty(trim($_POST['username'])) && !empty(trim($_POST['lat'])) && !empty(trim($_POST['long'])) && !empty(trim($_POST['accuracy']))) {
                
                $tb_handle = new user_profile();
                // $tb_handle1 = new following();
                // $tb_handle2 = new followers();

                $username = strip_tags(trim($_POST['username']));
                $lat_deg = strip_tags(trim($_POST['lat']));
                $long_deg = strip_tags(trim($_POST['long']));
                $accuracy = strip_tags(trim($_POST['accuracy']));
    
                //converting degree to radian
                $pi = pi();
                $lat_rad = $lat_deg*($pi/180);
                $long_rad = $long_deg*($pi/180);
                
                // $user_id = $tb_handle->getUserProfId($username);
                // $folng = $tb_handle1->getFollowingForMap($user_id);
                // $folrs = $tb_handle2->getFollowerForMap($user_id);
                $allPeople = $tb_handle->getAllUsersForMap($username);
                $peopleList_arr = array();
                
                // if (!array_key_exists('message', json_decode($folng, true))) {
                //     foreach (json_decode($folng, true) as $key) {
                //         if (!in_array(trim($key['following_user_id']), $peopleList_arr)) {
                //             array_push($peopleList_arr, trim($key['following_user_id']));
                //         }
                //     }
                // }
                // if (!array_key_exists('message', json_decode($folrs, true))) {
                //     foreach (json_decode($folrs, true) as $k) {
                //         if (!in_array(trim($k['follower_user_id']), $peopleList_arr)) {
                //             array_push($peopleList_arr, trim($k['follower_user_id']));
                //         }
                //     }
                // }
                if (!array_key_exists('message', json_decode($allPeople, true))) {
                    foreach (json_decode($allPeople, true) as $k) {
                        if (!in_array(trim($k['up_id']), $peopleList_arr)) {
                            array_push($peopleList_arr, trim($k['up_id']));
                        }
                    }
                }
                
                if (!empty($peopleList_arr)) {
                    
                    //calling function
                    $msg = $tb_handle->updateUserLoc($username, $lat_rad, $long_rad);
                    // $msg = $tb_handle->updateUserLoc($username, $lat_deg, $long_deg);
                    // echo $msg;

                    if ($msg == 'Successfully Updated' || $msg == 'Updating Failed') {
                        $tb_handle->getPeople($username, $lat_rad, $long_rad, $accuracy, json_encode($peopleList_arr));
                        // $tb_handle->getPeople($username, $lat_deg, $long_deg, $accuracy, json_encode($peopleList_arr));
                    }
                    else {
                        $ar = array('message' => 'Location Not Updated');
                        echo json_encode($ar);
                    //     echo 'Location Not Updated';
                    }
                }
                
                if (empty($peopleList_arr)) {
                    // $ar = array('message' => 'Following And Follower Both Lists Are Empty');
                    $ar = array('message' => 'User List Is Empty');
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