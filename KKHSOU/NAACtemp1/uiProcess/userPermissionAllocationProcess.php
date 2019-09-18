<?php

include_once("../class/class.naccassigntable.php");

if (isset($_POST['submit'])) {
  $new_metric_arr = array();
  $new_criteria_arr = array();
  $new_key_arr = array();
  $new_metric_str = '';
  $new_criteria_str = '';
  $new_key_str = '';
  $per_arr = array();
  $user = $_POST['user'];
  $criteria_select = $_POST['criteria_select'];
  $key_select = $_POST['key_select'];
  $metric_arr = array();
  $metric_string = '';

  // if (!empty($_POST['metric'])) {
  //   foreach ($_POST['metric'] as $m) {
  //     array_push($metric_arr,$m);
  //   }
  // }
  // $metric_string = implode(',',$metric_arr);
  // echo $metric_string;


  $tb_handle = new naccassigntable();
  $check = $tb_handle->empl_check($user);


//------Checking if Permmissions for User Exists----
  if ($check == 0) {
    if (!empty($_POST['metric'])) {
      foreach ($_POST['metric'] as $m) {
        array_push($metric_arr,$m);
      }

    $metric_string = implode(',',$metric_arr);

    $tb_handle->naac_EmpId=$user;
  	$tb_handle->naac_crite_slno=$criteria_select;
  	$tb_handle->naac_metric_slno=$metric_string;
    $tb_handle->naac_metric_reserved1 = $key_select;
    $tb_handle->insert();
    echo "<script>alert('Insert Successfully');location.href='../ui/adminDisplayFormat.php'</script>";

    }
  }
  else if($check == 1) {
    if (!empty($_POST['metric'])) {

    $old_metric_string = $tb_handle->getOldMetric($user);
    $old_criteria_string = $tb_handle->getOldCriteria($user);
    $old_key_string = $tb_handle->getOldKeyIndicator($user);

//---------Checking permitted metrics---------
    $new_metric_arr = explode(',', $old_metric_string);
    foreach ($_POST['metric'] as $m) {
      if (in_array($_POST['metric'],$new_metric_arr)) {
      }
      else {
        array_push($new_metric_arr,$m);
        sort($new_metric_arr);
      }
    }

//---------Checking permitted criterias----------
    $new_criteria_arr = explode(',', $old_criteria_string);
    if (in_array($criteria_select,$new_criteria_arr)) {
    }
    else {
      array_push($new_criteria_arr,$criteria_select);
      sort($new_criteria_arr);
    }

//---------Checking permitted key indicator----------
    $new_key_arr = explode(',', $old_key_string);
    if (in_array($key_select,$new_key_arr)) {
    }
    else {
      array_push($new_key_arr,$key_select);
      sort($new_key_arr);
    }

//-------Creating new permission strings--------
    $new_criteria_str = implode(',',$new_criteria_arr);
    $new_metric_str = implode(',',$new_metric_arr);
    $new_key_str = implode(',',$new_key_arr);

//-------Updating user permissions
    $tb_handle->naac_EmpId=$user;
  	$tb_handle->naac_crite_slno=$new_criteria_str;
  	$tb_handle->naac_metric_slno=$new_metric_str;
    $tb_handle->naac_metric_reserved1=$new_key_str;
    $tb_handle->update($user);
    echo "<script>alert('Updated Successfully');location.href='../ui/adminDisplayFormat.php'</script>";
  }
  }

  // array_push($per_arr,$user,$criteria_select,$key_select,$metric_arr);
  // $_SESSION['per_arr'] = $per_arr;
  // echo json_encode($per_arr);
  // header("location: ../ui/adminDisplayFormat.php");
}
?>
