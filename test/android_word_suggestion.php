<?php

include "android_conn.php";

$letter=$_POST['letter'];
// $letter='nu';
$list = array();


$sql = "SELECT word FROM word WHERE word LIKE '$letter%' or transliterate LIKE '$letter%'";
$result=mysqli_query($conn,$sql);
if($result){
    while($row = mysqli_fetch_assoc($result)){
        array_push($list, $row['word']);
    }


    echo json_encode($list);
}
else{
    echo "Unsuccessful";
}
?>
