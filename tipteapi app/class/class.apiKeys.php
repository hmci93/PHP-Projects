<?php
 include_once("class.server.php");

 class api_keys{

	//VARIABLE DECLARATION
	 var $ak_id;
     var $api_key;
	 var $reserved1;
	 var $reserved2;
	 var $database;

	 //CONSTRUCTOR CREATED
	function __construct(){$this->database = new Database();}

	//GETTER METHOD CREATION....!
	 function getak_id(){ return $this->ak_id;}
     function getapi_key(){ return $this->api_key;}
	 function getreserved1(){ return $this->reserved1;}
	 function getreserved2(){ return $this->reserved2;}

	//SETTER METHOD CREATION..!
	 function setak_id($ak_id_v){ $this->ak_id=$ak_id_v;}
     function setapi_key($api_key_v){ $this->api_key=$api_key_v;}
	 function setreserved1($reserved1_v){ $this->reserved1=$reserved1_v;}
	 function setreserved2($reserved2_v){ $this->reserved2=$reserved2_v;}

	
	function insert()
	{ 
        $sql="INSERT INTO `api_keys`(api_key,reserved1,reserved2) VALUES ('$this->api_key','$this->reserved1','$this->reserved2')";
        $result=$this->database->query($sql);
	    // if ($this->database->rows<>-1) {
	    //     $ar = array('message' => 'Uploaded Successfully');
	    //     echo json_encode($ar);
	    // }
	    // if ($this->database->rows==-1) {
	    //     $ar = array('message' => 'Sorry.....Uploading Failed');
	    //     echo json_encode($ar);
	    // }
    }
    
    function getLastAPI() {
        // $sql = "SELECT * FROM `api_keys` ORDER BY `ak_id` DESC LIMIT 1";
        $sql = "SELECT `api_key` FROM `api_keys` WHERE `ak_id` IN (SELECT MAX(`ak_id`) FROM `api_keys`)";
        $result = $this->database->query($sql);
        $result = $this->database->result;
        while($row = mysqli_fetch_assoc($result)) {
            
            return $row['api_key'];
        }

    }

    function checkAPI($api_key) {
        $sql = "SELECT * FROM `api_keys` WHERE `api_key` = '".$api_key."'";
        $result = $this->database->query($sql);
        if ($this->database->rows==1) {
            return "Exist";
        }
        else {
            return "Doesn't Exist";
        }
    }
	
	// function getAllData($u_id)
	// {
	// 	$arr = array();

    //     $sql="SELECT * from `video` WHERE `userId` = ".$u_id;
    //     $result =$this->database->query($sql);
    //     $result =$this->database->result;
    //     if ($this->database->rows==0) {
    //         $ar = array("message" => "Sorry.....Record Doesn't Exist");
	//         echo json_encode($ar);
    //     }
    //     else {
    // 		while($row=mysqli_fetch_assoc($result)) {
    // 			array_push($arr, $row);
    // 		}
    		
    // 		echo json_encode($arr);
    //     }
        
	// }
	
	// function getSingleData($u_id, $v_id) {
		
	// 	$arr = array();

	// 	$sql = "SELECT * from `video` WHERE `userId` = ".$u_id." AND `v_id` = ".$v_id;
	// 	$result = $this->database->query($sql);
	// 	$result = $this->database->result;
	// 	if ($this->database->rows==0) {
    //         $ar = array("message" => "Sorry.....Record Doesn't Exist");
	//         echo json_encode($ar);
    //     }
    //     else {
    // 		while($row = mysqli_fetch_assoc($result)) {
    // 			array_push($arr, $row);
    // 		}
    
    // 		echo json_encode($arr);
    //     }
	// }
}
?>
