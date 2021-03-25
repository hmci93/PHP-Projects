<?php
    include 'class/class.getVideo.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI($_POST['api_key']) === 'Exist') {

            $tb_handle = new video();
            
            //if search parameter available
            if (isset($_POST['searchData']) && !empty(trim($_POST['searchData']))) {
                $searchData = strip_tags(trim($_POST['searchData']));
                $tb_handle->getSearchData($searchData);
            }
            
            //if no parameter available
            if (!isset($_POST['searchData'])) {

                $ar = array('message' => 'No Data Received');
                echo json_encode($ar);
            }
        }
        else {
            $ar = array('message' => 'Unauthorized Access');
            echo json_encode($ar);
        }
    }
?>