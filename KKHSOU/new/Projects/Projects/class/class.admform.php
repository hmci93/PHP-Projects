
<?php
class admform{
 //VARIABLE DECLARATION 
var $a1;
var $b1;
var $blk1;
var $blk2;
var $n1;
var $crsName;
var $cntrCode;
var $cntrName;
var $enrol;
var $name;
var $catSrtName;
var $catLngName;
var $comp;
var $sub1;
var $sub2;
var $sub3;
var $sub4;
var $sub5;
var $sub6;
var $sessNo;
var $crsCode;
var $pMcode;
var $adf_id;

function admform(){$this->database = new Database();}
//GETTER METHOD CREATION....!
function geta1(){ return $this->a1;}
function getb1(){ return $this->b1;}
function getblk1(){ return $this->blk1;}
function getblk2(){ return $this->blk2;}
function getn1(){ return $this->n1;}
function getcrsName(){ return $this->crsName;}
function getcntrCode(){ return $this->cntrCode;}
function getcntrName(){ return $this->cntrName;}
function getenrol(){ return $this->enrol;}
function getname(){ return $this->name;}
function getcatSrtName(){ return $this->catSrtName;}
function getcatLngName(){ return $this->catLngName;}
function getcomp(){ return $this->comp;}
function getsub1(){ return $this->sub1;}
function getsub2(){ return $this->sub2;}
function getsub3(){ return $this->sub3;}
function getsub4(){ return $this->sub4;}
function getsub5(){ return $this->sub5;}
function getsub6(){ return $this->sub6;}
function getsessNo(){ return $this->sessNo;}
function getcrsCode(){ return $this->crsCode;}
function getpMcode(){ return $this->pMcode;}
function getadf_id(){ return $this->adf_id;}
//SETTER METHOD CREATION..!
function seta1($a1_p){ return $this->a1;}
function setb1($b1_p){ return $this->b1;}
function setblk1($blk1_p){ return $this->blk1;}
function setblk2($blk2_p){ return $this->blk2;}
function setn1($n1_p){ return $this->n1;}
function setcrsName($crsName_p){ return $this->crsName;}
function setcntrCode($cntrCode_p){ return $this->cntrCode;}
function setcntrName($cntrName_p){ return $this->cntrName;}
function setenrol($enrol_p){ return $this->enrol;}
function setname($name_p){ return $this->name;}
function setcatSrtName($catSrtName_p){ return $this->catSrtName;}
function setcatLngName($catLngName_p){ return $this->catLngName;}
function setcomp($comp_p){ return $this->comp;}
function setsub1($sub1_p){ return $this->sub1;}
function setsub2($sub2_p){ return $this->sub2;}
function setsub3($sub3_p){ return $this->sub3;}
function setsub4($sub4_p){ return $this->sub4;}
function setsub5($sub5_p){ return $this->sub5;}
function setsub6($sub6_p){ return $this->sub6;}
function setsessNo($sessNo_p){ return $this->sessNo;}
function setcrsCode($crsCode_p){ return $this->crsCode;}
function setpMcode($pMcode_p){ return $this->pMcode;}
function setadf_id($adf_id_p){ return $this->adf_id;}
function select($id)
	{
 $servername=$this->database->host;
    $username=$this->database->user;
    $password=$this->database->password;
    $dbname=$this->database->database;
    $conn = new mysqli($servername, $username, $password, $dbname); 
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
          }        
$sql="SELECT * from admform WHERE adf_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();

