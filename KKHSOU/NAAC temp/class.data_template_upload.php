<?php
 include_once("class.database.php");

 class data_template_upload{

	//VARIABLE DECLARATION
	 var $data_upload_slno;
	 var $data_upload_temp_slno;
	 var $data_upload_title;
	 var $data_upload_url;
	 var $data_upload_reserved1;
	 var $data_upload_reserved2;
	 var $data_upload_reserved3;
	 var $data_upload_reserved4;
	 var $data_upload_reserved5;
	 var $data_upload_reserved6;
	 var $data_upload_reserved7;
	 var $data_upload_reserved8;
	 var $data_upload_reserved9;
	 var $data_upload_reserved10;
	 var $data_upload_reserved11;
	 var $data_upload_reserved12;
	 var $data_upload_reserved13;
	 var $data_upload_reserved14;
	 var $data_upload_reserved15;
	 var $data_upload_reserved16;
	 var $data_upload_reserved17;
	 var $data_upload_reserved18;
	 var $data_upload_reserved19;
	 var $data_upload_reserved20;
	 var $database;

	 //CONSTRUCTOR CREATED
	function data_template_upload(){$this->database = new Database();}

	//GETTER METHOD CREATION....!
	 function getdata_upload_slno(){ return $this->data_upload_slno;}
	 function getdata_upload_temp_slno(){ return $this->data_upload_temp_slno;}
	 function getdata_upload_title(){ return $this->data_upload_title;}
	 function getdata_upload_url(){ return $this->data_upload_url;}
	 function getdata_upload_reserved1(){ return $this->data_upload_reserved1;}
	 function getdata_upload_reserved2(){ return $this->data_upload_reserved2;}
	 function getdata_upload_reserved3(){ return $this->data_upload_reserved3;}
	 function getdata_upload_reserved4(){ return $this->data_upload_reserved4;}
	 function getdata_upload_reserved5(){ return $this->data_upload_reserved5;}
	 function getdata_upload_reserved6(){ return $this->data_upload_reserved6;}
	 function getdata_upload_reserved7(){ return $this->data_upload_reserved7;}
	 function getdata_upload_reserved8(){ return $this->data_upload_reserved8;}
	 function getdata_upload_reserved9(){ return $this->data_upload_reserved9;}
	 function getdata_upload_reserved10(){ return $this->data_upload_reserved10;}
	 function getdata_upload_reserved11(){ return $this->data_upload_reserved11;}
	 function getdata_upload_reserved12(){ return $this->data_upload_reserved12;}
	 function getdata_upload_reserved13(){ return $this->data_upload_reserved13;}
	 function getdata_upload_reserved14(){ return $this->data_upload_reserved14;}
	 function getdata_upload_reserved15(){ return $this->data_upload_reserved15;}
	 function getdata_upload_reserved16(){ return $this->data_upload_reserved16;}
	 function getdata_upload_reserved17(){ return $this->data_upload_reserved17;}
	 function getdata_upload_reserved18(){ return $this->data_upload_reserved18;}
	 function getdata_upload_reserved19(){ return $this->data_upload_reserved19;}
	 function getdata_upload_reserved20(){ return $this->data_upload_reserved20;}

	//SETTER METHOD CREATION..!
	 function setdata_upload_slno(){ return $this->data_upload_slno;}
	 function setdata_upload_temp_slno(){ return $this->data_upload_temp_slno;}
	 function setdata_upload_title(){ return $this->data_upload_title;}
	 function setdata_upload_url(){ return $this->data_upload_url;}
	 function setdata_upload_reserved1(){ return $this->data_upload_reserved1;}
	 function setdata_upload_reserved2(){ return $this->data_upload_reserved2;}
	 function setdata_upload_reserved3(){ return $this->data_upload_reserved3;}
	 function setdata_upload_reserved4(){ return $this->data_upload_reserved4;}
	 function setdata_upload_reserved5(){ return $this->data_upload_reserved5;}
	 function setdata_upload_reserved6(){ return $this->data_upload_reserved6;}
	 function setdata_upload_reserved7(){ return $this->data_upload_reserved7;}
	 function setdata_upload_reserved8(){ return $this->data_upload_reserved8;}
	 function setdata_upload_reserved9(){ return $this->data_upload_reserved9;}
	 function setdata_upload_reserved10(){ return $this->data_upload_reserved10;}
	 function setdata_upload_reserved11(){ return $this->data_upload_reserved11;}
	 function setdata_upload_reserved12(){ return $this->data_upload_reserved12;}
	 function setdata_upload_reserved13(){ return $this->data_upload_reserved13;}
	 function setdata_upload_reserved14(){ return $this->data_upload_reserved14;}
	 function setdata_upload_reserved15(){ return $this->data_upload_reserved15;}
	 function setdata_upload_reserved16(){ return $this->data_upload_reserved16;}
	 function setdata_upload_reserved17(){ return $this->data_upload_reserved17;}
	 function setdata_upload_reserved18(){ return $this->data_upload_reserved18;}
	 function setdata_upload_reserved19(){ return $this->data_upload_reserved19;}
	 function setdata_upload_reserved20(){ return $this->data_upload_reserved20;}


	function select($id)
	{$sql="SELECT * from data_template_upload WHERE data_upload_slno=$id";
	$result =$this->database->query($sql);
	$result =$this->database->result;
	$row=mysqli_fetch_object($result);

	$this->data_upload_slno=$row->data_upload_slno;
	$this->data_upload_temp_slno=$row->data_upload_temp_slno;
	$this->data_upload_title=$row->data_upload_title;
	$this->data_upload_url=$row->data_upload_url;
	$this->data_upload_reserved1=$row->data_upload_reserved1;
	$this->data_upload_reserved2=$row->data_upload_reserved2;
	$this->data_upload_reserved3=$row->data_upload_reserved3;
	$this->data_upload_reserved4=$row->data_upload_reserved4;
	$this->data_upload_reserved5=$row->data_upload_reserved5;
	$this->data_upload_reserved6=$row->data_upload_reserved6;
	$this->data_upload_reserved7=$row->data_upload_reserved7;
	$this->data_upload_reserved8=$row->data_upload_reserved8;
	$this->data_upload_reserved9=$row->data_upload_reserved9;
	$this->data_upload_reserved10=$row->data_upload_reserved10;
	$this->data_upload_reserved11=$row->data_upload_reserved11;
	$this->data_upload_reserved12=$row->data_upload_reserved12;
	$this->data_upload_reserved13=$row->data_upload_reserved13;
	$this->data_upload_reserved14=$row->data_upload_reserved14;
	$this->data_upload_reserved15=$row->data_upload_reserved15;
	$this->data_upload_reserved16=$row->data_upload_reserved16;
	$this->data_upload_reserved17=$row->data_upload_reserved17;
	$this->data_upload_reserved18=$row->data_upload_reserved18;
	$this->data_upload_reserved19=$row->data_upload_reserved19;
	$this->data_upload_reserved20=$row->data_upload_reserved20;}

  //Display function
  function selectDisplay()
  {$sql="SELECT * from data_template_upload";
  $result =$this->database->query($sql);
  $result =$this->database->result;
  while($row=mysqli_fetch_array($result)) {

    echo '<tr>
    <th scope="row">'. $row["data_upload_slno"].'</th>
    <td>'.$row["data_upload_temp_slno"].'</td>
    <td>'.$row["data_upload_title"].'</td>
    <td>'.$row["data_upload_url"].'</td>
    <td>'.$row["data_upload_reserved1"].'</td>
    <td>'.$row["data_upload_reserved2"].'</td>
    <td>'.$row["data_upload_reserved3"].'</td>
    <td>'.$row["data_upload_reserved4"].'</td>
    <td>'.$row["data_upload_reserved5"].'</td>
    <td>'.$row["data_upload_reserved6"].'</td>
    <td>'.$row["data_upload_reserved7"].'</td>
    <td>'.$row["data_upload_reserved8"].'</td>
    <td>'.$row["data_upload_reserved9"].'</td>
    <td>'.$row["data_upload_reserved10"].'</td>
    <td>'.$row["data_upload_reserved11"].'</td>
    <td>'.$row["data_upload_reserved12"].'</td>
    <td>'.$row["data_upload_reserved13"].'</td>
    <td>'.$row["data_upload_reserved14"].'</td>
    <td>'.$row["data_upload_reserved15"].'</td>
    <td>'.$row["data_upload_reserved16"].'</td>
    <td>'.$row["data_upload_reserved17"].'</td>
    <td>'.$row["data_upload_reserved18"].'</td>
    <td>'.$row["data_upload_reserved19"].'</td>
    <td>'.$row["data_upload_reserved20"].'</td>
    <td><a class="btn btn-primary" href="data_template_uploadEditForm.php?data_upload_slno='.$row["data_upload_slno"].'">Edit</a></td>
    </tr>';
    }}

	function insert()
	{ $sql="INSERT INTO data_template_upload(data_upload_slno,data_upload_temp_slno,data_upload_title,data_upload_url,data_upload_reserved1,data_upload_reserved2,data_upload_reserved3,data_upload_reserved4,data_upload_reserved5,data_upload_reserved6,data_upload_reserved7,data_upload_reserved8,data_upload_reserved9,data_upload_reserved10,data_upload_reserved11,data_upload_reserved12,data_upload_reserved13,data_upload_reserved14,data_upload_reserved15,data_upload_reserved16,data_upload_reserved17,data_upload_reserved18,data_upload_reserved19,data_upload_reserved20) VALUES ('$this->data_upload_slno','$this->data_upload_temp_slno','$this->data_upload_title','$this->data_upload_url','$this->data_upload_reserved1','$this->data_upload_reserved2','$this->data_upload_reserved3','$this->data_upload_reserved4','$this->data_upload_reserved5','$this->data_upload_reserved6','$this->data_upload_reserved7','$this->data_upload_reserved8','$this->data_upload_reserved9','$this->data_upload_reserved10','$this->data_upload_reserved11','$this->data_upload_reserved12','$this->data_upload_reserved13','$this->data_upload_reserved14','$this->data_upload_reserved15','$this->data_upload_reserved16','$this->data_upload_reserved17','$this->data_upload_reserved18','$this->data_upload_reserved19','$this->data_upload_reserved20')";
	  $result=$this->database->query($sql);}

	function update($id)
	{ $sql="UPDATE data_template_upload SET data_upload_temp_slno='$this->data_upload_temp_slno',data_upload_title='$this->data_upload_title',data_upload_url='$this->data_upload_url',data_upload_reserved1='$this->data_upload_reserved1',data_upload_reserved2='$this->data_upload_reserved2',data_upload_reserved3='$this->data_upload_reserved3',data_upload_reserved4='$this->data_upload_reserved4',data_upload_reserved5='$this->data_upload_reserved5',data_upload_reserved6='$this->data_upload_reserved6',data_upload_reserved7='$this->data_upload_reserved7',data_upload_reserved8='$this->data_upload_reserved8',data_upload_reserved9='$this->data_upload_reserved9',data_upload_reserved10='$this->data_upload_reserved10',data_upload_reserved11='$this->data_upload_reserved11',data_upload_reserved12='$this->data_upload_reserved12',data_upload_reserved13='$this->data_upload_reserved13',data_upload_reserved14='$this->data_upload_reserved14',data_upload_reserved15='$this->data_upload_reserved15',data_upload_reserved16='$this->data_upload_reserved16',data_upload_reserved17='$this->data_upload_reserved17',data_upload_reserved18='$this->data_upload_reserved18',data_upload_reserved19='$this->data_upload_reserved19',data_upload_reserved20='$this->data_upload_reserved20' Where data_upload_slno=$id";
	 $result =$this->database->query($sql);}


	function delete($id)
	{$sql="DELETE from data_template_upload WHERE data_upload_slno=$id";$result =$this->database->query($sql);}

	 function Search($data_upload_slno1)
	{
		$sql="SELECT * FROM data_template_upload WHERE data_upload_slno='".$data_upload_slno1."'";
		$result=$this->database->query($sql);
		$result =$this->database->result;
		 while($record=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
		echo "<br> ".$record['data_upload_slno'];
		echo "<br> ".$record['data_upload_temp_slno'];
		echo "<br> ".$record['data_upload_title'];
		echo "<br> ".$record['data_upload_url'];
		echo "<br> ".$record['data_upload_reserved1'];
		echo "<br> ".$record['data_upload_reserved2'];
		echo "<br> ".$record['data_upload_reserved3'];
		echo "<br> ".$record['data_upload_reserved4'];
		echo "<br> ".$record['data_upload_reserved5'];
		echo "<br> ".$record['data_upload_reserved6'];
		echo "<br> ".$record['data_upload_reserved7'];
		echo "<br> ".$record['data_upload_reserved8'];
		echo "<br> ".$record['data_upload_reserved9'];
		echo "<br> ".$record['data_upload_reserved10'];
		echo "<br> ".$record['data_upload_reserved11'];
		echo "<br> ".$record['data_upload_reserved12'];
		echo "<br> ".$record['data_upload_reserved13'];
		echo "<br> ".$record['data_upload_reserved14'];
		echo "<br> ".$record['data_upload_reserved15'];
		echo "<br> ".$record['data_upload_reserved16'];
		echo "<br> ".$record['data_upload_reserved17'];
		echo "<br> ".$record['data_upload_reserved18'];
		echo "<br> ".$record['data_upload_reserved19'];
		echo "<br> ".$record['data_upload_reserved20'];

		 } //end of while
	}// will do it??
}
 ?>
