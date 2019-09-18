<?php
  include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Check Enrolment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
      #main {
        padding: 30px;
      }
    </style>

  </head>
  <body>
    <div id="main" class="container">

        <div class="text-center">
          <h2>Check Your Enrolment Details</h2>
        </div>
        <br>

      <div id="form_input" class="col-lg-12" >
        <form action="index.php" method="post">
          <div class="input-group input-group-lg">
            <input type="text" class="form-control" name="app_id" placeholder="Enter Your Application Number" aria-label="Application Id" aria-describedby="basic-addon2" required>
            <div class="input-group-append">
              <input type="submit" class="btn btn-outline-primary" name="submit" value="CHECK" />
            </div>
          </div>
        </form>
      </div>
      <br>
        <?php

          if (isset($_POST['submit'])) {

            $app_id = $_POST['app_id'];

            $sql = "SELECT * FROM `enroll_details` WHERE `RgBatch` = $app_id";
            $exe = mysqli_query($conn,$sql);
            if (mysqli_num_rows($exe) == 0) {

              ?>
              <div class="alert alert-danger text-center" role="alert">
                  <h5>OOPS!! Your Application Number is <strong>Invalid</strong>.</h5>
              </div>
              <?php

            }
            else {
              ?>
              <div id="data" class="card text-center">
                <div class="card-body">
                  <h2 class="card-title">Your Details</h2>
                  <hr>
              <?php
              while ($row = mysqli_fetch_array($exe)) {

                $enroll_no = $row['RgNo'];
                $app_no = $row['RgBatch'];
                $name = $row['RgName'];
                $f_name = $row['RgFather'];
                $m_name = $row['RgMother'];
                $centre_code = $row['RgCgCode'];
                $course = $row['RgCoCode'];

                ?>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="enroll_no" class="col-form-label">Enrolment Number</label>
                      <input type="text" class="form-control" value="<?php echo $enroll_no; ?>" readonly>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="enroll_no" class="col-form-label">Application Number</label>
                      <input type="text" class="form-control" value="<?php echo $app_no; ?>" readonly>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="enroll_no" class="col-form-label">Your Name</label>
                      <input type="text" class="form-control" value="<?php echo $name; ?>" readonly>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="enroll_no" class="col-form-label">Father's Name</label>
                      <input type="text" class="form-control" value="<?php echo $f_name; ?>" readonly>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="enroll_no" class="col-form-label">Mother's Name</label>
                      <input type="text" class="form-control" value="<?php echo $m_name; ?>" readonly>
                    </div>

                    <div class="form-group col-md-3">
                      <label for="enroll_no" class="col-form-label">Study Center Code</label>
                      <input type="text" class="form-control" value="<?php echo $centre_code; ?>" readonly>
                    </div>

                    <div class="form-group col-md-3">
                      <label for="enroll_no" class="col-form-label">Course</label>
                      <input type="text" class="form-control" value="<?php echo $course; ?>" readonly>
                    </div>
                  </div>
                <?php
              }
            }


          }
        ?>
        </div>
      </div>
    </div>
  </body>
</html>
