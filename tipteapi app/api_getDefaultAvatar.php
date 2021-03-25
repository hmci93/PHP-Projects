<?php
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {
             $dir_path = "uploads/profImg/default/";

             $prof_arr = scandir($dir_path);
             $prof_link_arr = array();
             foreach ($prof_arr as $k => $v) {
                 if ($v <> '.') {
                     if ($v <> '..') {
                        array_push($prof_link_arr, 'http://api.tipteapi.com/'.$dir_path.$v);
                     }
                 }
             }
             echo json_encode($prof_link_arr);
        }
        else {
            $ar = array('message' => 'Unauthorized Access');
            echo json_encode($ar);
        }
    }
?>