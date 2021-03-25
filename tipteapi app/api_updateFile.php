<?php
    include 'class/class.getFile.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {

            if (!empty(trim($_POST['category'])) && !empty(trim($_POST['userId'])) && !empty(trim($_POST['place'])) && !empty(trim($_POST['f_id'])) && empty(trim($_POST['assetFileOld'])) && empty(trim($_POST['assetFileNew']))) {
                $category = trim($_POST['category']);
                $userId = trim($_POST['userId']);
                $place = trim($_POST['place']);
                $f_id = trim($_POST['f_id']);

                //calling class
                $tb_handle = new files();

                //assigning class variables
                $tb_handle->category = strtolower($category);
                $tb_handle->userId = $userId;
                $tb_handle->place = $place;
                $tb_handle->id = $f_id;

                //calling function
                $tb_handle->updateData();
            }
            else if (!empty(trim($_POST['assetFileOld'])) && !empty(trim($_POST['assetFileNew'])) && empty(trim($_POST['category'])) && empty(trim($_POST['userId'])) && empty(trim($_POST['place'])) && !empty(trim($_POST['f_id']))) {
                $filenameOld = trim($_POST['assetFileOld']);
                $filenameNew = trim($_POST['assetFileNew']);
                $f_id = trim($_POST['f_id']);

                //calling class
                $tb_handle = new files();

                $fileData = $tb_handle->getDeleteData($f_id);
                $fileData_obj = json_decode($fileData, true);

                $newPath = realpath('uploads/files/').'/'.$filenameNew.substr($fileData_obj[0]['assetFile'], strripos($fileData_obj[0]['assetFile'], '_'));

                if (realpath($fileData_obj[0]['assetFile']) == true) {
                    if (is_writable(realpath($fileData_obj[0]['assetFile'])) == true) {
                        rename(realpath($fileData_obj[0]['assetFile']), $newPath);
                        if (realpath($newPath) == true) {
                            $tb_handle->assetFile = 'uploads/files/'.$filenameNew.substr($fileData_obj[0]['assetFile'], strripos($fileData_obj[0]['assetFile'], '_'));
                            $tb_handle->id = $f_id;

                            $tb_handle->updateFileName();
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