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
      <div class="col-lg-12">
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

            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $address = trim($_POST['address']);
            $g_area = trim($_POST['g_area']);
            $g_about = trim($_POST['g_about']);


            if ($name == null || !preg_match('/^[a-zA-Z\s]+$/', $name)) {
              ?>
              <div class="alert alert-danger text-center" role="alert">
                  <h4>Name Should Contain Only Alphabets and White Spaces. <a href="griev_home.php" class="alert-link">Go Back</a>.</h4>
              </div>
              <?php
            }
            else if ($email == null || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
              ?>
              <div class="alert alert-danger text-center" role="alert">
                  <h4>Please Enter A Valid Email ID. <a href="griev_home.php" class="alert-link">Go Back</a>.</h4>
              </div>
              <?php
            }
            else if ($phone == null || !preg_match('/^\+\d{1,4}-(?!0)\d{10}$/', $phone)) {
              ?>
              <div class="alert alert-danger text-center" role="alert">
                  <h4>Please Enter A Valid Phone Number. Phone Number Should Not Start With 0 After Country Code.   <a href="griev_home.php" class="alert-link">Go Back</a>.</h4>
              </div>
              <?php
            }
            else {

              $to = 'itcell@kkhsou.in';
              $subject = 'KKHSOU GRIEVANANCE REDRESS';
              $message1 = "Your Grievance Has Been Successfully Submitted. We will contact you shortly.\n This is an auto-generated message. Please do not reply.";
              $header1 = "From : ".$to;

              $sql = "INSERT INTO `griev_data` (`name`, `email`, `ph_no`, `address`, `g_area`, `g_about`) VALUES ('$name','$email','$phone','$address','$g_area','$g_about')";
              $exe = mysqli_query($conn, $sql);
              if ($exe) {
                if (mail($email, $subject, $message1, $header1)) {
                  header('refresh:3; url = griev_home.php');
                  echo
                  '<div class="alert alert-success text-center" role="alert">
                      <h4>Your Grievance Has Been Successfully Submitted.</h4>
                  </div>';
                }
              }
            }
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
    </div>
  </body>
</html>
