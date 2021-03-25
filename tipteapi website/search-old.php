<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search - Tip Teapi</title>
    <link rel="shortcut icon" href="assets/img/icon-tipteapi@3x.png" type="image/png">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/mystyle.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script>
        function playVideo(v_id, title) {
            var videoId = v_id;
            var playerTitle = title;
            window.open('http://www.tipteapi.com/playSingleVideo.php?v_id='+videoId+'&title='+playerTitle, 'Play Single Video', 'width=1000,height=600,left=200,top=50');
        }
    </script>
<?php
    
        if (isset($_POST['searchText']) && !empty($_POST['searchText']) && !isset($_POST['result'])) {
            $searchText = trim($_POST['searchText']);
            $key = 'b5d9ef0c4bbcc84e809cb0a6a7ddc6e104cc307e098b72cd0ab93dd9f353e6bd';
            ?>

    <script>
        $(document).ready(function(){
            var searchInput = '<?php echo $searchText; ?>';
            var api_key = '<?php echo $key; ?>';
            // alert(searchInput);
            $.post('http://api.teapai.in/api_getSearchData.php',{
                searchData: searchInput,
                api_key: api_key
            }, function(response) {
                $("#result").val($.trim(response));
                $("#searched").val($.trim(searchInput));
                $("#sendSearchData").submit();
            });
        });
    </script>
</head>
<body>
    <form id="sendSearchData" action="search.php" method="post">
        <textarea name="result" id="result" value="" style="visibility: hidden" required></textarea>
        <input type="hidden" name="searched" id="searched" value="" required>
    </form>
<!-- </body> -->
        <?php
        }
        
        else if (isset($_POST['result']) && isset($_POST['searched']) && !empty($_POST['result']) && !empty($_POST['searched']) && !isset($_POST['searchText'])) {
            ?>
            <!-- </head> -->
            <!-- <body> -->
        <div class="container-flex">
            <?php include 'header.php'; ?>
            <br>
            <div class="container">
                
                <div class="card">
                    <div class="card-header text-muted">
                        Search Results for <i>"<?php echo trim($_POST['searched']); ?>"</i> :
                    </div>
                    <div class="card-body">
                        <?php
                            $resultData_obj = json_decode(trim($_POST['result']), true);
                            if (array_key_exists("message", $resultData_obj)) {
                                ?>
                                <div class="alert alert-success fade show" role="alert">
                                    <h4 class="text-center">No Video Found.</h4>
                                </div>
                                <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                            <?php
                            }
                            else {
                                ?>
                                <div class="row">
                                <?php
                                foreach ($resultData_obj as $k) {
                                    ?>
                                    <div class="col-md-2">
                                        <button type="button" class="btn" title="<?php echo substr(trim($k['assetVideo']), 14); ?>" onclick="playVideo('<?php echo trim($k['v_id']); ?>', '<?php echo substr(trim($k['assetVideo']), 14); ?>');">
                                            <img src="assets/img/no-video-preview3.png" alt="" style="width: 1in; height: 1in;">
                                            <!-- <div></div> -->
                                        </button>
                                    </div>
                                    <?php
                                }
                                ?>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }
    ?>
    <br><br>
    <?php include 'footer.php'; ?>
    </div>
</body>
</html>
    <?php
    }
?>