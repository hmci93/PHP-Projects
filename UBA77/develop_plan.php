
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Unnat Bharat Abhiyan | JEC</title>
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
						<!-- jquery main JS -->
		<script src="assets/js/jquery.min.js"></script>


	</head>
	<body data-spy="scroll" data-target=".header" data-offset="50">
		<!-- Page loader -->
	    <!-- <div id="preloader"></div> -->
		<!-- header section start -->
		<header class="header header-demo">
			<div class="container">
				<div class="row flexbox-center">
					<div class="col-lg-2 col-md-3 col-6">
						<div class="logo">
							<a href="#home"><img src="assets/img/logo-eng1.png" alt="logo" /></a>
							<a class="as-version" href="as/index.html">অসমীয়া সংস্কৰণ</a>
						</div>
					</div>
					<div class="col-lg-10 col-md-9 col-6">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
                            <ul id="primary-menu">
                                <li><a class="nav-link active" href="index#home">Home</a></li>
                                <li><a class="nav-link" href="index#about">About</a></li>
                                <li><a class="nav-link" href="index#feature">UBA Coverage</a></li>
                                <li><a class="nav-link" href="index#analysis">Analysis & Reports</a></li>
								<li><a class="nav-link" href="index#team">Field Works</a></li>
								<li><a class="nav-link" href="index#team1">UBA Team</a></li>
                                <li><a class="nav-link" href="index#cus">Contact Us</a></li>
                            </ul>
					    </div>
					</div>
				</div>
			</div>
        </header><!-- header section end -->


