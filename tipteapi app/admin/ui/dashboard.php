<?php session_start(); ?>
<?php $api_key = 'b5d9ef0c4bbcc84e809cb0a6a7ddc6e104cc307e098b72cd0ab93dd9f353e6bd'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Dashboard - Tip Teapai</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/jquery.animateNumber.js"></script>
        <script>
            $(document).ready(function() {
                var api_key = '<?php echo $api_key; ?>';
                $.post('http://api.tipteapi.com/api_getAssetCount.php', {
                    api_key: api_key
                }, function(response) {
                    var res_obj = JSON.parse($.trim(response));
                    
                    // Video Asset Count
                    $("#videoCount").animateNumber({
                        number: res_obj[0]['videoCount']
                    },
                    {
                        easing: 'swing',
                        duration: 1000
                    });
                    
                    // Audio Asset Count
                    $("#audioCount").animateNumber({
                        number: res_obj[0]['audioCount']
                    },
                    {
                        easing: 'swing',
                        duration: 1000
                    });
                    
                    // Image Asset Count
                    $("#imageCount").animateNumber({
                        number: res_obj[0]['imageCount']
                    },
                    {
                        easing: 'swing',
                        duration: 1000
                    });
                    
                    // File Asset Count
                    $("#fileCount").animateNumber({
                        number: res_obj[0]['fileCount']
                    },
                    {
                        easing: 'swing',
                        duration: 1000
                    });
                });
            });
        </script>
    </head>
    <body class="sb-nav-fixed">
        <?php include 'navbar.php'; ?>
        <div id="layoutSidenav">
            <?php include 'sidenav.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Video Assets &emsp; <span id="videoCount"></span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="../process/videoListProcess.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Audio Assets &emsp; <span id="audioCount"></span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="../process/audioListProcess.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Image Assets &emsp; <span id="imageCount"></span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="../process/imageListProcess.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total File Assets &emsp; <span id="fileCount"></span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="../process/fileListProcess.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'footer.php'; ?>
            </div>
        </div>
        <!--<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>-->
        <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>-->
        <!--<script src="../js/scripts.js"></script>-->
    </body>
</html>
