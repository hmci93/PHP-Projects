<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['searchText']) && !empty($_POST['searchText'])) {
            $searchText = trim($_POST['searchText']);
            $key = 'b5d9ef0c4bbcc84e809cb0a6a7ddc6e104cc307e098b72cd0ab93dd9f353e6bd';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script>
        $(document).ready(function(){
            var searchInput = '<?php echo $searchText; ?>';
            var api_key = '<?php echo $key; ?>';
            // alert(searchInput);
            $.post('http://api.tipteapi.com/api_getSearchData.php',{
                searchData: searchInput,
                api_key: api_key
            }, function(response) {
                var res_obj = JSON.parse($.trim(response));
                var srcLength = res_obj.length;
                let i=0;
                $(".card-header").append('<i>"'+searchInput+'"</i>');
                if (res_obj.hasOwnProperty('message')) {
                    $(".card-body").html('<div class="alert alert-success" role="alert"><h4 class="text-center">Sorry.....No Video Found</h4></div>');
                } else {
                    // $(".card-body").html('<div class="row">');
                    for (i = 0; i < srcLength; i++) {
                        $(".card-body .row").append(
                            '<div class="col-6 col-md-2">'+
                            // '<button type="button" class="btn videoPlay" title="'+$.trim(res_obj[i]['assetVideo']).substring(14)+'" onclick="playVideo(\''+$.trim(res_obj[i]['assetVideo']).substring(14)+'\', \''+$.trim(res_obj[i]['category'])+'\', \''+$.trim(res_obj[i]['no_of_likes'])+'\', \''+$.trim(res_obj[i]['assetVideo'])+'\');">'+
                            '<button type="button" class="btn videoPlay" title="'+$.trim(res_obj[i]['assetVideo']).substring(14)+'" onclick="playVideo(\''+$.trim(res_obj[i]['category'])+'\', \''+$.trim(res_obj[i]['no_of_likes'])+'\', \''+$.trim(res_obj[i]['assetVideo'])+'\');">'+
                            '<img src="http://api.tipteapi.com/'+$.trim(res_obj[i]['videoThumbPath'])+'" alt="" style="width: 1in; height: 1in;">'+
                            '</button></div>'
                            );
                    }
                    // $(".card-body").append('</div>');
                }
            });

            // function playVideo(title, cat, likes, path) {
            //     var videoTitle = title;
            //     var videoCat = cat;
            //     var videoLike = likes;
            //     var videoPath = path;
            //     var part_url = 'http://api.teapai.in/';

            //     $(".video").modal("toggle");
            //     $(".video").on("shown.bs.modal", function() {
            //         $(".video").find("#v_title").text(videoTitle);
            //         $(".video").find("#v_cat").text("Category : " + videoCat);
            //         $(".video").find("#v_likes").text("Likes : " + videoLike);
            //         var player = videojs('videoPlayer', {controls: true, autoplay: false, preload: 'auto'});
            //         player.aspectRatio("16:9");
            //         player.src(part_url+videoPath);
            //         player.load();
            //         player.play();
            //     });
            // }
        });

        // function playVideo(title, cat, likes, path) {
        function playVideo(cat, likes, path) {
            // var videoTitle = title;
            var videoCat = cat;
            var videoLike = likes;
            var videoPath = path;
            var part_url = 'http://api.tipteapi.com/';

            $(".video").modal("toggle");
            $(".video").on("shown.bs.modal", function() {
                // $(".video").find("#v_title").text(videoTitle);
                $(".video").find("#v_cat").text("Category : " + videoCat);
                $(".video").find("#v_likes").text("Likes : " + videoLike);
                var player = videojs('videoPlayer', {controls: true, autoplay: false, preload: 'auto'});
                player.aspectRatio("16:9");
                player.src(part_url+videoPath);
                player.load();

                $(document).on("hide.bs.modal", function() {
                    player.reset();
                });
                $(document).on("hidden.bs.modal", function(e) {
                    $(e.target).removeData();
                    $(this).modal("dispose");
                });
            });
        }
    </script>
</head>
<body>
    <?php include 'header1.php'; ?>
    <br>
    <!-- <div class="text-white" id="result" style="visibility: hidden;"></div> -->
    <div class="container-flex">
        <?php include 'header.php'; ?>
        <br>
        <div class="container">
            <div class="card">
                <div class="card-header text-muted"><a class="btn btn-link" href="index.php"><span class="fa fa-home" style="font-size: 30px;"></span></a> Search Results for </div>
                <div class="card-body"><div class="row"></div></div>
            </div>
        </div>
    </div>
    <br>
    <?php include 'footer.php'; ?>

    <!-- Modal -->
    <div class="modal fade video" data-backdrop="static" data-keyboard="false" tabindex="-1">
        <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />
        <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
        <div class="modal-dialog modal-lg" style="border-style: solid; border-color: #49116b; border-radius: 7px;">
            <div class="modal-content">
                <div class="modal-header">
                        <div class="container-fluid">
                            <!--<div class="row">-->
                            <!--    <h5 id="v_title"></h5>-->
                            <!--</div>-->
                            <div class="row">
                                <h5 class="col-6" id="v_cat"></h5>
                                <h5 class="col-6" id="v_likes"></h5>
                            </div>
                        </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <video-js id="videoPlayer" class="vjs-big-play-centered" crossorigin="anonymous"></video-js>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
</body>
</html>
    <?php
        }
    }
?>