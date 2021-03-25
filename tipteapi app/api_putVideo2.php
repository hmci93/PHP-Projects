<?php
    include 'class/class.getVideo.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI($_POST['api_key']) === 'Exist') {
            
            if (!empty($_FILES["assetVideo"]["name"]) && !empty(trim($_POST['category'])) && !empty(trim($_POST['userId'])) && !empty(trim($_POST['place'])) && !empty(trim($_POST['assetThumb']))) {

                $category = strip_tags(trim($_POST['category']));
                $userId = strip_tags(trim($_POST['userId']));
                $place = strip_tags(trim($_POST['place']));
                $thumbURL = trim($_POST['assetThumb']);

                date_default_timezone_set("Asia/Kolkata");
                $dateTime = date("d/m/Y H:i:s");
                
                $rand_no = mt_rand(1000, 9999);
                
                // File upload path
                $targetDir = "uploads/video/";
                $fileName = basename($_FILES["assetVideo"]["name"]);
                $targetFilePath = $targetDir.basename($_FILES["assetVideo"]["name"], '.'.pathinfo($fileName,PATHINFO_EXTENSION)).'_'.$rand_no.'.'.pathinfo($fileName,PATHINFO_EXTENSION);
                $fileType = pathinfo($fileName,PATHINFO_EXTENSION);


                // Allow certain file formats
                $allowTypes = array('mp4','avi','mov','flv','wmv');

                if (in_array(strtolower($fileType), $allowTypes)) {
                    // Upload file to server
                    if(move_uploaded_file($_FILES["assetVideo"]["tmp_name"], $targetFilePath)) {
                        
                        //change permission
                        chmod($targetFilePath, 0755);

                        // Thumb Upload
                        $targetThumbPath = '';
                        $targetDir_thumb = "uploads/videoThumbs/";
                        if (preg_match("/^data:image\/(\w+);base64,/", $thumbURL, $thumbType)) {
                            $thumbURL = substr($thumbURL, strpos($thumbURL, ',') + 1);
                            $thumbType = strtolower($thumbType[1]);

                            $thumbURL = base64_decode($thumbURL);
                            $targetThumbPath = $targetDir_thumb."thumb_".basename($_FILES["assetVideo"]["name"], '.'.pathinfo($fileName,PATHINFO_EXTENSION)).'_'.$rand_no.".{$thumbType}";

                            if ($thumbURL === false) {
                                echo json_encode(array('message' => 'base64 decode failed'));
                            }
                            file_put_contents($targetThumbPath, $thumbURL);
                            chmod($targetThumbPath, 0755);
                        }
                        else {
                            echo json_encode(array("message" => "URI doesn't match with image data")); 
                        }
                        
                        // calling class
                        $tb_handle = new video();

                        // assigning class variables
                        $tb_handle->category = strtolower($category);
                        $tb_handle->userId = $userId;
                        $tb_handle->place = $place;
                        $tb_handle->dateTime = $dateTime;
                        $tb_handle->assetVideo = $targetFilePath;
                        $tb_handle->reserved2 = $targetThumbPath;
                        $tb_handle->reserved3 = 0;

                        // calling function
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