<?php
 include_once("class.database.php");

 class keyindicator{

	//VARIABLE DECLARATION
	 var $key_slno;
	 var $key_indicator;
	 var $key_title;
	 var $key_crite_slno;
	 var $key_block;
	 var $key_reserved1;
	 var $key_reserved2;
	 var $key_reserved3;
	 var $key_reserved4;
	 var $key_reserved5;
	 var $key_reserved6;
	 var $key_reserved7;
	 var $key_reserved8;
	 var $key_reserved9;
	 var $key_reserved10;
	 var $key_reserved11;
	 var $key_reserved12;
	 var $key_reserved13;
	 var $key_reserved14;
	 var $key_reserved15;
	 var $key_reserved16;
	 var $key_reserved17;
	 var $key_reserved18;
	 var $key_reserved19;
	 var $key_reserved20;
	 var $database;

	 //CONSTRUCTOR CREATED
	function keyindicator(){$this->database = new Database();}

	//GETTER METHOD CREATION....!
	 function getkey_slno(){ return $this->key_slno;}
	 function getkey_indicator(){ return $this->key_indicator;}
	 function getkey_title(){ return $this->key_title;}
	 function getkey_crite_slno(){ return $this->key_crite_slno;}
	 function getkey_block(){ return $this->key_block;}
	 function getkey_reserved1(){ return $this->key_reserved1;}
	 function getkey_reserved2(){ return $this->key_reserved2;}
	 function getkey_reserved3(){ return $this->key_reserved3;}
	 function getkey_reserved4(){ return $this->key_reserved4;}
	 function getkey_reserved5(){ return $this->key_reserved5;}
	 function getkey_reserved6(){ return $this->key_reserved6;}
	 function getkey_reserved7(){ return $this->key_reserved7;}
	 function getkey_reserved8(){ return $this->key_reserved8;}
	 function getkey_reserved9(){ return $this->key_reserved9;}
	 function getkey_reserved10(){ return $this->key_reserved10;}
	 function getkey_reserved11(){ return $this->key_reserved11;}
	 function getkey_reserved12(){ return $this->key_reserved12;}
	 function getkey_reserved13(){ return $this->key_reserved13;}
	 function getkey_reserved14(){ return $this->key_reserved14;}
	 function getkey_reserved15(){ return $this->key_reserved15;}
	 function getkey_reserved16(){ return $this->key_reserved16;}
	 function getkey_reserved17(){ return $this->key_reserved17;}
	 function getkey_reserved18(){ return $this->key_reserved18;}
	 function getkey_reserved19(){ return $this->key_reserved19;}
	 function getkey_reserved20(){ return $this->key_reserved20;}

	//SETTER METHOD CREATION..!
	 function setkey_slno(){ return $this->key_slno;}
	 function setkey_indicator(){ return $this->key_indicator;}
	 function setkey_title(){ return $this->key_title;}
	 function setkey_crite_slno(){ return $this->key_crite_slno;}
	 function setkey_block(){ return $this->key_block;}
	 function setkey_reserved1(){ return $this->key_reserved1;}
	 function setkey_reserved2(){ return $this->key_reserved2;}
	 function setkey_reserved3(){ return $this->key_reserved3;}
	 function setkey_reserved4(){ return $this->key_reserved4;}
	 function setkey_reserved5(){ return $this->key_reserved5;}
	 function setkey_reserved6(){ return $this->key_reserved6;}
	 function setkey_reserved7(){ return $this->key_reserved7;}
	 function setkey_reserved8(){ return $this->key_reserved8;}
	 function setkey_reserved9(){ return $this->key_reserved9;}
	 function setkey_reserved10(){ return $this->key_reserved10;}
	 function setkey_reserved11(){ return $this->key_reserved11;}
	 function setkey_reserved12(){ return $this->key_reserved12;}
	 function setkey_reserved13(){ return $this->key_reserved13;}
	 function setkey_reserved14(){ return $this->key_reserved14;}
	 function setkey_reserved15(){ return $this->key_reserved15;}
	 function setkey_reserved16(){ return $this->key_reserved16;}
	 function setkey_reserved17(){ return $this->key_reserved17;}
	 function setkey_reserved18(){ return $this->key_reserved18;}
	 function setkey_reserved19(){ return $this->key_reserved19;}
	 function setkey_reserved20(){ return $this->key_reserved20;}


	function select($id)
	{$sql="SELECT * from keyindicator WHERE key_slno=$id";
	$result =$this->database->query($sql);
	$result =$this->database->result;
	$row=mysqli_fetch_object($result);

	$this->key_slno=$row->key_slno;
	$this->key_indicator=$row->key_indicator;
	$this->key_title=$row->key_title;
	$this->key_crite_slno=$row->key_crite_slno;
	$this->key_block=$row->key_block;
	$this->key_reserved1=$row->key_reserved1;
	$this->key_reserved2=$row->key_reserved2;
	$this->key_reserved3=$row->key_reserved3;
	$this->key_reserved4=$row->key_reserved4;
	$this->key_reserved5=$row->key_reserved5;
	$this->key_reserved6=$row->key_reserved6;
	$this->key_reserved7=$row->key_reserved7;
	$this->key_reserved8=$row->key_reserved8;
	$this->key_reserved9=$row->key_reserved9;
	$this->key_reserved10=$row->key_reserved10;
	$this->key_reserved11=$row->key_reserved11;
	$this->key_reserved12=$row->key_reserved12;
	$this->key_reserved13=$row->key_reserved13;
	$this->key_reserved14=$row->key_reserved14;
	$this->key_reserved15=$row->key_reserved15;
	$this->key_reserved16=$row->key_reserved16;
	$this->key_reserved17=$row->key_reserved17;
	$this->key_reserved18=$row->key_reserved18;
	$this->key_reserved19=$row->key_reserved19;
	$this->key_reserved20=$row->key_reserved20;}

  //Display function
  function selectDisplay()
  {$sql="SELECT * from keyindicator";
  $result =$this->database->query($sql);
  $result =$this->database->result;
  while($row=mysqli_fetch_array($result)) {

    echo '<tr>
    <th scope="row">'. $row["key_slno"].'</th>
    <td>'.$row["key_indicator"].'</td>
    <td>'.$row["key_title"].'</td>
    <td>'.$row["key_crite_slno"].'</td>
    <td>'.$row["key_block"].'</td>
    <td>'.$row["key_reserved1"].'</td>
    <td>'.$row["key_reserved2"].'</td>
    <td>'.$row["key_reserved3"].'</td>
    <td>'.$row["key_reserved4"].'</td>
    <td>'.$row["key_reserved5"].'</td>
    <td>'.$row["key_reserved6"].'</td>
    <td>'.$row["key_reserved7"].'</td>
    <td>'.$row["key_reserved8"].'</td>
    <td>'.$row["key_reserved9"].'</td>
    <td>'.$row["key_reserved10"].'</td>
    <td>'.$row["key_reserved11"].'</td>
    <td>'.$row["key_reserved12"].'</td>
    <td>'.$row["key_reserved13"].'</td>
    <td>'.$row["key_reserved14"].'</td>
    <td>'.$row["key_reserved15"].'</td>
    <td>'.$row["key_reserved16"].'</td>
    <td>'.$row["key_reserved17"].'</td>
    <td>'.$row["key_reserved18"].'</td>
    <td>'.$row["key_reserved19"].'</td>
    <td>'.$row["key_reserved20"].'</td>
    <td><a class="btn btn-primary" href="keyindicatorEditForm.php?key_slno='.$row["key_slno"].'">Edit</a></td>
    </tr>';
    }}

	function insert()
	{ $sql="INSERT INTO keyindicator(key_slno,key_indicator,key_title,key_crite_slno,key_block,key_reserved1,key_reserved2,key_reserved3,key_reserved4,key_reserved5,key_reserved6,key_reserved7,key_reserved8,key_reserved9,key_reserved10,key_reserved11,key_reserved12,key_reserved13,key_reserved14,key_reserved15,key_reserved16,key_reserved17,key_reserved18,key_reserved19,key_reserved20) VALUES ('$this->key_slno','$this->key_indicator','$this->key_title','$this->key_crite_slno','$this->key_block','$this->key_reserved1','$this->key_reserved2','$this->key_reserved3','$this->key_reserved4','$this->key_reserved5','$this->key_reserved6','$this->key_reserved7','$this->key_reserved8','$this->key_reserved9','$this->key_reserved10','$this->key_reserved11','$this->key_reserved12','$this->key_reserved13','$this->key_reserved14','$this->key_reserved15','$this->key_reserved16','$this->key_reserved17','$this->key_reserved18','$this->key_reserved19','$this->key_reserved20')";
	  $result=$this->database->query($sql);}

	function update($id)
	{ $sql="UPDATE keyindicator SET key_indicator='$this->key_indicator',key_title='$this->key_title',key_crite_slno='$this->key_crite_slno',key_block='$this->key_block',key_reserved1='$this->key_reserved1',key_reserved2='$this->key_reserved2',key_reserved3='$this->key_reserved3',key_reserved4='$this->key_reserved4',key_reserved5='$this->key_reserved5',key_reserved6='$this->key_reserved6',key_reserved7='$this->key_reserved7',key_reserved8='$this->key_reserved8',key_reserved9='$this->key_reserved9',key_reserved10='$this->key_reserved10',key_reserved11='$this->key_reserved11',key_reserved12='$this->key_reserved12',key_reserved13='$this->key_reserved13',key_reserved14='$this->key_reserved14',key_reserved15='$this->key_reserved15',key_reserved16='$this->key_reserved16',key_reserved17='$this->key_reserved17',key_reserved18='$this->key_reserved18',key_reserved19='$this->key_reserved19',key_reserved20='$this->key_reserved20' Where key_slno=$id";
	 $result =$this->database->query($sql);}


	function delete($id)
	{$sql="DELETE from keyindicator WHERE key_slno=$id";$result =$this->database->query($sql);}

	 function Search($key_slno1)
	{
		$sql="SELECT * FROM keyindicator WHERE key_slno='".$key_slno1."'";
		$result=$this->database->query($sql);
		$result =$this->database->result;
		 while($record=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
		echo "<br> ".$record['key_slno'];
		echo "<br> ".$record['key_indicator'];
		echo "<br> ".$record['key_title'];
		echo "<br> ".$record['key_crite_slno'];
		echo "<br> ".$record['key_block'];
		echo "<br> ".$record['key_reserved1'];
		echo "<br> ".$record['key_reserved2'];
		echo "<br> ".$record['key_reserved3'];
		echo "<br> ".$record['key_reserved4'];
		echo "<br> ".$record['key_reserved5'];
		echo "<br> ".$record['key_reserved6'];
		echo "<br> ".$record['key_reserved7'];
		echo "<br> ".$record['key_reserved8'];
		echo "<br> ".$record['key_reserved9'];
		echo "<br> ".$record['key_reserved10'];
		echo "<br> ".$record['key_reserved11'];
		echo "<br> ".$record['key_reserved12'];
		echo "<br> ".$record['key_reserved13'];
		echo "<br> ".$record['key_reserved14'];
		echo "<br> ".$record['key_reserved15'];
		echo "<br> ".$record['key_reserved16'];
		echo "<br> ".$record['key_reserved17'];
		echo "<br> ".$record['key_reserved18'];
		echo "<br> ".$record['key_reserved19'];
		echo "<br> ".$record['key_reserved20'];

		 } //end of while
	}// will do it??
}
 ?>
