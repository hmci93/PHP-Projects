<?php
  include 'conn.php';

  if (isset($_POST['submit'])) {

    $act_title = $_POST['activity_title'];
    $activities = $_POST['activities'];
    $logo = '';
    $newL_name = '';
    $activities_photo = '';
    $activity_array = array();
    $extensions = array('jpeg','jpg','png');
    $activity_dir = "activities/";
    $logo_dir = "logo/";

//Checking logo image
if (!empty($_FILES['logo']['name'])) {
if ($_FILES['logo']['size'] > 0 && $_FILES['logo']['size'] < 1000000) {
  $l_name = $_FILES['logo']['name'];
  $l_temp = $_FILES['logo']['tmp_name'];
  $l_ext = explode('.',$l_name);
  $l_ext = end($l_ext);
  $l_ext = strtolower($l_ext);

  if (in_array($l_ext,$extensions)) {
      if (is_dir($logo_dir) == false) {
        mkdir("logo", 0777);
        $newL_name = $logo_dir.rand().$l_name;
        rename($l_temp,$newL_name);
      }
      else {
        $newL_name = $logo_dir.rand().$l_name;
        rename($l_temp,$newL_name);
      }
  }
  else {
    echo "Uploaded logo is not an image file";
  }
  $logo = $newL_name;
}
else if ($_FILES['logo']['size'] > 1000000) {
  echo "File size is greater than 500KB";
}
}
else {
  $logo = '';
}

//Checking activities images
if ($_FILES['activities_photo']) {
  foreach ($_FILES['activities_photo']['tmp_name'] as $k => $tmp_name) {
    if (!empty($_FILES['activities_photo']['name'][$k]) && $_FILES['activities_photo']['error'][$k] == 0) {
      if ($_FILES['activities_photo']['size'][$k] > 0 && $_FILES['activities_photo']['size'][$k] < 1000000) {
    $f_name = $_FILES['activities_photo']['name'][$k];
    $f_temp = $_FILES['activities_photo']['tmp_name'][$k];
    $f_ext = explode('.',$f_name);
    $f_ext = end($f_ext);
    $f_ext = strtolower($f_ext);

    if (in_array($f_ext,$extensions)) {
      if (is_dir($activity_dir) == false) {
        mkdir("activities", 0777);
        $newF_name = $activity_dir.rand().$f_name;
        rename($f_temp,$newF_name);
        array_push($activity_array,$newF_name);
      }
      else {
        $newF_name = $activity_dir.rand().$f_name;
        rename($f_temp,$newF_name);
        array_push($activity_array,$newF_name);
      }
    }
    else {
      echo "One or more activity files are not image files";
    }
      $activities_photo = implode(',',$activity_array);
    }
    else {
      echo "One or more file sizes are greater than 500KB";
      header("refresh:1; url=activities_insert.php");
    }
    }
  }
  // $activities_photo = implode(',',$activity_array);
}
else {
  $activities_photo = '';
}

$sql = "INSERT INTO `activities`(`act_title`, `act_details`, `act_logo`,`act_images`) VALUES ('$act_title','$activities','$logo','$activities_photo')";
$res = mysqli_query($conn,$sql);
if ($res) {
  echo "Inserted Successfully";
  header("refresh:2; url=activities_insert.php");
}
else {
  echo mysqli_error($conn);
}
  }
?>
