<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script> -->
    <script type="text/javascript">
        function showKey(str) {
          var a = document.getElementById('criteria_select').value;
            var b = document.getElementById('keyDiv1');
            if (a == '') {
              b.style.display = "none";
              document.getElementById('showButton').disabled = true;
              document.getElementById('metricDiv1').style.display = "none";
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
      var d = document.getElementById('metricDiv1');
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
        xmlhttp.open("GET", "../uiProcess/adminDisplayProcess.php?ms=" + st, true);
        xmlhttp.send();
      }
    }
    </script>

    <script type="text/javascript">
        function showKeyindic(s) {
          var a = document.getElementById('criteria_select1').value;
            var b = document.getElementById('keyDiv2');
            if (a == '') {
              b.style.display = "none";
              document.getElementById('showButton2').disabled = true;
            }
            else {
              b.style.display = "block";
              document.getElementById('showButton2').disabled = false;
            }
          if (s.length == 0) {
            document.getElementById("txt2").innerHTML = "";
            return;
          } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txt2").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "../uiProcess/adminDisplayProcess.php?ki=" + s, true);
            xmlhttp.send();
          }
        }
    </script>

  </head>
  <body>
    <?php
       // $id=$_GET['naac_slno'];
       // if(!isset($_GET['naac_slno']))	 { echo 'Invalid_URL'; return true;}
       include_once("../class/class.naccassigntable.php");
       include_once("../class/class.adminDisplay.php");

    ?>

    <br><br>
		<div id="main" class="container">

<!------De-allocate Metrics-------->
      <?php
        if (isset($_GET['naac_slno_m']) && isset($_GET['naac_user'])) {
          $id=$_GET['naac_slno_m'];
          $_SESSION['naac_user'] = $_GET['naac_user'];
          $_SESSION['id'] = $id;
          $tb_handle = new naccassigntable();
          $tb_handle->select($id);


          ?>

      <div class="row">
        <center><h2>De-allocate Metrics Permissions For Users</h2></center>
      </div><br><br>
			<div id="form_input" class="col-lg-12" >
				<form name="naccassigntable_update_frm" action="../uiProcess/adminDisplayUpdateProcess.php" method="post">

					<input type="hidden" name="naac_slno" value="<?php echo $tb_handle->getnaac_slno();?>">

          <div id="criteriaDiv" class="row">
            <div class="form-group col-md-4 text-center">
              <label for="criteria" class="col-form-label">Choose Criteria:</label>
            </div>
            <div class="form-group col-md-8" id="criteria">
              <select id="criteria_select" class="form-control" name="criteria_select" onchange="showKey(this.value)" required>
                <option value="">-----------------------------------------------------Select Criteria----------------------------------------------------</option>
                <?php
                $tb_handle1 = new adminDisplay();
                $tb_handle1->Criteria();
                ?>
              </select>
            </div>
          </div>

          <div id="keyDiv1" class="row" style="display: none;">
            <div class="form-group col-md-4 text-center">
              <label for="key_indicator" class="col-form-label">Choose Key Indicator:</label>
            </div>
            <div class="form-group col-md-8" id="txtHint">

            </div>
          </div>

          <div id="metricDiv1" class="row" style="display: none;">
            <div class="form-group col-md-4 text-center">
              <label for="metric" class="col-form-label">Choose Metric:</label>
            </div>
            <div class="form-group col-md-8">
              <div class="well well-lg" id="metricData">

              </div>
            </div>
          </div>

					<div class="row">
						<div class="form-group col-md-4">
						</div>

						<div class="form-group col-md-4">
							<input id="showButton" type="submit" class="btn btn-primary btn-md btn-block" name="submitM" value="UPDATE" disabled>
						</div>

						<div class="form-group col-md-4">
							<a href="adminDisplayFormat.php" class="btn btn-primary btn-md btn-block">BACK</a>
						</div>
					</div>

				</form>
			</div>
      <?php
      }
      ?>

