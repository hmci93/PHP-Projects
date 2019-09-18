<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
  </head>
  <body>
    <div class="container">

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
      <!-- <div class="table-responsive">
        <table id="displayTable" class="table table-hover">
          <thead>
            <div class="row">
              <div class="col-xs-3">
                <th>Metric No.</th>
              </div>
              <div class="col-xs-9">
              <th>header 2</th>
              </div>
            </div>
          </thead>
          <tr>
            <div class="row">
              <div class="col-xs-3">
                <td scope="row">1</td>
              </div>
              <div class="col-xs-9">
                <td>This is Test.</td>
              </div>
            </div>
          </tr>
        </table>
      </div> -->
    </div>
  </body>
</html>
