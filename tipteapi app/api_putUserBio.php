<?php
    include 'class/class.apiKeys.php';
    include 'class/class.user_bio.php';

    $api_ob = new api_keys();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['api_key']) && $api_ob->checkAPI(trim($_POST['api_key'])) === 'Exist') {
            
            $tb_handle = new user_bio();

            if (!empty(trim($_POST['userId'])) && !empty(trim($_POST['name'])) && !empty(trim($_POST['zodiac_sign']))) {
                
                $userId = strip_tags(trim($_POST['userId']));
                $name = strip_tags(trim($_POST['name']));
                $zodiac_sign = strip_tags(trim($_POST['zodiac_sign']));
                
                $nickName = '';
                $gender = '';
                $from_where = '';
                $dob = '';
                $relationship_status = '';
                $primary_lang = '';
                $other_lang = '';
                $religion = '';
                $height = '';
                $complexion = '';
                $hobbies = '';
                $edu_quali = '';
                $profession = '';
                $believes = '';
                $about = '';
                $fav_food = '';
                $fav_travel_destn = '';
                $video_cat_liked = '';
                
                if (!empty(trim($_POST['nickName']))) {
                    $nickName = strip_tags(trim($_POST['nickName']));
                }
                if (!empty(trim($_POST['gender']))) {
                    $gender = strip_tags(trim($_POST['gender']));
                }
                if (!empty(trim($_POST['from_where']))) {
                    $from_where = strip_tags(trim($_POST['from_where']));
                }
                if (!empty(trim($_POST['dob']))) {
                    $dob = strip_tags(trim($_POST['dob']));
                }
                if (!empty(trim($_POST['relationship_status']))) {
                    $relationship_status = strip_tags(trim($_POST['relationship_status']));
                }
                if (!empty(trim($_POST['primary_lang']))) {
                    $primary_lang = strip_tags(trim($_POST['primary_lang']));
                }
                if (!empty(trim($_POST['other_lang']))) {
                    $other_lang = strip_tags(trim($_POST['other_lang']));
                }
                if (!empty(trim($_POST['religion']))) {
                    $religion = strip_tags(trim($_POST['religion']));
                }
                if (!empty(trim($_POST['height']))) {
                    $height = strip_tags(trim($_POST['height']));
                }
                if (!empty(trim($_POST['complexion']))) {
                    $complexion = strip_tags(trim($_POST['complexion']));
                }
                if (!empty(trim($_POST['hobbies']))) {
                    $hobbies = strip_tags(trim($_POST['hobbies']));
                }
                if (!empty(trim($_POST['edu_quali']))) {
                    $edu_quali = strip_tags(trim($_POST['edu_quali']));
                }
                if (!empty(trim($_POST['profession']))) {
                    $profession = strip_tags(trim($_POST['profession']));
                }
                if (!empty(trim($_POST['believes']))) {
                    $believes = strip_tags(trim($_POST['believes']));
                }
                if (!empty(trim($_POST['about']))) {
                    $about = strip_tags(trim($_POST['about']));
                }
                if (!empty(trim($_POST['fav_food']))) {
                    $fav_food = strip_tags(trim($_POST['fav_food']));
                }
                if (!empty(trim($_POST['fav_travel_destn']))) {
                    $fav_travel_destn = strip_tags(trim($_POST['fav_travel_destn']));
                }
                if (!empty(trim($_POST['video_cat_liked']))) {
                    $video_cat_liked = strip_tags(trim($_POST['video_cat_liked']));
                }
                
                
                
                $chkRes = $tb_handle->chkUserAvail($userId);

                if ($chkRes == 'User Profile Not Found') {
                    // Assign Values
                    $tb_handle->userId = $userId;
                    $tb_handle->name = $name;
                    $tb_handle->nickName = $nickName;
                    $tb_handle->gender = $gender;
                    $tb_handle->from_where = $from_where;
                    $tb_handle->dob = $dob;
                    $tb_handle->relationship_status = $relationship_status;
                    $tb_handle->primary_lang = $primary_lang;
                    $tb_handle->other_lang = $other_lang;
                    $tb_handle->religion = $religion;
                    $tb_handle->zodiac_sign = $zodiac_sign;
                    $tb_handle->height = $height;
                    $tb_handle->complexion = $complexion;
                    $tb_handle->hobbies = $hobbies;
                    $tb_handle->edu_quali = $edu_quali;
                    $tb_handle->profession = $profession;
                    $tb_handle->believes = $believes;
                    $tb_handle->about = $about;
                    $tb_handle->fav_food = $fav_food;
                    $tb_handle->fav_travel_destn = $fav_travel_destn;
                    $tb_handle->video_cat_liked = $video_cat_liked;

                    // Calling Function
                    $tb_handle->insert();
                } else {
                    // Assign Values
                    $tb_handle->name = $name;
                    $tb_handle->nickName = $nickName;
                    $tb_handle->gender = $gender;
                    $tb_handle->from_where = $from_where;
                    $tb_handle->dob = $dob;
                    $tb_handle->relationship_status = $relationship_status;
                    $tb_handle->primary_lang = $primary_lang;
                    $tb_handle->other_lang = $other_lang;
                    $tb_handle->religion = $religion;
                    $tb_handle->zodiac_sign = $zodiac_sign;
                    $tb_handle->height = $height;
                    $tb_handle->complexion = $complexion;
                    $tb_handle->hobbies = $hobbies;
                    $tb_handle->edu_quali = $edu_quali;
                    $tb_handle->profession = $profession;
                    $tb_handle->believes = $believes;
                    $tb_handle->about = $about;
                    $tb_handle->fav_food = $fav_food;
                    $tb_handle->fav_travel_destn = $fav_travel_destn;
                    $tb_handle->video_cat_liked = $video_cat_liked;

                    // Calling Function
                    $tb_handle->updateUser($userId);
                }
                
            }
            else {
                $ar = array('message' => 'Mandatory Fields Empty');
                echo json_encode($ar);
            }
        }
        else {
            $ar = array('message' => 'Unauthorized Access');
            echo json_encode($ar);
        }
    }
?>