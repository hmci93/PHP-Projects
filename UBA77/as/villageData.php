<?php
include "dbconn1.php";
?>
		<?php
            if(isset($_GET['v_id'])){
				$v_id = $_GET['v_id'];
				$query = "select * from d_profile where v_id=$v_id";
				$res = mysqli_query($conn,$query);
				while($row = mysqli_fetch_array($res)){
					$v_name = $row['v_name'];
				}

			}?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>উন্নত ভাৰত অভিযান | জেইচি</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
		<!-- Slick nav CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all" />
		<!-- Iconfont CSS -->
		<link rel="stylesheet" type="text/css" href="icofont.css" media="all" />
		<!-- Slick CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
		<!-- Popup CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<!-- Switcher CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/switcher-style.css">
		<!-- Animate CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="assets/img/favcion.png" />
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->


	<style>
			@media (min-width: 768px) {

			/* show 3 items */
			.carousel-inner .active,
			.carousel-inner .active + .carousel-item,
			.carousel-inner .active + .carousel-item + .carousel-item,
			.carousel-inner .active + .carousel-item + .carousel-item + .carousel-item  {
				display: block;
			}

			.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
			.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
			.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item,
			.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
				transition: none;
			}

			.carousel-inner .carousel-item-next,
			.carousel-inner .carousel-item-prev {
			  position: relative;
			  transform: translate3d(0, 0, 0);
			}

			.carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
				position: absolute;
				top: 0;
				right: -25%;
				z-index: -1;
				display: block;
				visibility: visible;
			}

			/* left or forward direction */
			.active.carousel-item-left + .carousel-item-next.carousel-item-left,
			.carousel-item-next.carousel-item-left + .carousel-item,
			.carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
			.carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item,
			.carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
				position: relative;
				transform: translate3d(-100%, 0, 0);
				visibility: visible;
			}

			/* farthest right hidden item must be abso position for animations */
			.carousel-inner .carousel-item-prev.carousel-item-right {
				position: absolute;
				top: 0;
				left: 0;
				z-index: -1;
				display: block;
				visibility: visible;
			}

			/* right or prev direction */
			.active.carousel-item-right + .carousel-item-prev.carousel-item-right,
			.carousel-item-prev.carousel-item-right + .carousel-item,
			.carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
			.carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item,
			.carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
				position: relative;
				transform: translate3d(100%, 0, 0);
				visibility: visible;
				display: block;
				visibility: visible;
			}

			}

			/* Bootstrap Lightbox using Modal */

			#profile-grid { overflow: auto; white-space: normal; }
			#profile-grid .profile { padding-bottom: 40px; }
			#profile-grid .panel { padding: 0 }
			#profile-grid .panel-body { padding: 15px }
			#profile-grid .profile-name { font-weight: bold; }
			#profile-grid .thumbnail {margin-bottom:6px;}
			#profile-grid .panel-thumbnail { overflow: hidden; }
			#profile-grid .img-rounded { border-radius: 4px 4px 0 0;}

			.carousel-control-prev {
			  margin-left: -10px;
			  width: 20px;

			}

			.carousel-control-next {
				width: 20px;
			  margin-right: -10px;

			}

			.carousel-control-next-icon:after
			{
			  content: '>';
			  font-size: 55px;
			  color: red;
			}

			.carousel-control-prev-icon:after {
			  content: '<';
			  font-size: 55px;
			  color: red;
			}

			}

			<style>
    #container1 {
        height: 400px;
        min-width: 310px;
        max-width: 800px;
        margin: 0 auto;
	}
	.containerc {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.containerc input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.containerc:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.containerc input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.containerc input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.containerc .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
.form-row button{
				background: #007BFF;
				color:#fff;
				padding: 10px;
}
.text-shadow{
    color:#121214;
    font-size:28px;
    font-family:Verdana, Geneva, Tahoma, Arial, Helvetica, sans-serif;
    text-shadow: 1px 1px 1px #000000;
    font-weight:400;
    line-height:30px;
}
.text-shadow-sub{
    color:#121214;
    font-size:23px;
    font-family:Verdana, Geneva, Tahoma, Arial, Helvetica, sans-serif;
    text-shadow: 1px 1px 1px #000000;
    font-weight:400;
    line-height:30px;
}
.village-color{
    color:#2868C9;
}
.container-for-com .theme {
	background-color: #007BFF;
}
.container-for-com .navbar li a{
	color: #fff !important;
	text-transform: uppercase;
}
.container-for-com .navbar li:hover{
	background-color:#0073D8 ;
}
.container-for-com .colorwhite{
	color: #fff !important;
}
.linker{
	margin-top:10px;
}

/* // Extra small devices (portrait phones, less than 576px) */
@media (max-width: 575.98px) {
	.header{
		font-size: 20px;
	}
	.speciallt{
		font-size: 20px;
	}
 }
    </style>

		<script>
				new WOW().init();
		</script>
		   <script>
				jQuery(document).ready(function($) {
					$('.counter').counterUp({
						delay: 20,
						time: 2000
					});
				});
			</script>
						<!-- jquery main JS -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Counter JS -->
<script src="assets/js/jquery.counterup.min.js"></script>
<script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js"></script>
	  <script>
$(document).ready(function(){
	$("#nav-home").load("section1.php?v_id=<?php echo urlencode($v_id); ?>");
    $("#nav-2-tab").click(function(){
        $("#nav-home").load("section2.php?v_id=<?php echo urlencode($v_id); ?>");
    });
	$("#nav-home-tab").click(function(){
        $("#nav-home").load("section1.php?v_id=<?php echo urlencode($v_id); ?>");
    });
	$("#nav-3-tab").click(function(){
        $("#nav-home").load("section3.php?v_id=<?php echo urlencode($v_id); ?>");
    });
	$("#nav-4-tab").click(function(){
        $("#nav-home").load("section4.php?v_id=<?php echo urlencode($v_id); ?>");
    });
	$("#nav-5-tab").click(function(){
        $("#nav-home").load("section5.php?v_id=<?php echo urlencode($v_id); ?>");
    });
	$("#nav-6-tab").click(function(){
        $("#nav-home").load("section6.php?v_id=<?php echo urlencode($v_id); ?>");
    });
});
</script>

	</head>
	<body data-spy="scroll" data-target=".header" data-offset="50">
		<!-- Page loader -->
	    <div id="preloader"></div>
		<!-- header section start -->
		<header class="header header-demo">
			<div class="container">
				<div class="row flexbox-center">
					<div class="col-lg-2 col-md-3 col-6">
						<div class="logo">
							<a href="#home"><img src="assets/img/logo-as.png" alt="logo" /></a>
							<a class="as-version" href="../index.html">English Version</a>
						</div>
					</div>
					<div class="col-lg-10 col-md-9 col-6">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
								<ul id="primary-menu">
										<li><a class="nav-link active" href="index#home">মুখ্যপৃষ্ঠা</a></li>
										<li><a class="nav-link" href="index#about">আমাৰ বিষয়ে</a></li>
										<li><a class="nav-link" href="index#feature">ইউ বি এ কভাৰেজ</a></li>
										<li><a class="nav-link" href="index#analysis">বিশ্লেষণ আৰু প্ৰতিবেদন</a></li>
		<li><a class="nav-link" href="index#team">ফিল্ডৰ কাম</a></li>
		<li><a class="nav-link" href="index#team1">ইউ বি এ টীম</a></li>
										<li><a class="nav-link" href="index#cus">যোগাযোগ কৰক</a></li>
								</ul>
					    </div>
					</div>
				</div>
			</div>
        </header><!-- header section end -->



        <div class="container container-for-com">
		<div class="text-center text-shadow"><span class="village-color"><?php echo $v_name; ?></span> ANALYSIS REPORT</div>
		<div class="float-right linker"><?php if($v_name == "BHASKAR NAGAR"){
			echo "<a href='villageData.php?v_id= 2 '><span class='village-color'><b><u>JANKHONA GAON</u></b></span></a> | <a href='villageData.php?v_id= 3 '><span class='village-color'><b><u>KURUKANI BASTI</u></b></span></a> | <a href='villageData.php?v_id= 4 '><span class='village-color'><b><u>KOKILAMUKH MISSING GAON</u></b></span></a> | <a href='villageData.php?v_id= 5 '><span class='village-color'><u><b>PAHUKOTIA SHYAM GAON</b></u></span></a>";
		}else if($v_name == "JANKHONA GAON"){
			echo "<a href='villageData.php?v_id= 1 '><span class='village-color'><b><u>BHASKAR NAGAR</u></b></span></a> | <a href='villageData.php?v_id= 3 '><span class='village-color'><b><u>KURUKANI BASTI</u></b></span></a> | <a href='villageData.php?v_id= 4 '><span class='village-color'><b><u>KOKILAMUKH MISSING GAON</u></b></span></a> | <a href='villageData.php?v_id= 5 '><span class='village-color'><u><b>PAHUKOTIA SHYAM GAON</b></u></span></a>";
		}else if($v_name == "KURUKANI BASTI"){
			echo "<a href='villageData.php?v_id= 1 '><span class='village-color'><b><u>BHASKAR NAGAR</u></b></span></a> | <a href='villageData.php?v_id= 2 '><span class='village-color'><b><u>JANKHONA GAON</u></b></span></a> | <a href='villageData.php?v_id= 4 '><span class='village-color'><b><u>KOKILAMUKH MISSING GAON</u></b></span></a> | <a href='villageData.php?v_id= 5 '><span class='village-color'><u><b>PAHUKOTIA SHYAM GAON</b></u></span></a>";
		}else if($v_name == "KOKILAMUKH MISSING GAON"){
			echo "<a href='villageData.php?v_id= 1 '><span class='village-color'><b><u>BHASKAR NAGAR</u></b></span></a> | <a href='villageData.php?v_id= 2 '><span class='village-color'><b><u>JANKHONA GAON</u></b></span></a> | <a href='villageData.php?v_id= 3 '><span class='village-color'><b><u>KURUKANI BASTI</u></b></span></a> | <a href='villageData.php?v_id= 5 '><span class='village-color'><u><b>PAHUKOTIA SHYAM GAON</b></u></span></a>";
		}else if($v_name == "PAHUKOTIA SHYAM GAON"){
			echo "<a href='villageData.php?v_id= 1 '><span class='village-color'><b><u>BHASKAR NAGAR</u></b></span></a> | <a href='villageData.php?v_id= 2 '><span class='village-color'><b><u>JANKHONA GAON</u></b></span></a> | <a href='villageData.php?v_id= 3 '><span class='village-color'><b><u>KURUKANI BASTI</u></b></span></a> | <a href='villageData.php?v_id= 4 '><span class='village-color'><u><b>KOKILAMUKH MISSING GAON</b></u></span></a>";
		}

		?></div>
		<div class="clearfix"></div>
		<hr>
		<nav class="navbar navbar-expand-md navbar-dark theme text-center">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span><span class="px-3 colorwhite small">Sections</span>
          </button>
          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav m-auto nav-menu">
            <li class="nav-item active">
              <a class="nav-link" href="#" id="nav-home-tab">First Section <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="nav-2-tab">Second Section</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="nav-3-tab"> Third Section</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="nav-4-tab">Fourth Section</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="nav-5-tab">Fifth Section</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="nav-6-tab">Sixth Section</a>
            </li>
          </ul>
          </div>
		</nav>
		<br>
		<div id="nav-home"></div>
        </div>










        	<!-- Bootstrap JS -->
			<script src="assets/js/bootstrap.min.js"></script>
			<!-- Slick nav JS -->
			<script src="assets/js/jquery.slicknav.min.js"></script>
			<!-- Slick JS -->
			<script src="assets/js/slick.min.js"></script>
			<!-- owl carousel JS -->
			<script src="assets/js/owl.carousel.min.js"></script>
			<!-- Popup JS -->
			<script src="assets/js/jquery.magnific-popup.min.js"></script>

			<!-- Counterup waypoints JS -->
			<script src="assets/js/waypoints.min.js"></script>
			<!-- YTPlayer JS -->
			<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
			<!-- jQuery Easing JS -->
			<script src="assets/js/jquery.easing.1.3.js"></script>
			<!-- Gmap JS -->
			<script src="assets/js/gmap3.min.js"></script>
			<!-- Custom map JS -->
			<script src="assets/js/custom-map.js"></script>
			<!-- WOW JS -->
			<script src="assets/js/wow-1.3.0.min.js"></script>
			<!-- Switcher JS -->
			<script src="assets/js/switcher.js"></script>
			<!-- charts -->
			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/highcharts-3d.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script>
			<script src="https://code.highcharts.com/modules/export-data.js"></script>
			<script src="http://code.highcharts.com/highcharts-more.js"></script>
			<!-- magnific-popup -->
			<script src="assets/js/magnific-popup.min.js"></script>
			<!-- main JS -->
			<script src="assets/js/main.js"></script>
    </body>
</html>
