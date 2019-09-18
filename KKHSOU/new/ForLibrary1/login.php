<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <script src="http://cdn.ckeditor.com/4.7.1/standard-all/ckeditor.js"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <form class="form_input" action="login.php" method="post">
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

<?php
  include 'conn.php';

  if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `login` WHERE `username` = '$username' AND `password` = '$password'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
      header("Location: insert.php");
    }
    else {
      echo $username.",".$password;
      echo mysqli_error($conn);
      header("Location: login.php");
    }
  }
?>
