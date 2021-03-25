<?php
    include 'class/class.getVideo.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {
            
            if (!empty($_FILES["assetVideo"]["name"]) && !empty($_POST['category']) && !empty($_POST['userId']) && !empty($_POST['place'])) {

                $category = trim($_POST['category']);
                $userId = trim($_POST['userId']);
                $place = trim($_POST['place']);

                date_default_timezone_set("Asia/Kolkata");
                $dateTime = date("d/m/Y H:i:s");
                
                // File upload path
                $targetDir = "uploads/video/";
                $fileName = basename($_FILES["assetVideo"]["name"]);
                $targetFilePath = $targetDir.basename($_FILES["assetVideo"]["name"], '.'.pathinfo($fileName,PATHINFO_EXTENSION)).'_'.mt_rand(1000, 9999).'.'.pathinfo($fileName,PATHINFO_EXTENSION);
                $fileType = pathinfo($fileName,PATHINFO_EXTENSION);

                // Allow certain file formats
                $allowTypes = array('mp4','avi','mov','flv','wmv');

                if (in_array(strtolower($fileType), $allowTypes)) {
                    // Upload file to server
                    if(move_uploaded_file($_FILES["assetVideo"]["tmp_name"], $targetFilePath)) {
                        
                        //change permission
                        chmod($targetFilePath, 0755);
                        
                        //calling class
                        $tb_handle = new video();

                        //assigning class variables
                        $tb_handle->category = strtolower($category);
                        $tb_handle->userId = $userId;
                        $tb_handle->place = $place;
                        $tb_handle->dateTime = $dateTime;
                        $tb_handle->assetVideo = $targetFilePath;

                        //calling function
                        $tb_handle->insert();
                    }
                    else {
                        $ar = array('message' => 'Uploading Failed !!!');
                        echo json_encode($ar);
                    }
                }
                else {
                    $ar = array('message' => 'Invalid Video Type !!!');
                    echo json_encode($ar);
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