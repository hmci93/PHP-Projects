<?php
    include 'class/class.getFile.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {
            
            $tb_handle = new files();

            if (isset($_POST['fileId']) && !empty(trim($_POST['fileId']))) {
                
                $f_id = trim($_POST['fileId']);

                $deleteFileData = $tb_handle->getDeleteData($f_id);
                $deleteFileData_obj = json_decode($deleteFileData, true);

                $filePath = $deleteFileData_obj[0]['assetFile'];
                $realFilePath = realpath($filePath);

                if (realpath($filePath) == true) {
                    if (is_writable($realFilePath) == true) {
                        $msg = $tb_handle->deleteFile($f_id);
                        $msg_obj = json_decode($msg, true);
                        // echo $msg_obj['message'];
                        if ($msg_obj['message'] == 'Record Successfully Deleted') {
                            unlink($realFilePath);
                            if (realpath($filePath) <> true) {
                                header("Location: http://api.tipteapi.com/admin/process/fileListProcess.php?msg=sd");
                            }
                            else {
                                header("Location: http://api.tipteapi.com/admin/process/fileListProcess.php?msg=df");
                            }
                        }
                        else {
                            header("Location: http://api.tipteapi.com/admin/process/fileListProcess.php?msg=df1");
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