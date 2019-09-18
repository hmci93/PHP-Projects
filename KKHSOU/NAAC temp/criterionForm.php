<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>criterionForm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    <script src="http://cdn.ckeditor.com/4.7.1/standard-all/ckeditor.js"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
    $(document).ready( function () {
      $('#criterionFormDisplay').DataTable();
    });
    </script>
    <style media="screen">
      #main {
        padding: 30px;
      }
    </style>
  </head>
  <body>
    <br><br>
    <div id="main" class="container border">
      <div id="form_input" class="col-lg-12" >
        <form name="criterion_form" action="criterionFormProcess.php" method="post">

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="sl_no" class="col-form-label">SL. No. :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_slno" class="form-control" name="crite_slno" placeholder="Enter Serial No." aria-describedby="basic-addon2" required>
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="title" class="col-form-label">Title :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_title" class="form-control" name="crite_title" placeholder="Enter Title" aria-describedby="basic-addon2" required>
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="block" class="col-form-label">Block :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_block" class="form-control" name="crite_block" placeholder="Enter Block" aria-describedby="basic-addon2" required>
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="description" class="col-form-label">Description :</label>
            </div>

            <div class="form-group col-md-10">
              <textarea id="crite_descrip" class="form-control" name="crite_descrip" placeholder="Enter Description" aria-describedby="basic-addon2" required></textarea>
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve1" class="col-form-label">Reserve1 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved1" class="form-control" name="crite_reserved1" placeholder="Enter Reserve1" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve2" class="col-form-label">Reserve2 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved2" class="form-control" name="crite_reserved2" placeholder="Enter Reserve2" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve3" class="col-form-label">Reserve3 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved3" class="form-control" name="crite_reserved3" placeholder="Enter Reserve3" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve4" class="col-form-label">Reserve4 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved4" class="form-control" name="crite_reserved4" placeholder="Enter Reserve4" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve5" class="col-form-label">Reserve5 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved5" class="form-control" name="crite_reserved5" placeholder="Enter Reserve5" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve6" class="col-form-label">Reserve6 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved6" class="form-control" name="crite_reserved6" placeholder="Enter Reserve6" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve7" class="col-form-label">Reserve7 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved7" class="form-control" name="crite_reserved7" placeholder="Enter Reserve7" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve8" class="col-form-label">Reserve8 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved8" class="form-control" name="crite_reserved8" placeholder="Enter Reserve8" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve9" class="col-form-label">Reserve9 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved9" class="form-control" name="crite_reserved9" placeholder="Enter Reserve9" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve10" class="col-form-label">Reserve10 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved10" class="form-control" name="crite_reserved10" placeholder="Enter Reserve10" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve11" class="col-form-label">Reserve11 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved11" class="form-control" name="crite_reserved11" placeholder="Enter Reserve11" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve12" class="col-form-label">Reserve12 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved12" class="form-control" name="crite_reserved12" placeholder="Enter Reserve12" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve13" class="col-form-label">Reserve13 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved13" class="form-control" name="crite_reserved13" placeholder="Enter Reserve13" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve14" class="col-form-label">Reserve14 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved14" class="form-control" name="crite_reserved14" placeholder="Enter Reserve14" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve15" class="col-form-label">Reserve15 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved15" class="form-control" name="crite_reserved15" placeholder="Enter Reserve15" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve16" class="col-form-label">Reserve16 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved16" class="form-control" name="crite_reserved16" placeholder="Enter Reserve16" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve17" class="col-form-label">Reserve17 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved17" class="form-control" name="crite_reserved17" placeholder="Enter Reserve17" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve18" class="col-form-label">Reserve18 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved18" class="form-control" name="crite_reserved18" placeholder="Enter Reserve18" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve19" class="col-form-label">Reserve19 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved19" class="form-control" name="crite_reserved19" placeholder="Enter Reserve19" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row text-left">
            <div class="form-group col-md-2">
              <label for="reserve20" class="col-form-label">Reserve20 :</label>
            </div>

            <div class="form-group col-md-10">
              <input type="text" id="crite_reserved20" class="form-control" name="crite_reserved20" placeholder="Enter Reserve20" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-2">
            </div>

            <div class="form-group col-md-5">
              <input type="submit" class="btn btn-primary btn-md btn-block" name="submit" value="SUBMIT">
            </div>

            <div class="form-group col-md-5">
              <input type="reset" class="btn btn-primary btn-md btn-block" name="reset" value="RESET">
            </div>
          </div>

        </form>
      </div><br><br>

      <div class="table-responsive">
        <table id="criterionFormDisplay" class="table table-hover">
          <thead>
            <tr>
              <th scope="col">SL. No.</th>
              <th scope="col">Title</th>
              <th scope="col">Block</th>
              <th scope="col">Description</th>
              <th scope="col">Reserved1</th>
              <th scope="col">Reserved2</th>
              <th scope="col">Reserved3</th>
              <th scope="col">Reserved4</th>
              <th scope="col">Reserved5</th>
              <th scope="col">Reserved6</th>
              <th scope="col">Reserved7</th>
              <th scope="col">Reserved8</th>
              <th scope="col">Reserved9</th>
              <th scope="col">Reserved10</th>
              <th scope="col">Reserved11</th>
              <th scope="col">Reserved12</th>
              <th scope="col">Reserved13</th>
              <th scope="col">Reserved14</th>
              <th scope="col">Reserved15</th>
              <th scope="col">Reserved16</th>
              <th scope="col">Reserved17</th>
              <th scope="col">Reserved18</th>
              <th scope="col">Reserved19</th>
              <th scope="col">Reserved20</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
            <?php
              include_once("class.criterion.php");
              $disp_handle  = new criterion();
              $disp_handle-> selectDisplay();
            ?>
        </table>
      </div>

    </div>
    <script>
		CKEDITOR.replace( 'crite_descrip', {
			language: 'en'
		} );
	</script>
  </body>
</html>
