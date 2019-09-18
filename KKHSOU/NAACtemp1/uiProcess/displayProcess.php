<?php
  include_once("../class/class.display.php");

  if (!isset($_GET['m']) && isset($_GET['k'])) {
    $criteria = $_GET['k'];
    $tb_handle = new display();
    ?>
    <select id="key_select" class="form-control" name="key_indicator" onchange="showMetric(this.value)">
      <option value="">-----------------------------------------------------Select Key Indicator----------------------------------------------------</option>
      <?php $tb_handle->comboIndicator($criteria); ?>
    </select>
    <?php
  }
  else if (isset($_GET['m'])) {
    $metric = $_GET['m'];
    $tb_handle1 = new display();
    ?>
    <select id="metric_select" class="form-control" name="metric" onchange="showData(this.value)">
      <option value="">-----------------------------------------------------Select Metric----------------------------------------------------</option>
      <?php $tb_handle1->comboMetric($metric); ?>
    </select>
    <?php
  }
  else if (isset($_GET['d'])) {
    $data = $_GET['d'];
    $tb_handle2 = new display();
    ?>
      <table class="table table-bordered">
        <thead>
          <th>Metric No.</th>
          <th></th>
        </thead>
        <tr>
          <?php $tb_handle2->retrieveData($data); ?>
        </tr>
      </table>
    <?php
  }
?>
