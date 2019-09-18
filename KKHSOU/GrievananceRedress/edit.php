<?php
  include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GRIEVANANCE REDRESS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- <style>
      #main {
        padding: 30px;
      }
    </style> -->
  </head>
  <body>
    <div id="main" class="container">

      <div class="text-center">
        <h2>Reply For The Grievance Application</h2>
      </div>
      <br>

      <?php

        if (isset($_GET['id'])) {

          $id = $_GET['id'];
          $email = '';

          $sql2 = "SELECT * FROM `griev_data` WHERE gd_id = $id";
          $exe2 = mysqli_query($conn, $sql2);
          while ($row2 = mysqli_fetch_array($exe2)) {
            $name = $row2['name'];
            $email = $row2['email'];
            $g_area = $row2['g_area'];
            $g_about = $row2['g_about'];
          ?>
      <div class="row text-center">

        <div class="form-group col-md-2">
          <label for="name" class="col-form-label">Name:</label>
        </div>
        <div class="form-group col-md-8">
          <input type="text" name="name" class="form-control"  value="<?php echo $name; ?>" readonly>
        </div>
      </div>

      <div class="row text-center">

        <div class="form-group col-md-2">
          <label for="email" class="col-form-label">Email:</label>
        </div>
        <div class="form-group col-md-8">
          <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" readonly>
        </div>
      </div>


      <div class="row text-center">

        <div class="form-group col-md-2">
          <label for="g_area" class="col-form-label">Grievance Area:</label>
        </div>
        <div class="form-group col-md-8">
          <input type="text" name="g_area" class="form-control" value="<?php echo $g_area; ?>" readonly>
        </div>
      </div>

      <div class="row text-center">

        <div class="form-group col-md-2">
          <label for="g_about" class="col-form-label">Grievance About:</label>
        </div>
        <div class="form-group col-md-8">
          <input type="text" class="form-control" name="g_about" value="<?php echo $g_about; ?>" readonly>
        </div>
      </div>
      <?php
    }
?>

      <div id="form_input" class="col-lg-12" >
        <form action="update.php" method="post">

          <div class="row text-center">

            <div class="form-group col-md-2">
              <label for="status" class="col-form-label">Status:</label>
            </div>
            <div class="form-group col-md-8">
              <select class="form-control" name="status">
                <option value="1">Solved</option>
                <option value="2">Rejected</option>
              </select>
            </div>
          </div>

          <div class="row text-center">

            <div class="form-group col-md-2">
              <label for="g_about" class="col-form-label">Your Reply:</label>
            </div>
            <div class="form-group col-md-8">
              <textarea class="form-control" name="reply" placeholder="Your Reply" required></textarea>
            </div>
          </div>

          <div class="row text-center">

            <div class="form-group col-md-2">
              <label for="g_about" class="col-form-label">Remarks:</label>
            </div>
            <div class="form-group col-md-8">
              <textarea class="form-control" name="remarks" placeholder="Remarks"></textarea>
            </div>
          </div>

          <div class="row text-center">
            <div class="form-group col-md-2">
              <input type="hidden" name="gd_id" value="<?php echo $id; ?>">
              <input type="hidden" name="email" value="<?php echo $email; ?>">
            </div>

            <div class="form-group col-sm-3">
                <button type="submit" name="update" class="btn btn-primary btn-md btn-block">SUBMIT</button>
            </div>

            <div class="form-group col-sm-3">
                <button type="reset" name="reset" class="btn btn-primary btn-md btn-block">RESET</button>
            </div>

            <div class="form-group col-sm-2">
              <a class="btn btn-primary btn-md btn-block" href="display.php">BACK</a>
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
