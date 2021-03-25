<?php
 include_once("class.server.php");

 class image{

	//VARIABLE DECLARATION
	 var $id;
	 var $category;
	 var $userId;
	 var $dateTime;
	 var $place;
	 var $assetImage;
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
	 function getassetImage(){ return $this->assetImage;}
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
	 function setassetImage($assetImage_v){ $this->assetImage=$assetImage_v;}
	 function setreserved1($reserved1_v){ $this->reserved1=$reserved1_v;}
	 function setreserved2($reserved2_v){ $this->reserved2=$reserved2_v;}
	 function setreserved3($reserved3_v){ $this->reserved3=$reserved3_v;}
	 function setreserved4($reserved4_v){ $this->reserved4=$reserved4_v;}
	 function setreserved5($reserved5_v){ $this->reserved5=$reserved5_v;}

	
	function insert()
	{ $sql="INSERT INTO `image`(category,userId,dateTime,place,assetImage,reserved1,reserved2,reserved3,reserved4,reserved5) VALUES ('$this->category','$this->userId','$this->dateTime','$this->place','$this->assetImage','$this->reserved1','$this->reserved2','$this->reserved3','$this->reserved4','$this->reserved5')";
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

        $sql="SELECT `id` AS `i_id`,`category`,`userId`,`dateTime`,`place`,`assetImage`,`reserved1` AS `no_of_likes` from `image` WHERE `userId` = '".$u_id."' ORDER BY `id` DESC";
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
	
	function getSingleData($i_id) {
		
		$arr = array();

		$sql = "SELECT `id` AS `i_id`,`category`,`userId`,`dateTime`,`place`,`assetImage`,`reserved1` AS `no_of_likes` from `image` WHERE `id` = ".$i_id;
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

        $sql="SELECT `id` AS `i_id`,`category`,`userId`,`dateTime`,`place`,`assetImage`,`reserved1` AS `no_of_likes` from `image` WHERE `category` = '".$cat."' ORDER BY `id` DESC";
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

        $sql="SELECT `id` AS `i_id`,`category`,`userId`,`dateTime`,`place`,`assetImage`,`reserved1` AS `no_of_likes` from `image` WHERE `userId` = '".$u_id."' AND `category` = '".$cat."' ORDER BY `id` DESC";
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

    function getAllData() {
		$arr = array();

		$sql = "SELECT `id` AS `i_id`, `category`, `userId`, `dateTime`, `place`, `assetImage`, `reserved1` AS `no_of_likes` FROM `image` ORDER BY `id` DESC";
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

	function getDeleteData($i_id) {

		$arr = array();

		$sql = "SELECT `id` AS `i_id`, `category`, `userId`, `dateTime`, `place`, `assetImage`, `reserved1` AS `no_of_likes` from `image` WHERE `id` = ".$i_id;
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

	function deleteImage($i_id) {
		$sql = "DELETE FROM `image` WHERE `id` = ".$i_id;
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
		$sql = "UPDATE `image` SET `category` = '".$this->category."', `userId` = '".$this->userId."', `place` = '".$this->place."' WHERE `id` = $this->id";
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
	
	function updateImageName() {
		$sql = "UPDATE `image` SET `assetImage` = '".$this->assetImage."' WHERE `id` = $this->id";
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
}
?>
