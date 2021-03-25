<?php
    include 'class/class.getVideo.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {
            
            $tb_handle = new video();

            if (isset($_POST['videoId']) && !empty(trim($_POST['videoId']))) {
                
                $v_id = trim($_POST['videoId']);

                $deleteVideoData = $tb_handle->getDeleteData($v_id);
                $deleteVideoData_obj = json_decode($deleteVideoData, true);

                $videoPath = $deleteVideoData_obj[0]['assetVideo'];
                $realVideoPath = realpath($videoPath);

                if (realpath($videoPath) == true) {
                    if (is_writable($realVideoPath) == true) {
                        // echo "File Editable";
                        $msg = $tb_handle->deleteVideo($v_id);
                        $msg_obj = json_decode($msg, true);
                        // // echo $msg_obj['message'];
                        if ($msg_obj['message'] == 'Record Successfully Deleted') {
                            unlink($realVideoPath);
                            if (realpath($videoPath) <> true) {
                                header("Location: http://api.tipteapi.com/admin/process/videoListProcess.php?msg=sd");
                            }
                            else {
                                header("Location: http://api.tipteapi.com/admin/process/videoListProcess.php?msg=df");
                            }
                        }
                        else {
                            header("Location: http://api.tipteapi.com/admin/process/videoListProcess.php?msg=df1");
                        }
                    }
                    else {
                        echo "File Not Editable";
                    }
                }
                else {
                    echo "File Path Not Found";
                }
            }
            else {
                echo "All Fields Are Mandatory";
            }
        }
        else {
            echo "Unauthorized User";
        }
    }
?>