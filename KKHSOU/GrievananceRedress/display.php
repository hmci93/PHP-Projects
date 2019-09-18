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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
    $(document).ready( function () {
      $('#display_table').DataTable();
    });
    </script>

    <style>
      #main {
        padding: 30px;
      }
    </style>
  </head>
  <body>
    <div id="main" class="container">

      <div class="text-center">
        <h2>List of Grievance Applications</h2>
      </div>
      <br>

      <div class="table-responsive">
        <table id="display_table" class="table table-hover">
          <thead>
            <tr>
              <th scope="col">SL. No.</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Grievance Area</th>
              <th scope="col">Grievance About</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <?php
            $count = 0;
            $sql1 = "SELECT * FROM `griev_data`";
            $exe1 = mysqli_query($conn, $sql1);
            $r = mysqli_num_rows($exe1);

            while ($row1 = mysqli_fetch_array($exe1)) {
              $gd_id = $row1['gd_id'];
              $name = $row1['name'];
              $email = $row1['email'];
              $g_area = $row1['g_area'];
              $g_about = $row1['g_about'];
              $status = $row1['action_status'];

                $count = $count + 1;

              ?>
                <tr>
                  <th scope="row"><?php echo $count; ?></th>
                  <td><?php echo $name; ?></td>
                  <td><?php echo $email; ?></td>
                  <td><?php echo $g_area; ?></td>
                  <td><?php echo $g_about; ?></td>
                  <?php
                    if ($status == 0) {
                      ?>
                      <td><span class="badge badge-pill badge-warning">Pending</span></td>
                      <?php
                    }
                    else if($status == 1) {
                      ?>
                      <td><span class="badge badge-pill badge-success">Solved</span></td>
                      <?php
                    }
                    else {
                      ?>
                      <td><span class="badge badge-pill badge-danger">Rejected</span></td>
                      <?php
                    }
                  ?>
                  <td><a class="btn btn-primary" href="edit.php?id=<?php echo $gd_id; ?>">Reply</a></td>
                </tr>
              <?php
            }
          ?>
        </table>
      </div>
    </div>
  </body>
</html>