<!------------------------------------------------------->

<!---------De-allocate Key Indicator-------------------->

<?php
  if (isset($_GET['naac_slno_k']) && isset($_GET['naac_user'])) {
    $id1=$_GET['naac_slno_k'];
    $_SESSION['naac_user1'] = $_GET['naac_user'];
    $_SESSION['id1'] = $id1;
    $tb_handle2 = new naccassigntable();
    $tb_handle2->select($id1);

    ?>


<div class="row">
  <center><h2>De-allocate Key Indicator Permissions For Users</h2></center>
</div><br><br>
<div id="form_input" class="col-lg-12" >
  <form name="naccassigntable_update_frm" action="../uiProcess/adminDisplayUpdateProcess.php" method="post">

    <input type="hidden" name="naac_slno1" value="<?php echo $tb_handle2->getnaac_slno();?>">

    <div id="criteriaDiv" class="row">
      <div class="form-group col-md-4 text-center">
        <label for="criteria" class="col-form-label">Choose Criteria:</label>
      </div>
      <div class="form-group col-md-8" id="criteria">
        <select id="criteria_select1" class="form-control" name="criteria_select1" onchange="showKeyindic(this.value)" required>
          <option value="">-----------------------------------------------------Select Criteria----------------------------------------------------</option>
          <?php
          $tb_handle3 = new adminDisplay();
          $tb_handle3->Criteria();
          ?>
        </select>
      </div>
    </div>

    <div id="keyDiv2" class="row" style="display: none;">
      <div class="form-group col-md-4 text-center">
        <label for="key_indicator" class="col-form-label">Choose Key Indicator:</label>
      </div>
      <div class="col-md-8">
        <div class="well well-lg" id="txt2">

        </div>
      </div>
    </div>



    <div class="row">
      <div class="form-group col-md-4">
      </div>

      <div class="form-group col-md-4">
        <input id="showButton2" type="submit" class="btn btn-primary btn-md btn-block" name="submitK" value="UPDATE" disabled>
      </div>

      <div class="form-group col-md-4">
        <a href="adminDisplayFormat.php" class="btn btn-primary btn-md btn-block">BACK</a>
      </div>
    </div>

  </form>
</div>


<?php
}
?>

<!---------De-allocate Criteria-------------------->

<?php
  if (isset($_GET['naac_slno_c']) && isset($_GET['naac_user'])) {
    $id2=$_GET['naac_slno_c'];
    $_SESSION['naac_user2'] = $_GET['naac_user'];
    $_SESSION['id2'] = $id2;
    $tb_handle4 = new naccassigntable();
    $tb_handle4->select($id2);

    ?>


<div class="row">
  <center><h2>De-allocate Criteria Permissions For Users</h2></center>
</div><br><br>
<div id="form_input" class="col-lg-12" >
  <form name="naccassigntable_update_frm" action="../uiProcess/adminDisplayUpdateProcess.php" method="post">

    <input type="hidden" name="naac_slno2" value="<?php echo $tb_handle4->getnaac_slno();?>">

    <div id="criteriaDiv" class="row">
      <div class="form-group col-md-4 text-center">
        <label for="criteria" class="col-form-label">Choose Criteria:</label>
      </div>
      <div class="form-group col-md-8" id="txt3">
        <?php
          $tb_handle5 = new adminDisplay();
          $tb_handle5->PrevCrit($id2);
        ?>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-4">
      </div>

      <div class="form-group col-md-4">
        <input id="showButton3" type="submit" class="btn btn-primary btn-md btn-block" name="submitC" value="UPDATE">
      </div>

      <div class="form-group col-md-4">
        <a href="adminDisplayFormat.php" class="btn btn-primary btn-md btn-block">BACK</a>
      </div>
    </div>

  </form>
</div>


<?php
}
?>

		</div>

  </body>
</html>
