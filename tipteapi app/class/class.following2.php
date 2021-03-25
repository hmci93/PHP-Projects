<?php

include_once 'class.server.php';

class following {
    //VARIABLE DECLARATION
    var $id;
    var $user_id;
    var $following_user_id;
    var $reserved1;
    var $reserved2;
    var $reserved3;
    var $database;

    //CONSTRUCTOR CREATED
    function __construct(){$this->database = new Database();}

    //GETTER METHOD CREATION....!
    function getid(){ return $this->id;}
    function getuser_id(){ return $this->user_id;}
    function getfollowing_user_id(){ return $this->following_user_id;}
    function getreserved1(){ return $this->reserved1;}
    function getreserved2(){ return $this->reserved2;}
    function getreserved3(){ return $this->reserved3;}

    //SETTER METHOD CREATION..!
    function setid($id_v){ $this->id=$id_v;}
    function setuser_id($user_id_v){ $this->user_id=$user_id_v;}
    function setfollowing_user_id($following_user_id_v){ $this->following_user_id=$following_user_id_v;}
    function setreserved1($reserved1_v){ $this->reserved1=$reserved1_v;}
    function setreserved2($reserved2_v){ $this->reserved2=$reserved2_v;}
    function setreserved3($reserved3_v){ $this->reserved3=$reserved3_v;}

