<?php
if(isset($_POST['submit_first'])){
    $shri = $_POST['shri'];
    $shricap = ucfirst($shri);
    $first_name = $_POST['first_name'];
    $first_namecap = ucfirst($first_name);
    $middle_name = $_POST['middle_name'];
    $middle_namecap = ucfirst($middle_name);
    $last_name = $_POST['last_name'];
    $last_namecap = ucfirst($last_name);
    $final_name = $shricap . ' ' . $first_namecap . ' ' . $middle_namecap . ' ' . $last_namecap;
    $gender = $_POST['gender'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $dob = $_POST['dob'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile_number = $_POST['mobile_number'];
    $residence_number = $_POST['residence_number'];
    $tenth_per = $_POST['10th_per'];
    $twelfth_per = $_POST['12th_per'];
    $grad_per = $_POST['grad_per'];
    $post_grad_per = $_POST['post_grad_per'];
    $tenth_board = $_POST['10th_board'];
    $twelfth_board = $_POST['12th_board'];
    $grad_university = $_POST['grad_university'];
    $post_grad_university = $_POST['post_grad_university'];
    $unicode = $_POST['unicode'];
    $tai_ahom = $_POST['tai_ahom'];
    $font = $_POST['font'];


?>
<html>
<head>
<title>Registration form for PMKVY Junior Software Developer course</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="main_form.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="main_form_validate.js"></script> -->
</head>
<body>

<div class="container" style="margin-top: 1em;">
        <div class="card person-card">
        <div class="progress" style="width: 90%; margin: 0 auto;">
            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
        </div>
            <div class="card-body">
                <img id="img_sex" class="person-img"
                    src="img/intro-logo1.png">
                <h2 id="who_message" class="card-title">Upload PAN/Voter ID !</h2>
                <hr>

                <form action="imageupload.php" method="POST" enctype="multipart/form-data">

                <div class="row justify-content-center">
                    <!-- <div class="form-group col-md-2">
                    <label for="selectpan" class="col-form-label">Select PAN/Voter ID</label>
                        <select id="selection" name="card_selection" class="form-control">
                            <option value="PAN CARD">PAN CARD</option>
                            <option value="VOTER ID">VOTER ID</option>
                            <option value="BPL CARD<">BPL CARD</option>
                        </select>
                    </div> -->
                    <input type="hidden" name="final_name" value="<?php echo $final_name; ?>">
                <input type="hidden" name="gender" value="<?php echo $gender; ?>">
                <input type="hidden" name="father_name" value="<?php echo $father_name; ?>">
                <input type="hidden" name="mother_name" value="<?php echo $mother_name; ?>">
                <input type="hidden" name="dob" value="<?php echo $dob; ?>">
                <input type="hidden" name="religion" value="<?php echo $religion; ?>">
                <input type="hidden" name="caste" value="<?php echo $caste; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="address" value="<?php echo $address; ?>">
                <input type="hidden" name="mobile_number" value="<?php echo $mobile_number; ?>">
                <input type="hidden" name="residence_number" value="<?php echo $residence_number; ?>">
                <input type="hidden" name="tenth_per" value="<?php echo $tenth_per; ?>">
                <input type="hidden" name="twelfth_per" value="<?php echo $twelfth_per; ?>">
                <input type="hidden" name="grad_per" value="<?php echo $grad_per; ?>">
                <input type="hidden" name="post_grad_per" value="<?php echo $post_grad_per; ?>">
                <input type="hidden" name="tenth_board" value="<?php echo $tenth_board; ?>">
                <input type="hidden" name="twelfth_board" value="<?php echo $twelfth_board; ?>">
                <input type="hidden" name="grad_university" value="<?php echo $grad_university; ?>">
                <input type="hidden" name="post_grad_university" value="<?php echo $post_grad_university; ?>">
                <input type="hidden" name="unicode" value="<?php echo $unicode; ?>">
                <input type="hidden" name="tai_ahom" value="<?php echo $tai_ahom; ?>">
                <input type="hidden" name="font" value="<?php echo $font; ?>">
                    <div class="form-group col-md-3">
                        <label for="voter" class="col-form-label">Upload PAN/Voter ID</label>
                        <input type="file" style="height:40px;" name="card" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    
                    <div class="form-group col-md-3">
                            <label for="voter" class="col-form-label"> &nbsp;</label>
                        <button type="submit" name="submit" class="btn btn-outline-primary btn-block">UPLOAD</button>
                    </div>
                </div>
              <?php } ?>
                </form>
                <hr>
                <div class="row">
                    <div class="col-md-12 text-center"> 
                    <?php
  if (isset($_POST["submit"]))
  {
    $final_name_second = $_POST['final_name'];
    $gender = $_POST['gender'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $dob = $_POST['dob'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile_number = $_POST['mobile_number'];
    $residence_number = $_POST['residence_number'];
    $tenth_per = $_POST['tenth_per'];
    $twelfth_per = $_POST['twelfth_per'];
    $grad_per = $_POST['grad_per'];
    $post_grad_per = $_POST['post_grad_per'];
    $tenth_board = $_POST['tenth_board'];
    $twelfth_board = $_POST['twelfth_board'];
    $grad_university = $_POST['grad_university'];
    $post_grad_university = $_POST['post_grad_university'];
    $unicode = $_POST['unicode'];
    $tai_ahom = $_POST['tai_ahom'];
    $font = $_POST['font'];
    // $card_selection = $_POST['card_selection'];
    $dbimageupload = '';
    $dir = 'VOTER ID';
    $target_dir = "$dir"."/";
    $target_file = $target_dir . basename($_FILES["card"]["name"]);
    $uploadOk = 1;
    $cardFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $filename = $final_name_second.".".$cardFileType;
    $newtarget_file = $target_dir.$filename;
    // echo $target_file1."<br>";
    // echo $target_file2."<br>";

    // echo $cardFileType;
    // echo $newtarget_file;

    if ($cardFileType == "jpeg" || $cardFileType == "jpg" || $cardFileType == "pdf") {
      $check = filesize($_FILES["card"]["tmp_name"]);
      if($check > 0 && $check <= 512000)
      {
          $uploadOk = 1;
      }
      else
      {
        echo "<div class='alert alert-warning' role='alert'>File shold be <strong>less than 500 KB</strong> !</div>";
           $uploadOk = 0;
      }
      if (file_exists($newtarget_file))
      {
        echo "<div class='alert alert-warning' role='alert'>Sorry, <strong>your file already exists</strong> !</div>";
        $uploadOk = 0;
      }
        // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0)
      {
        echo "<div class='alert alert-warning' role='alert'>Sorry, your <strong>file was not uploaded</strong> !</div>";
      }
      // if everything is ok, try to upload file
      else
      {
          if (move_uploaded_file($_FILES["card"]["tmp_name"], $newtarget_file))
          {
              $dbimageupload = $newtarget_file;
            echo "<div class='alert alert-success' role='alert'>Your file has been <strong>uploaded successfully</strong>.</div>";
          }
          else
          {
            echo "<div class='alert alert-warning' role='alert'>Sorry, there was an <strong>error uploading your file</strong> !</div>";
          }
      }
    }
    else {
        echo "<div class='alert alert-warning' role='alert'>Extension of the file <strong>should be in jpg, jpeg or pdf format.</strong></div>";
    }
  
?>    
                        
                    </div>

                </div>


            </div>

            <form method="POST" action="complete.php">
              <input type="hidden" name="final_name" value="<?php echo $final_name_second; ?>">
                <input type="hidden" name="gender" value="<?php echo $gender; ?>">
                <input type="hidden" name="father_name" value="<?php echo $father_name; ?>">
                <input type="hidden" name="mother_name" value="<?php echo $mother_name; ?>">
                <input type="hidden" name="dob" value="<?php echo $dob; ?>">
                <input type="hidden" name="religion" value="<?php echo $religion; ?>">
                <input type="hidden" name="caste" value="<?php echo $caste; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="address" value="<?php echo $address; ?>">
                <input type="hidden" name="mobile_number" value="<?php echo $mobile_number; ?>">
                <input type="hidden" name="residence_number" value="<?php echo $residence_number; ?>">
                <input type="hidden" name="tenth_per" value="<?php echo $tenth_per; ?>">
                <input type="hidden" name="twelfth_per" value="<?php echo $twelfth_per; ?>">
                <input type="hidden" name="grad_per" value="<?php echo $grad_per; ?>">
                <input type="hidden" name="post_grad_per" value="<?php echo $post_grad_per; ?>">
                <input type="hidden" name="tenth_board" value="<?php echo $tenth_board; ?>">
                <input type="hidden" name="twelfth_board" value="<?php echo $twelfth_board; ?>">
                <input type="hidden" name="grad_university" value="<?php echo $grad_university; ?>">
                <input type="hidden" name="post_grad_university" value="<?php echo $post_grad_university; ?>">
                <input type="hidden" name="unicode" value="<?php echo $unicode; ?>">
                <input type="hidden" name="tai_ahom" value="<?php echo $tai_ahom; ?>">
                <input type="hidden" name="font" value="<?php echo $font; ?>">
            
                <input type="hidden" name="dbimageupload" value="<?php echo $dbimageupload; ?>">
                <div style="margin-top: 1em;">
                     <button type="submit" name="submit_main" class="btn btn-primary btn-lg btn-block">SUBMIT</button>
                </div>
            </form> 
          <?php } ?>
        
</div>
</body>
</html>
