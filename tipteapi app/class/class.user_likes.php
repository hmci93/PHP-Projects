<?php

include_once("class.server.php");

class user_likes {

    // VARIABLE DECLARATION
    var $id;
    var $user_id;
	var $asset_id;
    var $asset_type;
    var $asset_owner;
	var $liked_date;
	var $reserved1;
	var $reserved2;
	var $reserved3;
	var $reserved4;
	var $reserved5;
    var $database;
    
    //CONSTRUCTOR CREATED
    function __construct(){$this->database = new Database();}
    
	//GETTER METHOD CREATION....!
    function getid(){ return $this->id;}
    function getuser_id(){ return $this->user_id;}
    function getasset_id(){ return $this->asset_id;}
    function getasset_type(){ return $this->asset_type;}
    function getasset_owner(){ return $this->asset_owner;}
    function getliked_date(){ return $this->liked_date;}
    function getreserved1(){ return $this->reserved1;}
    function getreserved2(){ return $this->reserved2;}
    function getreserved3(){ return $this->reserved3;}
    function getreserved4(){ return $this->reserved4;}
    function getreserved5(){ return $this->reserved5;}

   //SETTER METHOD CREATION..!
    function setid($id_v){ $this->id=$id_v;}
    function setuser_id($user_id_v){ $this->user_id=$user_id_v;}
    function setasset_id($asset_id_v){ $this->asset_id=$asset_id_v;}
    function setasset_type($asset_type_v){ $this->asset_type=$asset_type_v;}
    function setasset_owner($asset_owner_v){ $this->asset_owner=$asset_owner_v;}
    function setliked_date($liked_date_v){ $this->liked_date=$liked_date_v;}
    function setreserved1($reserved1_v){ $this->reserved1=$reserved1_v;}
    function setreserved2($reserved2_v){ $this->reserved2=$reserved2_v;}
    function setreserved3($reserved3_v){ $this->reserved3=$reserved3_v;}
    function setreserved4($reserved4_v){ $this->reserved4=$reserved4_v;}
    function setreserved5($reserved5_v){ $this->reserved5=$reserved5_v;}

    private function fetchLikesCountInc() {
        $no_of_likes1='';
        $sql3 = "SELECT `reserved1` FROM `".$this->asset_type."` WHERE `id` = '".$this->asset_id."'";
        $result=$this->database->query($sql3);
        $result1 = $this->database->result;
        if ($this->database->rows<>-1) {
            while ($row1 = mysqli_fetch_assoc($result1)) {
                $no_of_likes = $row1['reserved1'];
                if (is_null($no_of_likes) || empty($no_of_likes) || $no_of_likes == '') {
                    $no_of_likes = 0;
                }
                $no_of_likes1 = $no_of_likes + 1;
            }
        }
        return $no_of_likes1;
    }

    private function fetchLikesCountDec() {
        $no_of_likes1='';
        $sql = "SELECT `reserved1` FROM `".$this->asset_type."` WHERE `id` = '".$this->asset_id."'";
        $result=$this->database->query($sql);
        $result1 = $this->database->result;
        if ($this->database->rows<>-1) {
            while ($row1 = mysqli_fetch_assoc($result1)) {
                $no_of_likes = $row1['reserved1'];
                $no_of_likes1 = $no_of_likes - 1;
            }
        }
        return $no_of_likes1;
    }

    private function updateLikeCount($count) {
        $sql2 = "UPDATE `".$this->asset_type."` SET `reserved1` = '".$count."' WHERE `id` = '".$this->asset_id."'";
        $result=$this->database->query($sql2);
        if ($this->database->rows <> -1) {
            return 'Updated';
        }
        else {
            return 'Failed';
        }
    }

    function checkLikeRow() {
        $query = "SELECT * FROM `user_likes` WHERE `user_id` = '".$this->user_id."' AND `asset_id` = '".$this->asset_id."' AND `asset_type` = '".$this->asset_type."'";
        $result=$this->database->query($query);
        $res = $this->database->result;
        if ($this->database->rows == 0) {
            $this->insert();
        }
        else {
            $this->delete();
        }
    }

    function insert() {
        
        $sql="INSERT INTO `user_likes`(`user_id`,`asset_id`,`asset_type`,`asset_owner`,`liked_date`,`reserved1`,`reserved2`,`reserved3`,`reserved4`,`reserved5`) VALUES ('$this->user_id','$this->asset_id','$this->asset_type','$this->asset_owner','$this->liked_date','$this->reserved1','$this->reserved2','$this->reserved3','$this->reserved4','$this->reserved5')";
        $result=$this->database->query($sql);
        
        if ($this->database->rows <> -1) {
            $res1 = $this->fetchLikesCountInc();
            $res2 = $this->updateLikeCount($res1);
            if ($res2 == 'Updated') {
                $ar = array('message' => 'Successfully Added Like');
                echo json_encode($ar);
            }
            if ($res2 == 'Failed') {
                $ar = array('message' => 'Sorry.....Adding Failed');
                echo json_encode($ar);
            }
        }
    }

    function delete() {
        $query1="DELETE FROM `user_likes` WHERE `user_id` = '".$this->user_id."' AND `asset_id` = '".$this->asset_id."' AND `asset_type` = '".$this->asset_type."'";
        $result=$this->database->query($query1);

        if ($this->database->rows <> -1) {
            $res1 = $this->fetchLikesCountDec();
            $res2 = $this->updateLikeCount($res1);
            if ($res2 == 'Updated') {
                $ar = array('message' => 'Successfully Removed Like');
                echo json_encode($ar);
            }
            if ($res2 == 'Failed') {
                $ar = array('message' => 'Sorry.....Removing Failed');
                echo json_encode($ar);
            }
        }
    }
    

    function getUserLikes($user_id, $asset_type) {
        $arr = array();

        $sql = "SELECT `id` AS `l_id`,`user_id`,`asset_id`,`asset_type`,`asset_owner`,`liked_date` FROM `user_likes` WHERE `user_id` = '".$user_id."' AND `asset_type` = '".$asset_type."' ORDER BY `liked_date` DESC";
        $result = $this->database->query($sql);
        $result = $this->database->result;
        if ($this->database->rows<>0) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($arr, $row);
            }
            echo json_encode($arr);
        }
        else {
            $ar = array("message" => "Sorry.....Record Doesn't Exist");
	        echo json_encode($ar);
        }
    }
}

?>