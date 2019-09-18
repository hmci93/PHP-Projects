<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
    $(document).ready( function () {
      $('#naccassigntableFormDisplay').DataTable();
    });
    </script>

    <script type="text/javascript">
        function showCriteria(str) {
          var a = document.getElementById('user').value;
            var b = document.getElementById('criteriaDiv');
            if (a == '') {
              b.style.display = "none";
              document.getElementById('showButton').disabled = true;
              document.getElementById('keyDiv').style.display = "none";
              document.getElementById('metricDiv').style.display = "none";
            }
            else {
              b.style.display = "block";
            }
          if (str.length == 0) {
            document.getElementById("criteria").innerHTML = "";
            return;
          } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("criteria").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "../uiProcess/adminDisplayProcess.php?c=" + str, true);
            xmlhttp.send();
          }
        }
    </script>

    <script type="text/javascript">
        function showKey(str) {
          var a = document.getElementById('criteria_select').value;
            var b = document.getElementById('keyDiv');
            if (a == '') {
              b.style.display = "none";
              document.getElementById('showButton').disabled = true;
              document.getElementById('metricDiv').style.display = "none";
            }
            else {
              b.style.display = "block";
            }
          if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
          } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "../uiProcess/adminDisplayProcess.php?k=" + str, true);
            xmlhttp.send();
          }
        }
    </script>

    <script type="text/javascript">
    function showMetric(st) {
      var c = document.getElementById('key_select').value;
      var d = document.getElementById('metricDiv');
      if (c == '') {
        d.style.display = "none";
        document.getElementById('showButton').disabled = true;
      }
      else {
        d.style.display = "block";
        document.getElementById('showButton').disabled = false;
      }

      if (st.length == 0) {
        document.getElementById("metricData").innerHTML = "";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("metricData").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "../uiProcess/adminDisplayProcess.php?m=" + st, true);
        xmlhttp.send();
      }
    }
    </script>


  </head>
  <body>
    <div class="container">

      <?php

