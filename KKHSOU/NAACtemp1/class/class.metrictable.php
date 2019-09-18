<?php
 include_once("class.database.php");

 class metrictable{

	//VARIABLE DECLARATION
	 var $metric_slno;
	 var $metric_no;
	 var $metric_title;
	 var $metric_details;
	 var $metric_key_slno;
	 var $metric_block;
	 var $metric_reserved1;
	 var $metric_reserved2;
	 var $metric_reserved3;
	 var $metric_reserved4;
	 var $metric_reserved5;
	 var $metric_reserved6;
	 var $metric_reserved7;
	 var $metric_reserved8;
	 var $metric_reserved9;
	 var $metric_reserved10;
	 var $metric_reserved11;
	 var $metric_reserved12;
	 var $metric_reserved13;
	 var $metric_reserved14;
	 var $metric_reserved15;
	 var $metric_reserved16;
	 var $metric_reserved17;
	 var $metric_reserved18;
	 var $metric_reserved19;
	 var $metric_reserved20;
	 var $database;

	 //CONSTRUCTOR CREATED
	function metrictable(){$this->database = new Database();}

	//GETTER METHOD CREATION....!
	 function getmetric_slno(){ return $this->metric_slno;}
	 function getmetric_no(){ return $this->metric_no;}
	 function getmetric_title(){ return $this->metric_title;}
	 function getmetric_details(){ return $this->metric_details;}
	 function getmetric_key_slno(){ return $this->metric_key_slno;}
	 function getmetric_block(){ return $this->metric_block;}
	 function getmetric_reserved1(){ return $this->metric_reserved1;}
	 function getmetric_reserved2(){ return $this->metric_reserved2;}
	 function getmetric_reserved3(){ return $this->metric_reserved3;}
	 function getmetric_reserved4(){ return $this->metric_reserved4;}
	 function getmetric_reserved5(){ return $this->metric_reserved5;}
	 function getmetric_reserved6(){ return $this->metric_reserved6;}
	 function getmetric_reserved7(){ return $this->metric_reserved7;}
	 function getmetric_reserved8(){ return $this->metric_reserved8;}
	 function getmetric_reserved9(){ return $this->metric_reserved9;}
	 function getmetric_reserved10(){ return $this->metric_reserved10;}
	 function getmetric_reserved11(){ return $this->metric_reserved11;}
	 function getmetric_reserved12(){ return $this->metric_reserved12;}
	 function getmetric_reserved13(){ return $this->metric_reserved13;}
	 function getmetric_reserved14(){ return $this->metric_reserved14;}
	 function getmetric_reserved15(){ return $this->metric_reserved15;}
	 function getmetric_reserved16(){ return $this->metric_reserved16;}
	 function getmetric_reserved17(){ return $this->metric_reserved17;}
	 function getmetric_reserved18(){ return $this->metric_reserved18;}
	 function getmetric_reserved19(){ return $this->metric_reserved19;}
	 function getmetric_reserved20(){ return $this->metric_reserved20;}

	//SETTER METHOD CREATION..!
	 function setmetric_slno(){ return $this->metric_slno;}
	 function setmetric_no(){ return $this->metric_no;}
	 function setmetric_title(){ return $this->metric_title;}
	 function setmetric_details(){ return $this->metric_details;}
	 function setmetric_key_slno(){ return $this->metric_key_slno;}
	 function setmetric_block(){ return $this->metric_block;}
	 function setmetric_reserved1(){ return $this->metric_reserved1;}
	 function setmetric_reserved2(){ return $this->metric_reserved2;}
	 function setmetric_reserved3(){ return $this->metric_reserved3;}
	 function setmetric_reserved4(){ return $this->metric_reserved4;}
	 function setmetric_reserved5(){ return $this->metric_reserved5;}
	 function setmetric_reserved6(){ return $this->metric_reserved6;}
	 function setmetric_reserved7(){ return $this->metric_reserved7;}
	 function setmetric_reserved8(){ return $this->metric_reserved8;}
	 function setmetric_reserved9(){ return $this->metric_reserved9;}
	 function setmetric_reserved10(){ return $this->metric_reserved10;}
	 function setmetric_reserved11(){ return $this->metric_reserved11;}
	 function setmetric_reserved12(){ return $this->metric_reserved12;}
	 function setmetric_reserved13(){ return $this->metric_reserved13;}
	 function setmetric_reserved14(){ return $this->metric_reserved14;}
	 function setmetric_reserved15(){ return $this->metric_reserved15;}
	 function setmetric_reserved16(){ return $this->metric_reserved16;}
	 function setmetric_reserved17(){ return $this->metric_reserved17;}
	 function setmetric_reserved18(){ return $this->metric_reserved18;}
	 function setmetric_reserved19(){ return $this->metric_reserved19;}
	 function setmetric_reserved20(){ return $this->metric_reserved20;}


	function select($id)
	{$sql="SELECT * from metrictable WHERE metric_slno=$id";
	$result =$this->database->query($sql);
	$result =$this->database->result;
	$row=mysqli_fetch_object($result);

	$this->metric_slno=$row->metric_slno;
	$this->metric_no=$row->metric_no;
	$this->metric_title=$row->metric_title;
	$this->metric_details=$row->metric_details;
	$this->metric_key_slno=$row->metric_key_slno;
	$this->metric_block=$row->metric_block;
	$this->metric_reserved1=$row->metric_reserved1;
	$this->metric_reserved2=$row->metric_reserved2;
	$this->metric_reserved3=$row->metric_reserved3;
	$this->metric_reserved4=$row->metric_reserved4;
	$this->metric_reserved5=$row->metric_reserved5;
	$this->metric_reserved6=$row->metric_reserved6;
	$this->metric_reserved7=$row->metric_reserved7;
	$this->metric_reserved8=$row->metric_reserved8;
	$this->metric_reserved9=$row->metric_reserved9;
	$this->metric_reserved10=$row->metric_reserved10;
	$this->metric_reserved11=$row->metric_reserved11;
	$this->metric_reserved12=$row->metric_reserved12;
	$this->metric_reserved13=$row->metric_reserved13;
	$this->metric_reserved14=$row->metric_reserved14;
	$this->metric_reserved15=$row->metric_reserved15;
	$this->metric_reserved16=$row->metric_reserved16;
	$this->metric_reserved17=$row->metric_reserved17;
	$this->metric_reserved18=$row->metric_reserved18;
	$this->metric_reserved19=$row->metric_reserved19;
	$this->metric_reserved20=$row->metric_reserved20;}

  //Display function
  function selectDisplay()
  {$sql="SELECT * from metrictable";
  $result =$this->database->query($sql);
  $result =$this->database->result;
  while($row=mysqli_fetch_array($result)) {

    echo '<tr>
    <th scope="row">'. $row["metric_slno"].'</th>
    <td>'.$row["metric_no"].'</td>
    <td>'.$row["metric_title"].'</td>
    <td>'.$row["metric_details"].'</td>
    <td>'.$row["metric_key_slno"].'</td>
    <td>'.$row["metric_block"].'</td>
    <td>'.$row["metric_reserved1"].'</td>
    <td>'.$row["metric_reserved2"].'</td>
    <td>'.$row["metric_reserved3"].'</td>
    <td>'.$row["metric_reserved4"].'</td>
    <td>'.$row["metric_reserved5"].'</td>
    <td>'.$row["metric_reserved6"].'</td>
    <td>'.$row["metric_reserved7"].'</td>
    <td>'.$row["metric_reserved8"].'</td>
    <td>'.$row["metric_reserved9"].'</td>
    <td>'.$row["metric_reserved10"].'</td>
    <td>'.$row["metric_reserved11"].'</td>
    <td>'.$row["metric_reserved12"].'</td>
    <td>'.$row["metric_reserved13"].'</td>
    <td>'.$row["metric_reserved14"].'</td>
    <td>'.$row["metric_reserved15"].'</td>
    <td>'.$row["metric_reserved16"].'</td>
    <td>'.$row["metric_reserved17"].'</td>
    <td>'.$row["metric_reserved18"].'</td>
    <td>'.$row["metric_reserved19"].'</td>
    <td>'.$row["metric_reserved20"].'</td>
    <td><a class="btn btn-primary" href="../ui/metrictableEditForm.php?metric_slno='.$row["metric_slno"].'">Edit</a></td>
    </tr>';
    }}

    function KeyIndicator()
    {
      $key = array();

      $sql = "SELECT `key_slno`,`key_indicator`,`key_title` FROM `keyindicator`";
      $result = $this->database->query($sql);
    	$result = $this->database->result;
      while($row = mysqli_fetch_array($result)) {
        // echo "<option value='".$row['crite_slno']."'>".$row['crite_title']."</option>";
        array_push($key,$row);
    }
    return json_encode($key);
  }

	function insert()
	{ $sql="INSERT INTO metrictable(metric_slno,metric_no,metric_title,metric_details,metric_key_slno,metric_block,metric_reserved1,metric_reserved2,metric_reserved3,metric_reserved4,metric_reserved5,metric_reserved6,metric_reserved7,metric_reserved8,metric_reserved9,metric_reserved10,metric_reserved11,metric_reserved12,metric_reserved13,metric_reserved14,metric_reserved15,metric_reserved16,metric_reserved17,metric_reserved18,metric_reserved19,metric_reserved20) VALUES ('$this->metric_slno','$this->metric_no','$this->metric_title','$this->metric_details','$this->metric_key_slno','$this->metric_block','$this->metric_reserved1','$this->metric_reserved2','$this->metric_reserved3','$this->metric_reserved4','$this->metric_reserved5','$this->metric_reserved6','$this->metric_reserved7','$this->metric_reserved8','$this->metric_reserved9','$this->metric_reserved10','$this->metric_reserved11','$this->metric_reserved12','$this->metric_reserved13','$this->metric_reserved14','$this->metric_reserved15','$this->metric_reserved16','$this->metric_reserved17','$this->metric_reserved18','$this->metric_reserved19','$this->metric_reserved20')";
	  $result=$this->database->query($sql);}

	function update($id)
	{ $sql="UPDATE metrictable SET metric_no='$this->metric_no',metric_title='$this->metric_title',metric_details='$this->metric_details',metric_key_slno='$this->metric_key_slno',metric_block='$this->metric_block',metric_reserved1='$this->metric_reserved1',metric_reserved2='$this->metric_reserved2',metric_reserved3='$this->metric_reserved3',metric_reserved4='$this->metric_reserved4',metric_reserved5='$this->metric_reserved5',metric_reserved6='$this->metric_reserved6',metric_reserved7='$this->metric_reserved7',metric_reserved8='$this->metric_reserved8',metric_reserved9='$this->metric_reserved9',metric_reserved10='$this->metric_reserved10',metric_reserved11='$this->metric_reserved11',metric_reserved12='$this->metric_reserved12',metric_reserved13='$this->metric_reserved13',metric_reserved14='$this->metric_reserved14',metric_reserved15='$this->metric_reserved15',metric_reserved16='$this->metric_reserved16',metric_reserved17='$this->metric_reserved17',metric_reserved18='$this->metric_reserved18',metric_reserved19='$this->metric_reserved19',metric_reserved20='$this->metric_reserved20' Where metric_slno=$id";
	 $result =$this->database->query($sql);}


	function delete($id)
	{$sql="DELETE from metrictable WHERE metric_slno=$id";$result =$this->database->query($sql);}

	 function Search($metric_slno1)
	{
		$sql="SELECT * FROM metrictable WHERE metric_slno='".$metric_slno1."'";
		$result=$this->database->query($sql);
		$result =$this->database->result;
		 while($record=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
		echo "<br> ".$record['metric_slno'];
		echo "<br> ".$record['metric_no'];
		echo "<br> ".$record['metric_title'];
		echo "<br> ".$record['metric_details'];
		echo "<br> ".$record['metric_key_slno'];
		echo "<br> ".$record['metric_block'];
		echo "<br> ".$record['metric_reserved1'];
		echo "<br> ".$record['metric_reserved2'];
		echo "<br> ".$record['metric_reserved3'];
		echo "<br> ".$record['metric_reserved4'];
		echo "<br> ".$record['metric_reserved5'];
		echo "<br> ".$record['metric_reserved6'];
		echo "<br> ".$record['metric_reserved7'];
		echo "<br> ".$record['metric_reserved8'];
		echo "<br> ".$record['metric_reserved9'];
		echo "<br> ".$record['metric_reserved10'];
		echo "<br> ".$record['metric_reserved11'];
		echo "<br> ".$record['metric_reserved12'];
		echo "<br> ".$record['metric_reserved13'];
		echo "<br> ".$record['metric_reserved14'];
		echo "<br> ".$record['metric_reserved15'];
		echo "<br> ".$record['metric_reserved16'];
		echo "<br> ".$record['metric_reserved17'];
		echo "<br> ".$record['metric_reserved18'];
		echo "<br> ".$record['metric_reserved19'];
		echo "<br> ".$record['metric_reserved20'];

		 } //end of while
	}// will do it??
}
 ?>
