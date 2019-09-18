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
                if (isset($_POST['update'])) {
                  $id = $_POST['gd_id'];
                  $email = $_POST['email'];
                  $status = $_POST['status'];
                  $reply = $_POST['reply'];
                  $remarks = $_POST['remarks'];

                  $to2 = 'itcell@kkhsou.in';
                  $subject2 = 'KKHSOU GRIEVANANCE REDRESS';
                  $message2 = "Your Reply For The Grievance Application Has Been Successfully Sent.\n This is an auto-generated message. Please do not reply.";
                  $header2 = "From : ".$to2;

                  if ($status == 1) {
                    $sql3 = "UPDATE `griev_data` SET `action_status` = $status, `reply` = '$reply', `remarks` = '$remarks' WHERE `gd_id` = $id";
                    $exe3 = mysqli_query($conn, $sql3);
                    if($exe3) {
                      if (mail($email, $subject2, $message2, $header2)) {
                        header('refresh:2; url = display.php');
                        echo
                        '<div class="alert alert-success text-center" role="alert">
                            <h4>Application Has Been Successfully Updated.</h4>
                        </div>';
                      }
                    }
                  }
                    else {
                      $sql4 = "UPDATE `griev_data` SET `action_status` = $status, `reply` = '$reply', `remarks` = '$remarks' WHERE `gd_id` = $id";
                      $exe4 = mysqli_query($conn, $sql4);
                      if($exe4) {
                        if (mail($email, $subject2, $message2, $header2)) {
                          header('refresh:2; url = display.php');
                          echo
                          '<div class="alert alert-success text-center" role="alert">
                              <h4>Application Has Been Successfully Rejected.</h4>
                          </div>';
                        }

                      }
                    }

                  }
    ?>
  </div>
    </body>
  </html>
