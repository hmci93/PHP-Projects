<?php
  include_once("../class/class.adminDisplay.php");
  session_start();

  if (isset($_GET['c'])) {
    // $user = $_GET['c'];
    $tb_handle = new adminDisplay();
    ?>
    <select id="criteria_select" class="form-control" name="criteria_select" onchange="showKey(this.value)" required>
      <option value="">-----------------------------------------------------Select Criteria----------------------------------------------------</option>
      <?php $tb_handle->Criteria(); ?>
    </select>
    <?php
  }
  else if (isset($_GET['k'])) {
    $criteria = $_GET['k'];
    $tb_handle1 = new adminDisplay();
    ?>
    <select id="key_select" class="form-control" name="key_select" onchange="showMetric(this.value)" required>
      <option value="">-----------------------------------------------------Select Key Indicator----------------------------------------------------</option>
      <?php $tb_handle1->Indicator($criteria); ?>
    </select>
    <?php
  }
  else if (isset($_GET['m'])) {
    $metric = $_GET['m'];
    $tb_handle2 = new adminDisplay();
    $tb_handle2->Metric($metric);

  }
  else if (isset($_GET['ms'])) {
    $id = $_SESSION['id'];
    $metric = $_GET['ms'];
    $tb_handle3 = new adminDisplay();
    $tb_handle3->PrevMetric($metric,$id);

  }
  else if (isset($_GET['ki'])) {
    $id = $_SESSION['id1'];
    $key = $_GET['ki'];
    $tb_handle4 = new adminDisplay();
    $tb_handle4->PrevKey($key,$id);

  }
?>
