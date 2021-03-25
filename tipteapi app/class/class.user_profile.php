<?php

include_once 'class.server.php';

class user_profile {

    //VARIABLE DECLARATION
    var $id;
    var $username;
    var $user_following;
    var $user_followed_by;
    var $prof_img_path;
    var $block_status;
    var $reserved1;
    var $reserved2;
    var $reserved3;
    var $reserved4;
    var $reserved5;
    var $reserved6;
    var $database;

    //CONSTRUCTOR CREATED
    function __construct(){$this->database = new Database();}

    //GETTER METHOD CREATION....!
    function getid(){ return $this->id;}
    function getusername(){ return $this->username;}
    function getuser_following(){ return $this->user_following;}
    function getuser_followed_by(){ return $this->user_followed_by;}
    function getprof_img_path(){ return $this->prof_img_path;}
    function getblock_status(){ return $this->block_status;}
    function getreserved1(){ return $this->reserved1;}
    function getreserved2(){ return $this->reserved2;}
    function getreserved3(){ return $this->reserved3;}
    function getreserved4(){ return $this->reserved4;}
    function getreserved5(){ return $this->reserved5;}
    function getreserved6(){ return $this->reserved6;}

    //SETTER METHOD CREATION..!
    function setid($id_v){ $this->id=$id_v;}
    function setusername($username_v){ $this->username=$username_v;}
    function setuser_following($user_following_v){ $this->user_following=$user_following_v;}
    function setuser_followed_by($user_followed_by_v){ $this->user_followed_by=$user_followed_by_v;}
    function setprof_img_path($prof_img_path_v){ $this->prof_img_path=$prof_img_path_v;}
    function setblock_status($block_status_v){ $this->block_status=$block_status_v;}
    function setreserved1($reserved1_v){ $this->reserved1=$reserved1_v;}
    function setreserved2($reserved2_v){ $this->reserved2=$reserved2_v;}
    function setreserved3($reserved3_v){ $this->reserved3=$reserved3_v;}
    function setreserved4($reserved4_v){ $this->reserved4=$reserved4_v;}
    function setreserved5($reserved5_v){ $this->reserved5=$reserved5_v;}
    function setreserved6($reserved6_v){ $this->reserved6=$reserved6_v;}

    function insert() {
        $sql = "INSERT INTO `user_profile`(`username`,`user_following`,`user_followed_by`,`prof_img_path`,`block_status`,`reserved1`,`reserved2`,`reserved3`,`reserved4`,`reserved5`,`reserved6`) VALUES('$this->username','$this->user_following','$this->user_followed_by','$this->prof_img_path','$this->block_status','$this->reserved1','$this->reserved2','$this->reserved3','$this->reserved4','$this->reserved5','$this->reserved6')";
        $result = $this->database->query($sql);
        if ($this->database->affected_rows > 0) {
            $ar = array('message' => 'User Registered Successfully');
            echo json_encode($ar);
        }
        elseif ($this->database->affected_rows == 0) {
            $ar = array('message' => 'User Registration Failed');
            echo json_encode($ar);
        }
        else {
            $ar = array('message' => 'User Registration Error');
            echo json_encode($ar);
        }
    }
    
