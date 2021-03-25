<?php
    if (isset($_POST['vId']) && isset($_POST['assetThumb']) && isset($_POST['v_path']) && !empty(trim($_POST['vId'])) && !empty($_POST['assetThumb']) && !empty($_POST['v_path'])) {
        // echo trim($_POST['vId']).'<br>'.trim($_POST['assetThumb']);
        // $conn = mysqli_connect("localhost","teapi","i4nJ]Za#]S;7","tepai_api");
        $conn = '';

        $vId = trim($_POST['vId']);
        $v_path = trim($_POST['v_path']);
        $thumbURL = trim($_POST['assetThumb']);

        // Thumb Upload
        $targetThumbPath = '';
        $targetDir_thumb = "uploads/videoThumbs/";
        $thumbFileName = substr($v_path, strripos($v_path, '/')+1, -strlen(substr($v_path, strripos($v_path, '.'))));
        if (preg_match("/^data:image\/(\w+);base64,/", $thumbURL, $thumbType)) {
            $thumbURL = substr($thumbURL, strpos($thumbURL, ',') + 1);
            $thumbType = strtolower($thumbType[1]);

            $thumbURL = base64_decode($thumbURL);
            $targetThumbPath = $targetDir_thumb."thumb_".$thumbFileName.".{$thumbType}";

            if ($thumbURL === false) {
                echo json_encode(array('message' => 'base64 decode failed'));
            }
            file_put_contents($targetThumbPath, $thumbURL);
            chmod($targetThumbPath, 0755);
        }
        else {
            echo json_encode(array("message" => "URI doesn't match with image data")); 
        }

        $sql = "UPDATE `video` SET `reserved2` = '".$targetThumbPath."' WHERE `id` = $vId";
        $res = mysqli_query($conn,$sql);
        if (mysqli_affected_rows($conn) > 0) {
            echo "Thumbnail Data Updated";
        }
        else {
            echo "Thumbnail Data Updating Failed";
        }
    }
    else {
        echo 'Data Empty';
    }
?>