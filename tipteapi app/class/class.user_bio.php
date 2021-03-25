<?php

include_once("class.server.php");

class user_bio {

    // VARIABLE DECLARATION
    var $id;
    var $userId;
	var $name;
	var $nickName;
	var $gender;
    var $from_where;
    var $dob;
    var $relationship_status;
    var $primary_lang;
    var $other_lang;
    var $religion;
    var $zodiac_sign;
    var $height;
    var $complexion;
    var $hobbies;
    var $edu_quali;
    var $profession;
    var $believes;
    var $about;
    var $fav_food;
    var $fav_travel_destn;
    var $video_cat_liked;
	var $reserved1;
	var $reserved2;
	var $reserved3;
	var $reserved4;
    var $reserved5;
    var $reserved6;
    var $reserved7;
    var $reserved8;
    var $reserved9;
    var $reserved10;
    var $reserved11;
    var $reserved12;
    var $reserved13;
    var $reserved14;
    var $reserved15;
    var $database;
    
    //CONSTRUCTOR CREATED
    function __construct(){$this->database = new Database();}
    
	//GETTER METHOD CREATION....!
    function getid(){ return $this->id;}
    function getuserId(){ return $this->userId;}
    function getname(){ return $this->name;}
    function getnickName(){ return $this->nickName;}
    function getgender(){ return $this->gender;}
    function getfrom_where(){ return $this->from_where;}
    function getdob(){ return $this->dob;}
    function getrelationship_status(){ return $this->relationship_status;}
    function getprimary_lang(){ return $this->primary_lang;}
    function getother_lang(){ return $this->other_lang;}
    function getreligion(){ return $this->religion;}
    function getzodiac_sign(){ return $this->zodiac_sign;}
    function getheight(){ return $this->height;}
    function getcomplexion(){ return $this->complexion;}
    function gethobbies(){ return $this->hobbies;}
    function getedu_quali(){ return $this->edu_quali;}
    function getprofession(){ return $this->profession;}
    function getbelieves(){ return $this->believes;}
    function getabout(){ return $this->about;}
    function getfav_food(){ return $this->fav_food;}
    function getfav_travel_destn(){ return $this->fav_travel_destn;}
    function getvideo_cat_liked(){ return $this->video_cat_liked;}
    function getreserved1(){ return $this->reserved1;}
    function getreserved2(){ return $this->reserved2;}
    function getreserved3(){ return $this->reserved3;}
    function getreserved4(){ return $this->reserved4;}
    function getreserved5(){ return $this->reserved5;}
    function getreserved6(){ return $this->reserved6;}
    function getreserved7(){ return $this->reserved7;}
    function getreserved8(){ return $this->reserved8;}
    function getreserved9(){ return $this->reserved9;}
    function getreserved10(){ return $this->reserved10;}
    function getreserved11(){ return $this->reserved11;}
    function getreserved12(){ return $this->reserved12;}
    function getreserved13(){ return $this->reserved13;}
    function getreserved14(){ return $this->reserved14;}
    function getreserved15(){ return $this->reserved15;}

