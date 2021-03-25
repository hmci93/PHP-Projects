<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play Video - Tip Teapi</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['resData']) && !empty($_POST['resData'])) {
            $videoData = trim($_POST['resData']);
            $videoData_obj = json_decode($videoData, true);

            if (array_key_exists("message", $videoData_obj)) {
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h4 class="text-center">No Video Found.</h4>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php
            }
            else {
                $videoSrc = array();
                foreach ($videoData_obj as $k) {
                    array_push($videoSrc, 'http://api.teapai.in/'.$k['assetVideo']);
                    // echo 'http://api.teapai.in/'.$k['assetVideo'].'<br>';
                }
                ?>
                <?php// echo json_encode($videoSrc); ?>
                <script>
                        $(document).ready(function(){
                            // var jVideoSrc = '';
                            var jVideoSrc_obj = JSON.parse('<?php echo json_encode($videoSrc); ?>');
                            var srcArrLength = jVideoSrc_obj.length;
                            var player = videojs('preview-player', {controls: true, autoplay: true, preload: 'auto'});
                            player.aspectRatio("16:9");
                            player.src(jVideoSrc_obj[0]);
                            player.load();
                            // player.play();
                            let i=0;
                            function playVideo(i) {
                                player.aspectRatio("16:9");
                                player.src(jVideoSrc_obj[i]);
                                player.load();
                                player.play();
                            }
                            player.on('ended', function(){
                                i++;
                                if(i < srcArrLength) {
                                    playVideo(i);
                                }
                                else {}
                            });
                            // var currVideo = jVideoSrc_obj[i];
                            // var nextVideo = jVideoSrc_obj[i+1];
                            // player.on('ready', function(){
                                
                            //     player.play();
                            // });
                            
                            
                            // player.src(jVideoSrc[0]);
                            // player.play();
                            // player.addChild('BigPlayButton');
                            // var srcArrLength = jVideoSrc.length;
                            // var i=0;
                            // 
                            // alert(srcArrLength);
                        });
                    </script>
                    <!-- <section class="main-preview-player"> -->
                        <video-js id="preview-player" crossorigin="anonymous"></video-js>
                        <!-- <ol class="vjs-playlist"></ol> -->
                    <!-- </section> -->
                    
                <?php
            }
        }
    }
?>
<script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
</body>
</html>