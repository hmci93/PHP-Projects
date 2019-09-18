<?php 
 include_once("class.database.php");

 class metricupload{
 
	//VARIABLE DECLARATION
	 var $up_metric_slno;
	 var $up_metric_metric_slno;
	 var $up_metric_title;
	 var $up_metric_url;
	 var $up_metric_block;
	 var $up_metric_reserved1;
	 var $up_metric_reserved2;
	 var $up_metric_reserved3;
	 var $up_metric_reserved4;
	 var $up_metric_reserved5;
	 var $up_metric_reserved6;
	 var $up_metric_reserved7;
	 var $up_metric_reserved8;
	 var $up_metric_reserved9;
	 var $up_metric_reserved10;
	 var $up_metric_reserved11;
	 var $up_metric_reserved12;
	 var $up_metric_reserved13;
	 var $up_metric_reserved14;
	 var $up_metric_reserved15;
	 var $up_metric_reserved16;
	 var $up_metric_reserved17;
	 var $up_metric_reserved18;
	 var $up_metric_reserved19;
	 var $up_metric_reserved20;
	 var $database;

	 //CONSTRUCTOR CREATED
	function metricupload(){$this->database = new Database();}

	//GETTER METHOD CREATION....!
	 function getup_metric_slno(){ return $this->up_metric_slno;}
	 function getup_metric_metric_slno(){ return $this->up_metric_metric_slno;}
	 function getup_metric_title(){ return $this->up_metric_title;}
	 function getup_metric_url(){ return $this->up_metric_url;}
	 function getup_metric_block(){ return $this->up_metric_block;}
	 function getup_metric_reserved1(){ return $this->up_metric_reserved1;}
	 function getup_metric_reserved2(){ return $this->up_metric_reserved2;}
	 function getup_metric_reserved3(){ return $this->up_metric_reserved3;}
	 function getup_metric_reserved4(){ return $this->up_metric_reserved4;}
	 function getup_metric_reserved5(){ return $this->up_metric_reserved5;}
	 function getup_metric_reserved6(){ return $this->up_metric_reserved6;}
	 function getup_metric_reserved7(){ return $this->up_metric_reserved7;}
	 function getup_metric_reserved8(){ return $this->up_metric_reserved8;}
	 function getup_metric_reserved9(){ return $this->up_metric_reserved9;}
	 function getup_metric_reserved10(){ return $this->up_metric_reserved10;}
	 function getup_metric_reserved11(){ return $this->up_metric_reserved11;}
	 function getup_metric_reserved12(){ return $this->up_metric_reserved12;}
	 function getup_metric_reserved13(){ return $this->up_metric_reserved13;}
	 function getup_metric_reserved14(){ return $this->up_metric_reserved14;}
	 function getup_metric_reserved15(){ return $this->up_metric_reserved15;}
	 function getup_metric_reserved16(){ return $this->up_metric_reserved16;}
	 function getup_metric_reserved17(){ return $this->up_metric_reserved17;}
	 function getup_metric_reserved18(){ return $this->up_metric_reserved18;}
	 function getup_metric_reserved19(){ return $this->up_metric_reserved19;}
	 function getup_metric_reserved20(){ return $this->up_metric_reserved20;}

	//SETTER METHOD CREATION..!
	 function setup_metric_slno(){ return $this->up_metric_slno;}
	 function setup_metric_metric_slno(){ return $this->up_metric_metric_slno;}
	 function setup_metric_title(){ return $this->up_metric_title;}
	 function setup_metric_url(){ return $this->up_metric_url;}
	 function setup_metric_block(){ return $this->up_metric_block;}
	 function setup_metric_reserved1(){ return $this->up_metric_reserved1;}
	 function setup_metric_reserved2(){ return $this->up_metric_reserved2;}
	 function setup_metric_reserved3(){ return $this->up_metric_reserved3;}
	 function setup_metric_reserved4(){ return $this->up_metric_reserved4;}
	 function setup_metric_reserved5(){ return $this->up_metric_reserved5;}
	 function setup_metric_reserved6(){ return $this->up_metric_reserved6;}
	 function setup_metric_reserved7(){ return $this->up_metric_reserved7;}
	 function setup_metric_reserved8(){ return $this->up_metric_reserved8;}
	 function setup_metric_reserved9(){ return $this->up_metric_reserved9;}
	 function setup_metric_reserved10(){ return $this->up_metric_reserved10;}
	 function setup_metric_reserved11(){ return $this->up_metric_reserved11;}
	 function setup_metric_reserved12(){ return $this->up_metric_reserved12;}
	 function setup_metric_reserved13(){ return $this->up_metric_reserved13;}
	 function setup_metric_reserved14(){ return $this->up_metric_reserved14;}
	 function setup_metric_reserved15(){ return $this->up_metric_reserved15;}
	 function setup_metric_reserved16(){ return $this->up_metric_reserved16;}
	 function setup_metric_reserved17(){ return $this->up_metric_reserved17;}
	 function setup_metric_reserved18(){ return $this->up_metric_reserved18;}
	 function setup_metric_reserved19(){ return $this->up_metric_reserved19;}
	 function setup_metric_reserved20(){ return $this->up_metric_reserved20;}

	
	function select($id)
	{$sql="SELECT * from metricupload WHERE up_metric_slno=$id";
	$result =$this->database->query($sql);
	$result =$this->database->result;
	$row=mysqli_fetch_object($result);		

	$this->up_metric_slno=$row->up_metric_slno;
	$this->up_metric_metric_slno=$row->up_metric_metric_slno;
	$this->up_metric_title=$row->up_metric_title;
	$this->up_metric_url=$row->up_metric_url;
	$this->up_metric_block=$row->up_metric_block;
	$this->up_metric_reserved1=$row->up_metric_reserved1;
	$this->up_metric_reserved2=$row->up_metric_reserved2;
	$this->up_metric_reserved3=$row->up_metric_reserved3;
	$this->up_metric_reserved4=$row->up_metric_reserved4;
	$this->up_metric_reserved5=$row->up_metric_reserved5;
	$this->up_metric_reserved6=$row->up_metric_reserved6;
	$this->up_metric_reserved7=$row->up_metric_reserved7;
	$this->up_metric_reserved8=$row->up_metric_reserved8;
	$this->up_metric_reserved9=$row->up_metric_reserved9;
	$this->up_metric_reserved10=$row->up_metric_reserved10;
	$this->up_metric_reserved11=$row->up_metric_reserved11;
	$this->up_metric_reserved12=$row->up_metric_reserved12;
	$this->up_metric_reserved13=$row->up_metric_reserved13;
	$this->up_metric_reserved14=$row->up_metric_reserved14;
	$this->up_metric_reserved15=$row->up_metric_reserved15;
	$this->up_metric_reserved16=$row->up_metric_reserved16;
	$this->up_metric_reserved17=$row->up_metric_reserved17;
	$this->up_metric_reserved18=$row->up_metric_reserved18;
	$this->up_metric_reserved19=$row->up_metric_reserved19;
	$this->up_metric_reserved20=$row->up_metric_reserved20;}
	function insert()
	{ $sql="INSERT INTO metricupload(up_metric_slno,up_metric_metric_slno,up_metric_title,up_metric_url,up_metric_block,up_metric_reserved1,up_metric_reserved2,up_metric_reserved3,up_metric_reserved4,up_metric_reserved5,up_metric_reserved6,up_metric_reserved7,up_metric_reserved8,up_metric_reserved9,up_metric_reserved10,up_metric_reserved11,up_metric_reserved12,up_metric_reserved13,up_metric_reserved14,up_metric_reserved15,up_metric_reserved16,up_metric_reserved17,up_metric_reserved18,up_metric_reserved19,up_metric_reserved20) VALUES ('$this->up_metric_slno','$this->up_metric_metric_slno','$this->up_metric_title','$this->up_metric_url','$this->up_metric_block','$this->up_metric_reserved1','$this->up_metric_reserved2','$this->up_metric_reserved3','$this->up_metric_reserved4','$this->up_metric_reserved5','$this->up_metric_reserved6','$this->up_metric_reserved7','$this->up_metric_reserved8','$this->up_metric_reserved9','$this->up_metric_reserved10','$this->up_metric_reserved11','$this->up_metric_reserved12','$this->up_metric_reserved13','$this->up_metric_reserved14','$this->up_metric_reserved15','$this->up_metric_reserved16','$this->up_metric_reserved17','$this->up_metric_reserved18','$this->up_metric_reserved19','$this->up_metric_reserved20')";
	  $result=$this->database->query($sql);}
	
	function update($id)
	{ $sql="UPDATE metricupload SET up_metric_metric_slno='$this->up_metric_metric_slno',up_metric_title='$this->up_metric_title',up_metric_url='$this->up_metric_url',up_metric_block='$this->up_metric_block',up_metric_reserved1='$this->up_metric_reserved1',up_metric_reserved2='$this->up_metric_reserved2',up_metric_reserved3='$this->up_metric_reserved3',up_metric_reserved4='$this->up_metric_reserved4',up_metric_reserved5='$this->up_metric_reserved5',up_metric_reserved6='$this->up_metric_reserved6',up_metric_reserved7='$this->up_metric_reserved7',up_metric_reserved8='$this->up_metric_reserved8',up_metric_reserved9='$this->up_metric_reserved9',up_metric_reserved10='$this->up_metric_reserved10',up_metric_reserved11='$this->up_metric_reserved11',up_metric_reserved12='$this->up_metric_reserved12',up_metric_reserved13='$this->up_metric_reserved13',up_metric_reserved14='$this->up_metric_reserved14',up_metric_reserved15='$this->up_metric_reserved15',up_metric_reserved16='$this->up_metric_reserved16',up_metric_reserved17='$this->up_metric_reserved17',up_metric_reserved18='$this->up_metric_reserved18',up_metric_reserved19='$this->up_metric_reserved19',up_metric_reserved20='$this->up_metric_reserved20' Where up_metric_slno=$id";
	 $result =$this->database->query($sql);}

	
	function delete($id)
	{$sql="DELETE from metricupload WHERE up_metric_slno=$id";$result =$this->database->query($sql);} 

	 function Search($up_metric_slno1) 
	{
		$sql="SELECT * FROM metricupload WHERE up_metric_slno='".$up_metric_slno1."'";
		$result=$this->database->query($sql);
		$result =$this->database->result;
		 while($record=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
		echo "<br> ".$record['up_metric_slno'];
		echo "<br> ".$record['up_metric_metric_slno'];
		echo "<br> ".$record['up_metric_title'];
		echo "<br> ".$record['up_metric_url'];
		echo "<br> ".$record['up_metric_block'];
		echo "<br> ".$record['up_metric_reserved1'];
		echo "<br> ".$record['up_metric_reserved2'];
		echo "<br> ".$record['up_metric_reserved3'];
		echo "<br> ".$record['up_metric_reserved4'];
		echo "<br> ".$record['up_metric_reserved5'];
		echo "<br> ".$record['up_metric_reserved6'];
		echo "<br> ".$record['up_metric_reserved7'];
		echo "<br> ".$record['up_metric_reserved8'];
		echo "<br> ".$record['up_metric_reserved9'];
		echo "<br> ".$record['up_metric_reserved10'];
		echo "<br> ".$record['up_metric_reserved11'];
		echo "<br> ".$record['up_metric_reserved12'];
		echo "<br> ".$record['up_metric_reserved13'];
		echo "<br> ".$record['up_metric_reserved14'];
		echo "<br> ".$record['up_metric_reserved15'];
		echo "<br> ".$record['up_metric_reserved16'];
		echo "<br> ".$record['up_metric_reserved17'];
		echo "<br> ".$record['up_metric_reserved18'];
		echo "<br> ".$record['up_metric_reserved19'];
		echo "<br> ".$record['up_metric_reserved20'];

		 } //end of while 
	}// will do it??
}
 ?>