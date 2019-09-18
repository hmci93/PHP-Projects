
<?php
class subopt{
 //VARIABLE DECLARATION 
var $crsCode;
var $pMcode;
var $subType;
var $n2;
var $n3;
var $so_id;

function subopt(){$this->database = new Database();}
//GETTER METHOD CREATION....!
function getcrsCode(){ return $this->crsCode;}
function getpMcode(){ return $this->pMcode;}
function getsubType(){ return $this->subType;}
function getn2(){ return $this->n2;}
function getn3(){ return $this->n3;}
function getso_id(){ return $this->so_id;}
//SETTER METHOD CREATION..!
function setcrsCode($crsCode_p){ return $this->crsCode;}
function setpMcode($pMcode_p){ return $this->pMcode;}
function setsubType($subType_p){ return $this->subType;}
function setn2($n2_p){ return $this->n2;}
function setn3($n3_p){ return $this->n3;}
function setso_id($so_id_p){ return $this->so_id;}
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
$sql="SELECT * from subopt WHERE so_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();

	/*$result =$this->database->query($sql);
	$result =$this->database->result;*/
        $result=$stmt->get_result();
	$row=$result->fetch_object();
$this->crsCode=$row->crsCode;
$this->pMcode=$row->pMcode;
$this->subType=$row->subType;
$this->n2=$row->n2;
$this->n3=$row->n3;
$this->so_id=$row->so_id;$stmt->close();
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
        
    $sql="INSERT INTO subopt(crsCode,pMcode,subType,n2,n3,so_id) VALUES (?,?,?,?,?,?)";$stmt = $conn->prepare($sql);$stmt->bind_param("isssss",$this->crsCode,$this->pMcode,$this->subType,$this->n2,$this->n3,$this->so_id);$stmt->execute();
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
        
    $sql="UPDATE subopt SET pMcode=?,subType=?,n2=?,n3=?,so_id=? Where so_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssi",$this->pMcode,$this->subType,$this->n2,$this->n3,$this->so_id,$id);
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
        
    $sql="DELETE from subopt WHERE so_id=?";$stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$id);               
    $stmt->execute();
    $stmt->close();
    $conn->close();
}


 //Browse All function--------------------------------

 function browse_all() {

    $sql="Select * FROM subopt";
    $result =$this->database->query($sql);
    $result =$this->database->result;
    while ($row = mysqli_fetch_array($result))
    { echo "<tr>";
echo "<td>".$row["crsCode"]."</td>";
echo "<td>".$row["pMcode"]."</td>";
echo "<td>".$row["subType"]."</td>";
echo "<td>".$row["n2"]."</td>";
echo "<td>".$row["n3"]."</td>";
echo "<td>".$row["so_id"]."</td>";
echo "<td><a href=suboptEdit.php?p=".$row['crsCode']." class='btn btn-primary'>Update</a><a href=suboptDelete.php?p=".$row['crsCode']." class='btn btn-success'>Delete</a></td>";
echo "</tr>"; } }


 //COMBO function--------------------------------

 function Combo() {

    $sql="Select * FROM subopt";
    $result =$this->database->query($sql);
    $result =$this->database->result;
    while ($row = mysqli_fetch_array($result))
    {       
           echo "<option value=".$row["crsCode"].">".$row["pMcode"]."</option>"; 
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
$sql="SELECT * from subopt WHERE so_id=?";
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
$sql="SELECT * from subopt";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc())
{
    $data[] = $row;
}

	print(json_encode($data));}

} ?>