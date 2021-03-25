<?php
    include 'class/class.getImage.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {
            
            $tb_handle = new image();

            if (isset($_POST['imageId']) && !empty(trim($_POST['imageId']))) {
                
                $i_id = trim($_POST['imageId']);

                $deleteImageData = $tb_handle->getDeleteData($i_id);
                $deleteImageData_obj = json_decode($deleteImageData, true);

                $imagePath = $deleteImageData_obj[0]['assetImage'];
                $realImagePath = realpath($imagePath);

                if (realpath($imagePath) == true) {
                    if (is_writable($realImagePath) == true) {
                        $msg = $tb_handle->deleteImage($i_id);
                        $msg_obj = json_decode($msg, true);
                        // echo $msg_obj['message'];
                        if ($msg_obj['message'] == 'Record Successfully Deleted') {
                            unlink($realImagePath);
                            if (realpath($imagePath) <> true) {
                                header("Location: http://api.tipteapi.com/admin/process/imageListProcess.php?msg=sd");
                            }
                            else {
                                header("Location: http://api.tipteapi.com/admin/process/imageListProcess.php?msg=df");
                            }
                        }
                        else {
                            header("Location: http://api.tipteapi.com/admin/process/imageListProcess.php?msg=df1");
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