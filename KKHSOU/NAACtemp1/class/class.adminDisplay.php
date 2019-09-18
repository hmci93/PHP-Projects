<?php
  include_once("class.database.php");

  /**
   *
   */
  class adminDisplay
  {

    function adminDisplay() {
      $this->database = new Database();
    }

    function User($empl_id)
    {
      $user_arr = array();

      $sql = "SELECT `empl_id`,`empl_name` FROM `users` WHERE `u_id` != $empl_id";
      $result = $this->database->query($sql);
    	$result = $this->database->result;
      while($row = mysqli_fetch_array($result)) {
        // echo "<option value='".$row['empl_id']."'>".$row['empl_name']."</option>";
        array_push($user_arr,$row);
    }
    return json_encode($user_arr);
  }

    function Criteria()
    {

      $sql = "SELECT `crite_slno`,`crite_title` FROM `criterion`";
      $result = $this->database->query($sql);
    	$result = $this->database->result;
      while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row['crite_slno']."'>".$row['crite_title']."</option>";
        // array_push($crite_arr,$row);
    }
    // return json_encode($crite_arr);
  }

  function Indicator($criteria) {

    $sql = "SELECT key_slno,key_title FROM `keyindicator`,`criterion` WHERE keyindicator.key_crite_slno = criterion.crite_slno AND keyindicator.key_crite_slno = $criteria";
    $result = $this->database->query($sql);
    $result = $this->database->result;
    while($row = mysqli_fetch_array($result)) {
      echo "<option value='".$row['key_slno']."'>".$row['key_title']."</option>";

    }
  }

  function Metric($metric) {
    $i=0;
    $sql = "SELECT `metric_slno`,`metric_no` FROM `metrictable`,`keyindicator` WHERE metrictable.metric_key_slno = keyindicator.key_slno AND metrictable.metric_key_slno = $metric";
    $result = $this->database->query($sql);
    $result = $this->database->result;
    while($row = mysqli_fetch_array($result)) {
      if($i==5) {
        echo "<br>";
        $i=0;
      }
      echo "<div class='checkbox-inline col-md-2 text-center'><input id='metric[]' type='checkbox' name ='metric[]' value='".$row['metric_slno']."'>".$row['metric_no']."</div>";
      $i++;
    }
  }

  function PrevMetric($metric,$id) {
    $i=0;
    $prev_metric = array();
    $met_selected = array();
    $res = array();
    $met = array();

    $sql1 = "SELECT `naac_metric_slno` FROM `naccassigntable` WHERE `naac_slno` = $id";
    $result = $this->database->query($sql1);
    $result1 = $this->database->result;
    $row1 = mysqli_fetch_array($result1);
    $prev_metric = explode(',', $row1['naac_metric_slno']);

    // $i=0;
    foreach ($prev_metric as $pm) {
      $sql = "SELECT `metric_slno`,`metric_no` FROM `metrictable`,`keyindicator` WHERE metrictable.metric_key_slno = keyindicator.key_slno AND metrictable.metric_key_slno = ".$metric." AND metrictable.metric_slno = ".$pm;
      $result = $this->database->query($sql);
      $result2 = $this->database->result;
      while($row = mysqli_fetch_assoc($result2)) {
        array_push($met_selected,$row);
        $_SESSION['MetPrevSelect'] = $met_selected;
        }
      //   // if($i==5) {
      //   //   echo "<br>";
      //   //   $i=0;
      //   }
      //   echo mysqli_error($this->link);
      // }
      // else {
      //   echo mysqli_error($this->link);
      // }
      // echo $sql."<br>";


    }

    $sql2 = "SELECT `metric_slno`,`metric_no` FROM `metrictable`,`keyindicator` WHERE metrictable.metric_key_slno = keyindicator.key_slno AND metrictable.metric_key_slno = $metric";
    $result = $this->database->query($sql2);
    $result3 = $this->database->result;
    while ($row2 = mysqli_fetch_assoc($result3)) {
      array_push($met,$row2);
    }

    if (sizeof($met) == sizeof($met_selected)) {
      for ($j=0; $j < sizeof($met_selected); $j++) {
        if($i==5) {
          echo "<br>";
          $i=0;
        }
        echo "<div class='checkbox-inline col-md-2 text-center'><input id='metric[]' type='checkbox' name ='metric[]' value='".$met_selected[$j]['metric_slno']."' checked>".$met_selected[$j]['metric_no']."</div>";
      }
    }
    else {

        foreach ($met as $a) {
          if (!in_array($a,$met_selected)) {
            array_push($res,$a);
          }
        }

        for ($j=0; $j < sizeof($met_selected); $j++) {
          if($i==5) {
            echo "<br>";
            $i=0;
          }
          echo "<div class='checkbox-inline col-md-2 text-center'><input id='metric[]' type='checkbox' name ='metric[]' value='".$met_selected[$j]['metric_slno']."' checked>".$met_selected[$j]['metric_no']."</div>";
        }
        for ($k=0; $k < sizeof($res); $k++) {
          if($i==5) {
            echo "<br>";
            $i=0;
          }
          echo "<div class='checkbox-inline col-md-2 text-center'><input id='metric[]' type='checkbox' name ='metric[]' value='".$res[$k]['metric_slno']."'>".$res[$k]['metric_no']."</div>";
        }
    }
  }

  function PrevKey($key,$id) {
    // $i=0;
    $prev_key = array();
    $key_selected = array();
    $key1 = array();
    $res1 = array();

    $sql = "SELECT `naac_metric_reserved1` FROM `naccassigntable` WHERE `naac_slno` = $id";
    $result = $this->database->query($sql);
    $result = $this->database->result;
    $row = mysqli_fetch_array($result);
    $prev_key = explode(',', $row['naac_metric_reserved1']);

    foreach ($prev_key as $pk) {
      $sql1 = "SELECT `key_slno`,`key_title` FROM `keyindicator`,`criterion` WHERE keyindicator.key_crite_slno = criterion.crite_slno AND criterion.crite_slno = ".$key." AND keyindicator.key_slno = ".$pk;
      $result = $this->database->query($sql1);
      $result1 = $this->database->result;
      while($row1 = mysqli_fetch_assoc($result1)) {
        array_push($key_selected,$row1);
        $_SESSION['KeyPrevSelect'] = $key_selected;
      }
    }

    $sql2 = "SELECT `key_slno`,`key_title` FROM `keyindicator`,`criterion` WHERE keyindicator.key_crite_slno = criterion.crite_slno AND criterion.crite_slno = $key";
    $result = $this->database->query($sql2);
    $result2 = $this->database->result;
    while ($row2 = mysqli_fetch_assoc($result2)) {
      array_push($key1,$row2);
    }

    // print_r($prev_key);
    if (sizeof($key1) == sizeof($key_selected)) {
      for ($j=0; $j < sizeof($key_selected); $j++) {
        // if($i==2) {
        //   echo "<br>";
        //   $i=0;
        // }
        echo "<div class='col-md-8'><input id='key_indicator[]' type='checkbox' name ='key_indicator[]' value='".$key_selected[$j]['key_slno']."' checked> ".$key_selected[$j]['key_title']." </div>";
      }
    }
    else {

        foreach ($key1 as $a) {
          if (!in_array($a,$key_selected)) {
            array_push($res1,$a);
          }
        }

        for ($j=0; $j < sizeof($key_selected); $j++) {
          // if($i==2) {
          //   echo "<br>";
          //   $i=0;
          // }
          echo "<div class='col-md-8'><input id='key_indicator[]' type='checkbox' name ='key_indicator[]' value='".$key_selected[$j]['key_slno']."' checked> ".$key_selected[$j]['key_title']." </div>";
        }
        for ($k=0; $k < sizeof($res1); $k++) {
          // if($i==2) {
          //   echo "<br>";
          //   $i=0;
          // }
          echo "<div class='col-md-8'><input id='key_indicator[]' type='checkbox' name ='key_indicator[]' value='".$res1[$k]['key_slno']."'> ".$res1[$k]['key_title']." </div>";
        }
    }

  }

  function PrevCrit($id) {

    $prev_crit = array();
    $crit_selected = array();
    $crit1 = array();
    $re1 = array();

    $sql = "SELECT `naac_crite_slno` FROM `naccassigntable` WHERE `naac_slno` = $id";
    $result = $this->database->query($sql);
    $result = $this->database->result;
    $row = mysqli_fetch_array($result);
    $prev_crit = explode(',', $row['naac_crite_slno']);

    foreach ($prev_crit as $pc) {
      $sql1 = "SELECT `crite_slno`,`crite_title` FROM `criterion` WHERE `crite_slno` = ".$pc;
      $result = $this->database->query($sql1);
      $result1 = $this->database->result;
      while($row1 = mysqli_fetch_assoc($result1)) {
        array_push($crit_selected,$row1);
        $_SESSION['CritPrevSelect'] = $crit_selected;
      }
    }

    $sql2 = "SELECT `crite_slno`,`crite_title` FROM `criterion`";
    $result = $this->database->query($sql2);
    $result2 = $this->database->result;
    while ($row2 = mysqli_fetch_assoc($result2)) {
      array_push($crit1,$row2);
    }

    if (sizeof($crit1) == sizeof($crit_selected)) {
      for ($j=0; $j < sizeof($crit_selected); $j++) {

        echo "<div class='col-md-8'><input id='criteria[]' type='checkbox' name ='criteria[]' value='".$crit_selected[$j]['crite_slno']."' checked> ".$crit_selected[$j]['crite_title']." </div>";
      }
    }

    else {

        foreach ($crit1 as $a) {
          if (!in_array($a,$crit_selected)) {
            array_push($re1,$a);
          }
        }

        for ($j=0; $j < sizeof($crit_selected); $j++) {

          echo "<div class='col-md-8'><input id='criteria[]' type='checkbox' name ='criteria[]' value='".$crit_selected[$j]['crite_slno']."' checked> ".$crit_selected[$j]['crite_title']." </div>";
        }
        for ($k=0; $k < sizeof($re1); $k++) {

          echo "<div class='col-md-8'><input id='criteria[]' type='checkbox' name ='criteria[]' value='".$re1[$k]['crite_slno']."'> ".$re1[$k]['crite_title']." </div>";
        }
    }

  }

}

?>
