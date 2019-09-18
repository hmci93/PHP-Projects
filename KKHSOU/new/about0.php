<?php
  include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <?php
            $query = "SELECT `img_name` FROM `gallery` WHERE `about_img` = 1";
            $exe = mysqli_query($conn,$query);
            $r = mysqli_fetch_assoc($exe);
          ?>
          <img src="<?php echo $r['about_img']; ?>" alt="">
        </div>
        <div class="col-lg-8">
          <?php
            $sql = "SELECT `about` FROM `t1`";
            $res = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($res);
            echo $row['about'];
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
