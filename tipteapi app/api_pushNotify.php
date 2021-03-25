<?php
    include 'class/class.getVideo.php';
    include 'class/class.user_profile.php';
    include 'class/class.following2.php';
    include 'class/class.followers2.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {
            if (isset($_POST['userId']) && !empty(trim($_POST['userId']))) {

                $tb_handle = new video();
                $tb_handle1 = new user_profile();
                $tb_handle2 = new following();
                $tb_handle3 = new followers();

                $username = strip_tags(trim($_POST['userId']));

                date_default_timezone_set("Asia/Kolkata");
                $end_date = date('d-m-Y H:i:s');
                $start_date = date('d-m-Y H:i:s',strtotime('-2 hours',strtotime($end_date)));
                $f_start_date = date('d/m/Y H:i:s',strtotime($start_date));
                $f_end_date = date('d/m/Y H:i:s', strtotime($end_date));

                //  echo "Start Date - ".$f_start_date."<br>"."End Date - ".$f_end_date;

                $user_id = $tb_handle1->getUserProfId($username);
                $folng = $tb_handle2->getFollowingForMap($user_id);
                $folrs = $tb_handle3->getFollowerForMap($user_id);

                $peopleList_arr1 = array();
                if (!array_key_exists('message', json_decode($folng, true))) {
                    foreach (json_decode($folng, true) as $key) {
                        if (!in_array(trim($key['following_user_id']), $peopleList_arr1)) {
                            array_push($peopleList_arr1, trim($key['following_user_id']));
                        }
                    }
                }
                if (!array_key_exists('message', json_decode($folrs, true))) {
                    foreach (json_decode($folrs, true) as $k) {
                        if (!in_array(trim($k['follower_user_id']), $peopleList_arr1)) {
                            array_push($peopleList_arr1, trim($k['follower_user_id']));
                        }
                    }
                }
                if (!empty($peopleList_arr1)) {
                    //calling function
                    $tb_handle->getDataForNotification(json_encode($peopleList_arr1), $f_start_date, $f_end_date);
                }
                if (empty($peopleList_arr1)) {
                    $ar = array('message' => 'Following And Follower Both Lists Are Empty');
                    echo json_encode($ar);
                }

                // echo "Start Date - ".$start_date."<br>End Date - ".$end_date;
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