<?php
    include 'class/class.getVideo.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {
            
            if (!empty($_FILES["assetVideo"]["name"]) && !empty(trim($_POST['category'])) && !empty(trim($_POST['userId'])) && !empty(trim($_POST['place'])) && !empty($_FILES["videoThumb"]["name"])) {

                $category = strip_tags(trim($_POST['category']));
                $userId = strip_tags(trim($_POST['userId']));
                $place = strip_tags(trim($_POST['place']));

                date_default_timezone_set("Asia/Kolkata");
                $dateTime = date("d/m/Y H:i:s");
                
                $rand_no = mt_rand(1000, 9999);
                
                // Video File upload path
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
                        
                        // Video Thumb Upload
                        $targetDir_thumb = "uploads/videoThumbs/";
                        $thumbFileName = basename($_FILES["videoThumb"]["name"]);
                        $targetThumbPath = $targetDir_thumb.basename($_FILES["videoThumb"]["name"], '.'.pathinfo($thumbFileName,PATHINFO_EXTENSION)).'_'.$rand_no.'.'.pathinfo($thumbFileName,PATHINFO_EXTENSION);
                        $thumbFileType = pathinfo($thumbFileName,PATHINFO_EXTENSION);
                        
                        //Allow Thumb Types
                        $allowThumbTypes = array('jpg','jpeg','png','svg');
                        
                        if (in_array(strtolower($thumbFileType), $allowThumbTypes)) {
                            //Upload Thumb to Server
                            if (move_uploaded_file($_FILES["videoThumb"]["tmp_name"], $targetThumbPath)) {
                                
                                //change permission
                                chmod($targetThumbPath, 0755);
                                
                                //calling class
                                $tb_handle = new video();
                                
                                //assigning class variables
                                $tb_handle->category = strtolower($category);
                                $tb_handle->userId = $userId;
                                $tb_handle->place = $place;
                                $tb_handle->dateTime = $dateTime;
                                $tb_handle->assetVideo = $targetFilePath;
                                $tb_handle->reserved2 = $targetThumbPath;
                                $tb_handle->reserved3 = 0;
                                
                                //calling function
                                $tb_handle->insert();
                            }
                            else {
                                $ar = array('message' => 'Thumbnail Uploading Failed !!!');
                                echo json_encode($ar);
                            }
                        }
                        else {
                            $ar = array('message' => 'Invalid Video Thumbnail Type !!!');
                            echo json_encode($ar);
                        }
                    }
                    else {
                        $ar = array('message' => 'Video Uploading Failed !!!');
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