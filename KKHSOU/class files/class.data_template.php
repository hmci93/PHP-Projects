<?php 
 include_once("class.database.php");

 class data_template{
 
	//VARIABLE DECLARATION
	 var $Data_temp_slno;
	 var $Data_temp_ Metric_slno;
	 var $Data_temp_ descrip;
	 var $Data_temp_ status_block;
	 var $Data_temp_ reserved1;
	 var $Data_temp_ reserved2;
	 var $Data_temp_ reserved3;
	 var $Data_temp_ reserved4;
	 var $Data_temp_ reserved5;
	 var $Data_temp_ reserved6;
	 var $Data_temp_ reserved7;
	 var $Data_temp_ reserved8;
	 var $Data_temp_ reserved9;
	 var $Data_temp_ reserved10;
	 var $Data_temp_ reserved11;
	 var $Data_temp_ reserved12;
	 var $Data_temp_ reserved13;
	 var $Data_temp_ reserved14;
	 var $Data_temp_ reserved15;
	 var $Data_temp_ reserved16;
	 var $Data_temp_ reserved17;
	 var $Data_temp_ reserved18;
	 var $Data_temp_ reserved19;
	 var $Data_temp_ reserved20;
	 var $database;

	 //CONSTRUCTOR CREATED
	function data_template(){$this->database = new Database();}

	//GETTER METHOD CREATION....!
	 function getData_temp_slno(){ return $this->Data_temp_slno;}
	 function getData_temp_ Metric_slno(){ return $this->Data_temp_ Metric_slno;}
	 function getData_temp_ descrip(){ return $this->Data_temp_ descrip;}
	 function getData_temp_ status_block(){ return $this->Data_temp_ status_block;}
	 function getData_temp_ reserved1(){ return $this->Data_temp_ reserved1;}
	 function getData_temp_ reserved2(){ return $this->Data_temp_ reserved2;}
	 function getData_temp_ reserved3(){ return $this->Data_temp_ reserved3;}
	 function getData_temp_ reserved4(){ return $this->Data_temp_ reserved4;}
	 function getData_temp_ reserved5(){ return $this->Data_temp_ reserved5;}
	 function getData_temp_ reserved6(){ return $this->Data_temp_ reserved6;}
	 function getData_temp_ reserved7(){ return $this->Data_temp_ reserved7;}
	 function getData_temp_ reserved8(){ return $this->Data_temp_ reserved8;}
	 function getData_temp_ reserved9(){ return $this->Data_temp_ reserved9;}
	 function getData_temp_ reserved10(){ return $this->Data_temp_ reserved10;}
	 function getData_temp_ reserved11(){ return $this->Data_temp_ reserved11;}
	 function getData_temp_ reserved12(){ return $this->Data_temp_ reserved12;}
	 function getData_temp_ reserved13(){ return $this->Data_temp_ reserved13;}
	 function getData_temp_ reserved14(){ return $this->Data_temp_ reserved14;}
	 function getData_temp_ reserved15(){ return $this->Data_temp_ reserved15;}
	 function getData_temp_ reserved16(){ return $this->Data_temp_ reserved16;}
	 function getData_temp_ reserved17(){ return $this->Data_temp_ reserved17;}
	 function getData_temp_ reserved18(){ return $this->Data_temp_ reserved18;}
	 function getData_temp_ reserved19(){ return $this->Data_temp_ reserved19;}
	 function getData_temp_ reserved20(){ return $this->Data_temp_ reserved20;}

	//SETTER METHOD CREATION..!
	 function setData_temp_slno(){ return $this->Data_temp_slno;}
	 function setData_temp_ Metric_slno(){ return $this->Data_temp_ Metric_slno;}
	 function setData_temp_ descrip(){ return $this->Data_temp_ descrip;}
	 function setData_temp_ status_block(){ return $this->Data_temp_ status_block;}
	 function setData_temp_ reserved1(){ return $this->Data_temp_ reserved1;}
	 function setData_temp_ reserved2(){ return $this->Data_temp_ reserved2;}
	 function setData_temp_ reserved3(){ return $this->Data_temp_ reserved3;}
	 function setData_temp_ reserved4(){ return $this->Data_temp_ reserved4;}
	 function setData_temp_ reserved5(){ return $this->Data_temp_ reserved5;}
	 function setData_temp_ reserved6(){ return $this->Data_temp_ reserved6;}
	 function setData_temp_ reserved7(){ return $this->Data_temp_ reserved7;}
	 function setData_temp_ reserved8(){ return $this->Data_temp_ reserved8;}
	 function setData_temp_ reserved9(){ return $this->Data_temp_ reserved9;}
	 function setData_temp_ reserved10(){ return $this->Data_temp_ reserved10;}
	 function setData_temp_ reserved11(){ return $this->Data_temp_ reserved11;}
	 function setData_temp_ reserved12(){ return $this->Data_temp_ reserved12;}
	 function setData_temp_ reserved13(){ return $this->Data_temp_ reserved13;}
	 function setData_temp_ reserved14(){ return $this->Data_temp_ reserved14;}
	 function setData_temp_ reserved15(){ return $this->Data_temp_ reserved15;}
	 function setData_temp_ reserved16(){ return $this->Data_temp_ reserved16;}
	 function setData_temp_ reserved17(){ return $this->Data_temp_ reserved17;}
	 function setData_temp_ reserved18(){ return $this->Data_temp_ reserved18;}
	 function setData_temp_ reserved19(){ return $this->Data_temp_ reserved19;}
	 function setData_temp_ reserved20(){ return $this->Data_temp_ reserved20;}

	
	function select($id)
	{$sql="SELECT * from data_template WHERE Data_temp_slno=$id";
	$result =$this->database->query($sql);
	$result =$this->database->result;
	$row=mysqli_fetch_object($result);		

	$this->Data_temp_slno=$row->Data_temp_slno;
	$this->Data_temp_ Metric_slno=$row->Data_temp_ Metric_slno;
	$this->Data_temp_ descrip=$row->Data_temp_ descrip;
	$this->Data_temp_ status_block=$row->Data_temp_ status_block;
	$this->Data_temp_ reserved1=$row->Data_temp_ reserved1;
	$this->Data_temp_ reserved2=$row->Data_temp_ reserved2;
	$this->Data_temp_ reserved3=$row->Data_temp_ reserved3;
	$this->Data_temp_ reserved4=$row->Data_temp_ reserved4;
	$this->Data_temp_ reserved5=$row->Data_temp_ reserved5;
	$this->Data_temp_ reserved6=$row->Data_temp_ reserved6;
	$this->Data_temp_ reserved7=$row->Data_temp_ reserved7;
	$this->Data_temp_ reserved8=$row->Data_temp_ reserved8;
	$this->Data_temp_ reserved9=$row->Data_temp_ reserved9;
	$this->Data_temp_ reserved10=$row->Data_temp_ reserved10;
	$this->Data_temp_ reserved11=$row->Data_temp_ reserved11;
	$this->Data_temp_ reserved12=$row->Data_temp_ reserved12;
	$this->Data_temp_ reserved13=$row->Data_temp_ reserved13;
	$this->Data_temp_ reserved14=$row->Data_temp_ reserved14;
	$this->Data_temp_ reserved15=$row->Data_temp_ reserved15;
	$this->Data_temp_ reserved16=$row->Data_temp_ reserved16;
	$this->Data_temp_ reserved17=$row->Data_temp_ reserved17;
	$this->Data_temp_ reserved18=$row->Data_temp_ reserved18;
	$this->Data_temp_ reserved19=$row->Data_temp_ reserved19;
	$this->Data_temp_ reserved20=$row->Data_temp_ reserved20;}
	function insert()
	{ $sql="INSERT INTO data_template(Data_temp_slno,Data_temp_ Metric_slno,Data_temp_ descrip,Data_temp_ status_block,Data_temp_ reserved1,Data_temp_ reserved2,Data_temp_ reserved3,Data_temp_ reserved4,Data_temp_ reserved5,Data_temp_ reserved6,Data_temp_ reserved7,Data_temp_ reserved8,Data_temp_ reserved9,Data_temp_ reserved10,Data_temp_ reserved11,Data_temp_ reserved12,Data_temp_ reserved13,Data_temp_ reserved14,Data_temp_ reserved15,Data_temp_ reserved16,Data_temp_ reserved17,Data_temp_ reserved18,Data_temp_ reserved19,Data_temp_ reserved20) VALUES ('$this->Data_temp_slno','$this->Data_temp_ Metric_slno','$this->Data_temp_ descrip','$this->Data_temp_ status_block','$this->Data_temp_ reserved1','$this->Data_temp_ reserved2','$this->Data_temp_ reserved3','$this->Data_temp_ reserved4','$this->Data_temp_ reserved5','$this->Data_temp_ reserved6','$this->Data_temp_ reserved7','$this->Data_temp_ reserved8','$this->Data_temp_ reserved9','$this->Data_temp_ reserved10','$this->Data_temp_ reserved11','$this->Data_temp_ reserved12','$this->Data_temp_ reserved13','$this->Data_temp_ reserved14','$this->Data_temp_ reserved15','$this->Data_temp_ reserved16','$this->Data_temp_ reserved17','$this->Data_temp_ reserved18','$this->Data_temp_ reserved19','$this->Data_temp_ reserved20')";
	  $result=$this->database->query($sql);}
	
	function update($id)
	{ $sql="UPDATE data_template SET Data_temp_ Metric_slno='$this->Data_temp_ Metric_slno',Data_temp_ descrip='$this->Data_temp_ descrip',Data_temp_ status_block='$this->Data_temp_ status_block',Data_temp_ reserved1='$this->Data_temp_ reserved1',Data_temp_ reserved2='$this->Data_temp_ reserved2',Data_temp_ reserved3='$this->Data_temp_ reserved3',Data_temp_ reserved4='$this->Data_temp_ reserved4',Data_temp_ reserved5='$this->Data_temp_ reserved5',Data_temp_ reserved6='$this->Data_temp_ reserved6',Data_temp_ reserved7='$this->Data_temp_ reserved7',Data_temp_ reserved8='$this->Data_temp_ reserved8',Data_temp_ reserved9='$this->Data_temp_ reserved9',Data_temp_ reserved10='$this->Data_temp_ reserved10',Data_temp_ reserved11='$this->Data_temp_ reserved11',Data_temp_ reserved12='$this->Data_temp_ reserved12',Data_temp_ reserved13='$this->Data_temp_ reserved13',Data_temp_ reserved14='$this->Data_temp_ reserved14',Data_temp_ reserved15='$this->Data_temp_ reserved15',Data_temp_ reserved16='$this->Data_temp_ reserved16',Data_temp_ reserved17='$this->Data_temp_ reserved17',Data_temp_ reserved18='$this->Data_temp_ reserved18',Data_temp_ reserved19='$this->Data_temp_ reserved19',Data_temp_ reserved20='$this->Data_temp_ reserved20' Where Data_temp_slno=$id";
	 $result =$this->database->query($sql);}

	
	function delete($id)
	{$sql="DELETE from data_template WHERE Data_temp_slno=$id";$result =$this->database->query($sql);} 

	 function Search($Data_temp_slno1) 
	{
		$sql="SELECT * FROM data_template WHERE Data_temp_slno='".$Data_temp_slno1."'";
		$result=$this->database->query($sql);
		$result =$this->database->result;
		 while($record=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
		echo "<br> ".$record['Data_temp_slno'];
		echo "<br> ".$record['Data_temp_ Metric_slno'];
		echo "<br> ".$record['Data_temp_ descrip'];
		echo "<br> ".$record['Data_temp_ status_block'];
		echo "<br> ".$record['Data_temp_ reserved1'];
		echo "<br> ".$record['Data_temp_ reserved2'];
		echo "<br> ".$record['Data_temp_ reserved3'];
		echo "<br> ".$record['Data_temp_ reserved4'];
		echo "<br> ".$record['Data_temp_ reserved5'];
		echo "<br> ".$record['Data_temp_ reserved6'];
		echo "<br> ".$record['Data_temp_ reserved7'];
		echo "<br> ".$record['Data_temp_ reserved8'];
		echo "<br> ".$record['Data_temp_ reserved9'];
		echo "<br> ".$record['Data_temp_ reserved10'];
		echo "<br> ".$record['Data_temp_ reserved11'];
		echo "<br> ".$record['Data_temp_ reserved12'];
		echo "<br> ".$record['Data_temp_ reserved13'];
		echo "<br> ".$record['Data_temp_ reserved14'];
		echo "<br> ".$record['Data_temp_ reserved15'];
		echo "<br> ".$record['Data_temp_ reserved16'];
		echo "<br> ".$record['Data_temp_ reserved17'];
		echo "<br> ".$record['Data_temp_ reserved18'];
		echo "<br> ".$record['Data_temp_ reserved19'];
		echo "<br> ".$record['Data_temp_ reserved20'];

		 } //end of while 
	}// will do it??
}
 ?>