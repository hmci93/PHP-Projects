<?php session_start(); ?>
<?php $api_key = 'b5d9ef0c4bbcc84e809cb0a6a7ddc6e104cc307e098b72cd0ab93dd9f353e6bd'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add Image Asset - TipTeapai</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script>
            function addImage() {
                var formData = new FormData(form2);

                $.ajax({
                    url: 'http://api.tipteapi.com/api_putImage.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false
                }).done(function(res) {
                    var res_obj = JSON.parse(res);
                    alert(res_obj['message']);
                    window.location.replace('http://api.tipteapi.com/admin/process/imageListProcess.php');
                });
            }
        </script>
    </head>
    <body class="sb-nav-fixed">
        <?php include 'navbar.php'; ?>
        <div id="layoutSidenav">
            <?php include 'sidenav.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Image Asset</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Image Assets</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area mr-1"></i>
                                Add New Image Asset
                            </div>
                            <div class="card-body">
                                <form id="form2" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="category" class="col-md-3 col-form-label"><h4>Category: <font color="red">*</font></h4></label>
                                        <select name="category" id="category" class="col-md-9 form-control" required>
                                            <option selected>Choose Category</option>
                                            <option value="funny">Funny</option>
                                            <option value="music">Music</option>
                                            <option value="drama">Drama</option>
                                            <option value="art">Art</option>
                                            <option value="science and education">Science & Education</option>
                                            <option value="dance">Dance</option>
                                            <option value="beauty">Beauty & Style</option>
                                            <option value="travel">Travel</option>
                                            <option value="sports">Sports</option>
                                            <option value="gaming">Gaming</option>
                                            <option value="food">Food</option>
                                            <option value="craft">Craft</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label for="userId" class="col-md-3 col-form-label"><h4>User ID: <font color="red">*</font></h4></label>
                                        <input type="text" name="userId" id="userId" class="col-md-9 form-control" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="place" class="col-md-3 col-form-label"><h4>User Place: <font color="red">*</font></h4></label>
                                        <input type="text" name="place" id="place" class="col-md-9 form-control" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="assetImage" class="col-md-3 col-form-label"><h4>Choose Image File: <font color="red">*</font></h4></label>
                                        <input type="file" name="assetImage" id="assetImage" class="col-md-9 form-control-file" required>
                                    </div>
                                    <div class="form-group row">
                                        <input type="hidden" name="api_key" id="api_key" class="col-md-9 form-control" value="<?php echo $api_key; ?>" required>
                                    </div>
                                    <div class="form-group row">
                                        <input type="button" value="Add Image" class="col-md-9 offset-md-3 btn btn-primary btn-block" onclick="addImage();">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'footer.php'; ?>
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html>
