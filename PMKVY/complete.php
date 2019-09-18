<?php
include "dbconn.php";
if(isset($_POST['submit_main'])){
  $final_name = $_POST['final_name'];
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
  $dbimageupload = $_POST['dbimageupload'];
  $sql ="INSERT INTO candidates(candidate_name, father_name, mother_name, residence_ph_no, mobile_no, gender, dob, email, religion, caste, address, tenth_per, tenth_board, twelfth_per, twelfth_board, grad_per, grad_university, post_grad_per, post_grad_university, unicode, tai_ahom, font, photo) VALUES ('$final_name','$father_name','$mother_name','$residence_number','$mobile_number','$gender','$dob','$email','$religion','$caste','$address','$tenth_per','$tenth_board','$twelfth_per','$twelfth_board','$grad_per','$grad_university','$post_grad_per','$post_grad_university','$unicode','$tai_ahom','$font','$dbimageupload')";
  $res = mysqli_query($conn,$sql);
  if($res){
    echo "Data Inserted";
  }
  else{
    echo mysqli_error($conn);
  }
}
?>
