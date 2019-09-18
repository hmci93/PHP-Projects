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
      <br><br>
      <div id="form_input" class="col-lg-12" >
        <form name="insert_form" action="activityinsertProcess.php" method="post" enctype="multipart/form-data">

          <div class="row">
            <div class="form-group col-lg-3">
              <label for="activities" class="col-form-label">Activity Title :</label>
            </div>

            <div class="form-group col-lg-9">
              <input type="text" id="activity_title" class="form-control" name="activity_title" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-lg-3">
              <label for="activities" class="col-form-label">Activity Details :</label>
            </div>

            <div class="form-group col-lg-9">
              <textarea id="activities" class="form-control" name="activities" aria-describedby="basic-addon2"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-lg-3"></div>

            <div class="form-group col-lg-4">
              <label for="logo" class="col-form-label">University Logo :</label>
            </div>

            <div class="form-group col-lg-5">
              <input id="logo" type="file" class="form-control" name="logo" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-lg-3"></div>

            <div class="form-group col-lg-4">
              <label for="activities_photo" class="col-form-label"> Activity Photos :</label>
            </div>

            <div class="form-group col-lg-5">
              <input id="activities_photo" type="file" class="form-control" name="activities_photo[]" aria-describedby="basic-addon2" multiple>
            </div>
          </div>



          <div class="row">
            <div class="form-group col-lg-3"></div>

            <div class="form-group col-lg-5">
              <input type="submit" class="btn btn-primary btn-md btn-block" name="submit" value="SUBMIT DATA">
            </div>

            <div class="form-group col-lg-4">
              <input type="reset" class="btn btn-primary btn-md btn-block" name="reset" value="CLEAR">
            </div>
          </div>

        </form>
      </div>
    </div>

    <script>
    CKEDITOR.replace( 'activities', {
      language: 'en'
    });
    </script>
  </body>
</html>
