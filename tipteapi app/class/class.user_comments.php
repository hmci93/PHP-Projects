<?php

include_once("class.server.php");

class user_comments {

    // VARIABLE DECLARATION
    var $id;
    var $user_id;
	var $asset_id;
	var $asset_type;
	var $comment_date;
	var $comment;
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
    function getcomment_date(){ return $this->comment_date;}
    function getcomment(){ return $this->comment;}
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
    function setcomment_date($comment_date_v){ $this->comment_date=$comment_date_v;}
    function setcomment($comment_v){ $this->comment=$comment_v;}
    function setreserved1($reserved1_v){ $this->reserved1=$reserved1_v;}
    function setreserved2($reserved2_v){ $this->reserved2=$reserved2_v;}
    function setreserved3($reserved3_v){ $this->reserved3=$reserved3_v;}
    function setreserved4($reserved4_v){ $this->reserved4=$reserved4_v;}
    function setreserved5($reserved5_v){ $this->reserved5=$reserved5_v;}

    function insert() {
        $sql="INSERT INTO `user_comments`(`user_id`,`asset_id`,`asset_type`,`comment_date`,`comment`,`reserved1`,`reserved2`,`reserved3`,`reserved4`,`reserved5`) VALUES ('$this->user_id','$this->asset_id','$this->asset_type','$this->comment_date','$this->comment','$this->reserved1','$this->reserved2','$this->reserved3','$this->reserved4','$this->reserved5')";
        $result=$this->database->query($sql);
        if ($this->database->rows<>-1) {
            $ar = array('message' => 'Successfully Inserted');
            echo json_encode($ar);
        }
        if ($this->database->rows==-1) {
            $ar = array('message' => 'Sorry.....Inserting Failed');
            echo json_encode($ar);
        }
    }

    function getUserComments($asset_id, $asset_type) {
        $arr = array();

        $sql = "SELECT `id` AS `c_id`, `user_id`, `asset_id`, `asset_type`, `comment_date`, `comment`, (SELECT user_profile.reserved1 FROM `user_profile` WHERE user_profile.username = user_comments.user_id) AS `disp_name`, (SELECT user_profile.prof_img_path FROM `user_profile` WHERE user_profile.username = user_comments.user_id) AS `profileImage` FROM `user_comments` WHERE `asset_id` = '".$asset_id."' AND `asset_type` = '".$asset_type."' ORDER BY `id` DESC";
        $result=$this->database->query($sql);
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