<?php
include 'conn.php';
  if (isset($_POST['submit'])) {

    $about = $_POST['about'];
    $obj = $_POST['obj'];
    // $activities = $_POST['activities'];
    $staff = $_POST['staff'];
    // $logo = '';
    // $activities_photo = '';
    // $gallery_images = '';
    // $gallery_array = array();
    // $activity_array = array();
    // $extensions = array('jpeg','jpg','png');
    // // $gallery_dir = "gallery/";
    // $activity_dir = "activities/";
    // $logo_dir = "logo/";

//Checking logo image
    // if ($_FILES['logo']['size'] > 0) {
    //   $l_name = $_FILES['logo']['name'];
    //   $l_temp = $_FILES['logo']['tmp_name'];
    //   $l_ext = explode('.',$l_name);
    //   $l_ext = end($l_ext);
    //   $l_ext = strtolower($l_ext);
    //
    //   if (in_array($l_ext,$extensions)) {
    //       if (is_dir($logo_dir) == false) {
    //         mkdir("logo", 0777);
    //         $newL_name = $logo_dir.rand().$l_name;
    //         rename($l_temp,$newL_name);
    //       }
    //       else {
    //         $newL_name = $logo_dir.rand().$l_name;
    //         rename($l_temp,$newL_name);
    //       }
    //   }
    //   else {
    //     echo "Uploaded logo is not an image file";
    //   }
    //   $logo = $l_name;
    // }
    // else {
    //   $logo = '';
    // }

//Checking activities images
    // if ($_FILES['activities_photo']) {
    //   foreach ($_FILES['activities_photo']['tmp_name'] as $k => $tmp_name) {
    //     if (!empty($_FILES['activities_photo']['name'][$k]) && $_FILES['activities_photo']['error'][$k] == 0) {
    //     $f_name = $_FILES['activities_photo']['name'][$k];
    //     $f_temp = $_FILES['activities_photo']['tmp_name'][$k];
    //     $f_ext = explode('.',$f_name);
    //     $f_ext = end($f_ext);
    //     $f_ext = strtolower($f_ext);
    //
    //     if (in_array($f_ext,$extensions)) {
    //       if (is_dir($activity_dir) == false) {
    //         mkdir("activities", 0777);
    //         $newF_name = $activity_dir.rand().$f_name;
    //         rename($f_temp,$newF_name);
    //         array_push($activity_array,$newF_name);
    //       }
    //       else {
    //         $newF_name = $activity_dir.rand().$f_name;
    //         rename($f_temp,$newF_name);
    //         array_push($activity_array,$newF_name);
    //       }
    //     }
    //     else {
    //       echo "One or more activity files are not image files";
    //     }
    //     }
    //   }
    //   $activities_photo = implode(',',$activity_array);
    // }
    // else {
    //   $activities_photo = '';
    // }

//Checking gallery images
    // if (isset($_FILES['gallery'])) {
    //   foreach ($_FILES['gallery']['tmp_name'] as $key => $tmp_name) {
    //     if (!empty($_FILES['gallery']['name'][$key]) && $_FILES['gallery']['error'][$key] == 0) {
    //   $file_name = $_FILES['gallery']['name'][$key];
    //   $file_temp = $_FILES['gallery']['tmp_name'][$key];
    //   $file_ext = explode('.',$file_name);
    //   $file_ext = end($file_ext);
    //   $file_ext = strtolower($file_ext);
    //
    //   if (in_array($file_ext,$extensions)) {
    //     if (is_dir($gallery_dir) == false) {
    //       mkdir("gallery", 0777);
    //       $newFilename = $gallery_dir.rand().$file_name;
    //       rename($file_temp,$newFilename);
    //       array_push($gallery_array,$newFilename);
    //     }
    //     else {
    //       $newFilename = $gallery_dir.rand().$file_name;
    //       rename($file_temp,$newFilename);
    //       array_push($gallery_array,$newFilename);
    //     }
    //   }
    //   else {
    //     echo "One or more gallery files are not image files";
    //   }
    //   }
    //   }
    //   $gallery_images = implode(',',$gallery_array);
    // }
    // else {
    //   $gallery_images = '';
    // }

    // echo $logo."<br>".$activities_photo."<br>".$gallery_images;

    $sql = "INSERT INTO `t1`(`about`, `obj`, `staff_details`) VALUES ('$about','$obj','$staff')";
    $res = mysqli_query($conn,$sql);
    if ($res) {
      echo "Inserted Successfully";
      header("refresh:2; url=insert.php");
    }
    else {
      echo mysqli_error($conn);
    }
  }
?>
