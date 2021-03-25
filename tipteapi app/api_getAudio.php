<?php
    include 'class/class.getAudio.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            $tb_handle = new audio();
            
            //if all Data parameter available
            if (!isset($_POST['u_id']) && !isset($_POST['id']) && !isset($_POST['cat']) && isset($_POST['data'])) {
                
                $data = trim($_POST['data']);

                if ($data == 'all') {
                    $tb_handle->getAllData();
                }
            }

            //if only AudioID parameter available
            if (!isset($_POST['u_id']) && isset($_POST['id']) && !isset($_POST['cat']) && !isset($_POST['data'])) {
                
                // $u_id = trim($_POST['u_id']);
                $a_id = trim($_POST['id']);

                $tb_handle->getSingleData($a_id);

            }

            //if only userID parameter available
            if (isset($_POST['u_id']) && !isset($_POST['id']) && !isset($_POST['cat']) && !isset($_POST['data'])) {

                $u_id = trim($_POST['u_id']);
                
                $tb_handle->getDataByUser($u_id);
            }
            
            //if only category parameter available
            if (isset($_POST['cat']) && !isset($_POST['u_id']) && !isset($_POST['id']) && !isset($_POST['data'])) {

                $cat = trim($_POST['cat']);
                
                $tb_handle->getDataByCategory($cat);
            }
            
            //if userID and category parameter available
            if (isset($_POST['cat']) && isset($_POST['u_id'])) {

                $cat = trim($_POST['cat']);
                $u_id = trim($_POST['u_id']);
                
                $tb_handle->getSpecificData($cat, $u_id);
            }
            
            //if no parameter available
            if (!isset($_POST['cat']) && !isset($_POST['u_id']) && !isset($_POST['id']) && !isset($_POST['data'])) {

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