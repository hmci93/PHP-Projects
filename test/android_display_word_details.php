<?php

include 'android_conn.php';

$word = $_POST['word'];
// $word = 'অই';

$sql = "SELECT * FROM word WHERE word='$word'";
$res = mysqli_query($conn,$sql);
if($res){
  while($row=mysqli_fetch_assoc($res)){
    $word_details = json_encode($row);
    echo $word_details;
  }
}

?>
