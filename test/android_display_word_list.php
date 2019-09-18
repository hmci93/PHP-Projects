<?php

include 'android_conn.php';

$word_list = array();

$sql = "SELECT word FROM word";
$res = mysqli_query($conn,$sql);
if($res){
  while ($row = mysqli_fetch_assoc($res)) {
    array_push($word_list, $row['word']);
  }
  echo json_encode($word_list);
}
else{
    echo "Unsuccessful";
}


?>