    function getFollowing($userId) {
        $folng_arr = array();
        $sql = "SELECT `following_user_id` FROM `following` WHERE `user_id` = $userId";
        $result = $this->database->query($sql);
        $result = $this->database->result;
        if ($this->database->rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($folng_arr, $row);
            }
            $this->getUserList(json_encode($folng_arr));
        }
        else {
            $ar = array('message' => 'Following Users Not Found');
            echo json_encode($ar);
        }
    }

    function getUserList($list) {
        $l1_obj = json_decode($list, true);
        $newUserList = array();
        foreach ($l1_obj as $key) {
            $sql1 = "SELECT `id` AS `up_id`, `username`, `user_following`, `user_followed_by`, `prof_img_path`, `reserved1` AS `displayName`, `reserved2` AS `userStatus` FROM `user_profile` WHERE `id` = ".$key['following_user_id'];
            $result = $this->database->query($sql1);
            $result1 = $this->database->result;
            if ($this->database->rows > 0) {
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    array_push($newUserList, $row1);
                }
            }
        }
        echo json_encode($newUserList);
    }
    
    function getFollowingForMap($userId) {
        $folng_arr = array();
        $sql = "SELECT `following_user_id` FROM `following` WHERE `user_id` = $userId";
        $result = $this->database->query($sql);
        $result = $this->database->result;
        if ($this->database->rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($folng_arr, $row);
            }
            return json_encode($folng_arr);
        }
        else {
            $ar = array('message' => 'Following Users Not Found');
            echo json_encode($ar);
        }
    }
    
    function chkFollow($user_id, $fol_user_id) {
        $query = "SELECT * FROM `following` WHERE `user_id` = $user_id AND `following_user_id` = $fol_user_id";
        $res = $this->database->query($query);
        if ($this->database->rows > 0) {
            // $arr = array('message' => 'User Already Followed');
            // echo json_encode($arr);
            $this->removeFollow($user_id, $fol_user_id);
        }
        else {
            $this->setFollow($user_id, $fol_user_id);
        }
    }
    
    function getFollowingCount($user_id) {
        $q = "SELECT `user_following` FROM `user_profile` WHERE `id` = $user_id";
        $r = $this->database->query($q);
        $rs = $this->database->result;
        if ($this->database->rows > 0) {
            while ($row = mysqli_fetch_assoc($rs)) {
                return trim($row['user_following']);
            }
        }
    }
    
    function getFollowedByCount($fol_user_id) {
        $q1 = "SELECT `user_followed_by` FROM `user_profile` WHERE `id` = $fol_user_id";
        $r1 = $this->database->query($q1);
        $rs1 = $this->database->result;
        if ($this->database->rows > 0) {
            while ($row1 = mysqli_fetch_assoc($rs1)) {
                return trim($row1['user_followed_by']);
            }
        }
    }
    
    function setFollow($user_id, $fol_user_id) {
        $following_count = $this->getFollowingCount($user_id);
        $followed_by_count = $this->getFollowedByCount($fol_user_id);
        $following_count_f = '';
        $followed_by_count_f = '';
        if (!empty($following_count) || $following_count != '') {
            $following_count_f = $following_count + 1;
        } else {
            $following_count_f = 1;
        }
        if (!empty($followed_by_count) || $followed_by_count != '') {
            $followed_by_count_f = $followed_by_count + 1;
        } else {
            $followed_by_count_f = 1;
        }

        $sql = "INSERT INTO `following`(`user_id`,`following_user_id`) VALUES ($user_id, $fol_user_id)";
        $result = $this->database->query($sql);
        if ($this->database->affected_rows > 0) {
            $sql1 = "INSERT INTO `followers`(`user_id`,`follower_user_id`) VALUES ($fol_user_id, $user_id)";
            $result1 = $this->database->query($sql1);
            if ($this->database->affected_rows > 0) {
                $sql2 = "UPDATE `user_profile` SET `user_following` = '".$following_count_f."' WHERE `id` = $user_id";
                $result2 = $this->database->query($sql2);
                if ($this->database->affected_rows >= 0) {
                    $sql3 = "UPDATE `user_profile` SET `user_followed_by` = '".$followed_by_count_f."' WHERE `id` = $fol_user_id";
                    $result3 = $this->database->query($sql3);
                    if ($this->database->affected_rows >= 0) {
                        $ar = array('message' => 'User Followed');
                        echo json_encode($ar);
                    } else {
                        $ar = array('message' => 'User Followed-By Update Error');
                        echo json_encode($ar);
                    }
                } else {
                    $ar = array('message' => 'User Following Update Error');
                    echo json_encode($ar);
                }
            }
            else {
                $ar = array('message' => 'Follower Set Error');
                echo json_encode($ar);
            }
        }
        else {
            $ar = array('message' => 'Following Set Error');
            echo json_encode($ar);
        }
    }
    
    function removeFollow($user_id, $fol_user_id) {
        $following_count = $this->getFollowingCount($user_id);
        $followed_by_count = $this->getFollowedByCount($fol_user_id);
        $following_count_f = '';
        $followed_by_count_f = '';
        $following_count_f = $following_count - 1;
        $followed_by_count_f = $followed_by_count - 1;
        if ($following_count_f == 0) {
            $following_count_f = '';
        }
        if ($followed_by_count_f == 0) {
            $followed_by_count_f = '';
        }

        $sql = "DELETE FROM `following` WHERE `user_id` = $user_id AND `following_user_id` = $fol_user_id";
        $result = $this->database->query($sql);
        if ($this->database->affected_rows > 0) {
            $sql1 = "DELETE FROM `followers` WHERE `user_id` = $fol_user_id AND `follower_user_id` = $user_id";
            $result1 = $this->database->query($sql1);
            if ($this->database->affected_rows > 0) {
                $sql2 = "UPDATE `user_profile` SET `user_following` = '".$following_count_f."' WHERE `id` = $user_id";
                $result2 = $this->database->query($sql2);
                if ($this->database->affected_rows >= 0) {
                    $sql3 = "UPDATE `user_profile` SET `user_followed_by` = '".$followed_by_count_f."' WHERE `id` = $fol_user_id";
                    $result3 = $this->database->query($sql3);
                    if ($this->database->affected_rows >= 0) {
                        $ar = array('message' => 'User Unfollowed');
                        echo json_encode($ar);
                    } else {
                        $ar = array('message' => 'User Followed-By Update Error');
                        echo json_encode($ar);
                    }
                } else {
                    $ar = array('message' => 'User Following Update Error');
                    echo json_encode($ar);
                }
            } else {
                $ar = array('message' => 'Follow Unset Error');
                echo json_encode($ar);
            }
        } else {
            $ar = array('message' => 'Follow Unset Error');
            echo json_encode($ar);
        }
    }
}
?>