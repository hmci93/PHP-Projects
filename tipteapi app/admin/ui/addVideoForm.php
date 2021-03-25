<?php session_start(); ?>
<?php $api_key = 'b5d9ef0c4bbcc84e809cb0a6a7ddc6e104cc307e098b72cd0ab93dd9f353e6bd'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add Video Asset - TipTeapai</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script>
            function addVideo() {
                var formData = new FormData(form1);

                $.ajax({
                    url: 'http://api.tipteapi.com/api_putVideo2.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false
                }).done(function(res) {
                    var res_obj = JSON.parse(res);
                    alert(res_obj['message']);
                    window.location.replace('http://api.tipteapi.com/admin/process/videoListProcess.php');
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
                        <h1 class="mt-4">Add Video Asset</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Video Assets</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area mr-1"></i>
                                Add New Video Asset
                            </div>
                            <div class="card-body">
                                <form id="form1" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="category" class="col-md-3 col-form-label"><h4>Category: <font color="red">*</font></h4></label>
                                        <select name="category" id="category" class="col-md-9 form-control" required>
                                            <option value='' selected>Choose Category</option>
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
                                        <label for="assetVideo" class="col-md-3 col-form-label"><h4>Choose Video File: <font color="red">*</font></h4></label>
                                        <input type="file" name="assetVideo" id="assetVideo" class="col-md-4 form-control-file" required>
                                        <a class="col-md-5 btn btn-primary" href="#" id="test">Generate Thumbnail</a>
                                    </div>
                                    <div class="form-group row">
                                        <label for="assetThumb" class="col-md-3 col-form-label"><h4>Thumbnail URL: <font color="red">*</font></h4></label>
                                        <input type="text" name="assetThumb" id="assetThumb" class="col-md-9 form-control" value="" required readonly>
                                    </div>
                                    <div class="form-group row">
                                        <input type="hidden" name="api_key" id="api_key" class="col-md-9 form-control" value="<?php echo $api_key; ?>" required>
                                    </div>
                                    <div class="form-group row">
                                        <input type="button" value="Add Video" class="col-md-9 offset-md-3 btn btn-primary btn-block" onclick="addVideo();">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div>
                            <video id="main-video" style="visibility: hidden;"><source id="vsource"></video>
                            <canvas id="video-canvas" width="200" height="200" style="visibility: hidden;"></canvas>
                        </div>
                    </div>
                </main>
                <?php include 'footer.php'; ?>
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script>
            var _VIDEO = document.querySelector("#main-video");
            var _CANVAS = document.querySelector("#video-canvas");
            var _CTX = _CANVAS.getContext("2d");

            // When user chooses a video file
            document.querySelector("#assetVideo").addEventListener("change", function() {
                // Object Url as the video source
                document.querySelector("#vsource").setAttribute('src', URL.createObjectURL(document.querySelector("#assetVideo").files[0]));
                // Load the video
                _VIDEO.load();
                // Load metadata of the video
                _VIDEO.addEventListener("loadedmetadata", function() {

                    // console.log(_VIDEO.duration);

                    _VIDEO.currentTime = 0;

                    // var video_duration = _VIDEO.duration,
                    //     duration_options_html = '';

                    // // Set options in dropdown at 4 second interval
                    // for(var i=0; i<Math.floor(video_duration); i=i+4) {
                    //     duration_options_html += '<option value="' + i + '">' + i + '</option>';
                    // }
                    // document.querySelector("#set-video-seconds").innerHTML = duration_options_html;
                    // Set canvas dimensions same as video dimensions
                    
                    // _CANVAS.width = _VIDEO.videoWidth;
                    // _CANVAS.height = _VIDEO.videoHeight;
                    // _VIDEO.currentTime = 4;
                    // _VIDEO.currentTime = 0;
                    // document.getElementById("test").click(); 
                });
                // if () {
                //     _CTX.drawImage(_VIDEO, 0, 0, _VIDEO.videoWidth, _VIDEO.videoHeight);
                //     document.getElementById("assetThumb").setAttribute('value', _CANVAS.toDataURL());
                // }
            });
            document.querySelector("#test").addEventListener("click", function() {
                // _VIDEO.currentTime = 0;
                
                // _CTX.drawImage(_VIDEO, 0, 0, _VIDEO.videoWidth, _VIDEO.videoHeight);
                _CTX.drawImage(_VIDEO, 0, 0, _CANVAS.width, _CANVAS.height);
                document.getElementById("assetThumb").setAttribute('value', _CANVAS.toDataURL());
                // document.getElementById("test").setAttribute('href', _CANVAS.toDataURL());
            });
        </script>
    </body>
</html>
