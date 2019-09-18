<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->

    <script type="text/javascript">
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;

            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
              return false;
            }
          return true;
        }
    </script>

  </head>
  <body>
    <div class="container">
      <br><br><br>
      <div id="form_input" class="col-lg-12" >
        <form action="../ui-process/retriveLearnerInforProcess.php" method="post">
          <div class="form-group row">
            <input type="text" class="form-control" name="e_num" placeholder="Enter Your Enrollment Number" onkeypress="return isNumber(event)" aria-label="Application Id" aria-describedby="basic-addon2" required>
            <div class="form-group">
              <input type="submit" class="btn btn-outline-primary" name="submit" value="GO" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
