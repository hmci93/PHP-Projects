<?php
  include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
        <div class="col-lg-12">
          <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="row text-center">

              <div class="form-group col-md-8">
                <label for="sl_no" class="col-form-label">Upload CSV File</label>
                  <input type="file" name="file" class="form-control">
              </div>

              <div class="form-group col-md-4" style="margin-top: 2.5em;">
                  <button type="submit" name="submit" class="btn btn-primary btn-md btn-block">UPLOAD</button>
              </div>

            </div>
          </form>
        </div>

        <?php
          if (isset($_POST['submit'])) {

            // Allowed mime types
              $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');

            // Validate whether selected file is a CSV file
            if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)) {

              // If the file is uploaded
              if (is_uploaded_file($_FILES['file']['tmp_name'])) {

                // Open uploaded CSV file with read-only mode
                $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

                // Skip the first line
                fgetcsv($csvFile);

                // Parse data from CSV file line by line
                while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                  $sl_no   = $line[0];
                  $receipt_date = $line[1];
                  $letter_date = $line[2];
                  $postage = $line[3];

                  // Check whether member already exists in the database with the same SL NO
                  $sql = "SELECT * FROM test WHERE sl_no = '$sl_no'";
                  $exe = mysqli_query($conn,$sql);

                  if (mysqli_num_rows($exe) > 0) {
                    // Update member data in the database
                    $sql1 = "UPDATE test SET receipt_date = '$receipt_date', letter_date = '$letter_date', postage = '$postage' WHERE sl_no = '$sl_no'";
                    $exe1 = mysqli_query($conn,$sql1);
                    if ($exe1) {
                      echo "CSV file Updated..";
                    }
                    else {
                      echo mysqli_error($conn);
                    }
                  }
                  else {
                    // Insert member data in the database
                    $sql2 = "INSERT INTO test (sl_no,receipt_date,letter_date,postage) values('$sl_no','$receipt_date','$letter_date','$postage')";
                    if (mysqli_query($conn,$sql2)) {
                      echo "CSV file Inserted..";
                    }
                    else {
                      echo mysqli_error($conn);
                    }
                  }
              }
              // Close opened CSV file
              fclose($csvFile);
            }
            else {
              echo "Upload Error..";
            }
          }
          else {
            echo "Invalid file..";
          }
        }
        ?>

      </div>
  </body>
</html>