   //SETTER METHOD CREATION..!
    function setid($id_v){ $this->id=$id_v;}
    function setuserId($userId_v){ $this->userId=$userId_v;}
    function setname($name_v){ $this->name=$name_v;}
    function setnickName($nickName_v){ $this->nickName=$nickName_v;}
    function setgender($gender_v){ $this->gender=$gender_v;}
    function setfrom_where($from_where_v){ $this->from_where=$from_where_v;}
    function setdob($dob_v){ $this->dob=$dob_v;}
    function setrelationship_status($relationship_status_v){ $this->relationship_status=$relationship_status_v;}
    function setprimary_lang($primary_lang_v){ $this->primary_lang=$primary_lang_v;}
    function setother_lang($other_lang_v){ $this->other_lang=$other_lang_v;}
    function setreligion($religion_v){ $this->religion=$religion_v;}
    function setzodiac_sign($zodiac_sign_v){ $this->zodiac_sign=$zodiac_sign_v;}
    function setheight($height_v){ $this->height=$height_v;}
    function setcomplexion($complexion_v){ $this->complexion=$complexion_v;}
    function sethobbies($hobbies_v){ $this->hobbies=$hobbies_v;}
    function setedu_quali($edu_quali_v){ $this->edu_quali=$edu_quali_v;}
    function setprofession($profession_v){ $this->profession=$profession_v;}
    function setbelieves($believes_v){ $this->believes=$believes_v;}
    function setabout($about_v){ $this->about=$about_v;}
    function setfav_food($fav_food_v){ $this->fav_food=$fav_food_v;}
    function setfav_travel_destn($fav_travel_destn_v){ $this->fav_travel_destn=$fav_travel_destn_v;}
    function setvideo_cat_liked($video_cat_liked_v){ $this->video_cat_liked=$video_cat_liked_v;}
    function setreserved1($reserved1_v){ $this->reserved1=$reserved1_v;}
    function setreserved2($reserved2_v){ $this->reserved2=$reserved2_v;}
    function setreserved3($reserved3_v){ $this->reserved3=$reserved3_v;}
    function setreserved4($reserved4_v){ $this->reserved4=$reserved4_v;}
    function setreserved5($reserved5_v){ $this->reserved5=$reserved5_v;}
    function setreserved6($reserved6_v){ $this->reserved6=$reserved6_v;}
    function setreserved7($reserved7_v){ $this->reserved7=$reserved7_v;}
    function setreserved8($reserved8_v){ $this->reserved8=$reserved8_v;}
    function setreserved9($reserved9_v){ $this->reserved9=$reserved9_v;}
    function setreserved10($reserved10_v){ $this->reserved10=$reserved10_v;}
    function setreserved11($reserved11_v){ $this->reserved11=$reserved11_v;}
    function setreserved12($reserved12_v){ $this->reserved12=$reserved12_v;}
    function setreserved13($reserved13_v){ $this->reserved13=$reserved13_v;}
    function setreserved14($reserved14_v){ $this->reserved14=$reserved14_v;}
    function setreserved15($reserved15_v){ $this->reserved15=$reserved15_v;}

    function insert() {
        $sql="INSERT INTO `user_bio`(`userId`,`name`,`nickName`,`gender`,`from_where`,`dob`,`relationship_status`,`primary_lang`,`other_lang`,`religion`,`zodiac_sign`,`height`,`complexion`,`hobbies`,`edu_quali`,`profession`,`believes`,`about`,`fav_food`,`fav_travel_destn`,`video_cat_liked`,`reserved1`,`reserved2`,`reserved3`,`reserved4`,`reserved5`,`reserved6`,`reserved7`,`reserved8`,`reserved9`,`reserved10`,`reserved11`,`reserved12`,`reserved13`,`reserved14`,`reserved15`) VALUES ('$this->userId','$this->name','$this->nickName','$this->gender','$this->from_where','$this->dob','$this->relationship_status','$this->primary_lang','$this->other_lang','$this->religion','$this->zodiac_sign','$this->height','$this->complexion','$this->hobbies','$this->edu_quali','$this->profession','$this->believes','$this->about','$this->fav_food','$this->fav_travel_destn','$this->video_cat_liked','$this->reserved1','$this->reserved2','$this->reserved3','$this->reserved4','$this->reserved5','$this->reserved6','$this->reserved7','$this->reserved8','$this->reserved9','$this->reserved10','$this->reserved11','$this->reserved12','$this->reserved13','$this->reserved14','$this->reserved15')";
        $result=$this->database->query($sql);
        if ($this->database->affected_rows > 0) {
            $updateProfileRes = $this->updateUserDisplayName($this->name, $this->userId);
            if ($updateProfileRes == 'User Profile Updated') {
                $ar = array('message' => 'Successfully Inserted');
                echo json_encode($ar);
            }
            else if ($updateProfileRes == 'User Profile Updating Failed') {
                $ar = array('message' => 'User Profile Updating Failed');
                echo json_encode($ar);
            }
        }
        else if ($this->database->affected_rows == 0) {
            $ar = array('message' => 'Sorry.....Inserting Failed');
            echo json_encode($ar);
        }
        else {
            $ar = array('message' => 'Error Inserting');
            echo json_encode($ar);
        }
    }
    
