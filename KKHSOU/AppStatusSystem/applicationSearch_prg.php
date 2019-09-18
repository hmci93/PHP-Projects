<?php
  include 'conn1.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Application Status</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6Ld3yq4UAAAAAGR0LlUJDvPjuQ6HktwHXMoRN7Uj"></script>

    <script>
        grecaptcha.ready(function() {
          grecaptcha.execute('6Ld3yq4UAAAAAGR0LlUJDvPjuQ6HktwHXMoRN7Uj', { action: 'applicationSearch_prg' }).then(function (token) {
            var recaptchaResponse = document.getElementById('recaptchaResponse');
            recaptchaResponse.value = token;
          });
        });
    </script>



    <style>
      #main {
        padding: 30px;
      }
      thead,th,td {
        text-align: center;
      }
    </style>

  </head>
  <body>
    <div id="main" class="container">

      <div class="text-center">
        <h2>Check Application Status</h2>
      </div>
      <br>

    <div id="form_input" class="col-lg-12" >

        <form action="applicationSearch_prg.php" method="post">
          <div class="row text-center">

            <div class="form-group col-md-4">
              <label for="sl_no" class="col-form-label">Enter SL. No.</label>
                <input type="text" name="sl_no" class="form-control" placeholder="Enter Sl. No.">
            </div>
            <div class="form-group col-md-1">
              <br><br>
              <h5>OR</h5>
            </div>

            <div class="form-group col-md-4">
              <label for="date" class="col-form-label">Select Date</label>
                <input type="date" name="date" class="form-control">
            </div>

            <div class="form-group col-md-2" style="margin-top: 2.3em;">
                <button type="submit" name="submit" class="btn btn-primary btn-md btn-block">SEARCH</button>
            </div>
              <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
          </div>
        </form>
      </div>

      <!-- Another Form Design -->
      <!-- <div id="form_input" class="col-lg-12" style="padding-left: 300px; padding-right: 300px;">

          <form action="applicationSearch_prg.php" method="post">
            <div class="row text-center">

              <div class="form-group col-md-12">
                <label for="sl_no" class="col-form-label">Enter SL. No.</label>
                  <input type="text" name="sl_no" class="form-control" placeholder="Enter Sl. No.">
              </div>
            </div>

            <div class="row text-center">
              <div class="form-group col-md-12">
                <br><br>
                <h5>OR</h5>
              </div>
            </div>

            <div class="row text-center">
              <div class="form-group col-md-12">
                <label for="date" class="col-form-label">Select Date</label>
                  <input type="date" name="date" class="form-control">
              </div>
            </div>

            <div class="row text-center">
              <div class="form-group col-md-12" style="margin-top: 2.3em;">
                  <button type="submit" name="submit" class="btn btn-primary btn-md btn-block">SEARCH</button>
              </div>
            </div>
              <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
          </form>
        </div> -->

        <?php
        //Check if form was submitted:
          if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

            // Build POST request:
            $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
            $recaptcha_secret = '6Ld3yq4UAAAAAO20wQKLeZX7d5ql8O8oGXSRDyea';
            $recaptcha_response = $_POST['recaptcha_response'];

            //Make and decode POST request:
            $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
            $recaptcha = json_decode($recaptcha);

            //Take action based on the score returned:
            if ($recaptcha->score >= 0.5) {
              // Verified---Show Details
              if (isset($_POST['submit'])) {
                  $sl_no = $_POST['sl_no'];
                  $date = $_POST['date'];
                  $nDate = date("d-m-Y",  strtotime($date));

            //------------Both Fields Empty------------
                  if(empty($sl_no) && empty($date)) {
                    ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <h5>OOPS!! <strong>Atleast One Field Must Be Entered</strong>.</h5>
                    </div>
                    <?php
                  }
            //-----------------------------------------

            //-------------SL. No. Empty---------------
                  else if (empty($sl_no) && !empty($date)) {


                    $sql = "SELECT * FROM app_details WHERE letter_date LIKE '$nDate%' AND block_status != 1";
                    $exe = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($exe) == 0) {
                      ?>
                      <div class="alert alert-danger text-center" role="alert">
                          <h5>OOPS!! Entered Date is <strong>Invalid</strong>.</h5>
                      </div>
                      <?php
                    }
                    else {
                      ?>
                      <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">SL. No.</th>
                            <th scope="col">Letter Date</th>
                            <th scope="col">From Whom Received</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                      <?php
                      while ($row = mysqli_fetch_array($exe)) {
                        $ad_id = $row['ad_id'];
                        $sl_no1 = $row['sl_no'];
                        $letter_date = $row['letter_date'];
                        $received_from = $row['received_from'];
                        ?>
                                <tr>
                                  <th scope="row"><?php echo $sl_no1; ?></th>
                                  <td><?php echo $letter_date; ?></td>
                                  <td><?php echo $received_from; ?></td>
                                  <td><button type="button" class="btn btn-primary b1" id="<?php echo $ad_id; ?>">View Details</button></td>
                                </tr>
                        <?php
                      }
                      ?>
                    </table>
                  </div>
                      <?php
                    }
                  }
          //--------------------------------------------------------

          //-----------Date Empty-----------------------------------
                  else if (empty($date) && !empty($sl_no) && !preg_match('/^[ A-Za-z0-9\/-]*$/', $sl_no)) {
                    $sql1 = "SELECT * FROM app_details WHERE sl_no = '$sl_no'  AND block_status != 1";
                    $exe1 = mysqli_query($conn,$sql1);
                    if (mysqli_num_rows($exe1) == 0) {
                      ?>
                      <div class="alert alert-danger text-center" role="alert">
                          <h5>OOPS!! Entered SL. No. is <strong>Invalid</strong>.</h5>
                      </div>
                      <?php
                    }
                    else {
                      ?>
                      <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">SL. No.</th>
                            <th scope="col">Letter Date</th>
                            <th scope="col">From Whom Received</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                      <?php
                      while ($row1 = mysqli_fetch_array($exe1)) {
                        $ad_id = $row1['ad_id'];
                        $sl_no1 = $row1['sl_no'];
                        $letter_date = $row1['letter_date'];
                        $received_from = $row1['received_from'];

                        ?>
                              <tr>
                                  <th scope="row"><?php echo $sl_no1; ?></th>
                                  <td><?php echo $letter_date; ?></td>
                                  <td><?php echo $received_from; ?></td>
                                  <td><button type="button" class="btn btn-primary b1" id="<?php echo $ad_id; ?>">View Details</button></td>
                                </tr>
                        <?php
                      }
                      ?>
                    </table>
                  </div>
                      <?php
                    }
                  }
          //----------------------------------------------------------------

          //------------Both Fields Present---------------------------------
                  else {
                    if (!empty($date) && !preg_match('/^[ A-Za-z0-9\/-]*$/', $sl_no)) {
                    ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <h5>OOPS!! Entered Letter No. is <strong>Invalid</strong>.</h5>
                    </div>
                    <?php
                    }
                    else {
                    $sql2 = "SELECT * FROM app_details WHERE sl_no = '$sl_no' AND letter_date LIKE '$nDate%'";
                    $exe2 = mysqli_query($conn,$sql2);
                    if (mysqli_num_rows($exe2) == 0) {
                      ?>
                      <div class="alert alert-danger text-center" role="alert">
                          <h5>OOPS!! Entered SL. No. and Date are <strong>Invalid</strong>.</h5>
                      </div>
                      <?php
                    }
                    else {
                      ?>
                      <div class="table-responsive">
                      <table class="table table-hover">
                        <thead class="text-center">
                          <tr>
                            <th scope="col">SL. No.</th>
                            <th scope="col">Letter Date</th>
                            <th scope="col">From Whom Received</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                      <?php
                      while ($row2 = mysqli_fetch_array($exe2)) {
                        $ad_id = $row2['ad_id'];
                        $sl_no1 = $row2['sl_no'];
                        $letter_date = $row2['letter_date'];
                        $received_from = $row2['received_from'];

                        ?>
                                <tr>
                                  <th scope="row"><?php echo $sl_no1; ?></th>
                                  <td><?php echo $letter_date; ?></td>
                                  <td><?php echo $received_from; ?></td>
                                  <td><button type="button" class="btn btn-primary b1" id="<?php echo $ad_id; ?>">View Details</button></td>
                                </tr>
                        <?php
                      }
                      ?>
                    </table>
                  </div>
                      <?php
                  }
                }
              }
                ?>
                <!-- Modal -->
                <div class="modal fade" id="viewDetails" tabindex="-1" role="dialog" aria-labelledby="viewDetailsTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="viewDetailsTitle">Application Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="form-group col-md-6 text-center">
                            <label for="enroll_no" class="col-form-label">SL. No.</label>
                            <input type="text" id="m_sl_no" class="form-control" value="" readonly>
                          </div>

                          <div class="form-group col-md-6 text-center">
                            <label for="enroll_no" class="col-form-label">Letter Date</label>
                            <input type="text" id="m_l_date" class="form-control" value="" readonly>
                          </div>
                        </div>
                        <hr>

                        <div class="row">
                          <div class="form-group col-md-12 text-center">
                            <label for="enroll_no" class="col-form-label">Received From</label>
                            <textarea class="form-control" id="m_r_from" value="" readonly></textarea>
                          </div>
                          </div>
                          <hr>

                          <div class="row">
                          <div class="form-group col-md-12 text-center">
                            <label for="enroll_no" class="col-form-label">Purpose</label>
                            <textarea class="form-control" id="m_purpose" value="" readonly></textarea>
                          </div>
                        </div>
                        <hr>

                        <div class="row">
                          <div class="form-group col-md-2 text-center">
                            <label for="enroll_no" class="col-form-label">Status</label>
                          </div>

                          <div class="form-group col-md-10 text-center">
                            <input type="text" id="m_status" class="form-control" value="" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <script type="text/javascript">
                $(document).ready(function() {
                  $(document).on('click', '.b1', function() {
                    var id = $(this).attr("id");
                    $.ajax({
                      url: "fetch_details.php",
                      method: "POST",
                      data: {id:id},
                      dataType:"JSON",
                      success: function(data) {
                        $('#m_sl_no').val(data.sl_no);
                        $('#m_l_date').val(data.letter_date);
                        $('#m_r_from').val(data.received_from);
                        $('#m_purpose').val(data.purpose);
                        $('#m_status').val(data.status);
                        $('#viewDetails').modal('show');
                      }
                    })
                  });
                });
                </script>
                <?php
              }
            }
            else {
              ?>
              <div class="alert alert-danger text-center" role="alert">
                  <h5>Warning!! You Are Not A Human....</h5>
              </div>
              <?php
            }
          }
        ?>
    </div>
  </body>
</html>
