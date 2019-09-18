
<?php
class output{
 //VARIABLE DECLARATION 
var $crsName;
var $a1;
var $b1;
var $blk10;
var $selectedSub;
var $Enroll;
var $Name;
var $cntrCode;
var $cntrName;
var $o_id;

function output(){$this->database = new Database();}
//GETTER METHOD CREATION....!
function getcrsName(){ return $this->crsName;}
function geta1(){ return $this->a1;}
function getb1(){ return $this->b1;}
function getblk10(){ return $this->blk10;}
function getselectedSub(){ return $this->selectedSub;}
function getEnroll(){ return $this->Enroll;}
function getName(){ return $this->Name;}
function getcntrCode(){ return $this->cntrCode;}
function getcntrName(){ return $this->cntrName;}
function geto_id(){ return $this->o_id;}
//SETTER METHOD CREATION..!
function setcrsName($crsName_p){ return $this->crsName;}
function seta1($a1_p){ return $this->a1;}
function setb1($b1_p){ return $this->b1;}
function setblk10($blk10_p){ return $this->blk10;}
function setselectedSub($selectedSub_p){ return $this->selectedSub;}
function setEnroll($Enroll_p){ return $this->Enroll;}
function setName($Name_p){ return $this->Name;}
function setcntrCode($cntrCode_p){ return $this->cntrCode;}
function setcntrName($cntrName_p){ return $this->cntrName;}
function seto_id($o_id_p){ return $this->o_id;}
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
$sql="SELECT * from output WHERE o_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();

	/*$result =$this->database->query($sql);
	$result =$this->database->result;*/
        $result=$stmt->get_result();
	$row=$result->fetch_object();
$this->crsName=$row->crsName;
$this->a1=$row->a1;
$this->b1=$row->b1;
$this->blk10=$row->blk10;
$this->selectedSub=$row->selectedSub;
$this->Enroll=$row->Enroll;
$this->Name=$row->Name;
$this->cntrCode=$row->cntrCode;
$this->cntrName=$row->cntrName;
$this->o_id=$row->o_id;$stmt->close();
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
        
    $sql="INSERT INTO output(crsName,a1,b1,blk10,selectedSub,Enroll,Name,cntrCode,cntrName,o_id) VALUES (?,?,?,?,?,?,?,?,?,?)";$stmt = $conn->prepare($sql);$stmt->bind_param("isssssssss",$this->crsName,$this->a1,$this->b1,$this->blk10,$this->selectedSub,$this->Enroll,$this->Name,$this->cntrCode,$this->cntrName,$this->o_id);$stmt->execute();
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
        
    $sql="UPDATE output SET a1=?,b1=?,blk10=?,selectedSub=?,Enroll=?,Name=?,cntrCode=?,cntrName=?,o_id=? Where o_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssi",$this->a1,$this->b1,$this->blk10,$this->selectedSub,$this->Enroll,$this->Name,$this->cntrCode,$this->cntrName,$this->o_id,$id);
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
        
    $sql="DELETE from output WHERE o_id=?";$stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$id);               
    $stmt->execute();
    $stmt->close();
    $conn->close();
}


 //Browse All function--------------------------------

 function browse_all() {

    $sql="Select * FROM output";
    $result =$this->database->query($sql);
    $result =$this->database->result;
    while ($row = mysqli_fetch_array($result))
    { echo "<tr>";
echo "<td>".$row["crsName"]."</td>";
echo "<td>".$row["a1"]."</td>";
echo "<td>".$row["b1"]."</td>";
echo "<td>".$row["blk10"]."</td>";
echo "<td>".$row["selectedSub"]."</td>";
echo "<td>".$row["Enroll"]."</td>";
echo "<td>".$row["Name"]."</td>";
echo "<td>".$row["cntrCode"]."</td>";
echo "<td>".$row["cntrName"]."</td>";
echo "<td>".$row["o_id"]."</td>";
echo "<td><a href=outputEdit.php?p=".$row['crsName']." class='btn btn-primary'>Update</a><a href=outputDelete.php?p=".$row['crsName']." class='btn btn-success'>Delete</a></td>";
echo "</tr>"; } }


 //COMBO function--------------------------------

 function Combo() {

    $sql="Select * FROM output";
    $result =$this->database->query($sql);
    $result =$this->database->result;
    while ($row = mysqli_fetch_array($result))
    {       
           echo "<option value=".$row["crsName"].">".$row["a1"]."</option>"; 
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
$sql="SELECT * from output WHERE o_id=?";
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
$sql="SELECT * from output";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc())
{
    $data[] = $row;
}

	print(json_encode($data));}

} ?>