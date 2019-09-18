<?php
 include_once("class.database.php");

 class RegList{

	//VARIABLE DECLARATION
	 var $RecId;
	 var $RegNo;
	 var $Name;
	 var $FatherName;
	 var $MotherName;
	 var $StudyCentreCode;
	 var $Course;
	 var $Stream;
	 var $Sex;
	 var $DOB;
	 var $Caste;
	 var $Medium;
	 var $Subjects;
	 var $ProfImageName;
	 var $address;
	 var $villtown;
	 var $district;
	 var $policestation;
	 var $postoffice;
	 var $pin;
	 var $loginuserid;
	 var $password;
	 var $blockstatus;
	 var $reserved1;//mobile
	 var $reserved2;//email
	 var $reserved3;// First Access Time and Date Record
	 var $reserved4;
	 var $reserved5;//Adhaar Card Etc
	 var $reserved6;
	 var $reserved7;
	 var $reserved8;
	 var $reserved9;
	 var $reserved10;
	 var $reserved11;
	 var $reserved12;
	 var $reserved13;
	 var $reserved14;
	 var $reserved15;
	 var $reserved16;
	 var $reserved17;
	 var $reserved18;
	 var $reserved19;
	 var $reserved20;
	 var $database;

	 //CONSTRUCTOR CREATED
	function RegList(){$this->database = new Database();}

	//GETTER METHOD CREATION....!
	 function getRecId(){ return $this->RecId;}
	 function getRegNo(){ return $this->RegNo;}
	 function getName(){ return $this->Name;}
	 function getFatherName(){ return $this->FatherName;}
	 function getMotherName(){ return $this->MotherName;}
	 function getStudyCentreCode(){ return $this->StudyCentreCode;}
	 function getCourse(){ return $this->Course;}
	 function getStream(){ return $this->Stream;}
	 function getSex(){ return $this->Sex;}
	 function getDOB(){ return $this->DOB;}
	 function getCaste(){ return $this->Caste;}
	 function getMedium(){ return $this->Medium;}
	 function getSubjects(){ return $this->Subjects;}
	 function getProfImageName(){ return $this->ProfImageName;}
	 function getaddress(){ return $this->address;}
	 function getvilltown(){ return $this->villtown;}
	 function getdistrict(){ return $this->district;}
	 function getpolicestation(){ return $this->policestation;}
	 function getpostoffice(){ return $this->postoffice;}
	 function getpin(){ return $this->pin;}
	 function getloginuserid(){ return $this->loginuserid;}
	 function getpassword(){ return $this->password;}
	 function getblockstatus(){ return $this->blockstatus;}
	 function getreserved1(){ return $this->reserved1;}
	 function getreserved2(){ return $this->reserved2;}
	 function getreserved3(){ return $this->reserved3;}
	 function getreserved4(){ return $this->reserved4;}
	 function getreserved5(){ return $this->reserved5;}
	 function getreserved6(){ return $this->reserved6;}
	 function getreserved7(){ return $this->reserved7;}
	 function getreserved8(){ return $this->reserved8;}
	 function getreserved9(){ return $this->reserved9;}
	 function getreserved10(){ return $this->reserved10;}
	 function getreserved11(){ return $this->reserved11;}
	 function getreserved12(){ return $this->reserved12;}
	 function getreserved13(){ return $this->reserved13;}
	 function getreserved14(){ return $this->reserved14;}
	 function getreserved15(){ return $this->reserved15;}
	 function getreserved16(){ return $this->reserved16;}
	 function getreserved17(){ return $this->reserved17;}
	 function getreserved18(){ return $this->reserved18;}
	 function getreserved19(){ return $this->reserved19;}
	 function getreserved20(){ return $this->reserved20;}

	//SETTER METHOD CREATION..!
	 function setRecId($RecId_p){ $this->RecId=$RecId_p;}
	 function setRegNo($RegNo_p){ $this->RegNo=$RegNo_p;}
	 function setName($Name_p){ $this->Name=$Name_p;}
	 function setFatherName($FatherName_p){ $this->FatherName=$FatherName_p;}
	 function setMotherName($MotherName_p){ $this->MotherName=$MotherName_p;}
	 function setStudyCentreCode($StudyCentreCode_p){ $this->StudyCentreCode=$StudyCentreCode_p;}
	 function setCourse($Course_p){ $this->Course=$Course_p;}
	 function setStream($Stream_p){ $this->Stream=$Stream_p;}
	 function setSex($Sex_p){ $this->Sex=$Sex_p;}
	 function setDOB($DOB_p){ $this->DOB=$DOB_p;}
	 function setCaste($Caste_p){ $this->Caste=$Caste_p;}
	 function setMedium($Medium_p){ $this->Medium=$Medium_p;}
	 function setSubjects($Subjects_p){ $this->Subjects=$Subjects_p;}
	 function setProfImageName($ProfImageName_p){ $this->ProfImageName=$ProfImageName_p;}
	 function setaddress($address_p){ $this->address=$address_p;}
	 function setvilltown($villtown_p){ $this->villtown=$villtown_p;}
	 function setdistrict($district_p){ $this->district=$district_p;}
	 function setpolicestation($policestation_p){ $this->policestation=$policestation_p;}
	 function setpostoffice($postoffice_p){ $this->postoffice=$postoffice_p;}
	 function setpin($pin_p){ $this->pin=$pin_p;}
	 function setloginuserid($loginuserid_p){ $this->loginuserid=$loginuserid_p;}
	 function setpassword($password_p){ $this->password=$password_p;}
	 function setblockstatus($blockstatus_p){ $this->blockstatus=$blockstatus_p;}
	 function setreserved1($reserved1_p){ $this->reserved1=$reserved1_p;}
	 function setreserved2($reserved2_p){ $this->reserved2=$reserved2_p;}
	 function setreserved3($reserved3_p){ $this->reserved3=$reserved3_p;}
	 function setreserved4($reserved4_p){ $this->reserved4=$reserved4_p;}
	 function setreserved5($reserved5_p){ $this->reserved5=$reserved5_p;}
	 function setreserved6($reserved6_p){ $this->reserved6=$reserved6_p;}
	 function setreserved7($reserved7_p){ $this->reserved7=$reserved7_p;}
	 function setreserved8($reserved8_p){ $this->reserved8=$reserved8_p;}
	 function setreserved9($reserved9_p){ $this->reserved9=$reserved9_p;}
	 function setreserved10($reserved10_p){ $this->reserved10=$reserved10_p;}
	 function setreserved11($reserved11_p){ $this->reserved11=$reserved11_p;}
	 function setreserved12($reserved12_p){ $this->reserved12=$reserved12_p;}
	 function setreserved13($reserved13_p){ $this->reserved13=$reserved13_p;}
	 function setreserved14($reserved14_p){ $this->reserved14=$reserved14_p;}
	 function setreserved15($reserved15_p){ $this->reserved15=$reserved15_p;}
	 function setreserved16($reserved16_p){ $this->reserved16=$reserved16_p;}
	 function setreserved17($reserved17_p){ $this->reserved17=$reserved17_p;}
	 function setreserved18($reserved18_p){ $this->reserved18=$reserved18_p;}
	 function setreserved19($reserved19_p){ $this->reserved19=$reserved19_p;}
	 function setreserved20($reserved20_p){ $this->reserved20=$reserved20_p;}


	function select($yr,$rid)
	{
        $year=$yr."_RegList";
	$sql="SELECT * from ".$year." WHERE RegNo=$rid";
    	$result =$this->database->query($sql);
	$result =$this->database->result;
	$row=mysql_fetch_object($result);

	$this->RecId=$row->RecId;
	$this->RegNo=$row->RegNo;
	$this->Name=$row->Name;
	$this->FatherName=$row->FatherName;
	$this->MotherName=$row->MotherName;
	$this->StudyCentreCode=$row->StudyCentreCode;
	$this->Course=$row->Course;
	$this->Stream=$row->Stream;
	$this->Sex=$row->Sex;
	$this->DOB=$row->DOB;
	$this->Caste=$row->Caste;
	$this->Medium=$row->Medium;
	$this->Subjects=$row->Subjects;
	$this->ProfImageName=$row->ProfImageName;
	$this->address=$row->address;
	$this->villtown=$row->villtown;
	$this->district=$row->district;
	$this->policestation=$row->policestation;
	$this->postoffice=$row->postoffice;
	$this->pin=$row->pin;
	$this->loginuserid=$row->loginuserid;
	$this->password=$row->password;
	$this->blockstatus=$row->blockstatus;
	$this->reserved1=$row->reserved1;
	$this->reserved2=$row->reserved2;
	$this->reserved3=$row->reserved3;
	$this->reserved4=$row->reserved4;
	$this->reserved5=$row->reserved5;
	$this->reserved6=$row->reserved6;
	$this->reserved7=$row->reserved7;
	$this->reserved8=$row->reserved8;
	$this->reserved9=$row->reserved9;
	$this->reserved10=$row->reserved10;
	$this->reserved11=$row->reserved11;
	$this->reserved12=$row->reserved12;
	$this->reserved13=$row->reserved13;
	$this->reserved14=$row->reserved14;
	$this->reserved15=$row->reserved15;
	$this->reserved16=$row->reserved16;
	$this->reserved17=$row->reserved17;
	$this->reserved18=$row->reserved18;
	$this->reserved19=$row->reserved19;
	$this->reserved20=$row->reserved20;



         }
	function insert()
	{ $sql="INSERT INTO RegList(RecId,RegNo,Name,FatherName,MotherName,StudyCentreCode,Course,Stream,Sex,DOB,Caste,Medium,Subjects,ProfImageName,address,villtown,district,policestation,postoffice,pin,loginuserid,password,blockstatus,reserved1,reserved2,reserved3,reserved4,reserved5,reserved6,reserved7,reserved8,reserved9,reserved10,reserved11,reserved12,reserved13,reserved14,reserved15,reserved16,reserved17,reserved18,reserved19,reserved20) VALUES ('$this->RecId','$this->RegNo','$this->Name','$this->FatherName','$this->MotherName','$this->StudyCentreCode','$this->Course','$this->Stream','$this->Sex','$this->DOB','$this->Caste','$this->Medium','$this->Subjects','$this->ProfImageName','$this->address','$this->villtown','$this->district','$this->policestation','$this->postoffice','$this->pin','$this->loginuserid','$this->password','$this->blockstatus','$this->reserved1','$this->reserved2','$this->reserved3','$this->reserved4','$this->reserved5','$this->reserved6','$this->reserved7','$this->reserved8','$this->reserved9','$this->reserved10','$this->reserved11','$this->reserved12','$this->reserved13','$this->reserved14','$this->reserved15','$this->reserved16','$this->reserved17','$this->reserved18','$this->reserved19','$this->reserved20')";
	  $result=$this->database->query($sql);}

function UpdateInfAll($y,$p_mble,$p_email,$p_VillTown,$p_Landmark,$p_PO,$p_dist,$p_pin,$enroll)
{
  			$tbl=$y."_RegList";
			$sql="UPDATE $tbl SET address='".$p_Landmark."',reserved1=$p_mble,reserved2='".$p_email."',villtown='".$p_VillTown."',district='".$p_dist."',postoffice='".$p_PO."',pin='".$p_pin."' where RegNo='".$enroll."'";
			$result=$this->database->query($sql);
			$result=$this->database->result;

}


function insert2014()
	{
$sql="INSERT INTO 2014_RegList(RecId,RegNo,Name,FatherName,MotherName,StudyCentreCode,Course,Stream,Sex,DOB,Caste,Medium,Subjects,ProfImageName,address,villtown,district,policestation,postoffice,pin,loginuserid,password,blockstatus,reserved1,reserved2,reserved3,reserved4,reserved5,reserved6,reserved7,reserved8,reserved9,reserved10,reserved11,reserved12,reserved13,reserved14,reserved15,reserved16,reserved17,reserved18,reserved19,reserved20) VALUES ('$this->RecId','$this->RegNo','$this->Name','$this->FatherName','$this->MotherName','$this->StudyCentreCode','$this->Course','$this->Stream','$this->Sex','$this->DOB','$this->Caste','$this->Medium','$this->Subjects','$this->ProfImageName','$this->address','$this->villtown','$this->district','$this->policestation','$this->postoffice','$this->pin','$this->loginuserid','$this->password','$this->blockstatus','$this->reserved1','$this->reserved2','$this->reserved3','$this->reserved4','$this->reserved5','$this->reserved6','$this->reserved7','$this->reserved8','$this->reserved9','$this->reserved10','$this->reserved11','$this->reserved12','$this->reserved13','$this->reserved14','$this->reserved15','$this->reserved16','$this->reserved17','$this->reserved18','$this->reserved19','$this->reserved20')";
//echo $sql;
//echo "1111111111111111111111111111";
$result=$this->database->query($sql);
}
function CheckEnrollExistOrNot($RegNo1)
{
	 $sql="SELECT count(*) as total from 2014_RegList WHERE RegNo='".$RegNo1."'";
	//echo $sql;
	 $result =$this->database->query($sql);
	 $result =$this->database->result;
	 $row=mysql_fetch_array($result);
	 return $row['total'];
}
	function updateSTREAM($RegNo)
	{
	 $sql="UPDATE 2016_RegList SET Stream='$this->Stream' Where RegNo=$RegNo";
	// echo "<br> SQL ".$sql;
	 $result =$this->database->query($sql);
	}


	function update($id)
	{ $sql="UPDATE RegList SET RegNo='$this->RegNo',Name='$this->Name',FatherName='$this->FatherName',MotherName='$this->MotherName',StudyCentreCode='$this->StudyCentreCode',Course='$this->Course',Stream='$this->Stream',Sex='$this->Sex',DOB='$this->DOB',Caste='$this->Caste',Medium='$this->Medium',Subjects='$this->Subjects',ProfImageName='$this->ProfImageName',address='$this->address',villtown='$this->villtown',district='$this->district',policestation='$this->policestation',postoffice='$this->postoffice',pin='$this->pin',loginuserid='$this->loginuserid',password='$this->password',blockstatus='$this->blockstatus',reserved1='$this->reserved1',reserved2='$this->reserved2',reserved3='$this->reserved3',reserved4='$this->reserved4',reserved5='$this->reserved5',reserved6='$this->reserved6',reserved7='$this->reserved7',reserved8='$this->reserved8',reserved9='$this->reserved9',reserved10='$this->reserved10',reserved11='$this->reserved11',reserved12='$this->reserved12',reserved13='$this->reserved13',reserved14='$this->reserved14',reserved15='$this->reserved15',reserved16='$this->reserved16',reserved17='$this->reserved17',reserved18='$this->reserved18',reserved19='$this->reserved19',reserved20='$this->reserved20' Where RecId=$id";
	 $result =$this->database->query($sql);}


	function delete($id)
	{$sql="DELETE from RegList WHERE RecId=$id";$result =$this->database->query($sql);}


	 function GenerateUniquiId($prefix)
	{
	$sql="SELECT count(*) as total FROM 2016_RegList";
	$result=$this->database->query($sql);
	$result=$this->database->result;
	$record=mysql_fetch_array($result);
	$fname=date("dmyhmis");
	return $prefix.'_'.$fname.'_'.($record['total']+1);
	}
//StudyCentreCode,Course
	function GetInfoAll($tbl,$crse,$yr,$ccode)
	{

	 if($crse=="0" && $ccode!="0") // all courses but for "xyz" study centre
		  $sql="SELECT Course,count(*) as total FROM $tbl where StudyCentreCode=$ccode group by Course order by Course";
	  else 	 if($crse!="0" && $ccode=="0")//means all study centre but "xyz" course
			$sql="SELECT Course,count(*) as total FROM $tbl where Course='".$crse."' group by Course order by Course";
	 else
		if($crse!="0" && $ccode!="0")
			$sql="SELECT Course,count(*) as total FROM $tbl where Course='".$crse."' and StudyCentreCode=$ccode group by Course order by Course";
// means all course and all study centre
		else $sql="SELECT Course,count(*) as total FROM $tbl group by Course order by Course";


if($crse=="0") $crse="";
if($ccode=="0") $ccode="";
		//echo $sql."<br>";
		$result=$this->database->query($sql);
		$result=$this->database->result;
		echo "<table class=table border=1 width=80%><thead><th> Course Name </th><th> Total Numbers of Learners</th><th> Show Learners Lists</th></thead><tbody>";
		$sum=0;
		while($record=mysql_fetch_array($result))
		{
		$sum=$sum+$record['total'];
		if(!strlen($crse))//all courses
			$crse=$record['Course'];

		echo "<tr class=active><td>".$record['Course']."</td><td>".$record['total']."</td><td>
		<a href='ShowLearnersList.php?c=".$record['Course']."&y=$yr&ccode=$ccode' target='_blank'>Show ".$record['Course']." Learners Lists</a></td></tr>";
		}
		echo "</tbody></table>";
		echo "<hr><b><font color=blue>Total Learner for this year $sum </font></b>";
//		echo "Year:$yr, Course:$crse , Total ".$record['total'];
	}

function ShowLearnersLists($y,$crse,$ccode)
	{
		$tbl=$y."_RegList";
		//echo "<br> Strlength ".strlen($crse)." and ".strlen($ccode);
		if(!(strlen($crse)) && !(strlen($ccode))) // abc course & xyz study centre
			{
				$sql="SELECT * FROM $tbl order by RegNo";
				$msg="All Courses & Study Centres for year $y ";
			}
		else    if((strlen($crse)) && (strlen($ccode))) //all course & all study centre
			{
				$sql="SELECT * FROM $tbl where Course='".$crse."' and StudyCentreCode=$ccode order by RegNo";
				$msg="For Course $crse & Study Centre Code $ccode for year $y ";
			}
			else
				if((strlen($crse)) && !(strlen($ccode))) //all course & all study centre
				   {
					$sql="SELECT * FROM $tbl where Course='".$crse."' order by RegNo";
					$msg="For Course $crse & All Study Centres for year $y ";
				   }
				else
				if(!(strlen($crse)) && (strlen($ccode))) //all course & all study centre
					 {
						$sql="SELECT * FROM $tbl where StudyCentreCode=$ccode order by RegNo";
						$msg="For All Courses in Study Centre Code $ccode for year $y ";
					}
				else
					{ echo $sql="Error: "; return true;}



		$i=1;
		$result=$this->database->query($sql);
		$result=$this->database->result;
		echo "<lable id=prnt>";
		echo "<img src=../images/kkh1.png><font size=3px><b>".$msg."</b></font>";
		echo "<table border=1 class=table><thead bgcolor=lightgray><th>SlNo</th><th>Centre Code</th><th>RegNo</th><th>Name</th><th>Course (Stream)</th><th>Medium</th><th>Subjects</th><th>Date of Birth</th><th>Sex</th><th>Father Name</th><th>Mother Name</th><th>Caste</th></thead>";
		while($record=mysql_fetch_array($result))
			{
			$dob1=explode("/",$record['DOB']);
			$yr=substr($dob1[2], 0,4);
			echo "<tr><td>$i</td><td>".$record['StudyCentreCode']."</td><td>".$record['RegNo']."</td><td>".$record['Name']."</td><td>".$record['Course']."(".$record['Stream'].")</td><td>".$record['Medium']."</td><td>".$record['Subjects']."</td><td>".$dob1[1]."/".$dob1[0]."/".$yr."</td><td>".$record['Sex']."</td><td>".$record['FatherName']."</td><td>".$record['MotherName']."</td><td>".$record['Caste']."</td></tr>";
			$i=$i+1;

			}
		echo "</tbody></table></label><hr>";echo "<p align=right><input type=button value=print onclick=printDiv('prnt');>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";


	}
function GetInfoIndividual($tbl,$enrolOrName)
{
 //echo "$tbl,$enrolOrName";
		$sql="SELECT * FROM $tbl where Name like '".$enrolOrName."%' OR RegNo like '".$enrolOrName."%'";
//echo $sql;
		$result=$this->database->query($sql);
	  	$result=$this->database->result;
$i=1;
		echo "<table class=table>";
		while($record=mysql_fetch_array($result))
{

////FatherName,MotherName,Sex,DOB,Caste
 echo "<tr class=active><td colspan=6 align=center>LEARNER RECORD $i</td></tr>";
		echo "<tr><td><b>RegNo</b></td><td>".$record['RegNo']."</td><td><b>Name</b></td><td>".$record['Name']."</td><td><b>Course</b></td><td>".$record['Course']."</td></tr>";
echo "<tr><td><b>FatherName</b></td><td>".$record['FatherName']."</td><td><b>MotherName</b></td><td colspan=3>".$record['MotherName']."</td></tr>";
echo "<tr><td><b>Sex</b></td><td>".$record['Sex']."</td><td><b>DOB</b></td><td>".$record['DOB']."</td><td><b>Caste</b></td><td>".$record['Caste']."</td></tr>";
		echo "<tr><td><b>StudyCentreCode</b></td><td>".$record['StudyCentreCode']."</td><td><b>Subjects<b></td><td>".$record['Subjects']."</td><td><b>Medium</b></td><td>".$record['Medium']."</td></tr>";


$i=$i+1;
}
		echo "</table>";
}

function GetInfoAll4SLM($tbl,$crse,$yr,$ccode,$slmcode,$medium)
//function GetInfoAll4SLM($tbl,$crse,$yr,$slmcode,$medium)
	{
//echo "$tbl,$crse,$yr,$ccode,$slmcode,$medium";
		/*if($ccode=="0")
			$sql="SELECT * FROM $tbl where Course='".$crse."' and Medium='$medium'";
		else
			$sql="SELECT * FROM $tbl where Course='".$crse."' and StudyCentreCode='".$ccode."' and Medium='$medium'";
			*/
			$sql="SELECT StudyCentreCode,Course,Medium,count(*) as total  FROM $tbl where Course='".$crse."' and Medium='$medium' group by StudyCentreCode";
		//echo "BR>".$sql;
		$result=$this->database->query($sql);
		$result=$this->database->result;
		//$total=mysql_num_rows($result);
		$i=1;
		echo "<table class=table><thead><th>Centre Code</th><th>SLM CODE</th><th>Medium</th><th>Total</th></thead>";
		while($record=mysql_fetch_array($result))
		{
		echo "<tr><td> ".$record['StudyCentreCode']."</td><td>".$slmcode."</td><td>".$medium."</td><td>".$record['total']."</td></tr>";
		$i=$i+1;
		}
		echo "</table>";

/*

echo "<label id=p>";
echo "<img src=../images/kkh1.png><font size=3px><b>List of Learners with SLM CODE $slmcode For Course $crse</b></font> ";
		$i=1;
echo "<table border=1 class=table><thead bgcolor=lightgray><th>SlNo</th><th>Centre Code</th><th>RegNo</th><th>Name</th><th>Course</th><th>Medium</th><th>Subjects</th><th>Paper Searching</th></thead>";
		while($record=mysql_fetch_array($result))
		{
			$subject=$record['Subjects'];
			$slm_code=explode(",",$subject);

			foreach($slm_code as $pap)
	                          {
 			if(strcmp($pap,$slmcode)==0) //MEANS PAPER EXIST FOR THIS LEARNERS
					{
					 echo "<tr><td>$i</td><td>".$record['StudyCentreCode']."</td><td>".$record['RegNo']."</td><td>".$record['Name']."</td><td>".$record['Course']."</td><td>".$record['Medium']."</td><td>".$record['Subjects']."</td><td><b>".$pap."</b></td>";
					  $i=$i+1;
					 //  echo "[".$pap."=$slmcode ]";break;
					}
				   }

		}// end of while
		echo "</tbody></table></label><hr>";
		*/
echo "<p align=right><input type=button value=print onclick=printDiv('p');>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
	}

function ShowTotalStudentsYearWise($y,$centreCode)
	{
 		$tbl=$y."_RegList";
		$sql="SELECT count(*) as total FROM $tbl where StudyCentreCode='".$centreCode."'";

		$result=$this->database->query($sql);
		$result=$this->database->result;
		$record=mysql_fetch_array($result);
		return $record['total'];
	}
function ListOfCourses($y,$centreCode)
	{
 	$tbl=$y."_RegList";
		$sql="SELECT distinct(Course) FROM $tbl where StudyCentreCode='".$centreCode."'";

		$result=$this->database->query($sql);
 		$result=$this->database->result;
	 	while($record=mysql_fetch_array($result))
			{

				echo "\t\t <a href='ShowLearnersList.php?y=$y&c=".$record['Course']."&ccode=$centreCode'>".$record['Course']." ( ".$this->CountStudents($y,$centreCode,$record['Course']).") ,\t</a>";
//echo $record['Course']."22 <br>";

			}


	}


function CountStudents($y,$centreCode,$crse)
	{
		$tbl=$y."_RegList";
		$sql="SELECT count(*) as total FROM $tbl where StudyCentreCode='".$centreCode."' and Course='".$crse."'";
		$result=$this->database->query($sql);
		$result=$this->database->result;
		$record=mysql_fetch_array($result);

		return $record['total'];

	}


function ShowLearnersLists1($y,$crse,$ccode)
	{
		$tbl=$y."_RegList";
		//echo "<br> Strlength ".strlen($crse)." and ".strlen($ccode);
		if(!(strlen($crse)) && !(strlen($ccode))) // abc course & xyz study centre
			{
				$sql="SELECT * FROM $tbl order by RegNo";
				$msg="All Courses & Study Centres for year $y ";
			}
		else    if((strlen($crse)) && (strlen($ccode))) //all course & all study centre
			{
				$sql="SELECT * FROM $tbl where Course='".$crse."' and StudyCentreCode=$ccode order by RegNo";
				$msg="For Course $crse & Study Centre Code $ccode for year $y ";
			}
			else
				if((strlen($crse)) && !(strlen($ccode))) //all course & all study centre
				   {
					$sql="SELECT * FROM $tbl where Course='".$crse."' order by RegNo";
					$msg="For Course $crse & All Study Centres for year $y ";
				   }
				else
				if(!(strlen($crse)) && (strlen($ccode))) //all course & all study centre
					 {
						$sql="SELECT * FROM $tbl where StudyCentreCode=$ccode order by RegNo";
						$msg="For All Courses in Study Centre Code $ccode for year $y ";
					}
				else
					{ echo $sql="Error: "; return true;}



		$i=1;
		$result=$this->database->query($sql);
		$result=$this->database->result;
		echo "<lable id=prnt>";
		echo "<center><font color=blue><B>KRISHNA KANTA HANDIQUI STATE OPEN UNIVERSITY</B></font><HR>";
		echo "<table border=1 class=table><thead bgcolor=lightgray><th>SlNo</th><th>Centre Code</th><th>RegNo</th><th>Name</th> <th>Course (Stream)</th><th>Sex</th></thead>";
		while($record=mysql_fetch_array($result))
			{
			$dob1=explode("/",$record['DOB']);
			$yr=substr($dob1[2], 0,4);
			echo "<tr><td>$i</td><td>".$record['StudyCentreCode']."</td><td>".$record['RegNo']."</td><td>".$record['Name']."</td><td>".$record['Course']."(".$record['Stream'].")</td><td>".$record['Sex']."</td></tr>";
			$i=$i+1;

			}
		echo "</tbody></table></label><hr>";echo "<p>This is for information purpose only. In case you have any query please send us mail itcell@kkhsou.in</p></center>";


	}

	function LoginSuccess($eyr,$eno,$dob)
	{
			$tbl=$eyr."_RegList";
                        $dob2=$this->getStudentDob($eyr,$eno);
                        $date_a=date_create($dob2);
                        $dob2=date_format($date_a,"m/d/Y");
                        if($dob2===$dob)
                             {
                                $sql="SELECT * FROM $tbl where RegNo='".$eno."'";
                              }
                        else
                              {
                                return 0;

                              }

                     	//$sql="SELECT * FROM $tbl where RegNo='".$eno."' and DOB='".$dob3."'";
                        //echo "<script> alert('Database Date: ".$dob3." UserText Date: ".$dob." UserText Date3:".$dob3."')</script>";

 			$result=$this->database->query($sql);
			$result=$this->database->result;
			//$record=mysql_fetch_array($result);

			if(mysql_num_rows($result))
				 return 1;
			else
				 return 0;

	}



	function LoginSuccessByName($eyr,$eno,$name)
	{
		                $tbl=$eyr."_RegList";

                        if(!empty($name))
                             {
                                //$sql="SELECT * FROM $tbl where RegNo='".$eno."' and LOWER(Name)='".strtolower($name)."'";
                                $sql="SELECT * FROM $tbl where RegNo=$eno and LOWER(Replace(Name,' ',''))=(Replace('".strtolower($name)."',' ',''))";
                              }
                        else
                              {
                                return 0;

                              }

                     	//$sql="SELECT * FROM $tbl where RegNo='".$eno."' and DOB='".$dob3."'";
                        //echo "<script> alert('Database Date: ".$dob3." UserText Date: ".$dob." UserText Date3:".$dob3."')</script>";

 			$result=$this->database->query($sql);
			$result=$this->database->result;
			//$record=mysql_fetch_array($result);

			if(mysql_num_rows($result))
				 return 1;
			else
				 return 0;

	}


function UpdatePhoneEmail($mble,$eml,$enroll,$y)
{
			$tbl=$y."_RegList";
			$sql="UPDATE $tbl SET reserved1=$mble,reserved2=$eml where RegNo='".$enroll."'";
			$result=$this->database->query($sql);
			$result=$this->database->result;
}

	function GetLearnerInfoDetails($y,$eno)
	{
			$tbl=$y."_RegList";
			$sql="SELECT * FROM $tbl where RegNo='".$eno."'";
			$result=$this->database->query($sql);
			$result=$this->database->result;
			$record=mysql_fetch_array($result);

			echo "<table class=table>";
					echo "<tr>";
					echo "<td><b>Name:</b></td><td>".$record['Name']."</td>";
					echo "<td><b>Course: </b></td><td>".$record['Course']." (".$record['Stream'].")</td><td></td><td></td></tr>";
					echo "<tr><td><b>Sex: </b></td><td>".$record['Sex']."</td><td><b>Caste: </b></td><td>".$record['Caste']."</td><td><b>DOB:</b> </td><td>".$record['DOB']."</td></tr>";

					echo "<tr><td><b>Father Name: </b></td><td>".$record['FatherName']."</td><td><b>Mother Name:</b> </td><td>".$record['MotherName']."</td><td></td><td></td></tr>";

			echo "</table>";



	}

function GetLearnerInfoDetailsForMobile($y,$eno)
	{
			$tbl=$y."_RegList";
			$sql="SELECT * FROM $tbl where RegNo='".$eno."'";
			$result=$this->database->query($sql);
			$result=$this->database->result;
			$record=mysql_fetch_array($result);
			echo "<div class='col-lg-12'>";
					echo "<div class='row'>";
					echo "<div class='col-lg-2'><b>Name:</b></div><div class='col-lg-4'>".$record['Name']."</div>";
					echo "<div class='col-lg-2'><b>Course: </b></div><div class='col-lg-4'>".$record['Course']." (".$record['Stream'].")</div><hr style='border-top: 1px solid #DCDCDC;' ></div>";
					echo "<div class='row'><div class='col-lg-2'><b>Sex: </b></div><div class='col-lg-2'>".$record['Sex']."</div><div class='col-lg-2'><b>Caste: </b></div><div class='col-lg-2'>".$record['Caste']."</div><div class='col-lg-2'><b>DOB:</b></div><div class='col-lg-2'>".$record['DOB']."</div><hr style='border-top: 1px solid #DCDCDC;'></div>";

					echo "<div class='row'><div class='col-lg-2'><b>Father Name: </b></div><div class='col-lg-4'>".$record['FatherName']."</div><div class='col-lg-2'><b>Mother Name:</b> </div><div class='col-lg-4'>".$record['MotherName']."</div></div></div>";

			echo "";



	}


   function getStudentName($y,$eno)
          {

                        $tbl=$y."_RegList";
			$sql="SELECT * FROM $tbl where RegNo='".$eno."'";
			$result=$this->database->query($sql);
			$result=$this->database->result;
			$record=mysql_fetch_array($result);
                        return $record['Name'];

        }

  function getStudentDob($y,$eno)
          {

                        $tbl=$y."_RegList";
			$sql="SELECT * FROM $tbl where RegNo='".$eno."'";
			$result=$this->database->query($sql);
			$result=$this->database->result;
			$record=mysql_fetch_array($result);
                        return $record['DOB'];

        }


function getStudentCourse($y,$eno)
          {

                        $tbl=$y."_RegList";
			$sql="SELECT * FROM $tbl where RegNo='".$eno."'";
			$result=$this->database->query($sql);
			$result=$this->database->result;
			$record=mysql_fetch_array($result);

                        if($record['Course']=="BA.")
                               $record['Course']="BA";
                        else if($record['Course']=="MA.")
                                 $record['Course']="MA";
                        else if($record['Course']=="BCom.")
                                 $record['Course']="BCom";
                        else if($record['Course']=="BBA.")
                                 $record['Course']="BBA";
                        else if($record['Course']=="BCA."||$record['Course']=="BCAH")
                                 $record['Course']="BCA";
                        else
                               $record['Course']=$record['Course'];

                        return $record['Course'];

        }



function getStudentPhoto($y,$eno)
          {

                        $tbl=$y."_RegList";
			$sql="SELECT * FROM $tbl where RegNo='".$eno."'";
			$result=$this->database->query($sql);
			$result=$this->database->result;
			$record=mysql_fetch_array($result);
                        return $record['ProfImageName'];

        }


function getStudentEmail($y,$eno)
          {

                        $tbl=$y."_RegList";
			$sql="SELECT * FROM $tbl where RegNo='".$eno."'";
			$result=$this->database->query($sql);
			$result=$this->database->result;
			$record=mysql_fetch_array($result);
                        return $record['reserved2'];

        }

function getStudentPhone($y,$eno)
          {

                        $tbl=$y."_RegList";
			$sql="SELECT * FROM $tbl where RegNo='".$eno."'";
			$result=$this->database->query($sql);
			$result=$this->database->result;
			$record=mysql_fetch_array($result);
                        return $record['reserved1'];

        }












function UpdateAccountFirstLog($enroll,$y)
{
			$this->select($y,$enroll);
                        $tbl=$y."_RegList";
                        $timeDate=date("Y/m/d").",".date("h:i:sa");
                        if(empty($this->reserved3))
                        {
			$sql="UPDATE $tbl SET reserved3='".$timeDate."' where RegNo='".$enroll."'";
			$result=$this->database->query($sql);
			$result=$this->database->result;
                        }
}

function AccountRegistered($y)
{
                        $tbl=$y."_RegList";

			$sql="SELECT COUNT(*) As Total FROM $tbl WHERE reserved3 <> ''";
			$result=$this->database->query($sql);
			$result=$this->database->result;
                        $record=mysql_fetch_array($result);
                        return $record['Total'];

}



function UpdateDateOfBirth($enroll,$y,$dob,$fname,$mname,$name,$email)
{



                        $tbl=$y."_RegList";
			$sql="SELECT * FROM $tbl where RegNo='".$enroll."'";
			$result=$this->database->query($sql);
			$result=$this->database->result;
			$record=mysql_fetch_array($result);
                        $current_RegNo=$record['RegNo'];
                        $current_Name=preg_replace('/\s+/', '',$record['Name']);
                        $current_FName=preg_replace('/\s+/', '',$record['FatherName']);
                        $current_MName=preg_replace('/\s+/', '',$record['MotherName']);
                        $fname=preg_replace('/\s+/', '',strtoupper($fname));
                        $mname=preg_replace('/\s+/', '',strtoupper($mname));
                        $name=preg_replace('/\s+/', '',strtoupper($name));

                        $date_a=date_create($dob);
                        $dob=date_format($date_a,"m/d/Y");

                        /*echo "hellow";
                        echo $current_RegNo." ". $current_Name." ".$current_FName." ".$current_MName;
                        echo "\n".$enroll." ".$y." ".$dob." ".$fname." ".$mname." ".$name." ".$email;*/


                        if($current_RegNo===$enroll & $current_FName===$fname & $current_MName===$mname & $current_Name===$name)

                            {

			 $sql="UPDATE $tbl SET DOB='".$dob."' where RegNo='".$enroll."'";
			 $result=$this->database->query($sql);
			 $result=$this->database->result;
                         $to=$email;
                         $headers ="itcell@kkhsou.in";
                         $subject="Your DOB has been updated for Student Login Portal";
                         $txt=" \n As per your request we have updated your DOB at our Student Portal.\n Now you can login using Enrollment no and DOB.\n\n Thank you for mailing us.";
                         mail($to,$subject,$txt,$headers);
                          return 0;
                          }

                       else
                          {

                         $to=$email;
                         $headers ="itcell@kkhsou.in";
                         $subject="You personal data miss matched for Student Login Portal";
                         $txt=" \n As per your request we have checked your personal data in our database and found it to be incorrect.\n Please contact IT cell for help.\n\n Thank you for mailing us.";
                         mail($to,$subject,$txt,$headers);

                          return 1;
                          }
}



function checkIfLeanersDataIsEmpty($enrollment,$y)
	{
 	$tbl=$y."_RegList";
		$sql="SELECT * FROM $tbl where RegNo='".$enroll."'";
		$result=$this->database->query($sql);
 		$result=$this->database->result;
 		$record=mysql_fetch_array($result);

                $mobile=$record['reserved1'];
                $email=$record['reserved2'];
                $govtID=$record['reserved5'];
	 echo $mobile;
		/*if(empty($mobile))
		    {
		        echo "<script>alert('Please update your Mobile.');window.location.href ='PersonalInfo.php';</script>";
		    }
		else if(empty($email))
		    {
		         echo "<script>alert('Please update your Email .');window.location.href ='PersonalInfo.php';</script>";
		    }
		else if(empty($govtID))
		   {
		        echo "<script>alert('Please update your Govt ID.');window.location.href ='PersonalInfo.php';</script>";
		   }*/
	}



function my_simple_crypt( $string, $action = 'e' ) {
    // you may change these values to your own
    $secret_key = 'my_simple_secret_key';
    $secret_iv = 'my_simple_secret_iv';

    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );

    if( $action == 'X#1267' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'Y#1267' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }

    return $output;
  }






}
 ?>
