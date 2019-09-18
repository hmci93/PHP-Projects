<?php
session_start();

include_once("../class/class.naccassigntable.php");

  if (isset($_POST['submitM'])) {
    $naac_slno2 = $_POST['naac_slno'];
    $criteria_select1 = $_POST['criteria_select'];
    $key_select1 = $_POST['key_select'];
    $metricUpdate1 = array();
    $oldKey = array();
    $oldCrit = array();
    $oldMetric = array();
    $MetPrevSelect = array();
    $rem_metric = array();

//Previous Metrics before update according to key indicator
    $MetPrevSelect = $_SESSION['MetPrevSelect'];
//-----------End-----------

    if (!empty($_POST['metric'])) {
      foreach ($_POST['metric'] as $m) {
        array_push($metricUpdate1,$m);
      }

//Metrics removed
    foreach ($MetPrevSelect as $mps) {
      if (!in_array($mps['metric_slno'],$metricUpdate1)) {
        array_push($rem_metric,$mps['metric_slno']);
      }
    }

    $tb_handle = new naccassigntable();

    $oldMetric = explode(',',$tb_handle->getOldMetric($_SESSION['naac_user']));
    $oldKey = explode(',',$tb_handle->getOldKeyIndicator($_SESSION['naac_user']));
    $oldCrit = explode(',',$tb_handle->getOldCriteria($_SESSION['naac_user']));

    // print_r($oldMetric);
    foreach ($oldMetric as $om) {
      if (!in_array($om,$rem_metric)) {
        if (!in_array($om,$metricUpdate1)) {
          array_push($metricUpdate1,$om);
          sort($metricUpdate1);
        }
      }
    }

    if (!in_array($key_select1,$oldKey)) {
      array_push($oldkey,$key_select1);
      sort($oldkey);
    }

    if (!in_array($criteria_select1,$oldCrit)) {
      array_push($oldCrit,$criteria_select1);
      sort($oldCrit);
    }

    // print_r($oldMetric);
    // echo "<br>";
    // print_r($metricUpdate1);
    $metric_string1 = implode(',',$metricUpdate1);
    $key_string1 = implode(',',$oldKey);
    $crit_string1 = implode(',',$oldCrit);



  	$tb_handle->naac_crite_slno=$crit_string1;
  	$tb_handle->naac_metric_slno=$metric_string1;
    $tb_handle->naac_metric_reserved1 = $key_string1;
    $tb_handle->update1($naac_slno2);
    echo "<script>alert('Updated Successfully');location.href='../ui/adminDisplayFormat.php'</script>";

    }
  }

  else if (isset($_POST['submitK'])) {
    $naac_slno3 = $_POST['naac_slno1'];
    $criteria_select2 = $_POST['criteria_select1'];
    $keyUpdate2 = array();
    $oldCrit1 = array();
    $oldKey1 = array();
    $KeyPrevSelect = array();
    $rem_key1 = array();

//Previous Key indicator before update according to criteria
    $KeyPrevSelect = $_SESSION['KeyPrevSelect'];
//-----------End-----------

    if (!empty($_POST['key_indicator'])) {
      foreach ($_POST['key_indicator'] as $k) {
        array_push($keyUpdate2,$k);
      }

//Keys removed
    foreach ($KeyPrevSelect as $kps) {
      if (!in_array($kps['key_slno'],$keyUpdate2)) {
        array_push($rem_key1,$kps['key_slno']);
      }
    }

    $tb_handle1 = new naccassigntable();

    $oldKey1 = explode(',',$tb_handle1->getOldKeyIndicator($_SESSION['naac_user']));
    $oldCrit1 = explode(',',$tb_handle1->getOldCriteria($_SESSION['naac_user']));

    // print_r($oldMetric);
    foreach ($oldKey1 as $ok) {
      if (!in_array($ok,$rem_key1)) {
        if (!in_array($ok,$keyUpdate2)) {
          array_push($keyUpdate2,$ok);
          sort($keyUpdate2);
        }
      }
    }

    if (!in_array($criteria_select2,$oldCrit1)) {
      array_push($oldCrit1,$criteria_select2);
      sort($oldCrit1);
    }

    // print_r($oldMetric);
    // echo "<br>";
    // print_r($metricUpdate1);
    $key_string2 = implode(',',$keyUpdate2);
    $crit_string2 = implode(',',$oldCrit1);



  	$tb_handle1->naac_crite_slno=$crit_string2;
    $tb_handle1->naac_metric_reserved1 = $key_string2;
    $tb_handle1->update2($naac_slno3);
    echo "<script>alert('Updated Successfully');location.href='../ui/adminDisplayFormat.php'</script>";

    }
  }

  else if (isset($_POST['submitC'])) {
    $naac_slno4 = $_POST['naac_slno2'];
    $critUpdate3 = array();
    // $oldCrit1 = array();
    // $oldKey1 = array();
    // $KeyPrevSelect = array();
    // $rem_crit2 = array();

//Previous criteria before update
    $CritPrevSelect = $_SESSION['CritPrevSelect'];
//-----------End-----------

    if (!empty($_POST['criteria'])) {
      foreach ($_POST['criteria'] as $c) {
        array_push($critUpdate3,$c);
        sort($critUpdate3);
      }

// //criterias removed
//     foreach ($CritPrevSelect as $cps) {
//       if (!in_array($cps['crite_slno'],$critUpdate3)) {
//         array_push($rem_crit2,$cps['crite_slno']);
//       }
//     }

    $tb_handle2 = new naccassigntable();

    // $oldKey1 = explode(',',$tb_handle2->getOldKeyIndicator($_SESSION['naac_user']));
    // $oldCrit1 = explode(',',$tb_handle2->getOldCriteria($_SESSION['naac_user']));

    // print_r($oldMetric);
    // foreach ($oldKey1 as $ok) {
    //   if (!in_array($ok,$rem_key)) {
    //     if (!in_array($ok,$keyUpdate2)) {
    //       array_push($keyUpdate2,$ok);
    //       sort($keyUpdate2);
    //     }
    //   }
    // }



    // print_r($oldMetric);
    // echo "<br>";
    // print_r($metricUpdate1);
    // $key_string2 = implode(',',$keyUpdate2);
    // $crit_string2 = implode(',',$$oldCrit1);
    $crit_string3 = implode(',',$critUpdate3);



  	$tb_handle2->naac_crite_slno=$crit_string3;
    $tb_handle2->update3($naac_slno4);
    echo "<script>alert('Updated Successfully');location.href='../ui/adminDisplayFormat.php'</script>";

    }
  }

  else {
    echo "Error";
  }
?>
