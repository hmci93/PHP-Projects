<?php
    include 'class/class.getAudio.php';
    include 'class/class.apiKeys.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {
            
            if (!empty(trim($_POST['category'])) && !empty(trim($_POST['userId'])) && !empty(trim($_POST['place'])) && !empty(trim($_POST['a_id'])) && empty(trim($_POST['assetAudioOld'])) && empty(trim($_POST['assetAudioNew']))) {
                $category = trim($_POST['category']);
                $userId = trim($_POST['userId']);
                $place = trim($_POST['place']);
                $a_id = trim($_POST['a_id']);

                //calling class
                $tb_handle = new audio();

                //assigning class variables
                $tb_handle->category = strtolower($category);
                $tb_handle->userId = $userId;
                $tb_handle->place = $place;
                $tb_handle->id = $a_id;

                //calling function
                $tb_handle->updateData();
            }
            else if (!empty(trim($_POST['assetAudioOld'])) && !empty(trim($_POST['assetAudioNew'])) && empty(trim($_POST['category'])) && empty(trim($_POST['userId'])) && empty(trim($_POST['place'])) && !empty(trim($_POST['a_id']))) {
                $audioFilenameOld = trim($_POST['assetAudioOld']);
                $audioFilenameNew = trim($_POST['assetAudioNew']);
                $a_id = trim($_POST['a_id']);

                //calling class
                $tb_handle = new audio();

                $audioData = $tb_handle->getDeleteData($a_id);
                $audioData_obj = json_decode($audioData, true);

                $newPath = realpath('uploads/audio/').'/'.$audioFilenameNew.substr($audioData_obj[0]['assetAudio'], strripos($audioData_obj[0]['assetAudio'], '_'));

                if (realpath($audioData_obj[0]['assetAudio']) == true) {
                    if (is_writable(realpath($audioData_obj[0]['assetAudio'])) == true) {
                        rename(realpath($audioData_obj[0]['assetAudio']), $newPath);
                        if (realpath($newPath) == true) {
                            $tb_handle->assetAudio = 'uploads/audio/'.$audioFilenameNew.substr($audioData_obj[0]['assetAudio'], strripos($audioData_obj[0]['assetAudio'], '_'));
                            $tb_handle->id = $a_id;

                            $tb_handle->updateAudioName();
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