<!-- ---------------------------------------------------------------------------------------------------------------------- -->
        <div class="container container-for-com">
			<div class="text-center text-shadow">DEVELOPMENT PLANS</div>
			<hr>
			<div class="wrapper-content">
			  	<h3><strong>GOALS</strong></h3>
	      		<br>

	      		<ul class="text-content">
	        		<li>
								<span class="digit float-left">1</span>
	        			<p class="text-justify">To build an understanding of the development agenda within institutes of Higher Education and an institutional capacity and training relevant to national needs, especially those of rural India.</p>
	        		</li>
	        		<li>
								<span class="digit float-left">2</span>
	        			<p class="text-justify">To re-emphasize the need for field work, stake-holder interactions and design for societal objectives as the basis of higher education.</p>
	       			</li>
	        		<li>
								<span class="digit float-left">3</span>
	        			<p class="text-justify">To stress on rigorous reporting and useful outputs as central to developing new professions.</p>
	        		</li>
			        <li>
								<span class="digit float-left">4</span>
			        	<p class="text-justify">To provide rural India and regional agencies with access to the professional resources of the institutes of higher education, especially those that have acquired academic excellence in the field of science, engineering and technology, and management.</p>
			        </li>
			        <li>
								<span class="digit float-left">5</span>
			        	<p class="text-justify">To improve development outcomes as a consequence of this research. To develop new professions and new processes to sustain and absorb the outcomes of research.</p>
			        </li>
			        <li>
								<span class="digit float-left">6</span>
			        	<p class="text-justify">To foster a new dialogue within the larger community on science, society and the environment and to develop a sense of dignity and collective destiny.</p>
			        </li>
	      		</ul>

	      		<br>
	      		<h3><strong>ORGANIC FARMING DEVELOPMENT PLANS</strong></h3>
	      		<br>
	      		<p class="text-justify">Organic farming is a method of crop and livestock production that involves much more than choosing not to use pesticides, fertilizers, genetically modified organisms, antibiotics and growth hormones. The key characteristics of organic farming include :-</p>
	      		<ul class="text-content">
	        		<li>
								<span class="digit float-left">1</span>
	        			<p class="text-justify">Protecting the long term fertility of soils by maintaining organic matter levels, encouraging soil biological activity, and careful mechanical intervention.</p>
	        		</li>
	        		<li>
								<span class="digit float-left">2</span>
	        			<p class="text-justify">Providing crop nutrients indirectly using relatively insoluble nutrient sources which are made available to the plant by the action of soil micro-organisms.</p>
	       			</li>
	        		<li>
								<span class="digit float-left">3</span>
	        			<p class="text-justify">Nitrogen self-sufficiency through the use of legumes and biological nitrogen fixation, as well as effective recycling of organic materials including crop residues and livestock manures.</p>
	        		</li>
			        <li>
								<span class="digit float-left">4</span>
			        	<p class="text-justify">Weed, disease and pest control relying primarily on crop rotations, natural predators, diversity, organic manuring, resistant varieties and limited (preferably minimal) thermal, biological and chemical intervention.</p>
			        </li>
			        <li>
								<span class="digit float-left">5</span>
			        	<p class="text-justify">The extensive management of livestock, paying full regard to their evolutionary adaptations, behavioural needs and animal welfare issues with respect to nutrition, housing, health, breeding and rearing.</p>
			        </li>
			        <li>
								<span class="digit float-left">6</span>
			        	<p class="text-justify">Careful attention to the impact of the farming system on the wider environment and the conservation of wildlife and natural habitats.</p>
			        </li>
	      		</ul>
	      		<br>
	      		<h3><strong>WATER MANAGEMENT DEVELOPMENT PLANS</strong></h3>
	      		<br>
	      		<p>Water is becoming more and more scare with time both in the rural areas as well as the urban areas. This is largely because of bad management and wrong exploitation of water resources. Drinking water is a problem even in urban areas and so is the case in rural areas including water for irrigation. India has enough rains. Most of that water flows down into the sea taking with it the fertile top soil. It does not percolate down and as a result the ground water is also depleting fast, the water table going down and down almost everywhere. There are technologies available, both in the modern sector as well as in the traditional sector for better water management.</p>
	      		<br>
	      		<p>Water resource management is the activity of planning, developing, distributing and managing the optimum use of water resources. It is a sub-set of water cycle management. Ideally, water resource management planning has regard to all the competing demands for water and seeks to allocate water on an equitable basis to satisfy all uses and demands.</p>
	      		<br>
	      		<p>Much effort in water resource management is directed at optimizing the use of water and in minimizing the environmental impact of water use on the natural environment. The observation of water as an integral part of the ecosystem is based on integrated water resource management, where the quantity and quality of the ecosystem help to determine the nature of the natural resources.</p>
	      		<br>
	      		<p>Successful management of any resources requires accurate knowledge of the resource available, the uses to which it may be put, the competing demands for the resource, measures to and processes to evaluate the significance and worth of competing demands and mechanisms to translate policy decisions into actions on the ground.</p>
	      		<br>
	      		<h3><strong>RENEWABLE ENERGY DEVELOPMENT PLANS</strong></h3>
	      		<br>
	      		<p>Energy that is not popularly used and is usually environmentally sound, Fuel sources that are other than those derived from fossil fuels. Examples include: wind, solar, biomass, wave and tidal energy.Alternative energy sources are available free of cost and do not tax the environment for their usage. Power generation through alternative sources of energy is clean and ‘green’. If we shift to use power generated from these sources, then carbon dioxide emission from the conventional energy sources will be greatly reduced, and the problem of global warming will be solved in a few years. Also the fast depleting traditional energy sources can be preserved. Along with air pollution, the use of traditional energy resources also cause soil pollution and water pollution by releasing various toxins to the land and water. This can also be controlled reasonably. The damage that we have caused to earth after the industrial revolution is huge and we will have to take action immediately if we want to keep the planet sustainable for our future generations. The biggest leap that mankind can take to prevent further damage is to start using alternative energy sources.</p><br>
	      		<p>Commonly known alternative energy sources: </p>
	      		<br>
	      		<h4><strong>Solar Energy</strong></h4>
	      		<br>
	      		<p>This is the energy which the earth receives from the Sun. This is one of the most promising alternative energy sources, which will be available to the mankind for centuries to come. The only challenge remains to tap the solar energy in the most efficient way. The solar power generation is done by using a series of photovoltaic cells where the solar rays are converted into electricity. Apart from electricity production solar energy is also being used for heating water, cooking food etc.</p>
	      		<br>
	      		<h4><strong>Wind Energy</strong></h4>
	      		<br>
	      		<p>The power of the wind is harnessed to propel the blades of wind turbine attached to an electric generator to generate wind energy. Wind energy is an effective alternative source of energy in areas where the velocity of wind flow is high.</p>
	      		<br>
	      		<h4><strong>Biomass Energy</strong></h4>
	      		<br>
	      		<p>This is the energy developed from the wastes of various human and animal activities like the by-products and wastes from timber industry, agricultural yields, municipal solid waste etc. Out of the many alternative sources of energy this is the one which takes into account the utilization of waste material to develop energy thereby disposing them off in a profitable and effective way.</p>
	      		<br>
	      		<h4><strong>Hydroelectric Energy</strong></h4>
	      		<br>
	      		<p>The potential energy stored in the water held in dams by is made to drive a water turbine and generator which in turn produces electric power. This form of energy generation is called hydroelectric power. Out of all the alternative energy sources, this one has been most commonly adopted in the current time.</p>
      		</div>
		</div>
<!-- ---------------------------------------------------------------------------------------------------------------------- -->









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
