<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tip Teapi</title>
        <link rel="shortcut icon" href="assets/img/icon-tipteapi@3x.png" type="image/png">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/mystyle.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script>
            function fetchVideo(cat) {
                if (cat == 'scienceandeducation') {
                    var category = 'science and education';
                    window.open('http://www.tipteapi.com/fetchVideo.php?category='+category, 'Play Video', 'width=1000,height=600,left=200,top=50');
                } else {
                    var category = cat;
                    window.open('http://www.tipteapi.com/fetchVideo.php?category='+category, 'Play Video', 'width=1000,height=600,left=200,top=50');
                }
            }
        </script>
    </head>
    <body>
    <!-- <body> -->
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
                                        <button id="button-addon1" type="submit" class="btn btn-link text-primary"><span class="fas fa-search"></span></button>
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
                        <div class="col-lg-2">
                            <button type="button" class="btn" title="Funny" onclick="fetchVideo('funny');">
                                <!-- <div class="card" id="funny" style="width: 1in; height: 1in;"> -->
                                    <img src="assets/img/icon-funny-normal@3x.png" onmouseover="this.src='assets/img/icon-funny-hover@3x.png'" onmouseout="this.src='assets/img/icon-funny-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Funny</div>
                                <!-- <div id="funny" style="width: 1in; height: 1in;"></div><div>Funny</div> -->
                            </button>
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="btn" title="Music" onclick="fetchVideo('music');">
                                <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                                <img src="assets/img/icon-music-normal@3x.png" onmouseover="this.src='assets/img/icon-music-hover@3x.png'" onmouseout="this.src='assets/img/icon-music-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Music</div>
                            </button>
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="btn" title="Drama" onclick="fetchVideo('drama');">
                                <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                                <img src="assets/img/icon-drama-normal@3x.png" onmouseover="this.src='assets/img/icon-drama-hover@3x.png'" onmouseout="this.src='assets/img/icon-drama-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Drama</div>
                            </button>
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="btn" title="Art" onclick="fetchVideo('art');">
                                <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                                <img src="assets/img/icon-art-normal@3x.png" onmouseover="this.src='assets/img/icon-art-hover@3x.png'" onmouseout="this.src='assets/img/icon-art-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Art</div>
                            </button>
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="btn" title="Science & Education" onclick="fetchVideo('scienceandeducation');">
                                <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                                <img src="assets/img/icon-science-tech-normal@3x.png" onmouseover="this.src='assets/img/icon-science-tech-hover@3x.png'" onmouseout="this.src='assets/img/icon-science-tech-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Science & Education</div>
                            </button>
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="btn" title="Dance" onclick="fetchVideo('dance');">
                                <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                                <img src="assets/img/icon-dance-normal@3x.png" onmouseover="this.src='assets/img/icon-dance-hover@3x.png'" onmouseout="this.src='assets/img/icon-dance-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Dance</div>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <button type="button" class="btn" title="Beauty & Style" onclick="fetchVideo('beauty');">
                                <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                                <img src="assets/img/icon-beauty-normal@3x.png" onmouseover="this.src='assets/img/icon-beauty-hover@3x.png'" onmouseout="this.src='assets/img/icon-beauty-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Beauty & Style</div>
                            </button>
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="btn" title="Travel" onclick="fetchVideo('travel');">
                                <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                                <img src="assets/img/icon-travel-normal@3x.png" onmouseover="this.src='assets/img/icon-travel-hover@3x.png'" onmouseout="this.src='assets/img/icon-travel-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Travel</div>
                            </button>
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="btn" title="Sports" onclick="fetchVideo('sports');">
                                <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                                <img src="assets/img/icon-sports-normal@3x.png" onmouseover="this.src='assets/img/icon-sports-hover@3x.png'" onmouseout="this.src='assets/img/icon-sports-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Sports</div>
                            </button class="btn">
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="btn" title="Gaming" onclick="fetchVideo('gaming');">
                                <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                                <img src="assets/img/icon-game-normal@3x.png" onmouseover="this.src='assets/img/icon-game-hover@3x.png'" onmouseout="this.src='assets/img/icon-game-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Gaming</div>
                            </button>
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="btn" title="Food" onclick="fetchVideo('food');">
                                <!-- <div class="card" style="width: 1in; height: 1in;"></div> -->
                                <img src="assets/img/icon-dining-normal@3x.png" onmouseover="this.src='assets/img/icon-dining-hover@3x.png'" onmouseout="this.src='assets/img/icon-dining-normal@3x.png'" style="width: 1in; height: 1in;"><div class="text-white">Food</div>
                            </button>
                        </div>
                        <div class="col-lg-2">
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
        <br><br>
        <?php include 'footer.php'; ?>
    </body>
</html>
