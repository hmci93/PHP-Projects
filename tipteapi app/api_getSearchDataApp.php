<?php
    include 'class/class.getVideo.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            $tb_handle = new video();

            //if search character available
            if (isset($_POST['s_char']) && !empty(trim($_POST['s_char']))) {
                $s_char = trim($_POST['s_char']);

                $tb_handle->getSuggList($s_char);
            }
            //if search data available
            if (isset($_POST['searchData']) && !empty(trim($_POST['searchData']))) {
                $s_data = trim($_POST['searchData']);

                $tb_handle->getSearchDataApp($s_data);
            }
            //if no parameter available
            if (!isset($_POST['s_char']) && !isset($_POST['searchData'])) {

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