<?php
  include_once("class.database.php");

  /**
   *
   */
  class display
  {
    //VARIABLE DECLARATION
  	 var $crite_slno_arr = array();

     //CONSTRUCTOR CREATED
    function display() {
      $this->database = new Database();
    }

    function chooseCriteria($empl_id) {
      $crite_title_arr = array();

      $sql = "SELECT naac_crite_slno FROM `naccassigntable`,`users` WHERE naccassigntable.naac_EmpId=users.empl_id AND naac_EmpId = $empl_id";
      $result = $this->database->query($sql);
    	$result = $this->database->result;
      while($row = mysqli_fetch_array($result)) {
        // $naac_crite_slno = $row->naac_crite_slno;
        $crite_slno_arr=explode(",",$row['naac_crite_slno']);
        foreach ($crite_slno_arr as $key) {
          $sql1 = "SELECT crite_slno,crite_title FROM `criterion` WHERE crite_slno = $key";
          $result =$this->database->query($sql1);
          $result =$this->database->result;
          while ($row1 = mysqli_fetch_assoc($result)) {
            array_push($crite_title_arr,$row1);
          }
        }
        // print_r($crite_title_arr);
      }
      return json_encode($crite_title_arr);
    }

    // function chooseKeyIndicator($criteria) {
    //   $keyIndicator = array();
    //
    //   $sql = "SELECT key_slno,key_title FROM `keyindicator`,`criterion` WHERE keyindicator.key_crite_slno = criterion.crite_slno AND keyindicator.key_crite_slno = $criteria";
    //   $result =$this->database->query($sql);
    // 	$result =$this->database->result;
    //   while($row=mysqli_fetch_array($result)) {
    //     array_push($keyIndicator,$row);
    //     // $naac_crite_slno = $row->naac_crite_slno;
    //     // $crite_slno_arr=explode(",",$row['naac_crite_slno']);
    //     // foreach ($crite_slno_arr as $key) {
    //     //   $sql1 = "SELECT crite_title FROM `criterion` WHERE crite_slno = $key";
    //     //   $result =$this->database->query($sql1);
    //     //   $result =$this->database->result;
    //     //   while ($row1 = mysqli_fetch_assoc($result)) {
    //     //     array_push($crite_title_arr,$row1['crite_title']);
    //     //   }
    //     //   // echo json_encode($crite_title_arr);
    //     // }
    //   }
    //   // echo $this->database->host;
    //   // echo json_encode($crite_slno_arr);
    //   // print_r($keyIndicator);
    //   return $keyIndicator;
    // }

    function comboIndicator($criteria) {

      $sql = "SELECT key_slno,key_title FROM `keyindicator`,`criterion` WHERE keyindicator.key_crite_slno = criterion.crite_slno AND keyindicator.key_crite_slno = $criteria";
      $result = $this->database->query($sql);
    	$result = $this->database->result;
      while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row['key_slno']."'>".$row['key_title']."</option>";

      }
    }

    function comboMetric($metric) {

      $sql = "SELECT `metric_slno`,`metric_no` FROM `metrictable`,`keyindicator` WHERE metrictable.metric_key_slno = keyindicator.key_slno AND metrictable.metric_key_slno = $metric";
      $result = $this->database->query($sql);
    	$result = $this->database->result;
      while($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row['metric_slno']."'>".$row['metric_no']."</option>";

      }
    }

    function retrieveData($data) {

      $sql = "SELECT `metric_no`,`metric_details` FROM `metrictable` WHERE `metric_slno`= $data";
      $result = $this->database->query($sql);
      $result = $this->database->result;
      while($row = mysqli_fetch_array($result)) {
        echo "<td>".$row['metric_no']."</td><td>".$row['metric_details']."</td>";

      }
    }

    function extrUserName($empl_id) {

      $sql = "SELECT `empl_name` FROM `users` WHERE `empl_id` = $empl_id";
      $result = $this->database->query($sql);
      $result1 = $this->database->result;
      $row = mysqli_fetch_array($result1);
      echo $row['empl_name'];
    }

    function permittedCrit($empl_id) {
      $crite_title_arr = array();

      $sql = "SELECT naac_crite_slno FROM `naccassigntable`,`users` WHERE naccassigntable.naac_EmpId=users.empl_id AND naac_EmpId = $empl_id";
      $result = $this->database->query($sql);
    	$result1 = $this->database->result;
      while($row = mysqli_fetch_array($result1)) {
        $crite_slno_arr=explode(",",$row['naac_crite_slno']);
        foreach ($crite_slno_arr as $key) {
          $sql1 = "SELECT crite_slno,crite_title,crite_descrip FROM `criterion` WHERE crite_slno = $key";
          $result =$this->database->query($sql1);
          $result2 =$this->database->result;
          while ($row1 = mysqli_fetch_assoc($result2)) {
            echo "<tr><td>".$row1['crite_title']."</td><td>".$row1['crite_descrip']."</td><td><a href='../ui/viewDisplayFormat.php?c_slno=".$row1['crite_slno']."&c_title=".$row1['crite_title']."' class='btn btn-primary'>View</a></td><td><a href='' class='btn btn-primary'>Edit</a></td></tr>";
          }
        }
      }
    }

    function permittedKey($empl_id) {
      $key_title_arr = array();

      $sql = "SELECT naac_metric_reserved1 FROM `naccassigntable`,`users` WHERE naccassigntable.naac_EmpId=users.empl_id AND naac_EmpId = $empl_id";
      $result = $this->database->query($sql);
    	$result1 = $this->database->result;
      while($row = mysqli_fetch_array($result1)) {
        $key_arr=explode(",",$row['naac_metric_reserved1']);
        foreach ($key_arr as $key) {
          $sql1 = "SELECT key_indicator,key_title FROM `keyindicator` WHERE key_slno = $key";
          $result =$this->database->query($sql1);
          $result2 =$this->database->result;
          while ($row1 = mysqli_fetch_assoc($result2)) {
            echo "<tr><td>".$row1['key_indicator']."</td><td>".$row1['key_title']."</td><td><a href='' class='btn btn-primary'>View</a></td><td><a href='' class='btn btn-primary'>Edit</a></td></tr>";
          }
        }
      }
    }

    function permittedMetrics($empl_id) {
      $metric_arr = array();

      $sql = "SELECT naac_metric_slno FROM `naccassigntable`,`users` WHERE naccassigntable.naac_EmpId=users.empl_id AND naac_EmpId = $empl_id";
      $result = $this->database->query($sql);
    	$result1 = $this->database->result;
      while($row = mysqli_fetch_array($result1)) {
        $metric_arr=explode(",",$row['naac_metric_slno']);
        foreach ($metric_arr as $key) {
          $sql1 = "SELECT metric_no,metric_details FROM `metrictable` WHERE metric_slno = $key";
          $result =$this->database->query($sql1);
          $result2 =$this->database->result;
          while ($row1 = mysqli_fetch_assoc($result2)) {
            echo "<tr><td>".$row1['metric_no']."</td><td>".$row1['metric_details']."</td><td><a href='' class='btn btn-primary'>View</a></td><td><a href='' class='btn btn-primary'>Edit</a></td></tr>";
          }
        }
      }
    }

    function viewCrite($slno,$empl_id) {
      $pk = array();
      $pm = array();
      $kc = array();
      $ktc = array();
      $a1 = array();
      $mk = array();

      $sql = "SELECT `key_slno`,`key_title` FROM `keyindicator` WHERE key_crite_slno = $slno";
      $result = $this->database->query($sql);
      $res = $this->database->result;
      while ($row = mysqli_fetch_assoc($res)) {
        array_push($kc,$row);
        // array_push($ktc,$row['key_title']);
      }

      $sql1 = "SELECT `naac_metric_reserved1`,`naac_metric_slno` FROM `naccassigntable` WHERE `naac_EmpId`= $empl_id";
      $result = $this->database->query($sql1);
      $res1 = $this->database->result;
      while ($row1 = mysqli_fetch_array($res1)) {
        $pk = explode(',',$row1['naac_metric_reserved1']);
        $pm = explode(',',$row1['naac_metric_slno']);
        // array_push($pk,$row1['naac_metric_reserved1']);
        // array_push($pm,$row1['naac_metric_slno']);
      }

      for ($i=0; $i < sizeof($kc); $i++) {
          if (in_array($kc[$i]['key_slno'],$pk)) {
            array_push($a1,$kc[$i]);
          }
      }

      for ($j=0; $j < sizeof($a1); $j++) {
        $sql2 = "SELECT `metric_slno` FROM `metrictable` WHERE `metric_key_slno`= ".$a1[$j]['key_slno'];
        $result = $this->database->query($sql2);
        $res2 = $this->database->result;
        while ($row2 = mysqli_fetch_assoc($res2)) {
          if (in_array($row2['metric_slno'],$pm)) {
            $sql3 = "SELECT `metric_no`,`metric_details` FROM `metrictable` WHERE `metric_slno`= ".$row2['metric_slno'];
            $result = $this->database->query($sql3);
            $res3 = $this->database->result;
            while ($row3 = mysqli_fetch_assoc($res3)) {
              array_push($mk,$row3);
              // print_r($a1[$j]['key_title']);
            }
            // array_push($mk,$row2['metric_slno']);
          }
          // array_push($mk,$row2);
        }
      }


      // $a1 = array_intersect($pk,$kc);

      // foreach ($a1 as $a11) {
      //   $sql2 = "SELECT `metric_no`,`metric` FROM `metrictable` WHERE `metric_key_slno`= $a11";
      //   $result = $this->database->query($sql2);
      //   $res2 = $this->database->result;
      //   while ($row2 = mysqli_fetch_array($res2)) {
      //     array_push($mk,$row2);
      //   }
      // }

      // print_r(array_intersect($pk,$kc));
      // print_r($mk);

    }

    function viewKey($slno) {

    }

  } //end of class

?>
