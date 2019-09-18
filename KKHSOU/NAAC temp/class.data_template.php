<?php
 include_once("class.database.php");

 class data_template{

	//VARIABLE DECLARATION
	 var $Data_temp_slno;
	 var $Data_temp_Metric_slno;
	 var $Data_temp_descrip;
	 var $Data_temp_status_block;
	 var $Data_temp_reserved1;
	 var $Data_temp_reserved2;
	 var $Data_temp_reserved3;
	 var $Data_temp_reserved4;
	 var $Data_temp_reserved5;
	 var $Data_temp_reserved6;
	 var $Data_temp_reserved7;
	 var $Data_temp_reserved8;
	 var $Data_temp_reserved9;
	 var $Data_temp_reserved10;
	 var $Data_temp_reserved11;
	 var $Data_temp_reserved12;
	 var $Data_temp_reserved13;
	 var $Data_temp_reserved14;
	 var $Data_temp_reserved15;
	 var $Data_temp_reserved16;
	 var $Data_temp_reserved17;
	 var $Data_temp_reserved18;
	 var $Data_temp_reserved19;
	 var $Data_temp_reserved20;
	 var $database;

	 //CONSTRUCTOR CREATED
	function data_template(){$this->database = new Database();}

	//GETTER METHOD CREATION....!
	 function getData_temp_slno(){ return $this->Data_temp_slno;}
	 function getData_temp_Metric_slno(){ return $this->Data_temp_Metric_slno;}
	 function getData_temp_descrip(){ return $this->Data_temp_descrip;}
	 function getData_temp_status_block(){ return $this->Data_temp_status_block;}
	 function getData_temp_reserved1(){ return $this->Data_temp_reserved1;}
	 function getData_temp_reserved2(){ return $this->Data_temp_reserved2;}
	 function getData_temp_reserved3(){ return $this->Data_temp_reserved3;}
	 function getData_temp_reserved4(){ return $this->Data_temp_reserved4;}
	 function getData_temp_reserved5(){ return $this->Data_temp_reserved5;}
	 function getData_temp_reserved6(){ return $this->Data_temp_reserved6;}
	 function getData_temp_reserved7(){ return $this->Data_temp_reserved7;}
	 function getData_temp_reserved8(){ return $this->Data_temp_reserved8;}
	 function getData_temp_reserved9(){ return $this->Data_temp_reserved9;}
	 function getData_temp_reserved10(){ return $this->Data_temp_reserved10;}
	 function getData_temp_reserved11(){ return $this->Data_temp_reserved11;}
	 function getData_temp_reserved12(){ return $this->Data_temp_reserved12;}
	 function getData_temp_reserved13(){ return $this->Data_temp_reserved13;}
	 function getData_temp_reserved14(){ return $this->Data_temp_reserved14;}
	 function getData_temp_reserved15(){ return $this->Data_temp_reserved15;}
	 function getData_temp_reserved16(){ return $this->Data_temp_reserved16;}
	 function getData_temp_reserved17(){ return $this->Data_temp_reserved17;}
	 function getData_temp_reserved18(){ return $this->Data_temp_reserved18;}
	 function getData_temp_reserved19(){ return $this->Data_temp_reserved19;}
	 function getData_temp_reserved20(){ return $this->Data_temp_reserved20;}

	//SETTER METHOD CREATION..!
	 function setData_temp_slno(){ return $this->Data_temp_slno;}
	 function setData_temp_Metric_slno(){ return $this->Data_temp_Metric_slno;}
	 function setData_temp_descrip(){ return $this->Data_temp_descrip;}
	 function setData_temp_status_block(){ return $this->Data_temp_status_block;}
	 function setData_temp_reserved1(){ return $this->Data_temp_reserved1;}
	 function setData_temp_reserved2(){ return $this->Data_temp_reserved2;}
	 function setData_temp_reserved3(){ return $this->Data_temp_reserved3;}
	 function setData_temp_reserved4(){ return $this->Data_temp_reserved4;}
	 function setData_temp_reserved5(){ return $this->Data_temp_reserved5;}
	 function setData_temp_reserved6(){ return $this->Data_temp_reserved6;}
	 function setData_temp_reserved7(){ return $this->Data_temp_reserved7;}
	 function setData_temp_reserved8(){ return $this->Data_temp_reserved8;}
	 function setData_temp_reserved9(){ return $this->Data_temp_reserved9;}
	 function setData_temp_reserved10(){ return $this->Data_temp_reserved10;}
	 function setData_temp_reserved11(){ return $this->Data_temp_reserved11;}
	 function setData_temp_reserved12(){ return $this->Data_temp_reserved12;}
	 function setData_temp_reserved13(){ return $this->Data_temp_reserved13;}
	 function setData_temp_reserved14(){ return $this->Data_temp_reserved14;}
	 function setData_temp_reserved15(){ return $this->Data_temp_reserved15;}
	 function setData_temp_reserved16(){ return $this->Data_temp_reserved16;}
	 function setData_temp_reserved17(){ return $this->Data_temp_reserved17;}
	 function setData_temp_reserved18(){ return $this->Data_temp_reserved18;}
	 function setData_temp_reserved19(){ return $this->Data_temp_reserved19;}
	 function setData_temp_reserved20(){ return $this->Data_temp_reserved20;}


	function select($id)
	{$sql="SELECT * from data_template WHERE Data_temp_slno=$id";
	$result =$this->database->query($sql);
	$result =$this->database->result;
	$row=mysqli_fetch_object($result);

	$this->Data_temp_slno=$row->Data_temp_slno;
	$this->Data_temp_Metric_slno=$row->Data_temp_Metric_slno;
	$this->Data_temp_descrip=$row->Data_temp_descrip;
	$this->Data_temp_status_block=$row->Data_temp_status_block;
	$this->Data_temp_reserved1=$row->Data_temp_reserved1;
	$this->Data_temp_reserved2=$row->Data_temp_reserved2;
	$this->Data_temp_reserved3=$row->Data_temp_reserved3;
	$this->Data_temp_reserved4=$row->Data_temp_reserved4;
	$this->Data_temp_reserved5=$row->Data_temp_reserved5;
	$this->Data_temp_reserved6=$row->Data_temp_reserved6;
	$this->Data_temp_reserved7=$row->Data_temp_reserved7;
	$this->Data_temp_reserved8=$row->Data_temp_reserved8;
	$this->Data_temp_reserved9=$row->Data_temp_reserved9;
	$this->Data_temp_reserved10=$row->Data_temp_reserved10;
	$this->Data_temp_reserved11=$row->Data_temp_reserved11;
	$this->Data_temp_reserved12=$row->Data_temp_reserved12;
	$this->Data_temp_reserved13=$row->Data_temp_reserved13;
	$this->Data_temp_reserved14=$row->Data_temp_reserved14;
	$this->Data_temp_reserved15=$row->Data_temp_reserved15;
	$this->Data_temp_reserved16=$row->Data_temp_reserved16;
	$this->Data_temp_reserved17=$row->Data_temp_reserved17;
	$this->Data_temp_reserved18=$row->Data_temp_reserved18;
	$this->Data_temp_reserved19=$row->Data_temp_reserved19;
	$this->Data_temp_reserved20=$row->Data_temp_reserved20;}

  //Display function
  function selectDisplay()
  {$sql="SELECT * from data_template";
  $result =$this->database->query($sql);
  $result =$this->database->result;
  while($row=mysqli_fetch_array($result)) {

    echo '<tr>
    <th scope="row">'. $row["Data_temp_slno"].'</th>
    <td>'.$row["Data_temp_Metric_slno"].'</td>
    <td>'.$row["Data_temp_descrip"].'</td>
    <td>'.$row["Data_temp_status_block"].'</td>
    <td>'.$row["Data_temp_reserved1"].'</td>
    <td>'.$row["Data_temp_reserved2"].'</td>
    <td>'.$row["Data_temp_reserved3"].'</td>
    <td>'.$row["Data_temp_reserved4"].'</td>
    <td>'.$row["Data_temp_reserved5"].'</td>
    <td>'.$row["Data_temp_reserved6"].'</td>
    <td>'.$row["Data_temp_reserved7"].'</td>
    <td>'.$row["Data_temp_reserved8"].'</td>
    <td>'.$row["Data_temp_reserved9"].'</td>
    <td>'.$row["Data_temp_reserved10"].'</td>
    <td>'.$row["Data_temp_reserved11"].'</td>
    <td>'.$row["Data_temp_reserved12"].'</td>
    <td>'.$row["Data_temp_reserved13"].'</td>
    <td>'.$row["Data_temp_reserved14"].'</td>
    <td>'.$row["Data_temp_reserved15"].'</td>
    <td>'.$row["Data_temp_reserved16"].'</td>
    <td>'.$row["Data_temp_reserved17"].'</td>
    <td>'.$row["Data_temp_reserved18"].'</td>
    <td>'.$row["Data_temp_reserved19"].'</td>
    <td>'.$row["Data_temp_reserved20"].'</td>
    <td><a class="btn btn-primary" href="data_templateEditForm.php?Data_temp_slno='.$row["Data_temp_slno"].'">Edit</a></td>
    </tr>';
    }}

	function insert()
	{ $sql="INSERT INTO data_template(Data_temp_slno,Data_temp_Metric_slno,Data_temp_descrip,Data_temp_status_block,Data_temp_reserved1,Data_temp_reserved2,Data_temp_reserved3,Data_temp_reserved4,Data_temp_reserved5,Data_temp_reserved6,Data_temp_reserved7,Data_temp_reserved8,Data_temp_reserved9,Data_temp_reserved10,Data_temp_reserved11,Data_temp_reserved12,Data_temp_reserved13,Data_temp_reserved14,Data_temp_reserved15,Data_temp_reserved16,Data_temp_reserved17,Data_temp_reserved18,Data_temp_reserved19,Data_temp_reserved20) VALUES ('$this->Data_temp_slno','$this->Data_temp_Metric_slno','$this->Data_temp_descrip','$this->Data_temp_status_block','$this->Data_temp_reserved1','$this->Data_temp_reserved2','$this->Data_temp_reserved3','$this->Data_temp_reserved4','$this->Data_temp_reserved5','$this->Data_temp_reserved6','$this->Data_temp_reserved7','$this->Data_temp_reserved8','$this->Data_temp_reserved9','$this->Data_temp_reserved10','$this->Data_temp_reserved11','$this->Data_temp_reserved12','$this->Data_temp_reserved13','$this->Data_temp_reserved14','$this->Data_temp_reserved15','$this->Data_temp_reserved16','$this->Data_temp_reserved17','$this->Data_temp_reserved18','$this->Data_temp_reserved19','$this->Data_temp_reserved20')";
	  $result=$this->database->query($sql);}

	function update($id)
	{ $sql="UPDATE data_template SET Data_temp_Metric_slno='$this->Data_temp_Metric_slno',Data_temp_descrip='$this->Data_temp_descrip',Data_temp_status_block='$this->Data_temp_status_block',Data_temp_reserved1='$this->Data_temp_reserved1',Data_temp_reserved2='$this->Data_temp_reserved2',Data_temp_reserved3='$this->Data_temp_reserved3',Data_temp_reserved4='$this->Data_temp_reserved4',Data_temp_reserved5='$this->Data_temp_reserved5',Data_temp_reserved6='$this->Data_temp_reserved6',Data_temp_reserved7='$this->Data_temp_reserved7',Data_temp_reserved8='$this->Data_temp_reserved8',Data_temp_reserved9='$this->Data_temp_reserved9',Data_temp_reserved10='$this->Data_temp_reserved10',Data_temp_reserved11='$this->Data_temp_reserved11',Data_temp_reserved12='$this->Data_temp_reserved12',Data_temp_reserved13='$this->Data_temp_reserved13',Data_temp_reserved14='$this->Data_temp_reserved14',Data_temp_reserved15='$this->Data_temp_reserved15',Data_temp_reserved16='$this->Data_temp_reserved16',Data_temp_reserved17='$this->Data_temp_reserved17',Data_temp_reserved18='$this->Data_temp_reserved18',Data_temp_reserved19='$this->Data_temp_reserved19',Data_temp_reserved20='$this->Data_temp_reserved20' Where Data_temp_slno=$id";
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
		echo "<br> ".$record['Data_temp_Metric_slno'];
		echo "<br> ".$record['Data_temp_descrip'];
		echo "<br> ".$record['Data_temp_status_block'];
		echo "<br> ".$record['Data_temp_reserved1'];
		echo "<br> ".$record['Data_temp_reserved2'];
		echo "<br> ".$record['Data_temp_reserved3'];
		echo "<br> ".$record['Data_temp_reserved4'];
		echo "<br> ".$record['Data_temp_reserved5'];
		echo "<br> ".$record['Data_temp_reserved6'];
		echo "<br> ".$record['Data_temp_reserved7'];
		echo "<br> ".$record['Data_temp_reserved8'];
		echo "<br> ".$record['Data_temp_reserved9'];
		echo "<br> ".$record['Data_temp_reserved10'];
		echo "<br> ".$record['Data_temp_reserved11'];
		echo "<br> ".$record['Data_temp_reserved12'];
		echo "<br> ".$record['Data_temp_reserved13'];
		echo "<br> ".$record['Data_temp_reserved14'];
		echo "<br> ".$record['Data_temp_reserved15'];
		echo "<br> ".$record['Data_temp_reserved16'];
		echo "<br> ".$record['Data_temp_reserved17'];
		echo "<br> ".$record['Data_temp_reserved18'];
		echo "<br> ".$record['Data_temp_reserved19'];
		echo "<br> ".$record['Data_temp_reserved20'];

		 } //end of while
	}// will do it??
}
 ?>
