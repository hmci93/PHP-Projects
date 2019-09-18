<?php
  include 'conn.php';

  if (isset($_POST['submit']) && isset($_POST['check'])) {
    $check = $_POST['check'];
    $slider_img = '';
    $about_img = '';
    if ($check == "slider") {
      $slider_img = 1;
      $about_img = 0;
    }
    else if ($check == "about") {
      $slider_img = 0;
      $about_img = 1;
    }
    $extensions = array('jpeg','jpg','png');
    $gallery_dir = "gallery/";
    $img_name = '';
    $newG_name = '';

    if ($_FILES['gallery_img']['size'] > 0 && $_FILES['gallery_img']['size'] < 1000000) {
      $g_name = $_FILES['gallery_img']['name'];
      $g_temp = $_FILES['gallery_img']['tmp_name'];
      $g_ext = explode('.',$g_name);
      $g_ext = end($g_ext);
      $g_ext = strtolower($g_ext);

      if (in_array($g_ext,$extensions)) {
          if (is_dir($gallery_dir) == false) {
            mkdir("gallery", 0777);
            $newG_name = $gallery_dir.rand().$g_name;
            rename($g_temp,$newG_name);
          }
          else {
            $newG_name = $gallery_dir.rand().$g_name;
            rename($g_temp,$newG_name);
          }
      }
      else {
        echo "Uploaded logo is not an image file";
      }
      $img_name = $newG_name;


      $sql = "INSERT INTO `gallery`(`img_name`, `slider_img`, `about_img`) VALUES ('$newG_name',$slider_img,$about_img)";
      $res = mysqli_query($conn,$sql);
      if ($res) {
        echo "Inserted Successfully";
        header("refresh:2; url=gallery_insert.php");
      }
      else {
        echo mysqli_error($conn);
      }
    }
    else {
      echo "File size is greater than 500KB";
    }
  }
?>
