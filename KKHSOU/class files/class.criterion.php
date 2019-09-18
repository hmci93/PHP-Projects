<?php 
 include_once("class.database.php");

 class criterion{
 
	//VARIABLE DECLARATION
	 var $crite_slno;
	 var $crite_title;
	 var $crite_block;
	 var $crite_descrip;
	 var $crite_reserved1;
	 var $crite_reserved2;
	 var $crite_reserved3;
	 var $crite_reserved4;
	 var $crite_reserved5;
	 var $crite_reserved6;
	 var $crite_reserved7;
	 var $crite_reserved8;
	 var $crite_reserved9;
	 var $crite_reserved10;
	 var $crite_reserved11;
	 var $crite_reserved12;
	 var $crite_reserved13;
	 var $crite_reserved14;
	 var $crite_reserved15;
	 var $crite_reserved16;
	 var $crite_reserved17;
	 var $crite_reserved18;
	 var $crite_reserved19;
	 var $crite_reserved20;
	 var $database;

	 //CONSTRUCTOR CREATED
	function criterion(){$this->database = new Database();}

	//GETTER METHOD CREATION....!
	 function getcrite_slno(){ return $this->crite_slno;}
	 function getcrite_title(){ return $this->crite_title;}
	 function getcrite_block(){ return $this->crite_block;}
	 function getcrite_descrip(){ return $this->crite_descrip;}
	 function getcrite_reserved1(){ return $this->crite_reserved1;}
	 function getcrite_reserved2(){ return $this->crite_reserved2;}
	 function getcrite_reserved3(){ return $this->crite_reserved3;}
	 function getcrite_reserved4(){ return $this->crite_reserved4;}
	 function getcrite_reserved5(){ return $this->crite_reserved5;}
	 function getcrite_reserved6(){ return $this->crite_reserved6;}
	 function getcrite_reserved7(){ return $this->crite_reserved7;}
	 function getcrite_reserved8(){ return $this->crite_reserved8;}
	 function getcrite_reserved9(){ return $this->crite_reserved9;}
	 function getcrite_reserved10(){ return $this->crite_reserved10;}
	 function getcrite_reserved11(){ return $this->crite_reserved11;}
	 function getcrite_reserved12(){ return $this->crite_reserved12;}
	 function getcrite_reserved13(){ return $this->crite_reserved13;}
	 function getcrite_reserved14(){ return $this->crite_reserved14;}
	 function getcrite_reserved15(){ return $this->crite_reserved15;}
	 function getcrite_reserved16(){ return $this->crite_reserved16;}
	 function getcrite_reserved17(){ return $this->crite_reserved17;}
	 function getcrite_reserved18(){ return $this->crite_reserved18;}
	 function getcrite_reserved19(){ return $this->crite_reserved19;}
	 function getcrite_reserved20(){ return $this->crite_reserved20;}

	//SETTER METHOD CREATION..!
	 function setcrite_slno(){ return $this->crite_slno;}
	 function setcrite_title(){ return $this->crite_title;}
	 function setcrite_block(){ return $this->crite_block;}
	 function setcrite_descrip(){ return $this->crite_descrip;}
	 function setcrite_reserved1(){ return $this->crite_reserved1;}
	 function setcrite_reserved2(){ return $this->crite_reserved2;}
	 function setcrite_reserved3(){ return $this->crite_reserved3;}
	 function setcrite_reserved4(){ return $this->crite_reserved4;}
	 function setcrite_reserved5(){ return $this->crite_reserved5;}
	 function setcrite_reserved6(){ return $this->crite_reserved6;}
	 function setcrite_reserved7(){ return $this->crite_reserved7;}
	 function setcrite_reserved8(){ return $this->crite_reserved8;}
	 function setcrite_reserved9(){ return $this->crite_reserved9;}
	 function setcrite_reserved10(){ return $this->crite_reserved10;}
	 function setcrite_reserved11(){ return $this->crite_reserved11;}
	 function setcrite_reserved12(){ return $this->crite_reserved12;}
	 function setcrite_reserved13(){ return $this->crite_reserved13;}
	 function setcrite_reserved14(){ return $this->crite_reserved14;}
	 function setcrite_reserved15(){ return $this->crite_reserved15;}
	 function setcrite_reserved16(){ return $this->crite_reserved16;}
	 function setcrite_reserved17(){ return $this->crite_reserved17;}
	 function setcrite_reserved18(){ return $this->crite_reserved18;}
	 function setcrite_reserved19(){ return $this->crite_reserved19;}
	 function setcrite_reserved20(){ return $this->crite_reserved20;}

	
	function select($id)
	{$sql="SELECT * from criterion WHERE crite_slno=$id";
	$result =$this->database->query($sql);
	$result =$this->database->result;
	$row=mysqli_fetch_object($result);		

	$this->crite_slno=$row->crite_slno;
	$this->crite_title=$row->crite_title;
	$this->crite_block=$row->crite_block;
	$this->crite_descrip=$row->crite_descrip;
	$this->crite_reserved1=$row->crite_reserved1;
	$this->crite_reserved2=$row->crite_reserved2;
	$this->crite_reserved3=$row->crite_reserved3;
	$this->crite_reserved4=$row->crite_reserved4;
	$this->crite_reserved5=$row->crite_reserved5;
	$this->crite_reserved6=$row->crite_reserved6;
	$this->crite_reserved7=$row->crite_reserved7;
	$this->crite_reserved8=$row->crite_reserved8;
	$this->crite_reserved9=$row->crite_reserved9;
	$this->crite_reserved10=$row->crite_reserved10;
	$this->crite_reserved11=$row->crite_reserved11;
	$this->crite_reserved12=$row->crite_reserved12;
	$this->crite_reserved13=$row->crite_reserved13;
	$this->crite_reserved14=$row->crite_reserved14;
	$this->crite_reserved15=$row->crite_reserved15;
	$this->crite_reserved16=$row->crite_reserved16;
	$this->crite_reserved17=$row->crite_reserved17;
	$this->crite_reserved18=$row->crite_reserved18;
	$this->crite_reserved19=$row->crite_reserved19;
	$this->crite_reserved20=$row->crite_reserved20;}
	function insert()
	{ $sql="INSERT INTO criterion(crite_slno,crite_title,crite_block,crite_descrip,crite_reserved1,crite_reserved2,crite_reserved3,crite_reserved4,crite_reserved5,crite_reserved6,crite_reserved7,crite_reserved8,crite_reserved9,crite_reserved10,crite_reserved11,crite_reserved12,crite_reserved13,crite_reserved14,crite_reserved15,crite_reserved16,crite_reserved17,crite_reserved18,crite_reserved19,crite_reserved20) VALUES ('$this->crite_slno','$this->crite_title','$this->crite_block','$this->crite_descrip','$this->crite_reserved1','$this->crite_reserved2','$this->crite_reserved3','$this->crite_reserved4','$this->crite_reserved5','$this->crite_reserved6','$this->crite_reserved7','$this->crite_reserved8','$this->crite_reserved9','$this->crite_reserved10','$this->crite_reserved11','$this->crite_reserved12','$this->crite_reserved13','$this->crite_reserved14','$this->crite_reserved15','$this->crite_reserved16','$this->crite_reserved17','$this->crite_reserved18','$this->crite_reserved19','$this->crite_reserved20')";
	  $result=$this->database->query($sql);}
	
	function update($id)
	{ $sql="UPDATE criterion SET crite_title='$this->crite_title',crite_block='$this->crite_block',crite_descrip='$this->crite_descrip',crite_reserved1='$this->crite_reserved1',crite_reserved2='$this->crite_reserved2',crite_reserved3='$this->crite_reserved3',crite_reserved4='$this->crite_reserved4',crite_reserved5='$this->crite_reserved5',crite_reserved6='$this->crite_reserved6',crite_reserved7='$this->crite_reserved7',crite_reserved8='$this->crite_reserved8',crite_reserved9='$this->crite_reserved9',crite_reserved10='$this->crite_reserved10',crite_reserved11='$this->crite_reserved11',crite_reserved12='$this->crite_reserved12',crite_reserved13='$this->crite_reserved13',crite_reserved14='$this->crite_reserved14',crite_reserved15='$this->crite_reserved15',crite_reserved16='$this->crite_reserved16',crite_reserved17='$this->crite_reserved17',crite_reserved18='$this->crite_reserved18',crite_reserved19='$this->crite_reserved19',crite_reserved20='$this->crite_reserved20' Where crite_slno=$id";
	 $result =$this->database->query($sql);}

	
	function delete($id)
	{$sql="DELETE from criterion WHERE crite_slno=$id";$result =$this->database->query($sql);} 

	 function Search($crite_slno1) 
	{
		$sql="SELECT * FROM criterion WHERE crite_slno='".$crite_slno1."'";
		$result=$this->database->query($sql);
		$result =$this->database->result;
		 while($record=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
		echo "<br> ".$record['crite_slno'];
		echo "<br> ".$record['crite_title'];
		echo "<br> ".$record['crite_block'];
		echo "<br> ".$record['crite_descrip'];
		echo "<br> ".$record['crite_reserved1'];
		echo "<br> ".$record['crite_reserved2'];
		echo "<br> ".$record['crite_reserved3'];
		echo "<br> ".$record['crite_reserved4'];
		echo "<br> ".$record['crite_reserved5'];
		echo "<br> ".$record['crite_reserved6'];
		echo "<br> ".$record['crite_reserved7'];
		echo "<br> ".$record['crite_reserved8'];
		echo "<br> ".$record['crite_reserved9'];
		echo "<br> ".$record['crite_reserved10'];
		echo "<br> ".$record['crite_reserved11'];
		echo "<br> ".$record['crite_reserved12'];
		echo "<br> ".$record['crite_reserved13'];
		echo "<br> ".$record['crite_reserved14'];
		echo "<br> ".$record['crite_reserved15'];
		echo "<br> ".$record['crite_reserved16'];
		echo "<br> ".$record['crite_reserved17'];
		echo "<br> ".$record['crite_reserved18'];
		echo "<br> ".$record['crite_reserved19'];
		echo "<br> ".$record['crite_reserved20'];

		 } //end of while 
	}// will do it??
}
 ?>