// $final_per_arr = array();

      if (isset($_SESSION['empl_id'])) {

        $empl_id = $_SESSION['empl_id'];
        include_once("../class/class.adminDisplay.php");

        $tb_handle = new adminDisplay();
        $user = $tb_handle->User($empl_id);
        $c_option = json_decode($user);

        // $final_string = '';

        // include_once("../uiProcess/userPermissionProcess.php");

        // if (!empty($_SESSION['per_arr'])) {
        //   $sample = json_encode($_SESSION['per_arr']);
        //   $final_string = implode(',', $sample);
        //   echo $final_string;
          // echo json_encode($_SESSION['per_arr']);
          // array_push($final_per_arr,$_SESSION['per_arr']);
          //   echo json_encode($final_per_arr);
        // else {
        //   $final_per_arr = array();
        //   array_push($final_per_arr,$_SESSION['per_arr']);
        //     echo json_encode($final_per_arr);
        // }


      ?>

      <div class="row">
        <center><h2>Set Permissions For Users</h2></center>
      </div><br><br>
      <div id="form_input" class="col-lg-12" >
        <form name="user_permission_form" action="../uiProcess/userPermissionAllocationProcess.php" method="post">
        <div class="row">
          <div class="form-group col-md-4 text-center">
            <label for="user" class="col-form-label">Choose User:</label>
          </div>
          <div class="form-group col-md-8">
            <select id="user" class="form-control" name="user" onchange="showCriteria(this.value)" required>
              <option value="">--------------------------------------------------------Select User-----------------------------------------------------</option>
              <?php
              foreach ($c_option as $key) {
                ?>
                <option value="<?php echo $key->empl_id ; ?>"><?php echo $key->empl_name; ?></option>
                <?php
             }
              ?>
            </select>
          </div>
        </div>

        <div id="criteriaDiv" class="row" style="display: none;">
          <div class="form-group col-md-4 text-center">
            <label for="criteria" class="col-form-label">Choose Criteria:</label>
          </div>
          <div class="form-group col-md-8" id="criteria">

          </div>
        </div>

        <div id="keyDiv" class="row" style="display: none;">
          <div class="form-group col-md-4 text-center">
            <label for="key_indicator" class="col-form-label">Choose Key Indicator:</label>
          </div>
          <div class="form-group col-md-8" id="txtHint">

          </div>
        </div>

        <div id="metricDiv" class="row" style="display: none;">
          <div class="form-group col-md-4 text-center">
            <label for="metric" class="col-form-label">Choose Metric:</label>
          </div>
          <div class="form-group col-md-8">
            <div class="well well-lg" id="metricData">

            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-4"></div>
          <div class="form-group col-md-8">
            <input id="showButton" class="btn btn-primary btn-md btn-block" type="submit" name="submit" value="SUBMIT" disabled>
          </div>
        </div>

      </form>
    </div>
    <hr>
    <div class="table">
      <table id="naccassigntableFormDisplay" class="table table-hover">
        <thead>
          <tr>
            <th scope="col">NAAC Employee ID</th>
            <th scope="col">NAAC Criterion SL. No.</th>
            <th scope="col">NAAC Key Indicator SL. No.</th>
            <th scope="col">NAAC Metric SL. No.</th>
            <th scope="col">NAAC Metric Block</th>
            <th scope="col">Action1</th>
            <th scope="col">Action2</th>
            <th scope="col">Action3</th>
          </tr>
        </thead>
          <?php
            include_once("../class/class.naccassigntable.php");
            $disp_handle  = new naccassigntable();
            $disp_handle-> selectDisplay();
          ?>
      </table>
    </div>

<!-- ------Edit Metrics Permissions---------- -->
    <!-- <div class="row">
      <center><h2>Set Permissions For Users</h2></center>
    </div><br><br>
    <div id="form_input" class="col-lg-12" >
      <form name="user_permission_form" action="../uiProcess/userPermissionAllocationProcess.php" method="post">
      <div class="row">
        <div class="form-group col-md-4 text-center">
          <label for="user" class="col-form-label">Choose User:</label>
        </div>
        <div class="form-group col-md-8">
          <select id="user" class="form-control" name="user" onchange="showCriteria(this.value)" required>
            <option value="">--------------------------------------------------------Select User-----------------------------------------------------</option> -->
            <?php
          //foreach ($c_option as $key) {
              ?>
              <!-- <option value="<?php // echo $key->empl_id ; ?>"><?php// echo $key->empl_name; ?></option> -->
              <?php
           //}
            ?>
          <!-- </select>
        </div>
      </div>

      <div id="criteriaDiv" class="row" style="display: none;">
        <div class="form-group col-md-4 text-center">
          <label for="criteria" class="col-form-label">Choose Criteria:</label>
        </div>
        <div class="form-group col-md-8" id="criteria">

        </div>
      </div>

      <div id="keyDiv" class="row" style="display: none;">
        <div class="form-group col-md-4 text-center">
          <label for="key_indicator" class="col-form-label">Choose Key Indicator:</label>
        </div>
        <div class="form-group col-md-8" id="txtHint">

        </div>
      </div>

      <div id="metricDiv" class="row" style="display: none;">
        <div class="form-group col-md-4 text-center">
          <label for="metric" class="col-form-label">Choose Metric:</label>
        </div>
        <div class="form-group col-md-8">
          <div class="well well-lg" id="metricData">

          </div>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-4"></div>
        <div class="form-group col-md-8">
          <input id="showButton" class="btn btn-primary btn-md btn-block" type="submit" name="submit" value="SUBMIT" disabled>
        </div>
      </div>

    </form>
  </div>

  <!-- ------Edit Key Indicator Permissions---------- -->
      <!-- <div class="row">
        <center><h2>Set Permissions For Users</h2></center>
      </div><br><br>
      <div id="form_input" class="col-lg-12" >
        <form name="user_permission_form" action="../uiProcess/userPermissionAllocationProcess.php" method="post">
        <div class="row">
          <div class="form-group col-md-4 text-center">
            <label for="user" class="col-form-label">Choose User:</label>
          </div>
          <div class="form-group col-md-8">
            <select id="user" class="form-control" name="user" onchange="showCriteria(this.value)" required>
              <option value="">--------------------------------------------------------Select User-----------------------------------------------------</option> -->
              <?php
      //        foreach ($c_option as $key) {
                ?>
                <!-- <option value="<?php// echo $key->empl_id ; ?>"><?php// echo $key->empl_name; ?></option> -->
                <?php
             //}
              ?>
            <!-- </select>
          </div>
        </div>

        <div id="criteriaDiv" class="row" style="display: none;">
          <div class="form-group col-md-4 text-center">
            <label for="criteria" class="col-form-label">Choose Criteria:</label>
          </div>
          <div class="form-group col-md-8" id="criteria">

          </div>
        </div>

        <div id="keyDiv" class="row" style="display: none;">
          <div class="form-group col-md-4 text-center">
            <label for="key_indicator" class="col-form-label">Choose Key Indicator:</label>
          </div>
          <div class="form-group col-md-8" id="txtHint">

          </div>
        </div>

        <div id="metricDiv" class="row" style="display: none;">
          <div class="form-group col-md-4 text-center">
            <label for="metric" class="col-form-label">Choose Metric:</label>
          </div>
          <div class="form-group col-md-8">
            <div class="well well-lg" id="metricData">

            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-4"></div>
          <div class="form-group col-md-8">
            <input id="showButton" class="btn btn-primary btn-md btn-block" type="submit" name="submit" value="SUBMIT" disabled>
          </div>
        </div>

      </form>
    </div> -->
    </div>
  </body>
</html>

<?php



// while (!isset($_POST['f_submit'])) {




// $final_per_arr = $final_per_arr + $per_arr;

}
// echo json_encode($final_per_arr);
//
//   // echo json_encode($per_arr);
//   // if (count($per_arr)==0) {
//   //   array_merge_recursive($final_per_arr,$per_arr);
//   // echo "<br>".json_encode($final_per_arr);
//   // }
//   // if (count($per_arr)>0) {
//   //   array_merge_recursive($final_per_arr,$per_arr);
//   // echo "<br>".json_encode($final_per_arr);
//   // }

?>
