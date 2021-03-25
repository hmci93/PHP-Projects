<?php
    if (isset($_GET['v_id']) && isset($_GET['title']) && !empty($_GET['v_id']) && !empty($_GET['title'])) {
        $videoId = trim($_GET['v_id']);
        $title = trim($_GET['title']);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - Tip Teapi</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <script>
        $(document).ready(function () {
            var result = '';
            var videoId = '<?php echo $videoId; ?>';
            $.get('http://api.teapai.in/api_getVideo.php', {
                id: videoId,
                api_key: 'b5d9ef0c4bbcc84e809cb0a6a7ddc6e104cc307e098b72cd0ab93dd9f353e6bd'
            }, function(response) {
                // alert(response);
                result = response;
                var result_obj = JSON.parse(result);
                // alert(result_obj[0]['assetVideo']);
                var player = videojs('videoPlayer', {controls: true, autoplay: false, preload: 'auto'});
                player.aspectRatio("16:9");
                player.src('http://api.teapai.in/'+result_obj[0]['assetVideo']);
            });
        });
    </script>
</head>
<body>
    <video-js id="videoPlayer" crossorigin="anonymous"></video-js>
    <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
</body>
</html>
<?php
    }
?>