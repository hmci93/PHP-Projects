<?php

include 'android_conn.php';

$word_id = $_POST['word_id'];

$sql5 = "DELETE FROM word WHERE word_id = '$word_id'";
$res5 = mysqli_query($conn,$sql5);
if ($res5) {
  echo "Data Deleted";
}

?>
