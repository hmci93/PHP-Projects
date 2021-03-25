<?php
    include 'class/class.getVideo.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {
            if (isset($_POST['v_id']) && isset($_POST['username']) && !empty(trim($_POST['v_id'])) && !empty(trim($_POST['username']))) {
                $tb_handle = new video();

                $vId = strip_tags(trim($_POST['v_id']));
                $username = strip_tags(trim($_POST['username']));

                //check video owner
                $chk_owner = $tb_handle->chkVideoOwner($vId, $username);

                if ($chk_owner == 'Authentic') {
                    $tb_handle->removeVideoDisplay($vId);
                }else {
                    $ar = array('message' => "Username and Video Owner Doesn't Match");
                    echo json_encode($ar);
                }
            }else {
                $ar = array('message' => 'All Fields Are Mandatory');
                echo json_encode($ar);
            }
        }else {
            $ar = array('message' => 'Unauthorized Access');
            echo json_encode($ar);
        }
    }
?>