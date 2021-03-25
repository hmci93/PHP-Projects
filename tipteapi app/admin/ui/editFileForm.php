<?php session_start(); ?>

<?php
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $f_id = trim($_GET['id']);
        $api_key = 'b5d9ef0c4bbcc84e809cb0a6a7ddc6e104cc307e098b72cd0ab93dd9f353e6bd';
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit File Asset - TipTeapai</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script>
            $(document).ready(function(){
                var fileId = '<?php echo $f_id; ?>';
                var api_key = '<?php echo $api_key; ?>';
                $.get('http://api.tipteapi.com/api_getFile.php', {
                    id: fileId,
                    api_key: api_key
                }, function(response) {
                    var res_obj = JSON.parse($.trim(response));
                    $("#category > option").each(function() {
                        if ($(this).val() == $.trim(res_obj[0]['category'])) {
                            $(this).prop("selected", true);
                        }
                    });
                    $("#userId").val($.trim(res_obj[0]['userId']));
                    $("#place").val($.trim(res_obj[0]['place']));
                    $("#f_id").val($.trim(res_obj[0]['f_id']));
                    $("#assetFileOld").val($.trim(res_obj[0]['assetFile']).substring(14, $.trim(res_obj[0]['assetFile']).lastIndexOf('_')));
                });
             });
        </script>
        <script>
            function uploadData() {
                var cat = $("#category").val();
                var user_id = $("#userId").val();
                var place = $("#place").val();
                var f_id = '<?php echo $f_id; ?>';
                var api_key = '<?php echo $api_key; ?>';

                $.post("http://api.tipteapi.com/api_updateFile.php", {
                    category: cat,
                    userId: user_id,
                    place: place,
                    f_id: f_id,
                    api_key: api_key
                }, function(res1) {
                    var res1_obj = JSON.parse($.trim(res1));
                    alert(res1_obj['message']);
                    window.location.replace('http://api.tipteapi.com/admin/process/fileListProcess.php');
                });
            }
        </script>
        <script>
            function renameAssetFile() {
                var assetFileOld = $("#assetFileOld").val();
                var assetFileNew = $("#assetFileNew").val();
                var f_id = '<?php echo $f_id; ?>';
                var api_key = '<?php echo $api_key; ?>';

                $.post("http://api.tipteapi.com/api_updateFile.php", {
                    assetFileOld: assetFileOld,
                    assetFileNew: assetFileNew,
                    f_id: f_id,
                    api_key: api_key
                }, function(res2) {
                    var res2_obj = JSON.parse($.trim(res2));
                    alert(res2_obj['message']);
                    window.location.replace('http://api.tipteapi.com/admin/process/fileListProcess.php');
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
                        <h1 class="mt-4">Edit File Asset</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="../process/fileListProcess.php">File Assets</a></li>
                            <li class="breadcrumb-item active">Edit File Assets</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area mr-1"></i>
                                File Asset Edit Form
                            </div>
                            <div class="card-body">
                                <form id="form1">
                                    <div class="form-group row">
                                        <label for="category" class="col-md-3 col-form-label"><h4>Category: <font color="red">*</font></h4></label>
                                        <select name="category" id="category" class="col-md-9 form-control" required>
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
                                        <input type="text" name="userId" id="userId" value="" class="col-md-9 form-control" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="place" class="col-md-3 col-form-label"><h4>User Place: <font color="red">*</font></h4></label>
                                        <input type="text" name="place" id="place" value="" class="col-md-9 form-control" required>
                                    </div>
                                    <div class="form-group row">
                                        <input type="button" value="Update Data" class="col-md-9 offset-md-3 btn btn-primary btn-block" onclick="uploadData();">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area mr-1"></i>
                                Rename File Asset
                            </div>
                            <div class="card-body">
                                <form id="form2">
                                    
                                    <div class="form-group row">
                                        <label for="assetFileOld" class="col-md-3 col-form-label"><h5>Asset Filename (OLD): </h5></label>
                                        <input type="text" name="assetFileOld" id="assetFileOld" value="" class="col-md-9 form-control" readonly required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="assetFileNew" class="col-md-3 col-form-label"><h5>Asset Filename (New): <font color="red">*</font></h5></label>
                                        <input type="text" name="assetFileNew" id="assetFileNew" value="" class="col-md-9 form-control" required>
                                    </div>
                                    <div class="form-group row">
                                        <input type="button" value="Update" class="col-md-9 offset-md-3 btn btn-primary btn-block" onclick="renameAssetFile();">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'footer.php'; ?>
            </div>
        </div>
    </body>
</html>
<?php
    }
?>