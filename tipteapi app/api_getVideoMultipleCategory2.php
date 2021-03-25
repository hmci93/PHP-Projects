<?php
    include 'class/class.getVideo.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            $tb_handle = new video();

            //if multiple Category parameter available
            if (isset($_POST['cat'])) {
                
                $cat = strip_tags(strtolower(trim($_POST['cat'])));
                $tb_handle->getDataByMultCat($cat);
            }

            //if no parameter available
            if (!isset($_POST['cat'])) {

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