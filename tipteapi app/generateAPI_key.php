<?php
    include 'class/class.apiKeys.php';
    
    //calling class
    $tb_handle = new api_keys();
    
    $show_key = '';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (function_exists('openssl_random_pseudo_bytes') === true) {
            // $key = trim(com_create_guid(), '{}');
            $key = openssl_random_pseudo_bytes(16);
            $enc_key = hash('sha256', $key);

            //assigning variables
            $tb_handle->api_key = $enc_key;
            
            $tb_handle->insert();
            
            $show_key = $tb_handle->getLastAPI();
            // $show_key = $enc_key;
        }
        else {
            $show_key='Cannot be Generated';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
        <!-- <div class="row"> -->
            <!-- <div class="col-lg-1"></div> -->
            <!-- <div class="col-lg-10"> -->
                <br><br><br><br><br>
            <!-- </div> -->
            <!-- <div class="col-lg-1"></div> -->
        <!-- </div> -->
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="jumbotron">
                    <h1 class="text-center">Generate API Key</h1>
                    <hr class="my-4">
                    <form action="" method="post">
                        <input class="btn btn-primary btn-block" type="submit" value="Generate">
                    </form>
                    <br><br>
                    
                    <div class="form-group">
                        <label for=""><h3>Generated API Key</h3></label>
                        <input class="form-control" type="text" id="api_key" value="<?php echo $show_key; ?>">
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</body>
</html>