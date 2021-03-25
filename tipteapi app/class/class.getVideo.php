<?php
 include_once("class.server.php");

 class video{

	//VARIABLE DECLARATION
	 var $id;
	 var $category;
	 var $userId;
	 var $dateTime;
	 var $place;
	 var $assetVideo;
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
	 function getcategory(){ return $this->category;}
	 function getuserId(){ return $this->userId;}
	 function getdateTime(){ return $this->dateTime;}
	 function getplace(){ return $this->place;}
	 function getassetVideo(){ return $this->assetVideo;}
	 function getreserved1(){ return $this->reserved1;}
	 function getreserved2(){ return $this->reserved2;}
	 function getreserved3(){ return $this->reserved3;}
	 function getreserved4(){ return $this->reserved4;}
	 function getreserved5(){ return $this->reserved5;}

	//SETTER METHOD CREATION..!
	 function setid($id_v){ $this->id=$id_v;}
	 function setcategory($category_v){ $this->category=$category_v;}
	 function setuserId($userId_v){ $this->userId=$userId_v;}
	 function setdateTime($dateTime_v){ $this->dateTime=$dateTime_v;}
	 function setplace($place_v){ $this->place=$place_v;}
	 function setassetVideo($assetVideo_v){ $this->assetVideo=$assetVideo_v;}
	 function setreserved1($reserved1_v){ $this->reserved1=$reserved1_v;}
	 function setreserved2($reserved2_v){ $this->reserved2=$reserved2_v;}
	 function setreserved3($reserved3_v){ $this->reserved3=$reserved3_v;}
	 function setreserved4($reserved4_v){ $this->reserved4=$reserved4_v;}
	 function setreserved5($reserved5_v){ $this->reserved5=$reserved5_v;}

	
	function insert()
	{ $sql="INSERT INTO `video`(category,userId,dateTime,place,assetVideo,reserved1,reserved2,reserved3,reserved4,reserved5) VALUES ('$this->category','$this->userId','$this->dateTime','$this->place','$this->assetVideo','$this->reserved1','$this->reserved2','$this->reserved3','$this->reserved4','$this->reserved5')";
	  $result=$this->database->query($sql);
	    if ($this->database->rows<>-1) {
	        $ar = array('message' => 'Uploaded Successfully');
	        echo json_encode($ar);
	    }
	    if ($this->database->rows==-1) {
	        $ar = array('message' => 'Sorry.....Uploading Failed');
	        echo json_encode($ar);
	    }
	}
	
	function getDataByUser($u_id)
	{
		$arr = array();

        $sql="SELECT `id` AS `v_id`,`category`,`userId`,`dateTime`,`place`,`assetVideo`,`reserved1` AS `no_of_likes`, (SELECT user_profile.reserved1 FROM `user_profile` WHERE user_profile.username = '".$u_id."') AS `disp_name`, (SELECT user_profile.prof_img_path FROM `user_profile` WHERE user_profile.username = '".$u_id."') AS `profileImage`, `reserved2` AS `videoThumbPath` from `video` WHERE `userId` = '".$u_id."' AND `reserved3` != '1' ORDER BY `id` DESC";
        $result =$this->database->query($sql);
        $result =$this->database->result;
        if ($this->database->rows==0) {
            $ar = array("message" => "Sorry.....Record Doesn't Exist");
	        echo json_encode($ar);
        }
        else {
    		while($row=mysqli_fetch_assoc($result)) {
    			array_push($arr, $row);
    		}
    		
    		echo json_encode($arr);
    // 		return json_encode($arr);
        }
        
	}
	
	function getSingleData($v_id) {
		
		$arr = array();

		$sql = "SELECT `id` AS `v_id`,`category`,`userId`,`dateTime`,`place`,`assetVideo`,`reserved1` AS `no_of_likes`, (SELECT user_profile.reserved1 FROM `user_profile` WHERE user_profile.username = video.userId) AS `disp_name`, (SELECT user_profile.prof_img_path FROM `user_profile` WHERE user_profile.username = video.userId) AS `profileImage`, `reserved2` AS `videoThumbPath` from `video` WHERE `id` = ".$v_id;
		$result = $this->database->query($sql);
		$result = $this->database->result;
		if ($this->database->rows==0) {
            $ar = array("message" => "Sorry.....Record Doesn't Exist");
	        echo json_encode($ar);
        }
        else {
    		while($row = mysqli_fetch_assoc($result)) {
    			array_push($arr, $row);
    		}
    
    		echo json_encode($arr);
        }
	}
	
	function getDataByCategory($cat)
	{
		$arr = array();

        $sql="SELECT `id` AS `v_id`,`category`,`userId`,`dateTime`,`place`,`assetVideo`,`reserved1` AS `no_of_likes`, (SELECT user_profile.reserved1 FROM `user_profile` WHERE user_profile.username = video.userId) AS `disp_name`, (SELECT user_profile.prof_img_path FROM `user_profile` WHERE user_profile.username = video.userId) AS `profileImage`, `reserved2` AS `videoThumbPath` from `video` WHERE `category` = '".$cat."' AND `reserved3` != '1' ORDER BY `id` DESC";
        $result =$this->database->query($sql);
        $result =$this->database->result;
        if ($this->database->rows==0) {
            $ar = array("message" => "Sorry.....Record Doesn't Exist");
	        echo json_encode($ar);
        }
        else {
    		while($row=mysqli_fetch_assoc($result)) {
    			array_push($arr, $row);
    		}
    		
    		echo json_encode($arr);
        }
        
	}
	
	function getSpecificData($cat, $u_id)
	{
		$arr = array();

        $sql="SELECT `id` AS `v_id`,`category`,`userId`,`dateTime`,`place`,`assetVideo`,`reserved1` AS `no_of_likes`, (SELECT user_profile.reserved1 FROM `user_profile` WHERE user_profile.username = video.userId) AS `disp_name`, (SELECT user_profile.prof_img_path FROM `user_profile` WHERE user_profile.username = video.userId) AS `profileImage`, `reserved2` AS `videoThumbPath` from `video` WHERE `userId` = '".$u_id."' AND `category` = '".$cat."' AND `reserved3` != '1' ORDER BY `id` DESC";
        $result =$this->database->query($sql);
        $result =$this->database->result;
        if ($this->database->rows==0) {
            $ar = array("message" => "Sorry.....Record Doesn't Exist");
	        echo json_encode($ar);
        }
        else {
    		while($row=mysqli_fetch_assoc($result)) {
    			array_push($arr, $row);
    		}
    		
    		echo json_encode($arr);
        }
        
	}
	
	function getDataByMultCat($cat) {
		
		$arr = array();
		$arr1 = array();

		$arr1 = explode(',', $cat);

		foreach ($arr1 as $k) {
			$sql = "SELECT `id` AS `v_id`, `category`, `userId`, `dateTime`, `place`, `assetVideo`, `reserved1` AS `no_of_likes`, (SELECT user_profile.reserved1 FROM `user_profile` WHERE user_profile.username = video.userId) AS `disp_name`, (SELECT user_profile.prof_img_path FROM `user_profile` WHERE user_profile.username = video.userId) AS `profileImage`, `reserved2` AS `videoThumbPath` FROM `video` WHERE `category` = '".$k."' AND `reserved3` != '1' ORDER BY `id` DESC";
			$result = $this->database->query($sql);
			$result = $this->database->result;
			if ($this->database->rows<>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					array_push($arr, $row);
				}
			}
			else {}
		}

		if (sizeof($arr) == 0) {
			$ar = array("message" => "Sorry.....No Record Found");
			echo json_encode($ar);
		}
		else {
			echo json_encode($arr);
		}
	}

    function getAllData() {
		$arr = array();

		$sql = "SELECT `id` AS `v_id`, `category`, `userId`, `dateTime`, `place`, `assetVideo`, `reserved1` AS `no_of_likes`, `reserved2` AS `videoThumbPath` FROM `video` WHERE `reserved3` != '1' ORDER BY `id` DESC";
		$result = $this->database->query($sql);
		$result = $this->database->result;

		if ($this->database->rows <> 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				array_push($arr, $row);
			}

			echo json_encode($arr);
		}
		else {
            $ar = array("message" => "Sorry.....No Record Found");
	        echo json_encode($ar);
		}
	}
	
	function getSearchData($searchData) {
	    $arr = array();
	    
	    $sql = "SELECT `id` AS `v_id`, `category`, `userId`, `dateTime`, `place`, `assetVideo`, `reserved1` AS `no_of_likes`, `reserved2` AS `videoThumbPath` FROM `video` WHERE `reserved3` != '1' AND (`category` LIKE '%".$searchData."%' OR `place` LIKE '%".$searchData."%' OR `assetVideo` LIKE 'uploads/video/%".$searchData."%') ORDER BY `id` DESC";
	    $result = $this->database->query($sql);
	    $result = $this->database->result;
	    
	    if ($this->database->rows <> 0) {
	        while ($row = mysqli_fetch_assoc($result)) {
	            array_push($arr, $row);
	        }
	        
	        echo json_encode($arr);
	    }
	    else {
	        $ar = array("message" => "Sorry.....No Record Found");
	        echo json_encode($ar);
	    }
	}
	
	function getDeleteData($v_id) {

	    $arr = array();

        $sql = "SELECT `id` AS `v_id`, `category`, `userId`, `dateTime`, `place`, `assetVideo`, `reserved1` AS `no_of_likes` from `video` WHERE `id` = ".$v_id;
        $result = $this->database->query($sql);
        $result = $this->database->result;

    	if ($this->database->rows==0) {
    	    
            $ar = array("message" => "Sorry.....Record Doesn't Exist");
            return json_encode($ar);
    
        }
    
        else {
    
    		while($row = mysqli_fetch_assoc($result)) {
    			array_push($arr, $row);
    		}
    
    		return json_encode($arr);
    
        }
    
    }
    
    function deleteVideo($v_id) {
		$sql = "DELETE FROM `video` WHERE `id` = ".$v_id;
		$result = $this->database->query($sql);
		$result = $this->database->result;

		if ($this->database->affected_rows > 0) {
			$ar = array("message" => "Record Successfully Deleted");

	        return json_encode($ar);
		}
		else if ($this->database->affected_rows == -1) {
			$ar = array("message" => "Deletion Error");

	        return json_encode($ar);
		}
		else {
			$ar = array("message" => "Sorry.....Record Doesn't Exist");

	        return json_encode($ar);
		}
	}
	
	function updateData() {
		$sql = "UPDATE `video` SET `category` = '".$this->category."', `userId` = '".$this->userId."', `place` = '".$this->place."' WHERE `id` = $this->id";
		$result=$this->database->query($sql);
		if ($this->database->affected_rows > 0) {
			$ar = array('message' => 'Updated Successfully');
	        echo json_encode($ar);
		}
		else if ($this->database->affected_rows == -1) {
			$ar = array('message' => 'Error in Updating');
	        echo json_encode($ar);
		}
		else {
			$ar = array('message' => 'Updating Failed');
	        echo json_encode($ar);
		}
	}
	
	function updateVideoName() {
		$sql = "UPDATE `video` SET `assetVideo` = '".$this->assetVideo."' WHERE `id` = $this->id";
		$result=$this->database->query($sql);
		if ($this->database->affected_rows > 0) {
			$ar = array('message' => 'Updated Successfully');
	        echo json_encode($ar);
		}
		else if ($this->database->affected_rows == -1) {
			$ar = array('message' => 'Error in Updating');
	        echo json_encode($ar);
		}
		else {
			$ar = array('message' => 'Updating Failed');
	        echo json_encode($ar);
		}
	}
	
	function getAllAssetCount() {
		$arr = array();

		$sql = "SELECT (SELECT COUNT(*) FROM `video`) AS `videoCount`, (SELECT COUNT(*) FROM `audio`) AS `audioCount`, (SELECT COUNT(*) FROM `image`) AS `imageCount`, (SELECT COUNT(*) FROM `files`) AS `fileCount`";
		$result = $this->database->query($sql);
		$result = $this->database->result;

		if ($this->database->rows <> 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				array_push($arr, $row);
			}
			echo json_encode($arr);
		}
		else {
            $ar = array("message" => "Sorry.....No Record Found");
	        echo json_encode($ar);
		}
	}
	
	function getSuggList($s_char) {
		$suggList = array();
		$sfc = $this->searchFromCategory($s_char);
		$sfp = $this->searchFromPlace($s_char);

		if ($sfc != 'No Data') {
			foreach ($sfc as $k) {
				array_push($suggList, $k);
			}
		}
		if ($sfp != 'No Data') {
			foreach ($sfp as $k1) {
				array_push($suggList, $k1);
			}
		}
		
		if (!empty($suggList)) {
			echo json_encode($suggList);
		}
		else {
			echo json_encode(array('message' => 'No Data Found'));
		}
	}
	
	function searchFromCategory($sc) {
		$sfc = array();

		$sql = "SELECT DISTINCT(`category`) FROM `video` WHERE `category` LIKE '%".$sc."%'";
		$result = $this->database->query($sql);
		$result = $this->database->result;

		if ($this->database->rows > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				array_push($sfc, $row['category']);
			}
			return $sfc;
		}
		else {
			return 'No Data';
		}
	}
	
	function searchFromPlace($sc) {
		$sfp = array();

		$sql1 = "SELECT DISTINCT(`place`) FROM `video` WHERE `place` LIKE '%".$sc."%'";
		$result = $this->database->query($sql1);
		$res = $this->database->result;

		if ($this->database->rows > 0) {
			while ($row1 = mysqli_fetch_assoc($res)) {
				array_push($sfp, $row1['place']);
			}
			return $sfp;
		}
		else {
			return 'No Data';
		}
	}
	
	function getSearchDataApp($s_data) {
		$arr = array();

		$sql = "SELECT `id` AS `v_id`, `category`, `userId`, `dateTime`, `place`, `assetVideo`, `reserved1` AS `no_of_likes`, `reserved2` AS `videoThumbPath`, (SELECT user_profile.reserved1 FROM `user_profile` WHERE user_profile.username = video.userId) AS `disp_name`, (SELECT user_profile.prof_img_path FROM `user_profile` WHERE user_profile.username = video.userId) AS `profileImage` FROM `video` WHERE `reserved3` != '1' AND (`category` LIKE '%".$s_data."%' OR `place` LIKE '%".$s_data."%' OR `assetVideo` LIKE 'uploads/video/%".$s_data."%' OR (SELECT user_profile.reserved1 FROM `user_profile` WHERE user_profile.username = video.userId) LIKE '%".$s_data."%')";
		$result = $this->database->query($sql);
		$res1 = $this->database->result;

		if ($this->database->rows > 0) {
			while ($row = mysqli_fetch_assoc($res1)) {
				array_push($arr, $row);
			}
			echo json_encode($arr);
		}
		else {
            $ar = array("message" => "No Data Found");
	        echo json_encode($ar);
		}
	}
	
	function getDataForNotification($lst, $sDate, $eDate) {
		$p_lst = json_decode($lst, true);
		$p_u_lst = array();
		$final_arr = array();

		foreach ($p_lst as $key) {
			$query = "SELECT `username` FROM `user_profile` WHERE `id` = $key";
			$result = $this->database->query($query);
			$result = $this->database->result;
			if ($this->database->rows > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					array_push($p_u_lst, $row['username']);
				}
			}
		}
		
		if (!empty($p_u_lst)) {
			foreach ($p_u_lst as $key1) {
				$sql = "SELECT `id` AS `v_id`, `category`, `userId`, `dateTime`, `place`, `assetVideo`, `reserved1` AS `no_of_likes`, `reserved2` AS `videoThumbPath`, (SELECT user_profile.reserved1 FROM `user_profile` WHERE user_profile.username = video.userId) AS `disp_name`, (SELECT user_profile.prof_img_path FROM `user_profile` WHERE user_profile.username = video.userId) AS `profileImage` FROM `video` WHERE `reserved3` != '1' AND `userId` = '".$key1."' AND `dateTime` BETWEEN '".$sDate."' AND '".$eDate."' ORDER BY `id` ASC";
				$result = $this->database->query($sql);
				$res1 = $this->database->result;
				if ($this->database->rows > 0) {
					while ($row1 = mysqli_fetch_assoc($res1)) {
						array_push($final_arr, $row1);
					}
				}
			}
		}
		if (empty($final_arr)) {
		    $ar = array("message" => "No Data Found");
		    echo json_encode($ar);
		}

		if (!empty($final_arr)) {
			echo json_encode($final_arr);
		}
	}
	
	function chkVideoOwner($vId, $username) {
		$sql = "SELECT `userId` FROM `video` WHERE `id` = $vId";
		$result = $this->database->query($sql);
		$result = $this->database->result;
		if ($this->database->rows > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				if (trim($row['userId']) == trim($username)) {
					return 'Authentic';
				}else {
					return 'Unauthentic';
				}
			}
		}
	}
	
	function removeVideoDisplay($vId) {
		$sql = "UPDATE `video` SET `reserved3` = 1 WHERE `id` = $vId";
		$res = $this->database->query($sql);
		if ($this->database->affected_rows > 0) {
			$ar = array('message' => 'Video Removed Successfully');
	        echo json_encode($ar);
		}else {
			$ar = array('message' => 'Video Removal Failed');
			echo json_encode($ar);
		}
	}
}
?>