    function getAllUsers() {
        $arr = array();

        $sql = "SELECT `id` AS `up_id`, `username`, `user_following`, `user_followed_by`, `prof_img_path`, `block_status`, (SELECT COUNT(*) FROM `video` WHERE `userId` = user_profile.username) AS `videoCount` FROM `user_profile` ORDER BY `id` ASC";
        $result = $this->database->query($sql);
        $result = $this->database->result;
        if ($this->database->rows <> 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($arr, $row);
            }
            echo json_encode($arr);
        } else {
            $ar = array("message" => "Sorry.....Record Doesn't Exist");
	        echo json_encode($ar);
        }
    }
    
    function getAllUsersForMap($username) {
        $arr = array();

        $sql = "SELECT `id` AS `up_id` FROM `user_profile` WHERE `username` != '".$username."' ORDER BY `id` ASC";
        $result = $this->database->query($sql);
        $result = $this->database->result;
        if ($this->database->rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($arr, $row);
            }
            return json_encode($arr);
        } else {
            $ar = array("message" => "Users Not Found");
	        echo json_encode($ar);
        }
    }
    
    function blockUser($up_id, $blockValue) {
        $sql = "UPDATE `user_profile` SET `block_status` = $blockValue WHERE `id` = $up_id";
        $result = $this->database->query($sql);
        if ($this->database->affected_rows >= 0) {
            $ar = array('message' => 'User Updated Successfully');
            return json_encode($ar);
        }
        elseif ($this->database->affected_rows <= 0) {
            $ar = array('message' => 'User Updating Failed');
            return json_encode($ar);
        }
        else {
            $ar = array('message' => 'User Updating Error');
            return json_encode($ar);
        }
    }
    
    function chkUser($user_name) {
        $sql = "SELECT * FROM `user_profile` WHERE `username` = '".$user_name."'";
        $result = $this->database->query($sql);
        $result = $this->database->result;
        if ($this->database->rows > 0) {
            return 'Already Exists';
        } else {
            return 'Not Found';
        }
    }
    
    function getUserProfId($user_name) {
        $sql = "SELECT `id` AS `up_id` FROM `user_profile` WHERE `username` = '".$user_name."'";
        $result = $this->database->query($sql);
        $result = $this->database->result;
        if ($this->database->rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                return trim($row['up_id']);
            }
        } else {
            return 'Not Found';
        }
    }
    
    function changeAvatar($targetFilePath, $username) {
        $sql = "UPDATE `user_profile` SET `prof_img_path` = '".$targetFilePath."' WHERE `username` = '".$username."'";
        $result = $this->database->query($sql);
        if ($this->database->affected_rows > 0) {
            $this->getProfImg($username);
        }
        else if ($this->database->affected_rows == 0) {
            $ar = array('message' => 'Profile Image Updating Not Affected');
            echo json_encode($ar);
        }
        else {
            $ar = array('message' => 'Profile Image Updating Error');
            echo json_encode($ar);
        }
    }
    
    function getProfImg($username) {
        $arr = array();

        $sql1 = "SELECT `prof_img_path` AS `profileImage` FROM `user_profile` WHERE `username` = '".$username."'";
        $result = $this->database->query($sql1);
        $result1 = $this->database->result;
        if ($this->database->rows <> 0) {
            while ($row1 = mysqli_fetch_assoc($result1)) {
                array_push($arr, $row1);
            }
            echo json_encode($arr);
        } else {
            $ar = array("message" => "Sorry.....Record Doesn't Exist");
	        echo json_encode($ar);
        }
    }
    
    function getSpecificUser($userId) {
        $arr = array();
        
        $sql = "SELECT `id` AS `up_id`, `username`, `user_following`, `user_followed_by`, `prof_img_path`, `reserved1` AS `displayName`, (SELECT COUNT(*) FROM `video` WHERE `userId` = user_profile.username) AS `videoCount` FROM `user_profile` WHERE `username` = '".$userId."'";
        $result = $this->database->query($sql);
        $result = $this->database->result;
        if ($this->database->rows <> 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($arr, $row);
            }
            echo json_encode($arr);
        } else {
            $ar = array("message" => "Sorry....User Not Found");
            echo json_encode($ar);
        }
    }
    
    function updateUserStatusWithLoc($username, $status, $lat, $long) {
        $sql = "UPDATE `user_profile` SET `reserved2` = '".$status."', `reserved3` = ".$lat.", `reserved4` = ".$long." WHERE `username` = '".$username."'";
        $result = $this->database->query($sql);
        if ($this->database->affected_rows >= 0) {
            return 'Successfully Updated';
        }
        if ($this->database->affected_rows < 0) {
            return 'Error Updating';
        }
    }
    
    function updateUserLoc($username, $lat, $long) {
        $sql = "UPDATE `user_profile` SET `reserved3` = ".$lat.", `reserved4` = ".$long." WHERE `username` = '".$username."'";
        $result = $this->database->query($sql);
        if ($this->database->affected_rows >= 0) {
            return 'Successfully Updated';
        }
        if ($this->database->affected_rows < 0) {
            return 'Error Updating';
        }
    }
    
    function updateUserStatus($username, $status) {
        $sql = "UPDATE `user_profile` SET `reserved2` = '".$status."' WHERE `username` = '".$username."'";
        $result = $this->database->query($sql);
        if ($this->database->affected_rows >= 0) {
            return 'Successfully Updated';
        }
        if ($this->database->affected_rows < 0) {
            return 'Error Updating';
        }
    }
    
    function getPeople($username, $lat, $long, $accu, $list) {
        $people_arr = json_decode($list, true);
        // print_r($people_arr);
        $ar = array();
        $arr = array();
        $ar_res = array();
        $final_arr = array();

        //20 Miles = 32.18688 kms
        $r=32.18688/6371;
        $lat_min = $lat - $r;
        $lat_max = $lat + $r;

        // $lat_T = asin(sin($lat)/cos($r));
        $delta_long = asin(sin($r)/cos($lat));

        $long_min = $long - $delta_long;
        $long_max = $long + $delta_long;

        //accuracy 25%
        if ($accu == '25') {
            $sql = "SELECT `zodiac_sign`, `video_cat_liked`, `primary_lang`, `from_where` FROM `user_bio` WHERE `userId` = '".$username."'";
            $result = $this->database->query($sql);
            $result =$this->database->result;
            if ($this->database->rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    array_push($ar, $row);
                }
                if (!empty($people_arr)) {
                    foreach ($people_arr as $key) {
                        $sql1 = "SELECT * FROM (SELECT `username`, `reserved3` AS `latitude`, `reserved4` AS `longitude` FROM `user_profile` WHERE `id` = ".trim($key)." AND `reserved2` = 'Online' AND (`reserved3` >= ".$lat_min." AND `reserved3` <= ".$lat_max.") AND (`reserved4` >= ".$long_min." AND `reserved4` <= ".$long_max.")) AS `table1` WHERE acos(sin(".$lat.") * sin(`latitude`) + cos(".$lat.") * cos(`latitude`) * cos(`longitude` - (".$long."))) <= ".$r."";
                        $result = $this->database->query($sql1);
                        $result1 = $this->database->result;
                        if ($this->database->rows > 0) {
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                if (!in_array(trim($row1['username']), $arr)) {
                                    array_push($arr, trim($row1['username']));
                                }
                            }
                        }
                    }
                    // if (empty($arr)) {
                    //     $msg1 = array("message" => "People Not Found");
                    //     echo json_encode($msg1);
                    // }
                }
                if (empty($arr)) {
                    $msg1 = array("message" => "People Not Found");
                    echo json_encode($msg1);
                }
                if (!empty($arr)) {
                    // print_r($arr);
                    foreach ($arr as $k) {
                        $sql2 = "SELECT `zodiac_sign`, `video_cat_liked`, `primary_lang`, `from_where` FROM `user_bio` WHERE `userId` = '".trim($k)."'";
                        $result = $this->database->query($sql2);
                        $result2 = $this->database->result;
                        if ($this->database->rows > 0) {
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $a1 = explode(',', trim($ar[0]['video_cat_liked']));
                                $b1 = explode(',', trim($row2['video_cat_liked']));
                                $res1 = array_intersect($a1, $b1);
                                
                                if (trim($ar[0]['zodiac_sign']) == trim($row2['zodiac_sign']) && trim($ar[0]['primary_lang']) == trim($row2['primary_lang']) && trim($ar[0]['from_where']) == trim($row2['from_where']) && !empty($res1)) {
                                    if (!in_array(trim($k), $ar_res)) {
                                        array_push($ar_res, trim($k));
                                    }
                                }
                                // if (!empty($res1)) {
                                //     if (!in_array(trim($k), $ar_res)) {
                                //         array_push($ar_res, trim($k));
                                //     }
                                // }
                            }
                        }
                    }
                    // if (empty($ar_res)) {
                    //     $msg2 = array('message' => 'Match Not Found');
                    //     echo json_encode($msg2);
                    // }
                }
                if (empty($ar_res)) {
                    $msg2 = array('message' => 'Match Not Found');
                    echo json_encode($msg2);
                }
                if (!empty($ar_res)) {
                    // print_r($ar_res);
                    foreach ($ar_res as $ke) {
                        $sql3 = "SELECT `username`, `prof_img_path` AS `profileImage`, `reserved1` AS `displayName`, `reserved2` AS `status`, `reserved3` AS `latitude`, `reserved4` AS `longitude`, (SELECT `gender` FROM `user_bio` WHERE `userId` = '".trim($ke)."') AS `gender` FROM `user_profile` WHERE `username` = '".trim($ke)."'";
                        $result = $this->database->query($sql3);
                        $result3 = $this->database->result;
                        if ($this->database->rows > 0) {
                            while ($row3 = mysqli_fetch_assoc($result3)) {
                                array_push($final_arr, $row3);
                            }
                        }
                    }
                    echo json_encode($final_arr);
                }
            }
            else {
                $msg = array("message" => "Bio Not Found");
                echo json_encode($msg);
            }
        }
        
        //accuracy 50%
        if ($accu == '50') {
            $sql = "SELECT `zodiac_sign`, `video_cat_liked`, `primary_lang`, `from_where`, `dob`, `relationship_status`, `other_lang` FROM `user_bio` WHERE `userId` = '".$username."'";
            $result = $this->database->query($sql);
            $result =$this->database->result;
            if ($this->database->rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    array_push($ar, $row);
                }
                if (!empty($people_arr)) {
                    foreach ($people_arr as $key) {
                        $sql1 = "SELECT * FROM (SELECT `username`, `reserved3` AS `latitude`, `reserved4` AS `longitude` FROM `user_profile` WHERE `id` = ".trim($key)." AND `reserved2` = 'Online' AND (`reserved3` >= ".$lat_min." AND `reserved3` <= ".$lat_max.") AND (`reserved4` >= ".$long_min." AND `reserved4` <= ".$long_max.")) AS `table1` WHERE acos(sin(".$lat.") * sin(`latitude`) + cos(".$lat.") * cos(`latitude`) * cos(`longitude` - (".$long."))) <= ".$r."";
                        $result = $this->database->query($sql1);
                        $result1 = $this->database->result;
                        if ($this->database->rows > 0) {
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                if (!in_array(trim($row1['username']), $arr)) {
                                    array_push($arr, trim($row1['username']));
                                }
                            }
                        }
                    }
                    if (empty($arr)) {
                        $msg1 = array("message" => "People Not Found");
                        echo json_encode($msg1);
                    }
                }
                if (!empty($arr)) {
                    foreach ($arr as $k) {
                        $sql2 = "SELECT `zodiac_sign`, `video_cat_liked`, `primary_lang`, `from_where`, `dob`, `relationship_status`, `other_lang` FROM `user_bio` WHERE `userId` = '".trim($k)."'";
                        $result = $this->database->query($sql2);
                        $result2 = $this->database->result;
                        if ($this->database->rows > 0) {
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $a1 = explode(',', trim($ar[0]['video_cat_liked']));
                                $b1 = explode(',', trim($row2['video_cat_liked']));
                                $a2 = explode(',', trim($ar[0]['other_lang']));
                                $b2 = explode(',', trim($row2['other_lang']));
                                $res1 = array_intersect($a1, $b1);
                                $res2 = array_intersect($a2, $b2);
                                
                                if (trim($ar[0]['zodiac_sign']) == trim($row2['zodiac_sign']) && trim($ar[0]['primary_lang']) == trim($row2['primary_lang']) && trim($ar[0]['from_where']) == trim($row2['from_where']) && trim($ar[0]['dob']) == trim($row2['dob']) && trim($ar[0]['relationship_status']) == trim($row2['relationship_status']) && !empty($res1) && !empty($res2)) {
                                    if (!in_array(trim($k), $ar_res)) {
                                        array_push($ar_res, trim($k));
                                    }
                                }
                            }
                        }
                    }
                    if (empty($ar_res)) {
                        $msg2 = array('message' => 'Match Not Found');
                        echo json_encode($msg2);
                    }
                }
                if (!empty($ar_res)) {
                    foreach ($ar_res as $ke) {
                        $sql3 = "SELECT `username`, `prof_img_path` AS `profileImage`, `reserved1` AS `displayName`, `reserved2` AS `status`, `reserved3` AS `latitude`, `reserved4` AS `longitude` FROM `user_profile` WHERE `username` = '".trim($ke)."'";
                        $result = $this->database->query($sql3);
                        $result3 = $this->database->result;
                        if ($this->database->rows > 0) {
                            while ($row3 = mysqli_fetch_assoc($result3)) {
                                array_push($final_arr, $row3);
                            }
                        }
                    }
                    echo json_encode($final_arr);
                }
            }
            else {
                $msg = array("message" => "Bio Not Found");
                echo json_encode($msg);
            }
        }

        //accuracy 75%
        if ($accu == '75') {
            $sql = "SELECT `zodiac_sign`, `video_cat_liked`, `primary_lang`, `from_where`, `dob`, `relationship_status`, `other_lang`, `religion`, `height`, `complexion` FROM `user_bio` WHERE `userId` = '".$username."'";
            $result = $this->database->query($sql);
            $result =$this->database->result;
            if ($this->database->rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    array_push($ar, $row);
                }
                if (!empty($people_arr)) {
                    foreach ($people_arr as $key) {
                        $sql1 = "SELECT * FROM (SELECT `username`, `reserved3` AS `latitude`, `reserved4` AS `longitude` FROM `user_profile` WHERE `id` = ".trim($key)." AND `reserved2` = 'Online' AND (`reserved3` >= ".$lat_min." AND `reserved3` <= ".$lat_max.") AND (`reserved4` >= ".$long_min." AND `reserved4` <= ".$long_max.")) AS `table1` WHERE acos(sin(".$lat.") * sin(`latitude`) + cos(".$lat.") * cos(`latitude`) * cos(`longitude` - (".$long."))) <= ".$r."";
                        $result = $this->database->query($sql1);
                        $result1 = $this->database->result;
                        if ($this->database->rows > 0) {
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                if (!in_array(trim($row1['username']), $arr)) {
                                    array_push($arr, trim($row1['username']));
                                }
                            }
                        }
                    }
                    if (empty($arr)) {
                        $msg1 = array("message" => "People Not Found");
                        echo json_encode($msg1);
                    }
                }
                if (!empty($arr)) {
                    foreach ($arr as $k) {
                        $sql2 = "SELECT `zodiac_sign`, `video_cat_liked`, `primary_lang`, `from_where`, `dob`, `relationship_status`, `other_lang`, `religion`, `height`, `complexion` FROM `user_bio` WHERE `userId` = '".trim($k)."'";
                        $result = $this->database->query($sql2);
                        $result2 = $this->database->result;
                        if ($this->database->rows > 0) {
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $a1 = explode(',', trim($ar[0]['video_cat_liked']));
                                $b1 = explode(',', trim($row2['video_cat_liked']));
                                $a2 = explode(',', trim($ar[0]['other_lang']));
                                $b2 = explode(',', trim($row2['other_lang']));
                                $res1 = array_intersect($a1, $b1);
                                $res2 = array_intersect($a2, $b2);
                                
                                if (trim($ar[0]['zodiac_sign']) == trim($row2['zodiac_sign']) && trim($ar[0]['primary_lang']) == trim($row2['primary_lang']) && trim($ar[0]['from_where']) == trim($row2['from_where']) && trim($ar[0]['dob']) == trim($row2['dob']) && trim($ar[0]['relationship_status']) == trim($row2['relationship_status']) && trim($ar[0]['religion']) == trim($row2['religion']) && trim($ar[0]['height']) == trim($row2['height']) && trim($ar[0]['complexion']) == trim($row2['complexion']) && !empty($res1) && !empty($res2)) {
                                    if (!in_array(trim($k), $ar_res)) {
                                        array_push($ar_res, trim($k));
                                    }
                                }
                            }
                        }
                    }
                    if (empty($ar_res)) {
                        $msg2 = array('message' => 'Match Not Found');
                        echo json_encode($msg2);
                    }
                }
                if (!empty($ar_res)) {
                    foreach ($ar_res as $ke) {
                        $sql3 = "SELECT `username`, `prof_img_path` AS `profileImage`, `reserved1` AS `displayName`, `reserved2` AS `status`, `reserved3` AS `latitude`, `reserved4` AS `longitude` FROM `user_profile` WHERE `username` = '".trim($ke)."'";
                        $result = $this->database->query($sql3);
                        $result3 = $this->database->result;
                        if ($this->database->rows > 0) {
                            while ($row3 = mysqli_fetch_assoc($result3)) {
                                array_push($final_arr, $row3);
                            }
                        }
                    }
                    echo json_encode($final_arr);
                }
            }
            else {
                $msg = array("message" => "Bio Not Found");
                echo json_encode($msg);
            }
        }

        //accuracy 100%
        if ($accu == '100') {
            $sql = "SELECT `zodiac_sign`, `video_cat_liked`, `primary_lang`, `from_where`, `dob`, `relationship_status`, `other_lang`, `religion`, `height`, `complexion`, `hobbies`, `edu_quali`, `profession`, `fav_food`, `fav_travel_destn` FROM `user_bio` WHERE `userId` = '".$username."'";
            $result = $this->database->query($sql);
            $result =$this->database->result;
            if ($this->database->rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    array_push($ar, $row);
                }
                if (!empty($people_arr)) {
                    foreach ($people_arr as $key) {
                        $sql1 = "SELECT * FROM (SELECT `username`, `reserved3` AS `latitude`, `reserved4` AS `longitude` FROM `user_profile` WHERE `id` = ".trim($key)." AND `reserved2` = 'Online' AND (`reserved3` >= ".$lat_min." AND `reserved3` <= ".$lat_max.") AND (`reserved4` >= ".$long_min." AND `reserved4` <= ".$long_max.")) AS `table1` WHERE acos(sin(".$lat.") * sin(`latitude`) + cos(".$lat.") * cos(`latitude`) * cos(`longitude` - (".$long."))) <= ".$r."";
                        $result = $this->database->query($sql1);
                        $result1 = $this->database->result;
                        if ($this->database->rows > 0) {
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                if (!in_array(trim($row1['username']), $arr)) {
                                    array_push($arr, trim($row1['username']));
                                }
                            }
                        }
                    }
                    if (empty($arr)) {
                        $msg1 = array("message" => "People Not Found");
                        echo json_encode($msg1);
                    }
                }
                if (!empty($arr)) {
                    foreach ($arr as $k) {
                        $sql2 = "SELECT `zodiac_sign`, `video_cat_liked`, `primary_lang`, `from_where`, `dob`, `relationship_status`, `other_lang`, `religion`, `height`, `complexion`, `hobbies`, `edu_quali`, `profession`, `fav_food`, `fav_travel_destn` FROM `user_bio` WHERE `userId` = '".trim($k)."'";
                        $result = $this->database->query($sql2);
                        $result2 = $this->database->result;
                        if ($this->database->rows > 0) {
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $a1 = explode(',', trim($ar[0]['video_cat_liked']));
                                $b1 = explode(',', trim($row2['video_cat_liked']));
                                $a2 = explode(',', trim($ar[0]['other_lang']));
                                $b2 = explode(',', trim($row2['other_lang']));
                                $a3 = explode(',', trim($ar[0]['hobbies']));
                                $b3 = explode(',', trim($row2['hobbies']));
                                $a4 = explode(',', trim($ar[0]['edu_quali']));
                                $b4 = explode(',', trim($row2['edu_quali']));
                                $a5 = explode(',', trim($ar[0]['fav_food']));
                                $b5 = explode(',', trim($row2['fav_food']));
                                $a6 = explode(',', trim($ar[0]['fav_travel_destn']));
                                $b6 = explode(',', trim($row2['fav_travel_destn']));
                                $res1 = array_intersect($a1, $b1);
                                $res2 = array_intersect($a2, $b2);
                                $res3 = array_intersect($a3, $b3);
                                $res4 = array_intersect($a4, $b4);
                                $res5 = array_intersect($a5, $b5);
                                $res6 = array_intersect($a6, $b6);
                                
                                if (trim($ar[0]['zodiac_sign']) == trim($row2['zodiac_sign']) && trim($ar[0]['primary_lang']) == trim($row2['primary_lang']) && trim($ar[0]['from_where']) == trim($row2['from_where']) && trim($ar[0]['dob']) == trim($row2['dob']) && trim($ar[0]['relationship_status']) == trim($row2['relationship_status']) && trim($ar[0]['religion']) == trim($row2['religion']) && trim($ar[0]['height']) == trim($row2['height']) && trim($ar[0]['complexion']) == trim($row2['complexion']) && trim($ar[0]['profession']) == trim($row2['profession']) && !empty($res1) && !empty($res2) && !empty($res3) && !empty($res4) && !empty($res5) && !empty($res6)) {
                                    if (!in_array(trim($k), $ar_res)) {
                                        array_push($ar_res, trim($k));
                                    }
                                }
                            }
                        }
                    }
                    if (empty($ar_res)) {
                        $msg2 = array('message' => 'Match Not Found');
                        echo json_encode($msg2);
                    }
                }
                if (!empty($ar_res)) {
                    foreach ($ar_res as $ke) {
                        $sql3 = "SELECT `username`, `prof_img_path` AS `profileImage`, `reserved1` AS `displayName`, `reserved2` AS `status`, `reserved3` AS `latitude`, `reserved4` AS `longitude` FROM `user_profile` WHERE `username` = '".trim($ke)."'";
                        $result = $this->database->query($sql3);
                        $result3 = $this->database->result;
                        if ($this->database->rows > 0) {
                            while ($row3 = mysqli_fetch_assoc($result3)) {
                                array_push($final_arr, $row3);
                            }
                        }
                    }
                    echo json_encode($final_arr);
                }
            }
            else {
                $msg = array("message" => "Bio Not Found");
                echo json_encode($msg);
            }
        }
    }
}

?>