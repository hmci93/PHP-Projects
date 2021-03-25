<?php
    include 'class/class.getFile.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            if (!empty($_FILES["assetFile"]["name"]) && !empty(trim($_POST['category'])) && !empty(trim($_POST['userId'])) && !empty(trim($_POST['place']))) {

                $category = strip_tags(trim($_POST['category']));
                $userId = strip_tags(trim($_POST['userId']));
                $place = strip_tags(trim($_POST['place']));

                date_default_timezone_set("Asia/Kolkata");
                $dateTime = date("d/m/Y H:i:s");
                
                // File upload path
                $targetDir = "uploads/files/";
                $fileName = basename($_FILES["assetFile"]["name"]);
                $targetFilePath = $targetDir.basename($_FILES["assetFile"]["name"], '.'.pathinfo($fileName,PATHINFO_EXTENSION)).'_'.mt_rand(1000, 9999).'.'.pathinfo($fileName,PATHINFO_EXTENSION);
                $fileType = pathinfo($fileName,PATHINFO_EXTENSION);

                // Allow certain file formats
                $allowTypes = array('doc','docx','txt','pdf','rtf','odt','ppt','pptx');

                if (in_array(strtolower($fileType), $allowTypes)) {
                    // Upload file to server
                    if(move_uploaded_file($_FILES["assetFile"]["tmp_name"], $targetFilePath)) {
                        
                        //change permission
                        chmod($targetFilePath, 0755);
                        
                        //calling class
                        $tb_handle = new files();

                        //assigning class variables
                        $tb_handle->category = strtolower($category);
                        $tb_handle->userId = $userId;
                        $tb_handle->place = $place;
                        $tb_handle->dateTime = $dateTime;
                        $tb_handle->assetFile = $targetFilePath;

                        //calling function
                        $tb_handle->insert();
                    }
                    else {
                        $ar = array('message' => 'Uploading Failed !!!');
                        echo json_encode($ar);
                    }
                }
                else {
                    $ar = array('message' => 'Invalid File Type !!!');
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