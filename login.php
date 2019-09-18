<?php
include "conn.php";

$username=$_POST['search_word'];
$sql="SELECT * FROM test1 WHERE username = '$username'";
$result=mysqli_query($conn,$sql);
if($result){
    while($row = mysqli_fetch_array($result)){
        $name = $row['username'];
        $pass = $row['password'];
        echo "Username : ".$name."<br>Password : ".$pass;
    }
    
}
else{
    echo "Unsuccessfull";
}
?>