	/*$result =$this->database->query($sql);
	$result =$this->database->result;*/
        $result=$stmt->get_result();
	$row=$result->fetch_object();
$this->a1=$row->a1;
$this->b1=$row->b1;
$this->blk1=$row->blk1;
$this->blk2=$row->blk2;
$this->n1=$row->n1;
$this->crsName=$row->crsName;
$this->cntrCode=$row->cntrCode;
$this->cntrName=$row->cntrName;
$this->enrol=$row->enrol;
$this->name=$row->name;
$this->catSrtName=$row->catSrtName;
$this->catLngName=$row->catLngName;
$this->comp=$row->comp;
$this->sub1=$row->sub1;
$this->sub2=$row->sub2;
$this->sub3=$row->sub3;
$this->sub4=$row->sub4;
$this->sub5=$row->sub5;
$this->sub6=$row->sub6;
$this->sessNo=$row->sessNo;
$this->crsCode=$row->crsCode;
$this->pMcode=$row->pMcode;
$this->adf_id=$row->adf_id;$stmt->close();
$conn->close();}
function insert()
{ 
    $servername=$this->database->host;
    $username=$this->database->user;
    $password=$this->database->password;
    $dbname=$this->database->database;
    $conn = new mysqli($servername, $username, $password, $dbname); 
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
          }
        
    $sql="INSERT INTO admform(a1,b1,blk1,blk2,n1,crsName,cntrCode,cntrName,enrol,name,catSrtName,catLngName,comp,sub1,sub2,sub3,sub4,sub5,sub6,sessNo,crsCode,pMcode,adf_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";$stmt = $conn->prepare($sql);$stmt->bind_param("issssssssssssssssssssss",$this->a1,$this->b1,$this->blk1,$this->blk2,$this->n1,$this->crsName,$this->cntrCode,$this->cntrName,$this->enrol,$this->name,$this->catSrtName,$this->catLngName,$this->comp,$this->sub1,$this->sub2,$this->sub3,$this->sub4,$this->sub5,$this->sub6,$this->sessNo,$this->crsCode,$this->pMcode,$this->adf_id);$stmt->execute();
    $stmt->close();
    $conn->close();
}
function update($id)
{ 
    $servername=$this->database->host;
    $username=$this->database->user;
    $password=$this->database->password;
    $dbname=$this->database->database;
    $conn = new mysqli($servername, $username, $password, $dbname); 
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
          }
        
    $sql="UPDATE admform SET b1=?,blk1=?,blk2=?,n1=?,crsName=?,cntrCode=?,cntrName=?,enrol=?,name=?,catSrtName=?,catLngName=?,comp=?,sub1=?,sub2=?,sub3=?,sub4=?,sub5=?,sub6=?,sessNo=?,crsCode=?,pMcode=?,adf_id=? Where adf_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssssssssssssssi",$this->b1,$this->blk1,$this->blk2,$this->n1,$this->crsName,$this->cntrCode,$this->cntrName,$this->enrol,$this->name,$this->catSrtName,$this->catLngName,$this->comp,$this->sub1,$this->sub2,$this->sub3,$this->sub4,$this->sub5,$this->sub6,$this->sessNo,$this->crsCode,$this->pMcode,$this->adf_id,$id);
$stmt->execute();
$stmt->close();
$conn->close();
}


 //Delete function--------------------------------

 function delete($id)
{ 
    $servername=$this->database->host;
    $username=$this->database->user;
    $password=$this->database->password;
    $dbname=$this->database->database;
    $conn = new mysqli($servername, $username, $password, $dbname); 
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
          }
        
    $sql="DELETE from admform WHERE adf_id=?";$stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$id);               
    $stmt->execute();
    $stmt->close();
    $conn->close();
}


 //Browse All function--------------------------------

 function browse_all() {

    $sql="Select * FROM admform";
    $result =$this->database->query($sql);
    $result =$this->database->result;
    while ($row = mysqli_fetch_array($result))
    { echo "<tr>";
echo "<td>".$row["a1"]."</td>";
echo "<td>".$row["b1"]."</td>";
echo "<td>".$row["blk1"]."</td>";
echo "<td>".$row["blk2"]."</td>";
echo "<td>".$row["n1"]."</td>";
echo "<td>".$row["crsName"]."</td>";
echo "<td>".$row["cntrCode"]."</td>";
echo "<td>".$row["cntrName"]."</td>";
echo "<td>".$row["enrol"]."</td>";
echo "<td>".$row["name"]."</td>";
echo "<td>".$row["catSrtName"]."</td>";
echo "<td>".$row["catLngName"]."</td>";
echo "<td>".$row["comp"]."</td>";
echo "<td>".$row["sub1"]."</td>";
echo "<td>".$row["sub2"]."</td>";
echo "<td>".$row["sub3"]."</td>";
echo "<td>".$row["sub4"]."</td>";
echo "<td>".$row["sub5"]."</td>";
echo "<td>".$row["sub6"]."</td>";
echo "<td>".$row["sessNo"]."</td>";
echo "<td>".$row["crsCode"]."</td>";
echo "<td>".$row["pMcode"]."</td>";
echo "<td>".$row["adf_id"]."</td>";
echo "<td><a href=admformEdit.php?p=".$row['a1']." class='btn btn-primary'>Update</a><a href=admformDelete.php?p=".$row['a1']." class='btn btn-success'>Delete</a></td>";
echo "</tr>"; } }


 //COMBO function--------------------------------

 function Combo() {

    $sql="Select * FROM admform";
    $result =$this->database->query($sql);
    $result =$this->database->result;
    while ($row = mysqli_fetch_array($result))
    {       
           echo "<option value=".$row["a1"].">".$row["b1"]."</option>"; 
        }
    }
function getData($id)
	{
    $servername=$this->database->host;
    $username=$this->database->user;
    $password=$this->database->password;
    $dbname=$this->database->database;
    $conn = new mysqli($servername, $username, $password, $dbname); 
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
          }        
$sql="SELECT * from admform WHERE adf_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();

	/*$result =$this->database->query($sql);
	$result =$this->database->result;*/
        $result=$stmt->get_result();
	while ($row = $result->fetch_assoc())
          {
               $data[] = $row;
            }
return $data;
$stmt->close();
$conn->close();}
function json_select()
	{
 $servername=$this->database->host;
    $username=$this->database->user;
    $password=$this->database->password;
    $dbname=$this->database->database;
    $conn = new mysqli($servername, $username, $password, $dbname); 
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
          }        
$sql="SELECT * from admform";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc())
{
    $data[] = $row;
}

	print(json_encode($data));}

} ?>