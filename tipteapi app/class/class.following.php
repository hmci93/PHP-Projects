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
            $sql1 = "SELECT `id` AS `up_id`, `username`, `user_following`, `user_followed_by`, `prof_img_path`, `reserved1` AS `displayName` FROM `user_profile` WHERE `id` = ".$key['following_user_id'];
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
}
?>