<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tip Teapi</title>
    <link rel="shortcut icon" href="assets/img/icon-tipteapi@3x.png" type="image/png">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/mystyle.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <!-- <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" /> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script> -->
    <script src="js/scripts.js"></script>
    <script>
        function fetchVideo(cat) {
            if (cat == 'scienceandeducation') {
                var category = 'science and education';
                $.get('http://api.tipteapi.com/api_getVideo.php', {
                    cat: category,
                    api_key: 'b5d9ef0c4bbcc84e809cb0a6a7ddc6e104cc307e098b72cd0ab93dd9f353e6bd'
                }, function(response) {
                        $(".result").text($.trim(response));
                        $(".videoCarousel").modal("toggle");
                });
            }
            else {
                var category = cat;
                $.get('http://api.tipteapi.com/api_getVideo.php', {
                    cat: category,
                    api_key: 'b5d9ef0c4bbcc84e809cb0a6a7ddc6e104cc307e098b72cd0ab93dd9f353e6bd'
                }, function(response) {
                        $(".result").text($.trim(response));
                        $(".videoCarousel").modal("toggle");
                });
            }
        }
    </script>
</head>
<body>
    <?php include 'header1.php'; ?>
    <br>
    <div class="container-flex">

        <?php include 'header.php'; ?>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="h-150">
                    <form action="search.php" method="post">
                        <div class="p-1 bg-light rounded rounded-pill shadow-sm-mb-4" style="background-color: #e3f2fd !important;">
                            <div class="input-group">
                                &emsp;<input type="search" name="searchText" id="searchText" required placeholder="What Are You Searching For?" aria-describedby="button-addon1" class="rounded rounded-pill form-control border-0 bg-light" style="background-color: #e3f2fd !important;">
                                <div class="input-group-append">
                                    <button id="button-addon1" type="submit" class="btn btn-link text-primary"><span class="fa fa-search"></span></button>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="searchbar">
                            <input class="search_input" type="text" name="" placeholder="Search...">
                            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                        </div> -->
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-6 col-lg-2 text-center">
                        <button type="button" class="btn" title="Funny" onclick="fetchVideo('funny');">
                            <!-- <div class="card" id="funny" style="width: 1in; height: 1in;"> -->
                            <img src="assets/img/icon-funny-normal@3x.png" onmouseover="this.src='assets/img/icon-funny-hover@3x.png'" onmouseout="this.src='assets/img/icon-funny-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Funny</div>
                            <!-- <div id="funny" style="width: 1in; height: 1in;"></div><div>Funny</div> -->
                        </button>
                    </div>
                    <div class="col-6 col-lg-2 text-center">
                        <button type="button" class="btn" title="Music" onclick="fetchVideo('music');">
                            <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                            <img src="assets/img/icon-music-normal@3x.png" onmouseover="this.src='assets/img/icon-music-hover@3x.png'" onmouseout="this.src='assets/img/icon-music-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Music</div>
                        </button>
                    </div>
                    <div class="col-6 col-lg-2 text-center">
                        <button type="button" class="btn" title="Drama" onclick="fetchVideo('drama');">
                            <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                            <img src="assets/img/icon-drama-normal@3x.png" onmouseover="this.src='assets/img/icon-drama-hover@3x.png'" onmouseout="this.src='assets/img/icon-drama-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Drama</div>
                        </button>
                    </div>
                    <div class="col-6 col-lg-2 text-center">
                        <button type="button" class="btn" title="Art" onclick="fetchVideo('art');">
                            <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                            <img src="assets/img/icon-art-normal@3x.png" onmouseover="this.src='assets/img/icon-art-hover@3x.png'" onmouseout="this.src='assets/img/icon-art-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Art</div>
                        </button>
                    </div>
                    <div class="col-6 col-lg-2 text-center">
                        <button type="button" class="btn" title="Science & Education" onclick="fetchVideo('scienceandeducation');">
                            <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                            <img src="assets/img/icon-science-tech-normal@3x.png" onmouseover="this.src='assets/img/icon-science-tech-hover@3x.png'" onmouseout="this.src='assets/img/icon-science-tech-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Science & Education</div>
                        </button>
                    </div>
                    <div class="col-6 col-lg-2 text-center">
                        <button type="button" class="btn" title="Dance" onclick="fetchVideo('dance');">
                            <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                            <img src="assets/img/icon-dance-normal@3x.png" onmouseover="this.src='assets/img/icon-dance-hover@3x.png'" onmouseout="this.src='assets/img/icon-dance-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Dance</div>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-lg-2 text-center">
                        <button type="button" class="btn" title="Beauty & Style" onclick="fetchVideo('beauty');">
                            <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                            <img src="assets/img/icon-beauty-normal@3x.png" onmouseover="this.src='assets/img/icon-beauty-hover@3x.png'" onmouseout="this.src='assets/img/icon-beauty-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Beauty & Style</div>
                        </button>
                    </div>
                    <div class="col-6 col-lg-2 text-center">
                        <button type="button" class="btn" title="Travel" onclick="fetchVideo('travel');">
                            <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                            <img src="assets/img/icon-travel-normal@3x.png" onmouseover="this.src='assets/img/icon-travel-hover@3x.png'" onmouseout="this.src='assets/img/icon-travel-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Travel</div>
                        </button>
                    </div>
                    <div class="col-6 col-lg-2 text-center">
                        <button type="button" class="btn" title="Sports" onclick="fetchVideo('sports');">
                            <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                            <img src="assets/img/icon-sports-normal@3x.png" onmouseover="this.src='assets/img/icon-sports-hover@3x.png'" onmouseout="this.src='assets/img/icon-sports-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Sports</div>
                        </button class="btn">
                    </div>
                    <div class="col-6 col-lg-2 text-center">
                        <button type="button" class="btn" title="Gaming" onclick="fetchVideo('gaming');">
                            <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                            <img src="assets/img/icon-game-normal@3x.png" onmouseover="this.src='assets/img/icon-game-hover@3x.png'" onmouseout="this.src='assets/img/icon-game-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Gaming</div>
                        </button>
                    </div>
                    <div class="col-6 col-lg-2 text-center">
                        <button type="button" class="btn" title="Food" onclick="fetchVideo('food');">
                            <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                            <img src="assets/img/icon-dining-normal@3x.png" onmouseover="this.src='assets/img/icon-dining-hover@3x.png'" onmouseout="this.src='assets/img/icon-dining-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Food</div>
                        </button>
                    </div>
                    <div class="col-6 col-lg-2 text-center">
                        <button type="button" class="btn" title="Craft" onclick="fetchVideo('craft');">
                            <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                            <img src="assets/img/icon-craft-normal@3x.png" onmouseover="this.src='assets/img/icon-craft-hover@3x.png'" onmouseout="this.src='assets/img/icon-craft-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Craft</div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade videoCarousel" id="videoCarousel" data-backdrop="static" data-keyboard="false" tabindex="-1">
        <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />
        
        <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
        <script>
            // var player = videojs('preview-player', {controls: true, autoplay: true, preload: 'auto'});


            $(".modal").on("shown.bs.modal", function() {
                // var res = $(".result").val();
                var res = $(".result").text();
                var res_obj = JSON.parse(res);
                var srcLength = res_obj.length;
                let i=0;
                var part_url = 'http://api.tipteapi.com/';
                var player = videojs('preview-player', {controls: true, autoplay: true, preload: 'auto'});
                // $(".modal").find("#v_title").text(res_obj[0]['assetVideo'].substring(14));
                $(".modal").find("#v_cat").text("Category : " + res_obj[0]['category']);
                $(".modal").find("#v_likes").text("Likes : " + res_obj[0]['no_of_likes']);
                player.aspectRatio("16:9");
                player.src(part_url+res_obj[0]['assetVideo']);
                player.load();
                player.play();

                function playVideo(i) {
                    // $(".modal").find("#v_title").text(res_obj[i]['assetVideo'].substring(14));
                    $(".modal").find("#v_cat").text("Category : " + res_obj[i]['category']);
                    $(".modal").find("#v_likes").text("Likes : " + res_obj[i]['no_of_likes']);
                    player.aspectRatio("16:9");
                    player.src(part_url+res_obj[i]['assetVideo']);
                    player.load();
                    player.play();
                }
                player.on("ended", function() {
                    i++;
                    if (i < srcLength) {
                        // $(".modal").find("#v_title").text(res_obj[i]['assetVideo'].substring(14));
                        // $(".modal").find("#v_cat").text("Category : " + res_obj[i]['category']);
                        // $(".modal").find("#v_likes").text("Likes : " + res_obj[i]['no_of_likes']);
                        playVideo(i);
                    } else {}
                });
                $("#nextVideo").click(function() {
                    if (i >= 0) {
                        i++;
                        if (i < srcLength) {
                            playVideo(i);
                        } else {}
                    } else {}
                });
                $("#prevVideo").click(function() {
                    if (i > 0) {
                        i--;
                        if (i < srcLength) {
                            playVideo(i);
                        } else {}
                    } else {}
                });
                $(document).on("hide.bs.modal", function() {
                    player.reset();
                });
                $(document).on("hidden.bs.modal", function(e) {
                    $(e.target).removeData();
                    $(this).modal("dispose");
                });
            });
        </script>
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
                            <div class="col-1 col-md-1">
                                <button class="previous round" id="prevVideo" role="button">
                                    <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="col-10 col-md-10">
                                <!-- <div id="playerCarousel" class="carousel slide border"> -->
                                    <!-- <div class="carousel-inner border"> -->
                                        <!-- <div class="carousel-item active border"> -->
                                            <!-- <a class="previous round" href="" role="button">
                                                <span class="fas fa-angle-double-left" aria-hidden="true"></span>
                                            </a> -->
                                            <video-js id="preview-player" crossorigin="anonymous"></video-js>
                                            <!-- <a class="next round" href="" role="button">
                                                <span class="fas fa-angle-double-right" aria-hidden="true"></span>
                                            </a> -->
                                        <!-- </div> -->
                                    <!-- </div> -->
                                <!-- </div> -->
                                <!-- <button class="btn border" id="#nextVideo" role="button">
                                    <span class="fa fa-angle-double-right"></span>
                                </button> -->
                            </div>
                            <div class="col-1 col-md-1">
                                <button class="next round" id="nextVideo" role="button">
                                    <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="result" style="visibility: hidden;"></div>
    </div>
    <br>
    <?php include 'footer.php'; ?>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script> -->
    <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
</body>
</html>