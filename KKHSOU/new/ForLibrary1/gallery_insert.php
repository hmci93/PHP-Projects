<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <br><br>
      <div id="form_input" class="col-lg-12" >
        <form name="insert_form" action="galleryinsertProcess.php" method="post" enctype="multipart/form-data">

          <div class="row">
            <div class="form-group col-lg-3">
              <label for="gallery" class="col-form-label">Upload Gallery Photo :</label>
            </div>

            <div class="form-group col-lg-9">
              <input type="file" id="gallery_img" class="form-control" name="gallery_img" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-lg-3"></div>
            <!-- <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
            <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label> -->

            <div class="form-group col-lg-9">
              <label class="checkbox-inline"><input type="radio"name="check" value="slider"> Set As Slider Image</label>
            </div>

            <!-- <div class="form-group col-lg-4">
              <label class="checkbox-inline"><input type="checkbox" value="1">Set As About Image</label>
              <label><input type="checkbox" id="slider_img" class="form-control" name="slider_img" value="1" aria-describedby="basic-addon2">Set As Slider Image</label>
            </div> -->
            <!-- <div class="form-group col-lg-2"></div> -->
          </div>

          <div class="row">
            <div class="form-group col-lg-3"></div>

            <div class="form-group col-lg-9">
              <label class="checkbox-inline"><input type="radio" name="check" value="about"> Set As About Image</label>

            </div>

            <!-- <div class="form-group col-md-3 checkbox"></div>

            <div class="form-group col-md-3 checkbox">
              <label><input type="checkbox" id="about_img" class="form-control" name="about_img" value="1" aria-describedby="basic-addon2">Set As About Image</label>
            </div> -->
            <!-- <div class="form-group col-lg-2"></div> -->
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


  </body>
</html>
