
<?php
class subadm{
 //VARIABLE DECLARATION 
var $a11;
var $crsCode;
var $pMcode;
var $b11;
var $c11;
var $subCode;
var $subLngNmae;
var $subSrtName;
var $d11;
var $pM;
var $Mpaper1;
var $Mpaper2;
var $e11;
var $f11;
var $blk3;
var $blk4;
var $g11;
var $h11;
var $sa_id;

function subadm(){$this->database = new Database();}
//GETTER METHOD CREATION....!
function geta11(){ return $this->a11;}
function getcrsCode(){ return $this->crsCode;}
function getpMcode(){ return $this->pMcode;}
function getb11(){ return $this->b11;}
function getc11(){ return $this->c11;}
function getsubCode(){ return $this->subCode;}
function getsubLngNmae(){ return $this->subLngNmae;}
function getsubSrtName(){ return $this->subSrtName;}
function getd11(){ return $this->d11;}
function getpM(){ return $this->pM;}
function getMpaper1(){ return $this->Mpaper1;}
function getMpaper2(){ return $this->Mpaper2;}
function gete11(){ return $this->e11;}
function getf11(){ return $this->f11;}
function getblk3(){ return $this->blk3;}
function getblk4(){ return $this->blk4;}
function getg11(){ return $this->g11;}
function geth11(){ return $this->h11;}
function getsa_id(){ return $this->sa_id;}
//SETTER METHOD CREATION..!
function seta11($a11_p){ return $this->a11;}
function setcrsCode($crsCode_p){ return $this->crsCode;}
function setpMcode($pMcode_p){ return $this->pMcode;}
function setb11($b11_p){ return $this->b11;}
function setc11($c11_p){ return $this->c11;}
function setsubCode($subCode_p){ return $this->subCode;}
function setsubLngNmae($subLngNmae_p){ return $this->subLngNmae;}
function setsubSrtName($subSrtName_p){ return $this->subSrtName;}
function setd11($d11_p){ return $this->d11;}
function setpM($pM_p){ return $this->pM;}
function setMpaper1($Mpaper1_p){ return $this->Mpaper1;}
function setMpaper2($Mpaper2_p){ return $this->Mpaper2;}
function sete11($e11_p){ return $this->e11;}
function setf11($f11_p){ return $this->f11;}
function setblk3($blk3_p){ return $this->blk3;}
function setblk4($blk4_p){ return $this->blk4;}
function setg11($g11_p){ return $this->g11;}
function seth11($h11_p){ return $this->h11;}
function setsa_id($sa_id_p){ return $this->sa_id;}
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
$sql="SELECT * from subadm WHERE sa_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();

	/*$result =$this->database->query($sql);
	$result =$this->database->result;*/
        $result=$stmt->get_result();
	$row=$result->fetch_object();
$this->a11=$row->a11;
$this->crsCode=$row->crsCode;
$this->pMcode=$row->pMcode;
$this->b11=$row->b11;
$this->c11=$row->c11;
$this->subCode=$row->subCode;
$this->subLngNmae=$row->subLngNmae;
$this->subSrtName=$row->subSrtName;
$this->d11=$row->d11;
$this->pM=$row->pM;
$this->Mpaper1=$row->Mpaper1;
$this->Mpaper2=$row->Mpaper2;
$this->e11=$row->e11;
$this->f11=$row->f11;
$this->blk3=$row->blk3;
$this->blk4=$row->blk4;
$this->g11=$row->g11;
$this->h11=$row->h11;
$this->sa_id=$row->sa_id;$stmt->close();
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
        
    $sql="INSERT INTO subadm(a11,crsCode,pMcode,b11,c11,subCode,subLngNmae,subSrtName,d11,pM,Mpaper1,Mpaper2,e11,f11,blk3,blk4,g11,h11,sa_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";$stmt = $conn->prepare($sql);$stmt->bind_param("issssssssssssssssss",$this->a11,$this->crsCode,$this->pMcode,$this->b11,$this->c11,$this->subCode,$this->subLngNmae,$this->subSrtName,$this->d11,$this->pM,$this->Mpaper1,$this->Mpaper2,$this->e11,$this->f11,$this->blk3,$this->blk4,$this->g11,$this->h11,$this->sa_id);$stmt->execute();
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
        
    $sql="UPDATE subadm SET crsCode=?,pMcode=?,b11=?,c11=?,subCode=?,subLngNmae=?,subSrtName=?,d11=?,pM=?,Mpaper1=?,Mpaper2=?,e11=?,f11=?,blk3=?,blk4=?,g11=?,h11=?,sa_id=? Where sa_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssssssssssi",$this->crsCode,$this->pMcode,$this->b11,$this->c11,$this->subCode,$this->subLngNmae,$this->subSrtName,$this->d11,$this->pM,$this->Mpaper1,$this->Mpaper2,$this->e11,$this->f11,$this->blk3,$this->blk4,$this->g11,$this->h11,$this->sa_id,$id);
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
        
    $sql="DELETE from subadm WHERE sa_id=?";$stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$id);               
    $stmt->execute();
    $stmt->close();
    $conn->close();
}


 //Browse All function--------------------------------

 function browse_all() {

    $sql="Select * FROM subadm";
    $result =$this->database->query($sql);
    $result =$this->database->result;
    while ($row = mysqli_fetch_array($result))
    { echo "<tr>";
echo "<td>".$row["a11"]."</td>";
echo "<td>".$row["crsCode"]."</td>";
echo "<td>".$row["pMcode"]."</td>";
echo "<td>".$row["b11"]."</td>";
echo "<td>".$row["c11"]."</td>";
echo "<td>".$row["subCode"]."</td>";
echo "<td>".$row["subLngNmae"]."</td>";
echo "<td>".$row["subSrtName"]."</td>";
echo "<td>".$row["d11"]."</td>";
echo "<td>".$row["pM"]."</td>";
echo "<td>".$row["Mpaper1"]."</td>";
echo "<td>".$row["Mpaper2"]."</td>";
echo "<td>".$row["e11"]."</td>";
echo "<td>".$row["f11"]."</td>";
echo "<td>".$row["blk3"]."</td>";
echo "<td>".$row["blk4"]."</td>";
echo "<td>".$row["g11"]."</td>";
echo "<td>".$row["h11"]."</td>";
echo "<td>".$row["sa_id"]."</td>";
echo "<td><a href=subadmEdit.php?p=".$row['a11']." class='btn btn-primary'>Update</a><a href=subadmDelete.php?p=".$row['a11']." class='btn btn-success'>Delete</a></td>";
echo "</tr>"; } }


 //COMBO function--------------------------------

 function Combo() {

    $sql="Select * FROM subadm";
    $result =$this->database->query($sql);
    $result =$this->database->result;
    while ($row = mysqli_fetch_array($result))
    {       
           echo "<option value=".$row["a11"].">".$row["crsCode"]."</option>"; 
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
$sql="SELECT * from subadm WHERE sa_id=?";
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
$sql="SELECT * from subadm";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc())
{
    $data[] = $row;
}

	print(json_encode($data));}

} ?>