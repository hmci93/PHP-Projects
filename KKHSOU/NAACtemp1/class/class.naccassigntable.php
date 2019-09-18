<?php
 include_once("class.database.php");

 class naccassigntable{

	//VARIABLE DECLARATION
	 var $naac_slno;
	 var $naac_EmpId;
	 var $naac_crite_slno;
	 var $naac_metric_slno;
	 var $naac_metric_block;
	 var $naac_metric_reserved1;
	 var $naac_metric_reserved2;
	 var $naac_metric_reserved3;
	 var $naac_metric_reserved4;
	 var $naac_metric_reserved5;
	 var $naac_metric_reserved6;
	 var $naac_metric_reserved7;
	 var $naac_metric_reserved8;
	 var $naac_metric_reserved9;
	 var $naac_metric_reserved10;
	 var $naac_metric_reserved11;
	 var $naac_metric_reserved12;
	 var $naac_metric_reserved13;
	 var $naac_metric_reserved14;
	 var $naac_metric_reserved15;
	 var $naac_metric_reserved16;
	 var $naac_metric_reserved17;
	 var $naac_metric_reserved18;
	 var $naac_metric_reserved19;
	 var $naac_metric_reserved20;
	 var $database;

	 //CONSTRUCTOR CREATED
	function naccassigntable(){$this->database = new Database();}

	//GETTER METHOD CREATION....!
	 function getnaac_slno(){ return $this->naac_slno;}
	 function getnaac_EmpId(){ return $this->naac_EmpId;}
	 function getnaac_crite_slno(){ return $this->naac_crite_slno;}
	 function getnaac_metric_slno(){ return $this->naac_metric_slno;}
	 function getnaac_metric_block(){ return $this->naac_metric_block;}
	 function getnaac_metric_reserved1(){ return $this->naac_metric_reserved1;}
	 function getnaac_metric_reserved2(){ return $this->naac_metric_reserved2;}
	 function getnaac_metric_reserved3(){ return $this->naac_metric_reserved3;}
	 function getnaac_metric_reserved4(){ return $this->naac_metric_reserved4;}
	 function getnaac_metric_reserved5(){ return $this->naac_metric_reserved5;}
	 function getnaac_metric_reserved6(){ return $this->naac_metric_reserved6;}
	 function getnaac_metric_reserved7(){ return $this->naac_metric_reserved7;}
	 function getnaac_metric_reserved8(){ return $this->naac_metric_reserved8;}
	 function getnaac_metric_reserved9(){ return $this->naac_metric_reserved9;}
	 function getnaac_metric_reserved10(){ return $this->naac_metric_reserved10;}
	 function getnaac_metric_reserved11(){ return $this->naac_metric_reserved11;}
	 function getnaac_metric_reserved12(){ return $this->naac_metric_reserved12;}
	 function getnaac_metric_reserved13(){ return $this->naac_metric_reserved13;}
	 function getnaac_metric_reserved14(){ return $this->naac_metric_reserved14;}
	 function getnaac_metric_reserved15(){ return $this->naac_metric_reserved15;}
	 function getnaac_metric_reserved16(){ return $this->naac_metric_reserved16;}
	 function getnaac_metric_reserved17(){ return $this->naac_metric_reserved17;}
	 function getnaac_metric_reserved18(){ return $this->naac_metric_reserved18;}
	 function getnaac_metric_reserved19(){ return $this->naac_metric_reserved19;}
	 function getnaac_metric_reserved20(){ return $this->naac_metric_reserved20;}

	//SETTER METHOD CREATION..!
	 function setnaac_slno(){ return $this->naac_slno;}
	 function setnaac_EmpId(){ return $this->naac_EmpId;}
	 function setnaac_crite_slno(){ return $this->naac_crite_slno;}
	 function setnaac_metric_slno(){ return $this->naac_metric_slno;}
	 function setnaac_metric_block(){ return $this->naac_metric_block;}
	 function setnaac_metric_reserved1(){ return $this->naac_metric_reserved1;}
	 function setnaac_metric_reserved2(){ return $this->naac_metric_reserved2;}
	 function setnaac_metric_reserved3(){ return $this->naac_metric_reserved3;}
	 function setnaac_metric_reserved4(){ return $this->naac_metric_reserved4;}
	 function setnaac_metric_reserved5(){ return $this->naac_metric_reserved5;}
	 function setnaac_metric_reserved6(){ return $this->naac_metric_reserved6;}
	 function setnaac_metric_reserved7(){ return $this->naac_metric_reserved7;}
	 function setnaac_metric_reserved8(){ return $this->naac_metric_reserved8;}
	 function setnaac_metric_reserved9(){ return $this->naac_metric_reserved9;}
	 function setnaac_metric_reserved10(){ return $this->naac_metric_reserved10;}
	 function setnaac_metric_reserved11(){ return $this->naac_metric_reserved11;}
	 function setnaac_metric_reserved12(){ return $this->naac_metric_reserved12;}
	 function setnaac_metric_reserved13(){ return $this->naac_metric_reserved13;}
	 function setnaac_metric_reserved14(){ return $this->naac_metric_reserved14;}
	 function setnaac_metric_reserved15(){ return $this->naac_metric_reserved15;}
	 function setnaac_metric_reserved16(){ return $this->naac_metric_reserved16;}
	 function setnaac_metric_reserved17(){ return $this->naac_metric_reserved17;}
	 function setnaac_metric_reserved18(){ return $this->naac_metric_reserved18;}
	 function setnaac_metric_reserved19(){ return $this->naac_metric_reserved19;}
	 function setnaac_metric_reserved20(){ return $this->naac_metric_reserved20;}


	function select($id)
	{$sql="SELECT * from naccassigntable WHERE naac_slno=$id";
	$result =$this->database->query($sql);
	$result =$this->database->result;
	$row=mysqli_fetch_object($result);

	$this->naac_slno=$row->naac_slno;
	$this->naac_EmpId=$row->naac_EmpId;
	$this->naac_crite_slno=$row->naac_crite_slno;
	$this->naac_metric_slno=$row->naac_metric_slno;
	$this->naac_metric_block=$row->naac_metric_block;
	$this->naac_metric_reserved1=$row->naac_metric_reserved1;
	$this->naac_metric_reserved2=$row->naac_metric_reserved2;
	$this->naac_metric_reserved3=$row->naac_metric_reserved3;
	$this->naac_metric_reserved4=$row->naac_metric_reserved4;
	$this->naac_metric_reserved5=$row->naac_metric_reserved5;
	$this->naac_metric_reserved6=$row->naac_metric_reserved6;
	$this->naac_metric_reserved7=$row->naac_metric_reserved7;
	$this->naac_metric_reserved8=$row->naac_metric_reserved8;
	$this->naac_metric_reserved9=$row->naac_metric_reserved9;
	$this->naac_metric_reserved10=$row->naac_metric_reserved10;
	$this->naac_metric_reserved11=$row->naac_metric_reserved11;
	$this->naac_metric_reserved12=$row->naac_metric_reserved12;
	$this->naac_metric_reserved13=$row->naac_metric_reserved13;
	$this->naac_metric_reserved14=$row->naac_metric_reserved14;
	$this->naac_metric_reserved15=$row->naac_metric_reserved15;
	$this->naac_metric_reserved16=$row->naac_metric_reserved16;
	$this->naac_metric_reserved17=$row->naac_metric_reserved17;
	$this->naac_metric_reserved18=$row->naac_metric_reserved18;
	$this->naac_metric_reserved19=$row->naac_metric_reserved19;
	$this->naac_metric_reserved20=$row->naac_metric_reserved20;}

  //Display function
  function selectDisplay()
  {$sql="SELECT * from naccassigntable";
  $result =$this->database->query($sql);
  $result =$this->database->result;
  while($row=mysqli_fetch_array($result)) {

    echo '<tr>
    <td>'.$row["naac_EmpId"].'</td>
    <td>'.$row["naac_crite_slno"].'</td>
    <td>'.$row["naac_metric_reserved1"].'</td>
    <td>'.$row["naac_metric_slno"].'</td>
    <td>'.$row["naac_metric_block"].'</td>
    <td><a class="btn btn-primary" href="../ui/adminEditDisplayFormat.php?naac_slno_m='.$row["naac_slno"].'&naac_user='.$row["naac_EmpId"].'">Allocate/De-allocate Metrics</a></td>
    <td><a class="btn btn-primary" href="../ui/adminEditDisplayFormat.php?naac_slno_k='.$row["naac_slno"].'&naac_user='.$row["naac_EmpId"].'">Allocate/De-allocate Key Indicator</a></td>
    <td><a class="btn btn-primary" href="../ui/adminEditDisplayFormat.php?naac_slno_c='.$row["naac_slno"].'&naac_user='.$row["naac_EmpId"].'">Allocate/De-allocate Criteria</a></td>
    </tr>';
    }}

    function empl_check($user)
    {
      $sql = "SELECT `naac_EmpId` FROM naccassigntable WHERE `naac_EmpId` = $user";
      $result =$this->database->query($sql);
      $result =$this->database->result;
      return mysqli_num_rows($result);
      // echo $check;
    }

    function getOldMetric($user) {
      $sql = "SELECT `naac_metric_slno` FROM naccassigntable WHERE `naac_EmpId` = $user";
      $result =$this->database->query($sql);
      $result =$this->database->result;
      $row=mysqli_fetch_array($result);
      return $row['naac_metric_slno'];
    }

    function getOldCriteria($user) {
      $sql = "SELECT `naac_crite_slno` FROM naccassigntable WHERE `naac_EmpId` = $user";
      $result =$this->database->query($sql);
      $result =$this->database->result;
      $row=mysqli_fetch_array($result);
      return $row['naac_crite_slno'];
    }

    function getOldKeyIndicator($user) {
      $sql = "SELECT `naac_metric_reserved1` FROM naccassigntable WHERE `naac_EmpId` = $user";
      $result =$this->database->query($sql);
      $result =$this->database->result;
      $row=mysqli_fetch_array($result);
      return $row['naac_metric_reserved1'];
    }

	function insert()
	{ $sql="INSERT INTO naccassigntable(naac_EmpId,naac_crite_slno,naac_metric_slno,naac_metric_reserved1) VALUES ('$this->naac_EmpId','$this->naac_crite_slno','$this->naac_metric_slno','$this->naac_metric_reserved1')";
	  $result=$this->database->query($sql);}

	function update($id)
	{ $sql="UPDATE naccassigntable SET naac_EmpId='$this->naac_EmpId',naac_crite_slno='$this->naac_crite_slno',naac_metric_slno='$this->naac_metric_slno',naac_metric_reserved1='$this->naac_metric_reserved1' Where naac_EmpId=$id";
	 $result =$this->database->query($sql);}

   function update1($naac_slno2)
 	{ $sql="UPDATE naccassigntable SET naac_metric_slno='$this->naac_metric_slno' Where naac_slno=$naac_slno2";
 	 $result =$this->database->query($sql);}

   function update2($naac_slno3)
 	{ $sql="UPDATE naccassigntable SET naac_metric_reserved1='$this->naac_metric_reserved1' Where naac_slno=$naac_slno3";
 	 $result =$this->database->query($sql);}

   function update3($naac_slno4)
 	{ $sql="UPDATE naccassigntable SET naac_crite_slno='$this->naac_crite_slno' Where naac_slno=$naac_slno4";
 	 $result =$this->database->query($sql);}

	function delete($id)
	{$sql="DELETE from naccassigntable WHERE naac_slno=$id";$result =$this->database->query($sql);}

	 function Search($naac_slno1)
	{
		$sql="SELECT * FROM naccassigntable WHERE naac_slno='".$naac_slno1."'";
		$result=$this->database->query($sql);
		$result =$this->database->result;
		 while($record=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
		echo "<br> ".$record['naac_slno'];
		echo "<br> ".$record['naac_EmpId'];
		echo "<br> ".$record['naac_crite_slno'];
		echo "<br> ".$record['naac_metric_slno'];
		echo "<br> ".$record['naac_metric_block'];
		echo "<br> ".$record['naac_metric_reserved1'];
		echo "<br> ".$record['naac_metric_reserved2'];
		echo "<br> ".$record['naac_metric_reserved3'];
		echo "<br> ".$record['naac_metric_reserved4'];
		echo "<br> ".$record['naac_metric_reserved5'];
		echo "<br> ".$record['naac_metric_reserved6'];
		echo "<br> ".$record['naac_metric_reserved7'];
		echo "<br> ".$record['naac_metric_reserved8'];
		echo "<br> ".$record['naac_metric_reserved9'];
		echo "<br> ".$record['naac_metric_reserved10'];
		echo "<br> ".$record['naac_metric_reserved11'];
		echo "<br> ".$record['naac_metric_reserved12'];
		echo "<br> ".$record['naac_metric_reserved13'];
		echo "<br> ".$record['naac_metric_reserved14'];
		echo "<br> ".$record['naac_metric_reserved15'];
		echo "<br> ".$record['naac_metric_reserved16'];
		echo "<br> ".$record['naac_metric_reserved17'];
		echo "<br> ".$record['naac_metric_reserved18'];
		echo "<br> ".$record['naac_metric_reserved19'];
		echo "<br> ".$record['naac_metric_reserved20'];

		 } //end of while
	}// will do it??


}
 ?>
