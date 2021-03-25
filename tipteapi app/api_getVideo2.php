<?php
    include 'class/class.getVideo.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            $tb_handle = new video();
            
            //if data parameter available
            if (!isset($_POST['u_id']) && !isset($_POST['id']) && !isset($_POST['cat']) && isset($_POST['data']) && !empty(trim($_POST['data']))) {
                
                $data = strip_tags(trim($_POST['data']));

                if ($data == 'all') {
                    $tb_handle->getAllData();
                }
            }

            //if only VideoID parameter available
            if (!isset($_POST['u_id']) && isset($_POST['id']) && !empty(trim($_POST['id'])) && !isset($_POST['cat']) && !isset($_POST['data'])) {
                
                // $u_id = trim($_POST['u_id']);
                $v_id = strip_tags(trim($_POST['id']));

                $tb_handle->getSingleData($v_id);

            }

            //if only userID parameter available
            if (isset($_POST['u_id']) && !empty(trim($_POST['u_id'])) && !isset($_POST['id']) && !isset($_POST['cat']) && !isset($_POST['data'])) {

                $u_id = strip_tags(trim($_POST['u_id']));
                
                $tb_handle->getDataByUser($u_id);
                
                // $res=$tb_handle->getDataByUser($u_id);
                
                // $res_obj = json_decode($res, true);
                
                // echo $res_obj[0]['assetVideo'];
            }
            
            //if only category parameter available
            if (isset($_POST['cat']) && !empty(trim($_POST['cat'])) && !isset($_POST['u_id']) && !isset($_POST['id']) && !isset($_POST['data'])) {

                $cat = strip_tags(strtolower(trim($_POST['cat'])));
                
                $tb_handle->getDataByCategory($cat);
            }
            
            //if userID and category parameter available
            if (isset($_POST['cat']) && isset($_POST['u_id']) && !empty(trim($_POST['cat'])) && !empty(trim($_POST['u_id']))) {

                $cat = strip_tags(strtolower(trim($_POST['cat'])));
                $u_id = strip_tags(trim($_POST['u_id']));
                
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