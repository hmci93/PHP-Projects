<?php
    include 'class/class.getVideo.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {
            
            if (!empty(trim($_POST['category'])) && !empty(trim($_POST['userId'])) && !empty(trim($_POST['place'])) && !empty(trim($_POST['v_id'])) && empty(trim($_POST['assetVideoOld'])) && empty(trim($_POST['assetVideoNew']))) {

                $category = trim($_POST['category']);
                $userId = trim($_POST['userId']);
                $place = trim($_POST['place']);
                $v_id = trim($_POST['v_id']);

                //calling class
                $tb_handle = new video();

                //assigning class variables
                $tb_handle->category = strtolower($category);
                $tb_handle->userId = $userId;
                $tb_handle->place = $place;
                $tb_handle->id = $v_id;

                //calling function
                $tb_handle->updateData();
            }
            else if (!empty(trim($_POST['assetVideoOld'])) && !empty(trim($_POST['assetVideoNew'])) && empty(trim($_POST['category'])) && empty(trim($_POST['userId'])) && empty(trim($_POST['place'])) && !empty(trim($_POST['v_id']))) {
                
                $videoFilenameOld = trim($_POST['assetVideoOld']);
                $videoFilenameNew = trim($_POST['assetVideoNew']);
                $v_id = trim($_POST['v_id']);

                //calling class
                $tb_handle = new video();

                $videoData = $tb_handle->getDeleteData($v_id);
                $videoData_obj = json_decode($videoData, true);

                $newPath = realpath('uploads/video/').'/'.$videoFilenameNew.substr($videoData_obj[0]['assetVideo'], strripos($videoData_obj[0]['assetVideo'], '_'));

                if (realpath($videoData_obj[0]['assetVideo']) == true) {
                    if (is_writable(realpath($videoData_obj[0]['assetVideo'])) == true) {
                        rename(realpath($videoData_obj[0]['assetVideo']), $newPath);
                        if (realpath($newPath) == true) {
                            $tb_handle->assetVideo = 'uploads/video/'.$videoFilenameNew.substr($videoData_obj[0]['assetVideo'], strripos($videoData_obj[0]['assetVideo'], '_'));
                            $tb_handle->id = $v_id;

                            $tb_handle->updateVideoName();
                        } else {
                            echo "File Not Updated";
                        }
                        
                    } else {
                        echo "File Not Editable";
                    }
                    
                } else {
                    echo "File Path Not Found";
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