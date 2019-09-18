
<?php
class exm{
 //VARIABLE DECLARATION 
var $crsCode;
var $q1;
var $q2;
var $crsName;
var $crsSrtName;
var $crsLngName;
var $n4;
var $q3;
var $q4;
var $q5;
var $q6;
var $q7;
var $q8;
var $year;
var $session;
var $exm_id;

function exm(){$this->database = new Database();}
//GETTER METHOD CREATION....!
function getcrsCode(){ return $this->crsCode;}
function getq1(){ return $this->q1;}
function getq2(){ return $this->q2;}
function getcrsName(){ return $this->crsName;}
function getcrsSrtName(){ return $this->crsSrtName;}
function getcrsLngName(){ return $this->crsLngName;}
function getn4(){ return $this->n4;}
function getq3(){ return $this->q3;}
function getq4(){ return $this->q4;}
function getq5(){ return $this->q5;}
function getq6(){ return $this->q6;}
function getq7(){ return $this->q7;}
function getq8(){ return $this->q8;}
function getyear(){ return $this->year;}
function getsession(){ return $this->session;}
function getexm_id(){ return $this->exm_id;}
//SETTER METHOD CREATION..!
function setcrsCode($crsCode_p){ return $this->crsCode;}
function setq1($q1_p){ return $this->q1;}
function setq2($q2_p){ return $this->q2;}
function setcrsName($crsName_p){ return $this->crsName;}
function setcrsSrtName($crsSrtName_p){ return $this->crsSrtName;}
function setcrsLngName($crsLngName_p){ return $this->crsLngName;}
function setn4($n4_p){ return $this->n4;}
function setq3($q3_p){ return $this->q3;}
function setq4($q4_p){ return $this->q4;}
function setq5($q5_p){ return $this->q5;}
function setq6($q6_p){ return $this->q6;}
function setq7($q7_p){ return $this->q7;}
function setq8($q8_p){ return $this->q8;}
function setyear($year_p){ return $this->year;}
function setsession($session_p){ return $this->session;}
function setexm_id($exm_id_p){ return $this->exm_id;}
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
$sql="SELECT * from exm WHERE exm_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();

	/*$result =$this->database->query($sql);
	$result =$this->database->result;*/
        $result=$stmt->get_result();
	$row=$result->fetch_object();
$this->crsCode=$row->crsCode;
$this->q1=$row->q1;
$this->q2=$row->q2;
$this->crsName=$row->crsName;
$this->crsSrtName=$row->crsSrtName;
$this->crsLngName=$row->crsLngName;
$this->n4=$row->n4;
$this->q3=$row->q3;
$this->q4=$row->q4;
$this->q5=$row->q5;
$this->q6=$row->q6;
$this->q7=$row->q7;
$this->q8=$row->q8;
$this->year=$row->year;
$this->session=$row->session;
$this->exm_id=$row->exm_id;$stmt->close();
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
        
    $sql="INSERT INTO exm(crsCode,q1,q2,crsName,crsSrtName,crsLngName,n4,q3,q4,q5,q6,q7,q8,year,session,exm_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";$stmt = $conn->prepare($sql);$stmt->bind_param("isssssssssssssss",$this->crsCode,$this->q1,$this->q2,$this->crsName,$this->crsSrtName,$this->crsLngName,$this->n4,$this->q3,$this->q4,$this->q5,$this->q6,$this->q7,$this->q8,$this->year,$this->session,$this->exm_id);$stmt->execute();
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
        
    $sql="UPDATE exm SET q1=?,q2=?,crsName=?,crsSrtName=?,crsLngName=?,n4=?,q3=?,q4=?,q5=?,q6=?,q7=?,q8=?,year=?,session=?,exm_id=? Where exm_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssssssssi",$this->q1,$this->q2,$this->crsName,$this->crsSrtName,$this->crsLngName,$this->n4,$this->q3,$this->q4,$this->q5,$this->q6,$this->q7,$this->q8,$this->year,$this->session,$this->exm_id,$id);
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
        
    $sql="DELETE from exm WHERE exm_id=?";$stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$id);               
    $stmt->execute();
    $stmt->close();
    $conn->close();
}


 //Browse All function--------------------------------

 function browse_all() {

    $sql="Select * FROM exm";
    $result =$this->database->query($sql);
    $result =$this->database->result;
    while ($row = mysqli_fetch_array($result))
    { echo "<tr>";
echo "<td>".$row["crsCode"]."</td>";
echo "<td>".$row["q1"]."</td>";
echo "<td>".$row["q2"]."</td>";
echo "<td>".$row["crsName"]."</td>";
echo "<td>".$row["crsSrtName"]."</td>";
echo "<td>".$row["crsLngName"]."</td>";
echo "<td>".$row["n4"]."</td>";
echo "<td>".$row["q3"]."</td>";
echo "<td>".$row["q4"]."</td>";
echo "<td>".$row["q5"]."</td>";
echo "<td>".$row["q6"]."</td>";
echo "<td>".$row["q7"]."</td>";
echo "<td>".$row["q8"]."</td>";
echo "<td>".$row["year"]."</td>";
echo "<td>".$row["session"]."</td>";
echo "<td>".$row["exm_id"]."</td>";
echo "<td><a href=exmEdit.php?p=".$row['crsCode']." class='btn btn-primary'>Update</a><a href=exmDelete.php?p=".$row['crsCode']." class='btn btn-success'>Delete</a></td>";
echo "</tr>"; } }


 //COMBO function--------------------------------

 function Combo() {

    $sql="Select * FROM exm";
    $result =$this->database->query($sql);
    $result =$this->database->result;
    while ($row = mysqli_fetch_array($result))
    {       
           echo "<option value=".$row["crsCode"].">".$row["q1"]."</option>"; 
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
$sql="SELECT * from exm WHERE exm_id=?";
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
$sql="SELECT * from exm";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc())
{
    $data[] = $row;
}

	print(json_encode($data));}

} ?>