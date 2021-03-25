<?php
    include 'class/class.getAudio.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {
            
            $tb_handle = new audio();

            if (isset($_POST['audioId']) && !empty(trim($_POST['audioId']))) {
                
                $a_id = trim($_POST['audioId']);

                $deleteAudioData = $tb_handle->getDeleteData($a_id);
                $deleteAudioData_obj = json_decode($deleteAudioData, true);

                $audioPath = $deleteAudioData_obj[0]['assetAudio'];
                $realAudioPath = realpath($audioPath);

                if (realpath($audioPath) == true) {
                    if (is_writable($realAudioPath) == true) {
                        $msg = $tb_handle->deleteAudio($a_id);
                        $msg_obj = json_decode($msg, true);
                        // echo $msg_obj['message'];
                        if ($msg_obj['message'] == 'Record Successfully Deleted') {
                            unlink($realAudioPath);
                            if (realpath($audioPath) <> true) {
                                header("Location: http://api.tipteapi.com/admin/process/audioListProcess.php?msg=sd");
                            }
                            else {
                                header("Location: http://api.tipteapi.com/admin/process/audioListProcess.php?msg=df");
                            }
                        }
                        else {
                            header("Location: http://api.tipteapi.com/admin/process/audioListProcess.php?msg=df1");
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
        }
    }
?>