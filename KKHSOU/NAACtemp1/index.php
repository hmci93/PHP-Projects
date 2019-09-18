<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NAAC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
    $(document).ready( function () {
      $('#displayTable').DataTable();
    });
    </script>
    <style media="screen">
      #main {
        padding-top: 50px;
        padding-left: 350px;
        padding-right: 350px;
      }
    </style>
  </head>
  <body>
    <div id="main" class="container">
      <form class="form_input" action="uiProcess/loginProcess.php" method="post">
        <div class="row">
            <div class="form-group text-center">
              <h2>Login</h2>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-2">
              <label for="criteria" class="col-form-label">Username:</label>
            </div>
            <div class="form-group col-md-10">
              <input type="text" name="username" class="form-control"  placeholder="UserName" required>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-2">
              <label for="criteria" class="col-form-label">Password:</label>
            </div>
            <div class="form-group col-md-10">
              <input type="password" name="password" class="form-control"  placeholder="Password" required>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-2"></div>
            <div class="form-group col-md-10">
                <button type="submit" name="submit" class="btn btn-primary btn-md btn-block">SUBMIT</button>
            </div>
          </div>
      </form>
    </div>
  </body>
</html>