    function updateUserDisplayName($dispName, $userId) {
        $sql1 = "UPDATE `user_profile` SET `reserved1` = '".$dispName."' WHERE `username` = '".$userId."'";
        $res = $this->database->query($sql1);
        if ($this->database->affected_rows > 0) {
            return 'User Profile Updated';
        }
        else if ($this->database->affected_rows == 0) {
            return 'User Data Not Affected';
        }
        else {
            return 'User Profile Updating Failed';
        }
    }

    function chkUserAvail($userId) {
        $sql = "SELECT * FROM `user_bio` WHERE `userId` = '".$userId."'";
        $result = $this->database->query($sql);
        $result = $this->database->result;
        if ($this->database->rows > 0) {
            return 'User Exist';
        }
        else {
            return 'User Profile Not Found';
        }
    }

    function updateUser($userId) {
        $sql = "UPDATE `user_bio` SET `name` = '".$this->name."',`nickName` = '".$this->nickName."',`gender` = '".$this->gender."',`from_where` = '".$this->from_where."',`dob` = '".$this->dob."',`relationship_status` = '".$this->relationship_status."',`primary_lang` = '".$this->primary_lang."',`other_lang` = '".$this->other_lang."',`religion` = '".$this->religion."',`zodiac_sign` = '".$this->zodiac_sign."',`height` = '".$this->height."',`complexion` = '".$this->complexion."',`hobbies` = '".$this->hobbies."',`edu_quali` = '".$this->edu_quali."',`profession` = '".$this->profession."',`believes` = '".$this->believes."',`about` = '".$this->about."',`fav_food` = '".$this->fav_food."',`fav_travel_destn` = '".$this->fav_travel_destn."',`video_cat_liked` = '".$this->video_cat_liked."' WHERE `userId` = '".$userId."'";
        $result = $this->database->query($sql);
        if ($this->database->affected_rows > 0) {
            $updateProfileRes = $this->updateUserDisplayName($this->name, $userId);
            if ($updateProfileRes == 'User Profile Updated' || $updateProfileRes == 'User Data Not Affected') {
                $ar = array('message' => 'Bio Updated Successfully');
            echo json_encode($ar);
            }
            else if ($updateProfileRes == 'User Profile Updating Failed') {
                $ar = array('message' => 'User Profile Updating Failed');
                echo json_encode($ar);
            }
            
        }
        else if ($this->database->affected_rows == 0) {
            // $ar = array('message' => 'Sorry....Bio Updating Failed');
            $ar = array('message' => 'Bio Updated Successfully');
            echo json_encode($ar);
        }
        else {
            $ar = array('message' => 'Error Updating Bio');
            echo json_encode($ar);
        }
    }

    function getUserBio($userId) {
        $arr = array();

        $sql="SELECT `userId`,`name`,`nickName`,`gender`,`from_where`,`dob`,`relationship_status`,`primary_lang`,`other_lang`,`religion`,`zodiac_sign`,`height`,`complexion`,`hobbies`,`edu_quali`,`profession`,`believes`,`about`,`fav_food`,`fav_travel_destn`,`video_cat_liked` FROM `user_bio` WHERE `userId` = '".$userId."'";
        $result = $this->database->query($sql);
        $result = $this->database->result;
        if ($this->database->rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($arr, $row);        
            }
            echo json_encode($arr);
        }
        else {
            $ar = array('message' => 'User Bio Not Found');
            echo json_encode($ar);
        }
    }
}

?>