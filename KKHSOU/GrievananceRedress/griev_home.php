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
    <script src="https://www.google.com/recaptcha/api.js?render=6Ld3yq4UAAAAAGR0LlUJDvPjuQ6HktwHXMoRN7Uj"></script>

    <!-- <script type="text/javascript">
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;

            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
              return false;
            }
          return true;
        }
    </script> -->

    <script>
        grecaptcha.ready(function() {
          grecaptcha.execute('6Ld3yq4UAAAAAGR0LlUJDvPjuQ6HktwHXMoRN7Uj', { action: 'griev_home' }).then(function (token) {
            var recaptchaResponse = document.getElementById('recaptchaResponse');
            recaptchaResponse.value = token;
          });
        });
    </script>

    <!-- <style>
      #main {
        padding: 30px;
      }
    </style> -->

  </head>
  <body>
    <div id="main" class="container">

      <div class="text-center">
        <h2>Grievanance Redress</h2>
      </div>
      <br>
      <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <?php
        // Check if form was submitted:
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
                  <h4>Name Should Contain Only Alphabets and White Spaces.</h4>
              </div>
              <?php
            }
            else if ($email == null || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
              ?>
              <div class="alert alert-danger text-center" role="alert">
                  <h4>Please Enter A Valid Email ID.</h4>
              </div>
              <?php
            }
            else if ($phone == null || !preg_match('/^\+\d{1,4}-(?!0)\d{10}$/', $phone)) {
              ?>
              <div class="alert alert-danger text-center" role="alert">
                  <h4>Please Enter A Valid Phone Number.<br> Phone Number Should Be In The Format (+91-1234567890).<br> Also Should Not Start With 0 After Country Code.</h4>
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
      <div class="col-sm-1"></div>
    </div>
      <br>

      <div id="form_input" class="col-lg-12" >

          <form action="griev_home.php" method="post">
            <div class="row text-center">

              <div class="form-group col-md-2">
                <label for="name" class="col-form-label">Name:</label>
              </div>
              <div class="form-group col-md-8">
                <input type="text" name="name" class="form-control"  placeholder="Your Name" required>
              </div>
            </div>

            <div class="row text-center">

              <div class="form-group col-md-2">
                <label for="email" class="col-form-label">Email:</label>
              </div>
              <div class="form-group col-md-8">
                <input type="text" name="email" class="form-control" placeholder="Your Email Id (e.g. example@email.com)" required>
              </div>
            </div>

            <div class="row text-center">

              <div class="form-group col-md-2">
                <label for="phone" class="col-form-label">Phone No:</label>
              </div>
              <div class="form-group col-md-8">
                <!-- <input type="text" name="phone" class="form-control" onkeypress="return isNumber(event)" placeholder="Your Phone No. (e.g. +91 1234567890)" required> -->
                <input type="text" name="phone" class="form-control" placeholder="Your Phone No. (e.g. +91-1234567890)" required>
              </div>
            </div>

            <div class="row text-center">

              <div class="form-group col-md-2">
                <label for="address" class="col-form-label">Address:</label>
              </div>
              <div class="form-group col-md-8">
                <textarea class="form-control" name="address" placeholder="Your Address" required></textarea>
              </div>
            </div>

            <div class="row text-center">

              <div class="form-group col-md-2">
                <label for="g_area" class="col-form-label">Grievance Area:</label>
              </div>
              <div class="form-group col-md-8">
                <select class="form-control" name="g_area">
                  <option value="Caste Discrimination (For SC & ST)">Caste Discrimination (For SC & ST)</option>
                  <option value="Sexual Harassment">Sexual Harassment</option>
                  <option value="Administration">Administration</option>
                  <option value="Academic">Academic</option>
                  <option value="Examination">Examination</option>
                  <option value="SLM">SLM</option>
                  <option value="Study Centre">Study Centre</option>
                  <option value="Others">Others</option>
                </select>
              </div>
            </div>

            <div class="row text-center">

              <div class="form-group col-md-2">
                <label for="g_about" class="col-form-label">Grievance About:</label>
              </div>
              <div class="form-group col-md-8">
                <textarea class="form-control" name="g_about" placeholder="Your Grievance" required></textarea>
              </div>
            </div>

            <div class="row text-center">
              <div class="form-group col-md-2">
                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
              </div>
              <div class="form-group col-md-4">
                  <button type="submit" name="submit" class="btn btn-primary btn-md btn-block">SUBMIT</button>
              </div>
              <div class="form-group col-md-4">
                  <button type="reset" name="reset" class="btn btn-primary btn-md btn-block">RESET</button>
              </div>

              </div>
          </form>
        </div>
    </div>
  </body>
</html>
