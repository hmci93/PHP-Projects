<?php
    include 'class/class.getVideo.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['api_key']) && $api_ob->checkAPI(trim($_GET['api_key'])) === 'Exist') {

            $tb_handle = new video();
            
            //if data parameter available
            if (!isset($_GET['u_id']) && !isset($_GET['id']) && !isset($_GET['cat']) && isset($_GET['data'])) {
                
                $data = trim($_GET['data']);

                if ($data == 'all') {
                    $tb_handle->getAllData();
                }
            }

            //if only VideoID parameter available
            if (!isset($_GET['u_id']) && isset($_GET['id']) && !isset($_GET['cat']) && !isset($_GET['data'])) {
                
                // $u_id = trim($_GET['u_id']);
                $v_id = trim($_GET['id']);

                $tb_handle->getSingleData($v_id);

            }

            //if only userID parameter available
            if (isset($_GET['u_id']) && !isset($_GET['id']) && !isset($_GET['cat']) && !isset($_GET['data'])) {

                $u_id = trim($_GET['u_id']);
                
                $tb_handle->getDataByUser($u_id);
                
                // $res=$tb_handle->getDataByUser($u_id);
                
                // $res_obj = json_decode($res, true);
                
                // echo $res_obj[0]['assetVideo'];
            }
            
            //if only category parameter available
            if (isset($_GET['cat']) && !isset($_GET['u_id']) && !isset($_GET['id']) && !isset($_GET['data'])) {

                $cat = strtolower(trim($_GET['cat']));
                
                $tb_handle->getDataByCategory($cat);
            }
            
            //if userID and category parameter available
            if (isset($_GET['cat']) && isset($_GET['u_id'])) {

                $cat = strtolower(trim($_GET['cat']));
                $u_id = trim($_GET['u_id']);
                
                $tb_handle->getSpecificData($cat, $u_id);
            }
            
            //if no parameter available
            if (!isset($_GET['cat']) && !isset($_GET['u_id']) && !isset($_GET['id']) && !isset($_GET['data'])) {

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