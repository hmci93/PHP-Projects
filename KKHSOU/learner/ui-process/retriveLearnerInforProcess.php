<?php
  include_once("../class/class.RegList.php");

  if (isset($_POST['submit'])) {
    if(is_numeric($_POST['e_num'])) {

      $e_num = $_POST['e_num'];

      $tb_handle = new RegList();
      $encrypt_e_num = $tb_handle->my_simple_crypt($e_num,'X#1267');

      $yr = substr($e_num,0,2);
      $yr = "20".$yr;

      $tb_handle->select($yr,$tb_handle->my_simple_crypt($encrypt_e_num,'Y#1267'));

      $stu_details = array("reg_no" => $tb_handle->getRegNo(),"stu_name" => $tb_handle->getName(),"study_centre_code" => $tb_handle->getStudyCentreCode(),"stu_profile_image" => $tb_handle->getProfImageName());

      echo json_encode($stu_details);
    }
  }

?>
