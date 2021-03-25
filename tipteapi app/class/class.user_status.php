<?php

include_once("class.server.php");

class user_status {

    // VARIABLE DECLARATION
    var $us_id;
    var $username;
	var $status;
	var $latitude;
	var $longitude;
	var $likes;
	var $reserved1;
	var $reserved2;
	var $reserved3;
	var $reserved4;
	var $reserved5;
    var $database;
    
    //CONSTRUCTOR CREATED
    function __construct(){$this->database = new Database();}
    
	//GETTER METHOD CREATION....!
    function getus_id(){ return $this->us_id;}
    function getusername(){ return $this->username;}
    function getstatus(){ return $this->status;}
    function getlatitude(){ return $this->latitude;}
    function getlongitude(){ return $this->longitude;}
    function getlikes(){ return $this->likes;}
    function getreserved1(){ return $this->reserved1;}
    function getreserved2(){ return $this->reserved2;}
    function getreserved3(){ return $this->reserved3;}
    function getreserved4(){ return $this->reserved4;}
    function getreserved5(){ return $this->reserved5;}

   //SETTER METHOD CREATION..!
    function setus_id($us_id_v){ $this->us_id=$us_id_v;}
    function setusername($username_v){ $this->username=$username_v;}
    function setstatus($status_v){ $this->status=$status_v;}
    function setlatitude($latitude_v){ $this->latitude=$latitude_v;}
    function setlongitude($longitude_v){ $this->longitude=$longitude_v;}
    function setlikes($likes_v){ $this->likes=$likes_v;}
    function setreserved1($reserved1_v){ $this->reserved1=$reserved1_v;}
    function setreserved2($reserved2_v){ $this->reserved2=$reserved2_v;}
    function setreserved3($reserved3_v){ $this->reserved3=$reserved3_v;}
    function setreserved4($reserved4_v){ $this->reserved4=$reserved4_v;}
    function setreserved5($reserved5_v){ $this->reserved5=$reserved5_v;}

    function insert() {
        $sql="INSERT INTO `user_status`(`username`,`status`,`latitude`,`longitude`,`likes`,`reserved1`,`reserved2`,`reserved3`,`reserved4`,`reserved5`) VALUES ('$this->username','$this->status','$this->latitude','$this->longitude','$this->likes','$this->reserved1','$this->reserved2','$this->reserved3','$this->reserved4','$this->reserved5')";
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

    function updateUserLoc($username, $lat, $long) {
        $sql = "UPDATE `user_status` SET `latitude` = ".$lat.", `longitude` = ".$long." WHERE `username` = '".$username."'";
        $result = $this->database->query($sql);
        if ($this->database->rows<>-1) {
            return 'Successfully Updated';
        }
        if ($this->database->rows==-1) {
            return 'Updating Failed';
        }
    }

    function updateUserStatus($username, $status) {
        $sql = "UPDATE `user_status` SET `status` = '".$status."' WHERE `username` = '".$username."'";
        $result = $this->database->query($sql);
        if ($this->database->rows<>-1) {
            return 'Successfully Updated';
        }
        if ($this->database->rows==-1) {
            return 'Updating Failed';
        }
    }

    function getPeople($username, $lat, $long) {
        $ar = array();
        $like_arr = array();
        $ar_res = array();
        
        $sql = "SELECT `likes` FROM `user_status` WHERE `username` = '".$username."'";
        $result = $this->database->query($sql);
        $result =$this->database->result;
        while ($row = mysqli_fetch_assoc($result)) {
            $ar = explode(',', $row['likes']);
        }

        //20 Miles = 32.18688 kms
        $r=32.18688/6371;
        $lat_min = $lat - $r;
        $lat_max = $lat + $r;

        $lat_T = asin(sin($lat)/cos($r));
        $delta_long = asin(sin($r)/cos($lat));

        $long_min = $long - $delta_long;
        $long_max = $long + $delta_long;

        $sql1 = "SELECT * FROM (SELECT `us_id`,`username`,`status`,`latitude`,`longitude`,`likes` FROM `user_status` WHERE `username` != '".$username."' AND `status` = 'Available' AND (`latitude` >= ".$lat_min." AND `latitude` <= ".$lat_max.") AND (`longitude` >= ".$long_min." AND `longitude` <= ".$long_max.")) AS `table1` WHERE acos(sin(".$lat.") * sin(`latitude`) + cos(".$lat.") * cos(`latitude`) * cos(`longitude` - (".$long."))) <= ".$r."";
        $result = $this->database->query($sql1);
        $result1 = $this->database->result;
        if ($this->database->rows > 0) {
            while ($row1 = mysqli_fetch_assoc($result1)) {
                $like_arr = explode(',', $row1['likes']);
                
                foreach ($ar as $key) {
                    if (in_array($key, $like_arr)) {
                        if (!in_array($row1, $ar_res)) {
                            array_push($ar_res, $row1);
                        }
                    }
                }
            }
    
            echo json_encode($ar_res);
        }
        else if ($this->database->rows == 0) {
            $msg = array('message' => 'Sorry.....No People Found');
            echo json_encode($msg);
        }
    }

    function delete($username) {
        $sql = "DELETE FROM `user_status` WHERE `username` = '".$username."'";
        $result = $this->database->query($sql);
        if ($this->database->rows <> -1) {
            $msg = array('message' => 'Successfully Removed');
            echo json_encode($msg);
        }
        if ($this->database->rows == -1) {
            $msg = array('message' => 'Sorry.....Removing Failed');
            echo json_encode($msg);
        }
    }

}

?>