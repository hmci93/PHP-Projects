<?php
    include 'class/class.getImage.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            if (!empty(trim($_POST['category'])) && !empty(trim($_POST['userId'])) && !empty(trim($_POST['place'])) && !empty(trim($_POST['i_id'])) && empty(trim($_POST['assetImageOld'])) && empty(trim($_POST['assetImageNew']))) {
                $category = trim($_POST['category']);
                $userId = trim($_POST['userId']);
                $place = trim($_POST['place']);
                $i_id = trim($_POST['i_id']);

                //calling class
                $tb_handle = new image();

                //assigning class variables
                $tb_handle->category = strtolower($category);
                $tb_handle->userId = $userId;
                $tb_handle->place = $place;
                $tb_handle->id = $i_id;

                //calling function
                $tb_handle->updateData();
            }
            else if (!empty(trim($_POST['assetImageOld'])) && !empty(trim($_POST['assetImageNew'])) && empty(trim($_POST['category'])) && empty(trim($_POST['userId'])) && empty(trim($_POST['place'])) && !empty(trim($_POST['i_id']))) {
                $imageFilenameOld = trim($_POST['assetImageOld']);
                $imageFilenameNew = trim($_POST['assetImageNew']);
                $i_id = trim($_POST['i_id']);

                //calling class
                $tb_handle = new image();

                $imageData = $tb_handle->getDeleteData($i_id);
                $imageData_obj = json_decode($imageData, true);

                $newPath = realpath('uploads/image/').'/'.$imageFilenameNew.substr($imageData_obj[0]['assetImage'], strripos($imageData_obj[0]['assetImage'], '_'));

                if (realpath($imageData_obj[0]['assetImage']) == true) {
                    if (is_writable(realpath($imageData_obj[0]['assetImage'])) == true) {
                        rename(realpath($imageData_obj[0]['assetImage']), $newPath);
                        if (realpath($newPath) == true) {
                            $tb_handle->assetImage = 'uploads/image/'.$imageFilenameNew.substr($imageData_obj[0]['assetImage'], strripos($imageData_obj[0]['assetImage'], '_'));
                            $tb_handle->id = $i_id;

                            $tb_handle->updateImageName();
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
        }
    }
?>