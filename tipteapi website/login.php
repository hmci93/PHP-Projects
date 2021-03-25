<?php
session_start();
    include_once 'g_config.php';
    include_once 'f_config.php';
    
    $google_login_url = $google_client->createAuthUrl();
    
    $facebook_helper = $facebook->getRedirectLoginHelper();
    $facebook_permissions = ['email'];
    
    $facebook_login_url = $facebook_helper->getLoginUrl('https://tipteapi.com/fRedirect.php', $facebook_permissions);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Customer Login - Tip Teapai</title>
        <link rel="shortcut icon" href="assets/img/icon-tipteapi@3x.png" type="image/png">
        <link href="css/styles.css" rel="stylesheet" />
        <!--<link href="css/mystyles.css" rel="stylesheet" />-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-image: url('assets/img/sample_background2.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main><br><br>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Customer Login</h3></div>
                                    <div class="card-body text-center">
                                        <div class="btn-group">
                                            <a class='btn btn-danger disabled'><i class="fab fa-google-plus-g" style="font-size: 20px;"></i></a>
                                            <a class='btn btn-danger' href='<?php echo $google_login_url; ?>' style="font-size: 20px;"> Sign in with Google</a>
                                        </div>
                                        <br><br>
                                        <div class="btn-group">
                                            <a class='btn btn-primary disabled'><i class="fab fa-facebook-f" style="font-size: 20px;"></i></a>
                                            <a class='btn btn-primary' href='<?php echo $facebook_login_url; ?>' style="font-size: 20px;"> Sign in with Facebook</a>
                                        </div>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <?php include 'footer.php'; ?>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
