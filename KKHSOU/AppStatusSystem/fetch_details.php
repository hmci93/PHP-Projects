<?php

  include 'conn1.php';

$id = $_POST['id'];
//$id = 1;
  $sql = "SELECT * FROM app_details WHERE ad_id = $id";
  $exe = mysqli_query($conn,$sql);
  if ($exe) {
    while ($row = mysqli_fetch_assoc($exe)) {
      $result = json_encode($row);
      echo $result;
    }
  }
?>
