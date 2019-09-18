<?php
include "dbconn1.php";
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>উন্নত ভাৰত অভিযান | যেইচি</title>
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
    background-color: #ccc;
}

/* On mouse-over, add a grey background color */
.containerc:hover input ~ .checkmark {
    background-color: #03A5D3;
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
		$(function() {

			$("#text-one").change(function() {
				if($(this).val() == 'd_profile'){
					$("#text-one-one").load("textdata/" + $(this).val() + ".txt");
					$("#text-two").load("textdata/d_profile_sub.txt");
				}
				else if($(this).val() != 'd_profile'){
					$("#text-one-one").load("textdata/" + $(this).val() + ".txt");
					$("#text-two").load("textdata/base.txt");
				}

			});
			$("#text-one-one").change(function() {
				$("#text-two").load("textdata/" + $(this).val() + ".txt");
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
			<h2>গাঁওৰ তথ্যৰ তুলনা :</h2>
			<hr>
				<form action="demo_comp.php" method="post">
					<div class="form-row">
							<div class="form-group col-md-12 l1">
									<label for="inputState">তুলনাৰ বাবে গাঁও নিৰ্বাচন কৰক</label>
									</div>
									<div class="form-group col-md-4 l2">
										<label class="containerc">ভাস্কৰ নগৰ
										  <input type="checkbox" name="bn" value="1">
										  <span class="checkmark"></span></label>
									</div>
									<div class="form-group col-md-4 l2">
										<label class="containerc">জানখনা গাঁও
										  <input type="checkbox" name="jk" value="2">
										  <span class="checkmark"></span></label>
									</div>
									<div class="form-group col-md-4 l2">
										<label class="containerc">কুৰুকানী বস্তি
										  <input type="checkbox" name="kk" value="3">
										  <span class="checkmark"></span></label>
									</div>
									<div class="form-group col-md-4 l2">
										<label class="containerc">ককিলামুখ মিছিং গাঁও
										  <input type="checkbox" name="km" value="4">
										  <span class="checkmark"></span></label>
									</div>
									<div class="form-group col-md-4 l2">
										<label class="containerc">পহুকটীয়া শ্যাম গাঁও
										  <input type="checkbox" name="ps" value="5">
										  <span class="checkmark"></span></label>
									</div>
							</div>
							<hr>
						<div class="form-row">
						<div class="form-group col-md-4 l1">
						<label for="inputState">প্ৰধান বিভাগ নিৰ্বাচন কৰক</label>
							  <select name="main" id="text-one" class="form-control">
								<option selected value="base">Choose...</option>
								<option value="d_profile">Demographic Profile</option>
								<option value="basic_amenities">Basic Amenities</option>
								<option value="land_agri_res">Land And Agriculture Resources</option>
								<option value="livestock_assets">Livestock Assets</option>
								<option value="livelihood_eco">Livelihood Economics</option>
								<option value="source_energy_power">Source Of Energy And Power</option>
							  </select>
						</div>
						<div class="form-group col-md-4 l1">
						<label for="inputState">উপবিভাগ নিৰ্বাচন কৰক</label>
							  <select name="maintwo" id="text-one-one" class="form-control">
								<option selected value="base">Choose...</option>
							  </select>
						</div>
						<div class="form-group col-md-4 l1">
						<label for="inputState">উপবিভাগ নিৰ্বাচন কৰক</label>
							  <select name="submain" id="text-two" class="form-control">
								<option selected value="base">Choose...</option>
							  </select>
						</div>
					</div>
					<hr>
			<div class="form-row">
				<button type="submit" name="submit" class="btn btn-primary custom-button btn-lg col-md-12"><b>তুলনা</b></button>
			</div>
			</form>

			<!-- SECTION TO BE CHANGED IF NEEDED -->

			<?php
				if (isset($_POST['submit']))
				{

					$main=$_POST['main'];


					$bn=isset($_POST['bn'])?trim($_POST['bn']):null;
					if(empty($bn))
					{
						$bn='NULL';
					}
					$jk=isset($_POST['jk'])?trim($_POST['jk']):null;
					if(empty($jk))
					{
						$jk='NULL';
					}
					$kk=isset($_POST['kk'])?trim($_POST['kk']):null;
					if(empty($kk))
					{
						$kk='NULL';
					}
					$km=isset($_POST['km'])?trim($_POST['km']):null;
					if(empty($km))
					{
						$km='NULL';
					}
					$ps=isset($_POST['ps'])?trim($_POST['ps']):null;
					if(empty($ps))
					{
						$ps='NULL';
					}
					$submain=isset($_POST['submain'])?trim($_POST['submain']):null;
					if(empty($submain))
					{
						$submain='NULL';
					}
					$maintwo=isset($_POST['maintwo'])?trim($_POST['maintwo']):null;
					if(empty($maintwo))
					{
						$maintwo='NULL';
					}


		$v_name1='';
		$tot_hsld='';
		$tot_pop='';
		$gen_ratio='';
		$average_members_per_family='';
		$submain1='';
		$gender='';
		$caste='';
		$name='';
		$particulars='';
		$education_level='';
		$amount_if_used='';


					?>
					<br>
					<div class="table-responsive">
					<table class="table table-striped table-bordered">
					<?php

					if($submain == 'NULL' && $maintwo == 'd_profile_sub'){
					$sql="SELECT * FROM $main WHERE v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";

					if($res=mysqli_query($conn,$sql))
					{
						while($row1=mysqli_fetch_array($res))
							{
								 $v_name=$row1['v_name'];
								 $total_household=$row1['total_household'];
								 $total_population=$row1['total_population'];
								 $gender_ratio=$row1['gender_ratio'];
								 //$average_members_per_family=$row1['average_members_per_family'];
								 $v_name1 .= '<th>'.$row1['v_name'].'</th>';
								 $tot_hsld .= '<td>'.$row1['total_household'].'</td>';
								 $tot_pop .= '<td>'.$row1['total_population'].'</td>';
								 $gen_ratio .= '<td>'.$row1['gender_ratio'].'</td>';
								 $average_members_per_family .= '<td>'.$row1['average_members_per_family'].'</td>';

							}
					}
					?>
						<tr><th></th><?php echo $v_name1; ?></tr>
						<tr><th>Total Household</th><?php echo $tot_hsld; ?></tr>
						<tr><th>Total Population</th><?php echo $tot_pop; ?></tr>
						<tr><th>Gender Ratio</th><?php echo $gen_ratio; ?></tr>
						<tr><th>Average Members Per Family</th><?php echo $average_members_per_family; ?></tr></table>
				</div>

							  <script type="text/javascript">
					google.charts.load('current', {packages:['corechart']});
					google.charts.setOnLoadCallback(drawChart);
					 function drawChart() {
						// Define the chart to be drawn
						var data = google.visualization.arrayToDataTable([
						   ['Comparision', 'Household', { role: 'annotation' }, 'Population', { role: 'annotation' },'Average Members',{ role: 'annotation' }],
						   <?php
						   $sql45="SELECT * FROM $main WHERE v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";

						   $resdemo=mysqli_query($conn,$sql45);
						   while ($rowdemo=mysqli_fetch_array($resdemo)){
							$v_name2=$rowdemo['v_name'];
							$total_household2=$rowdemo['total_household'];
							$total_population2=$rowdemo['total_population'];
							$gender_ratio2=$rowdemo['gender_ratio'];
							$average_members_per_family2=$rowdemo['average_members_per_family'];
							?>
							 ['<?php echo $v_name2; ?>',<?php echo $total_household2; ?>, '<?php echo $total_household2?>', <?php echo $total_population2; ?>, '<?php echo $total_population2; ?>',<?php echo $average_members_per_family2; ?>, '<?php echo $average_members_per_family2; ?>'],
						   <?php } ?>

						 ]);


						var options = {
						   title: 'Villages Demographic Profile Comparision',

						   bar: { groupWidth: '50%' },
						   legend: { position: "top" },
						   hAxis: {
					  title: 'Comparision'
					  },
						   vAxis: {
					  title: 'Percentage of Individuals'
					}
				 };

						// Instantiate and draw the chart.
						var chart = new google.visualization.ColumnChart(document.getElementById('container'));
						chart.draw(data, options);
					 }
					 google.charts.setOnLoadCallback(drawChart);
				  </script>

						<div id="container" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto"></div>
						<div class="table-responsive">
						<table class="table table-striped table-bordered">
					<?php

				}else if($maintwo == 'd_profile_sub'){
					$sql1="select v_name,$submain from $main WHERE v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
					$res1 = mysqli_query($conn,$sql1);
					while($row2 = mysqli_fetch_array($res1)){
						$v_name1 .= '<th>'.$row2['v_name'].'</th>';

						if($submain == 'total_household'){
						$submain1 .='<td>'.$row2['total_household'].'</td>';
						}else if($submain == 'total_population'){
						$submain1 .='<td>'.$row2['total_population'].'</td>';
						} else if($submain == 'gender_ratio'){
						$submain1 .='<td>'.$row2['gender_ratio'].'</td>';
						}else {
						$submain1 .='<td>'.$row2['average_members_per_family'].'</td>';
						}
					}
					?>
					<tr><th></th><?php echo $v_name1; ?></tr>
						<tr><th><?php
						$submain2 = str_replace('_', ' ', $submain);
						$submain3 = ucwords($submain2);
						echo $submain3; ?></th><?php echo $submain1; ?></tr></table>
						</div>
						<!-- table overflow div -->

			<script type="text/javascript">
					google.charts.load('current', {packages:['corechart']});
					google.charts.setOnLoadCallback(drawChart);

					 function drawChart() {
						// Define the chart to be drawn
						var data = google.visualization.arrayToDataTable([

							<?php
						$sql34="select v_name,$submain from $main WHERE v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
					$res34 = mysqli_query($conn,$sql34);
					while($row34 = mysqli_fetch_array($res34)){
						$v_name34 = $row34['v_name'];
						if($submain == 'total_household'){
							$submain34 =$row34['total_household'];
							}else if($submain == 'total_population'){
							$submain34 =$row34['total_population'];
							}else {
							$submain34 =$row34['average_members_per_family'];
							}

						$submain35 = str_replace('_', ' ', $submain);
						$submain36 = ucwords($submain35);

						?>

						['', '<?php echo $submain36; ?>', { role: 'annotation' }],
						['<?php echo $v_name34; ?>',<?php echo $submain34; ?>, '<?php echo $submain34; ?>'],
						<?php } ?>
						 ]);


						var options = {
						   title: 'Villages Demographic Profile Comparision',
						   bar: { groupWidth: '50%' },
						   legend: { position: "top" },
						   hAxis: {
					  title: 'Comparision'
					  },
						   vAxis: {
					  title: 'Percentage of Individuals'
					}
				 };

						// Instantiate and draw the chart.
						var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
						chart.draw(data, options);
					 }
					 google.charts.setOnLoadCallback(drawChart);
				  </script>


						<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>
						 <div class="table-responsive">
						<table class="table table-stripped table-bordered">
			<?php
				}
				else if($maintwo == 'gen_wise_pop'){
					$sql3="select v_name from $main where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
					$res3=mysqli_query($conn,$sql3);
					while($row4=mysqli_fetch_array($res3)){
						$v_name1 .='<th colspan="2">'.$row4['v_name'].'</th>';
					}
					$sql2="select distinct $main.v_name,$maintwo.gender,$submain from $maintwo,$main where $maintwo.v_id=$main.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
					$res2 = mysqli_query($conn,$sql2);
					while($row3 = mysqli_fetch_array($res2)){

						$gender .='<th>'.$row3['gender'].'</th>';
						if($submain == '0_5_years'){
							$submain1 .='<td>'.$row3['0_5_years'].'</td>';
							}else if($submain == '6_18_years'){
							$submain1 .='<td>'.$row3['6_18_years'].'</td>';
							} else if($submain == '19_45_years'){
							$submain1 .='<td>'.$row3['19_45_years'].'</td>';
							}else if($submain == '46_and_above'){
							$submain1 .='<td>'.$row3['46_and_above'].'</td>';
							}else{
							$submain1 .='<td>'.$row3['total'].'</td>';
							}
					}?>
					<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
					<tr><?php echo $gender; ?></tr>
						<tr><th><?php
						$submain4 = str_replace('_', '-', $submain);
						$submain5 = ucwords($submain4);
						echo $submain5; ?></th><?php echo $submain1; ?></tr></table></div>


						<script type="text/javascript">
					google.charts.load('current', {packages:['corechart']});
					google.charts.setOnLoadCallback(drawChart);

					 function drawChart() {
						// Define the chart to be drawn
						var data = google.visualization.arrayToDataTable([

					<?php
					$sql52 = "select distinct $main.v_name,$maintwo.gender,$submain from $maintwo,$main where $maintwo.v_id=$main.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
					$res52 = mysqli_query($conn,$sql52);
					while($row52 = mysqli_fetch_array($res52)){
						$v_name1 = $row52['v_name'];
						$gender52 =$row52['gender'];

						if($submain == '0_5_years'){
							$submain52 =$row52['0_5_years'];
							}else if($submain == '6_18_years'){
							$submain52 =$row52['6_18_years'];
							} else if($submain == '19_45_years'){
							$submain52 =$row52['19_45_years'];
							}else if($submain == '46_and_above'){
							$submain52 =$row52['46_and_above'];
							}else{
							$submain52 =$row52['total'];
							}

						?>

						['', '<?php echo $submain; ?>', { role: 'annotation' },{ role: 'annotation' }],
						['<?php echo $gender52; ?>',<?php echo $submain52; ?>, '<?php echo $submain52; ?>', '<?php echo $v_name1; ?>'],
						<?php } ?>
						 ]);


						var options = {
						   title: 'Villages Demographic Profile Comparision',
						   bar: { groupWidth: '50%' },
						   legend: { position: "top" },
						   hAxis: {
					  title: 'Comparision'
					  },
						   vAxis: {
					  title: 'Percentage of Individuals'
					}
				 };

						// Instantiate and draw the chart.
						var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
						chart.draw(data, options);
					 }
					 google.charts.setOnLoadCallback(drawChart);
				  </script>


						<div id="container1" class="chart-edit" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>
						<div class=table-responsive >
					<table class="table table-bordered table-stripped">
				<?php
				}
				else if($maintwo == 'pl_caste')
		{
			$sql4="select v_name from $main where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res4=mysqli_query($conn,$sql4);
			while($row5=mysqli_fetch_array($res4))
			{
				$v_name1 .='<th colspan="4">'.$row5['v_name'].'</th>';
			}
			$sql5="select caste,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res5 = mysqli_query($conn,$sql5);
			while($row6 = mysqli_fetch_array($res5))
			{

				$caste .='<th>'.$row6['caste'].'</th>';

				if($submain == 'bpl')
				{
					$submain1 .='<td>'.$row6['bpl'].'</td>';
				}
				else
				{
					$submain1 .='<td>'.$row6['apl'].'</td>';
				}

			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $caste; ?></tr>
			<tr><th>
			<?php
				$submain6 = str_replace('_', ' ', $submain);
				$submain7 = ucwords($submain6);
				echo $submain7; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql53 = "select distinct $main.v_name,$maintwo.caste,$submain from $maintwo,$main where $maintwo.v_id=$main.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res53 = mysqli_query($conn,$sql53);
		while($row53 = mysqli_fetch_array($res53)){
			$v_name1 = $row53['v_name'];
			$caste53 =$row53['caste'];

			if($submain == 'bpl'){
				$submain53 =$row53['bpl'];
				}else{
				$submain53 =$row53['apl'];
				}

			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' },{ role: 'annotation' }],
			['<?php echo $caste53; ?>',<?php echo $submain53; ?>, '<?php echo $submain53; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Demographic Profile Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		else if($maintwo == 'aadhar_cov')
		{
			$sql6="select v_name from $main where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res6=mysqli_query($conn,$sql6);
			while($row7=mysqli_fetch_array($res6))
			{
				$v_name1 .='<th colspan="4">'.$row7['v_name'].'</th>';
			}
			$sql7="select caste,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res7 = mysqli_query($conn,$sql7);
			while($row8 = mysqli_fetch_array($res7))
			{

				$caste .='<th>'.$row8['caste'].'</th>';

				if($submain == 'with_aadhar')
				{
					$submain1 .='<td>'.$row8['with_aadhar'].'</td>';
				}
				else
				{
					$submain1 .='<td>'.$row8['without_aadhar'].'</td>';
				}

			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $caste; ?></tr>
			<tr><th>
			<?php
				$submain8 = str_replace('_', ' ', $submain);
				$submain9 = ucwords($submain8);
				echo $submain9; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql54 = "select distinct $main.v_name,$maintwo.caste,$submain from $maintwo,$main where $maintwo.v_id=$main.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res54 = mysqli_query($conn,$sql54);
		while($row54 = mysqli_fetch_array($res54)){
			$v_name1 = $row54['v_name'];
			$caste54 =$row54['caste'];

			if($submain == 'with_aadhar'){
				$submain54 =$row54['with_aadhar'];
				}else{
				$submain54 =$row54['without_aadhar'];
				}

			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' },{ role: 'annotation' }],
			['<?php echo $caste54; ?>',<?php echo $submain54; ?>, '<?php echo $submain54; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Demographic Profile Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		else if($maintwo == 'bank_cov')
		{
			$sql8="select v_name from $main where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res8=mysqli_query($conn,$sql8);
			while($row9=mysqli_fetch_array($res8))
			{
				$v_name1 .='<th colspan="4">'.$row9['v_name'].'</th>';
			}
			$sql9="select caste,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res9 = mysqli_query($conn,$sql9);
			while($row10 = mysqli_fetch_array($res9))
			{

				$caste .='<th>'.$row10['caste'].'</th>';

				if($submain == 'with_bank')
				{
					$submain1 .='<td>'.$row10['with_bank'].'</td>';
				}
				else
				{
					$submain1 .='<td>'.$row10['without_bank'].'</td>';
				}

			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $caste; ?></tr>
			<tr><th>
			<?php
				$submain10 = str_replace('_', ' ', $submain);
				$submain11 = ucwords($submain10);
				echo $submain11; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql55 = "select distinct $main.v_name,$maintwo.caste,$submain from $maintwo,$main where $maintwo.v_id=$main.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res55 = mysqli_query($conn,$sql55);
		while($row55 = mysqli_fetch_array($res55)){
			$v_name1 = $row55['v_name'];
			$caste55 =$row55['caste'];

			if($submain == 'with_bank'){
				$submain55 =$row55['with_bank'];
				}else{
				$submain55 =$row55['without_bank'];
				}

			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' },{ role: 'annotation' }],
			['<?php echo $caste55; ?>',<?php echo $submain55; ?>, '<?php echo $submain55; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Demographic Profile Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		else if($maintwo == 'govt_scheme')
		{
			$sql10="select v_name from $main where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res10=mysqli_query($conn,$sql10);
			while($row11=mysqli_fetch_array($res10))
			{
				if($submain == 'benificiary_households'){
				$v_name1 .='<th colspan="8">'.$row11['v_name'].'</th>';
			}
			else{
				$v_name1 .='<th colspan="9">'.$row11['v_name'].'</th>';
			}
			}
			$sql11="select name,$submain from $maintwo where $submain IS NOT NULL and (v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps)";
			$res11 = mysqli_query($conn,$sql11);
			while($row12 = mysqli_fetch_array($res11))
			{

				$name .='<th>'.$row12['name'].'</th>';

				if($submain == 'benificiary_households')
				{
					$submain1 .='<td>'.$row12['benificiary_households'].'</td>';
				}
				else
				{
					$submain1 .='<td>'.$row12['benificiary_individuals'].'</td>';
				}

			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $name; ?></tr>
			<tr><th>
			<?php
				$submain12 = str_replace('_', ' ', $submain);
				$submain13 = ucwords($submain12);
				echo $submain13; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}

		//end of demographic profile

		//start of basic anemities

		else if($maintwo == 'education')
		{
			$sql12="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res12=mysqli_query($conn,$sql12);
			while($row13=mysqli_fetch_array($res12))
			{

				$v_name1 .='<th colspan="3">'.$row13['v_name'].'</th>';
			}

			$sql13="select particulars,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res13 = mysqli_query($conn,$sql13);
			while($row14 = mysqli_fetch_array($res13))
			{

				$particulars .='<th>'.$row14['particulars'].'</th>';

				$submain1 .='<td>'.$row14['village_data'].'</td>';

			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $particulars; ?></tr>
			<tr><th>
			<?php
				$submain14 = str_replace('_', ' ', $submain);
				$submain15 = ucwords($submain14);
				echo $submain15; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql56 = "select distinct d_profile.v_name,$maintwo.particulars,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res56 = mysqli_query($conn,$sql56);
		while($row56 = mysqli_fetch_array($res56)){
			$v_name1 = $row56['v_name'];
			$particulars56 =$row56['particulars'];


				$submain56 =$row56['village_data'];


			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' },{ role: 'annotation' }],
			['<?php echo $particulars56; ?>',<?php echo $submain56; ?>, '<?php echo $submain56; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Basic Anemities Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		else if($maintwo == 'edu_lvl')
		{
			$sql14="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res14=mysqli_query($conn,$sql14);
			while($row15=mysqli_fetch_array($res14))
			{

				$v_name1 .='<th colspan="10">'.$row15['v_name'].'</th>';
			}

			$sql15="select education_level,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res15 = mysqli_query($conn,$sql15);
			while($row16 = mysqli_fetch_array($res15))
			{

				$education_level .='<th>'.$row16['education_level'].'</th>';

				if($submain == 'male')
				{
					$submain1 .='<td>'.$row16['male'].'</td>';
				}
				else
				{
					$submain1 .='<td>'.$row16['female'].'</td>';
				}

			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $education_level; ?></tr>
			<tr><th>
			<?php
				$submain16 = str_replace('_', ' ', $submain);
				$submain17 = ucwords($submain16);
				echo $submain17; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql57 = "select distinct d_profile.v_name,$maintwo.education_level,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res57 = mysqli_query($conn,$sql57);
		while($row57 = mysqli_fetch_array($res57)){
			$v_name1 = $row57['v_name'];
			$education_level57 =$row57['education_level'];


				if($submain == 'male'){
				$submain57 =$row57['male'];
				}else{
				$submain57 =$row57['female'];
				}


			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' },{ role: 'annotation' }],
			['<?php echo $education_level57; ?>',<?php echo $submain57; ?>, '<?php echo $submain57; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Basic Anemities Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		else if($maintwo == 'health')
		{
			$sql16="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res16=mysqli_query($conn,$sql16);
			while($row17=mysqli_fetch_array($res16))
			{

				$v_name1 .='<th colspan="4">'.$row17['v_name'].'</th>';
			}

			$sql17="select particulars,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res17 = mysqli_query($conn,$sql17);
			while($row18 = mysqli_fetch_array($res17))
			{

				$particulars .='<th>'.$row18['particulars'].'</th>';


				$submain1 .='<td>'.$row18['village_data'].'</td>';


			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $particulars; ?></tr>
			<tr><th>
			<?php
				$submain18 = str_replace('_', ' ', $submain);
				$submain19 = ucwords($submain18);
				echo $submain19; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		else if($maintwo == 'drink_wtr_fac')
		{
			$sql18="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res18=mysqli_query($conn,$sql18);
			while($row19=mysqli_fetch_array($res18))
			{

				$v_name1 .='<th colspan="4">'.$row19['v_name'].'</th>';
			}

			$sql19="select particulars,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res19 = mysqli_query($conn,$sql19);
			while($row20 = mysqli_fetch_array($res19))
			{

				$particulars .='<th>'.$row20['particulars'].'</th>';


				$submain1 .='<td>'.$row20['village_data'].'</td>';


			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $particulars; ?></tr>
			<tr><th>
			<?php
				$submain20 = str_replace('_', ' ', $submain);
				$submain21 = ucwords($submain20);
				echo $submain21; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql59 = "select distinct d_profile.v_name,$maintwo.particulars,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res59 = mysqli_query($conn,$sql59);
		while($row59 = mysqli_fetch_array($res59)){
			$v_name1 = $row59['v_name'];
			$particulars59 =$row59['particulars'];

			$submain59 =$row59['village_data'];


			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' },{ role: 'annotation' }],
			['<?php echo $particulars59; ?>',<?php echo $submain59; ?>, '<?php echo $submain59; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Basic Anemities Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		else if($maintwo == 'hse_hld_waste')
		{
			$sql20="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res20=mysqli_query($conn,$sql20);
			while($row21=mysqli_fetch_array($res20))
			{

				$v_name1 .='<th colspan="3">'.$row21['v_name'].'</th>';
			}

			$sql21="select particulars,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res21 = mysqli_query($conn,$sql21);
			while($row22 = mysqli_fetch_array($res21))
			{

				$particulars .='<th>'.$row22['particulars'].'</th>';


				$submain1 .='<td>'.$row22['village_data'].'</td>';


			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $particulars; ?></tr>
			<tr><th>
			<?php
				$submain22 = str_replace('_', ' ', $submain);
				$submain23 = ucwords($submain22);
				echo $submain23; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql60 = "select distinct d_profile.v_name,$maintwo.particulars,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res60 = mysqli_query($conn,$sql60);
		while($row60 = mysqli_fetch_array($res60)){
			$v_name1 = $row60['v_name'];
			$particulars60 =$row60['particulars'];

			$submain60 =$row60['village_data'];


			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' },{ role: 'annotation' }],
			['<?php echo $particulars60; ?>',<?php echo $submain60; ?>, '<?php echo $submain60; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Basic Anemities Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		else if($maintwo == 'hsehld_wt_or_wot')
		{
			$sql22="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res22=mysqli_query($conn,$sql22);
			while($row23=mysqli_fetch_array($res22))
			{

				$v_name1 .='<th colspan="4">'.$row23['v_name'].'</th>';
			}

			$sql23="select caste,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res23 = mysqli_query($conn,$sql23);
			while($row24 = mysqli_fetch_array($res23))
			{

				$caste .='<th>'.$row24['caste'].'</th>';


				if($submain == 'with_toilet')
				{
					$submain1 .='<td>'.$row24['with_toilet'].'</td>';
				}
				else
				{
					$submain1 .='<td>'.$row24['without_toilet'].'</td>';
				}


			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $caste; ?></tr>
			<tr><th>
			<?php
				$submain24 = str_replace('_', ' ', $submain);
				$submain25 = ucwords($submain24);
				echo $submain25; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql61 = "select distinct d_profile.v_name,$maintwo.caste,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res61 = mysqli_query($conn,$sql61);
		while($row61 = mysqli_fetch_array($res61)){
			$v_name1 = $row61['v_name'];
			$caste61 =$row61['caste'];

			if($submain == 'with_toilet'){
				$submain61 =$row61['with_toilet'];
				}else{
				$submain61 =$row61['without_toilet'];
				}


			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' },{ role: 'annotation' }],
			['<?php echo $caste61; ?>',<?php echo $submain61; ?>, '<?php echo $submain61; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Basic Anemities Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		else if($maintwo == 'houses_among_houshld')
		{
			$sql24="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res24=mysqli_query($conn,$sql24);
			while($row25=mysqli_fetch_array($res24))
			{

				$v_name1 .='<th colspan="4">'.$row25['v_name'].'</th>';
			}

			$sql25="select caste,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res25 = mysqli_query($conn,$sql25);
			while($row26 = mysqli_fetch_array($res25))
			{

				$caste .='<th>'.$row26['caste'].'</th>';


				if($submain == 'kutcha')
				{
					$submain1 .='<td>'.$row26['kutcha'].'</td>';
				}
				elseif ($submain == 'semi_pucca')
				{
					$submain1 .='<td>'.$row26['semi_pucca'].'</td>';
				}
				elseif ($submain == 'pucca')
				{
					$submain1 .='<td>'.$row26['pucca'].'</td>';
				}
				else
				{
					$submain1 .='<td>'.$row26['homeless'].'</td>';
				}


			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $caste; ?></tr>
			<tr><th>
			<?php
				$submain26 = str_replace('_', ' ', $submain);
				$submain27 = ucwords($submain26);
				echo $submain27; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql62 = "select distinct d_profile.v_name,$maintwo.caste,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res62 = mysqli_query($conn,$sql62);
		while($row62 = mysqli_fetch_array($res62)){
			$v_name1 = $row62['v_name'];
			$caste62 =$row62['caste'];

			if($submain == 'kutcha'){
				$submain62 =$row62['kutcha'];
				}elseif($submain == 'semi_pucca'){
				$submain62 =$row62['semi_pucca'];
				}elseif($submain == 'pucca'){
				$submain62 =$row62['pucca'];
				}else{
				$submain62 =$row62['homeless'];
				}


			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' },{ role: 'annotation' }],
			['<?php echo $caste62; ?>',<?php echo $submain62; ?>, '<?php echo $submain62; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Basic Anemities Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		// end of basic anemities

		// start of land and agriculture resources

		else if($maintwo == 'land_use_pattern')
		{
			$sql26="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res26=mysqli_query($conn,$sql26);
			while($row27=mysqli_fetch_array($res26))
			{

				$v_name1 .='<th colspan="7">'.$row27['v_name'].'</th>';
			}

			$sql27="select particulars,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res27 = mysqli_query($conn,$sql27);
			while($row28 = mysqli_fetch_array($res27))
			{

				$particulars .='<th>'.$row28['particulars'].'</th>';

				$submain1 .='<td>'.$row28['village_data'].'</td>';



			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $particulars; ?></tr>
			<tr><th>
			<?php
				$submain28 = str_replace('_', ' ', $submain);
				$submain29 = ucwords($submain28);
				echo $submain29; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql63 = "select distinct d_profile.v_name,$maintwo.particulars,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res63 = mysqli_query($conn,$sql63);
		while($row63 = mysqli_fetch_array($res63)){
			$v_name1 = $row63['v_name'];
			$particulars63 =$row63['particulars'];


			$submain63 =$row63['village_data'];

			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' },{ role: 'annotation' }],
			['<?php echo $particulars63; ?>',<?php echo $submain63; ?>, '<?php echo $submain63; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Land And Agriculture Resources Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		else if($maintwo == 'source_wise_irrig')
		{
			$sql28="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res28=mysqli_query($conn,$sql28);
			while($row29=mysqli_fetch_array($res28))
			{

				$v_name1 .='<th colspan="6">'.$row29['v_name'].'</th>';
			}

			$sql29="select particulars,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res29 = mysqli_query($conn,$sql29);
			while($row30 = mysqli_fetch_array($res29))
			{

				$particulars .='<th>'.$row30['particulars'].'</th>';

				$submain1 .='<td>'.$row30['village_data'].'</td>';



			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $particulars; ?></tr>
			<tr><th>
			<?php
				$submain30 = str_replace('_', ' ', $submain);
				$submain31 = ucwords($submain30);
				echo $submain31; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql64 = "select distinct d_profile.v_name,$maintwo.particulars,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res64 = mysqli_query($conn,$sql64);
		while($row64 = mysqli_fetch_array($res64)){
			$v_name1 = $row64['v_name'];
			$particulars64 =$row64['particulars'];


			$submain64 =$row64['village_data'];

			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' },{ role: 'annotation' }],
			['<?php echo $particulars64; ?>',<?php echo $submain64; ?>, '<?php echo $submain64; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Land And Agriculture Resources Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		else if($maintwo == 'irrig_methods')
		{
			$sql30="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res30=mysqli_query($conn,$sql30);
			while($row31=mysqli_fetch_array($res30))
			{

				$v_name1 .='<th colspan="4">'.$row31['v_name'].'</th>';
			}

			$sql31="select particulars,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res31 = mysqli_query($conn,$sql31);
			while($row32 = mysqli_fetch_array($res31))
			{

				$particulars .='<th>'.$row32['particulars'].'</th>';

				$submain1 .='<td>'.$row32['village_data'].'</td>';



			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $particulars; ?></tr>
			<tr><th>
			<?php
				$submain32 = str_replace('_', ' ', $submain);
				$submain33 = ucwords($submain32);
				echo $submain33; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql65 = "select distinct d_profile.v_name,$maintwo.particulars,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res65 = mysqli_query($conn,$sql65);
		while($row65 = mysqli_fetch_array($res65)){
			$v_name1 = $row65['v_name'];
			$particulars65 =$row65['particulars'];


			$submain65 =$row65['village_data'];

			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' },{ role: 'annotation' }],
			['<?php echo $particulars65; ?>',<?php echo $submain65; ?>, '<?php echo $submain65; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Land And Agriculture Resources Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		else if($maintwo == 'chemicals')
		{
			$sql32="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res32=mysqli_query($conn,$sql32);
			while($row33=mysqli_fetch_array($res32))
			{

				$v_name1 .='<th colspan="4">'.$row33['v_name'].'</th>';
			}

			$sql33="select particulars,amount_if_used,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res33 = mysqli_query($conn,$sql33);
			while($row34 = mysqli_fetch_array($res33))
			{

				$particulars .='<th>'.$row34['particulars'].'</th>';

				$amount_if_used .='<td>'.$row34['amount_if_used'].'</td>';

				if($submain == 'chemicals_used')
				{
					$submain1 .='<td>'.$row34['chemicals_used'].'</td>';
				}
				else
				{
					$submain1 .='<td>'.$row34['chemicals_not_used'].'</td>';
				}

			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $particulars; ?></tr>
			<?php
			if($submain == 'chemicals_used')
			{
				?>
				<tr><th>
			<?php
				$submain34 = str_replace('_', ' ', $submain);
				$submain35 = ucwords($submain34);
				echo $submain35; ?></th><?php echo $submain1; ?></tr>
				<tr><th>Amount used</th><?php echo $amount_if_used; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql66 = "select distinct d_profile.v_name,$maintwo.particulars,$maintwo.amount_if_used,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res66 = mysqli_query($conn,$sql66);
		while($row66 = mysqli_fetch_array($res66)){
			$v_name1 = $row66['v_name'];
			$particulars66 =$row66['particulars'];
			$amount_if_used66 =$row66['amount_if_used'];


			$submain66 =$row66['chemicals_used'];

			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' },'Amount Used', { role: 'annotation' },{ role: 'annotation' }],
			['<?php echo $particulars66; ?>',<?php echo $submain66; ?>, '<?php echo $submain66; ?>', <?php echo $amount_if_used66; ?>, '<?php echo $amount_if_used66; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Land And Agriculture Resources Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<?php
			}
			else
			{
				?>
				<tr><th>
			<?php
				$submain34 = str_replace('_', ' ', $submain);
				$submain35 = ucwords($submain34);
				echo $submain35; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql67 = "select distinct d_profile.v_name,$maintwo.particulars,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res67 = mysqli_query($conn,$sql67);
		while($row67 = mysqli_fetch_array($res67)){
			$v_name1 = $row67['v_name'];
			$particulars67 =$row67['particulars'];


			$submain67 =$row67['chemicals_not_used'];

			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' }, { role: 'annotation' }],
			['<?php echo $particulars67; ?>',<?php echo $submain67; ?>, '<?php echo $submain67; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Land And Agriculture Resources Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<?php
			}
		}

		//end of land and agriculture resources

		//start of livestock assets

		else if($maintwo == 'cattle_pop')
		{
			$sql34="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res34=mysqli_query($conn,$sql34);
			while($row35=mysqli_fetch_array($res34))
			{

				$v_name1 .='<th colspan="6">'.$row35['v_name'].'</th>';
			}

			$sql35="select particulars,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res35 = mysqli_query($conn,$sql35);
			while($row36 = mysqli_fetch_array($res35))
			{

				$particulars .='<th>'.$row36['particulars'].'</th>';

				$submain1 .='<td>'.$row36['village_data'].'</td>';



			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $particulars; ?></tr>
			<tr><th>
			<?php
				$submain36 = str_replace('_', ' ', $submain);
				$submain37 = ucwords($submain36);
				echo $submain37; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql68 = "select distinct d_profile.v_name,$maintwo.particulars,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res68 = mysqli_query($conn,$sql68);
		while($row68 = mysqli_fetch_array($res68)){
			$v_name1 = $row68['v_name'];
			$particulars68 =$row68['particulars'];


			$submain68 =$row68['village_data'];

			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' }, { role: 'annotation' }],
			['<?php echo $particulars68; ?>',<?php echo $submain68; ?>, '<?php echo $submain68; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Livestock Assets Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		else if($maintwo == 'cattle_wise_pop_hsld')
		{
			$sql36="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res36=mysqli_query($conn,$sql36);
			while($row37=mysqli_fetch_array($res36))
			{

				$v_name1 .='<th colspan="4">'.$row37['v_name'].'</th>';
			}

			$sql37="select caste,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res37 = mysqli_query($conn,$sql37);
			while($row38 = mysqli_fetch_array($res37))
			{

				$caste .='<th>'.$row38['caste'].'</th>';

				if($submain == 'cow')
				{
					$submain1 .='<td>'.$row38['cow'].'</td>';
				}
				else if($submain == 'buffalo')
				{
					$submain1 .='<td>'.$row38['buffalo'].'</td>';
				}
				else if($submain == 'goat_or_sheep')
				{
					$submain1 .='<td>'.$row38['goat_or_sheep'].'</td>';
				}
				else if($submain == 'bullocks')
				{
					$submain1 .='<td>'.$row38['bullocks'].'</td>';
				}
				else if($submain == 'calves')
				{
					$submain1 .='<td>'.$row38['calves'].'</td>';
				}
				else
				{
					$submain1 .='<td>'.$row38['poultry_or_duck'].'</td>';
				}



			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $caste; ?></tr>
			<tr><th>
			<?php
				$submain38 = str_replace('_', ' ', $submain);
				$submain39 = ucwords($submain38);
				echo $submain39; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql69 = "select distinct d_profile.v_name,$maintwo.caste,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res69 = mysqli_query($conn,$sql69);
		while($row69 = mysqli_fetch_array($res69)){
			$v_name1 = $row69['v_name'];
			$caste69 =$row69['caste'];

			if($submain == 'cow'){
				$submain69 =$row69['cow'];
				}elseif($submain == 'buffalo'){
				$submain69 =$row69['buffalo'];
				}elseif($submain == 'goat_or_sheep'){
				$submain69 =$row69['goat_or_sheep'];
				}elseif($submain == 'bullocks'){
				$submain69 =$row69['bullocks'];
				}elseif($submain == 'calves'){
				$submain69 =$row69['calves'];
				}else{
				$submain69 =$row69['poultry_or_duck'];
				}
			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' }, { role: 'annotation' }],
			['<?php echo $caste69; ?>',<?php echo $submain69; ?>, '<?php echo $submain69; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Livestock Assets Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}

		//end of livestock assets

		//start of livlihood economics

		else if($maintwo == 'avg_annual_income')
		{
			$sql38="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res38=mysqli_query($conn,$sql38);
			while($row39=mysqli_fetch_array($res38))
			{

				$v_name1 .='<th colspan="4">'.$row39['v_name'].'</th>';
			}

			$sql39="select caste,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res39 = mysqli_query($conn,$sql39);
			while($row40 = mysqli_fetch_array($res39))
			{

				$caste .='<th>'.$row40['caste'].'</th>';

				$submain1 .='<td>'.$row40['average_annual_income'].'</td>';



			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $caste; ?></tr>
			<tr><th>
			<?php
				$submain40 = str_replace('_', ' ', $submain);
				$submain41 = ucwords($submain40);
				echo $submain41; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql70 = "select distinct d_profile.v_name,$maintwo.caste,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res70 = mysqli_query($conn,$sql70);
		while($row70 = mysqli_fetch_array($res70)){
			$v_name1 = $row70['v_name'];
			$caste70 =$row70['caste'];


			$submain70 =$row70['average_annual_income'];

			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' }, { role: 'annotation' }],
			['<?php echo $caste70; ?>',<?php echo $submain70; ?>, '<?php echo $submain70; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Livlihood Economics Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}

		//end of livlihood economics

		//start of source of energy and power

		else if($maintwo == 'reg_elec_conn')
		{
			$sql40="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res40=mysqli_query($conn,$sql40);
			while($row41=mysqli_fetch_array($res40))
			{

				$v_name1 .='<th colspan="4">'.$row41['v_name'].'</th>';
			}

			$sql41="select caste,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res41 = mysqli_query($conn,$sql41);
			while($row42 = mysqli_fetch_array($res41))
			{

				$caste .='<th>'.$row42['caste'].'</th>';

				$submain1 .='<td>'.$row42['registered_electricity_connection_to_households'].'</td>';



			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $caste; ?></tr>
			<tr><th>
			<?php
				$submain42 = str_replace('_', ' ', $submain);
				$submain43 = ucwords($submain42);
				echo $submain43; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql71 = "select distinct d_profile.v_name,$maintwo.caste,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res71 = mysqli_query($conn,$sql71);
		while($row71 = mysqli_fetch_array($res71)){
			$v_name1 = $row71['v_name'];
			$caste71 =$row71['caste'];


			$submain71 =$row71['registered_electricity_connection_to_households'];

			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' }, { role: 'annotation' }],
			['<?php echo $caste71; ?>',<?php echo $submain71; ?>, '<?php echo $submain71; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Source of Energy And Power Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		else if($maintwo == 'light_source_usuage')
		{
			$sql42="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res42=mysqli_query($conn,$sql42);
			while($row43=mysqli_fetch_array($res42))
			{

				$v_name1 .='<th colspan="4">'.$row43['v_name'].'</th>';
			}

			$sql43="select particulars,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res43 = mysqli_query($conn,$sql43);
			while($row44 = mysqli_fetch_array($res43))
			{

				$particulars .='<th>'.$row44['particulars'].'</th>';

				$submain1 .='<td>'.$row44['households'].'</td>';



			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $particulars; ?></tr>
			<tr><th>
			<?php
				$submain44 = str_replace('_', ' ', $submain);
				$submain45 = ucwords($submain44);
				echo $submain45; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql72 = "select distinct d_profile.v_name,$maintwo.particulars,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res72 = mysqli_query($conn,$sql72);
		while($row72 = mysqli_fetch_array($res72)){
			$v_name1 = $row72['v_name'];
			$particulars72 =$row72['particulars'];


			$submain72 =$row72['households'];

			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' }, { role: 'annotation' }],
			['<?php echo $particulars72; ?>',<?php echo $submain72; ?>, '<?php echo $submain72; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Source of Energy And Power Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		else if($maintwo == 'cooking_fuel')
		{
			$sql44="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res44=mysqli_query($conn,$sql44);
			while($row45=mysqli_fetch_array($res44))
			{

				$v_name1 .='<th colspan="4">'.$row45['v_name'].'</th>';
			}

			$sql45="select caste,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res45 = mysqli_query($conn,$sql45);
			while($row46 = mysqli_fetch_array($res45))
			{

				$caste .='<th>'.$row46['caste'].'</th>';

				if($submain == 'kerosene')
				{
					$submain1 .='<td>'.$row46['kerosene'].'</td>';
				}
				else if($submain == 'lpg')
				{
					$submain1 .='<td>'.$row46['lpg'].'</td>';
				}
				else if($submain == 'biogas')
				{
					$submain1 .='<td>'.$row46['biogas'].'</td>';
				}
				else if($submain == 'wood')
				{
					$submain1 .='<td>'.$row46['wood'].'</td>';
				}
				else if($submain == 'cow_dung')
				{
					$submain1 .='<td>'.$row46['cow_dung'].'</td>';
				}
				else
				{
					$submain1 .='<td>'.$row46['agroresidues'].'</td>';
				}



			}

			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $caste; ?></tr>
			<tr><th>
			<?php
				$submain46 = str_replace('_', ' ', $submain);
				$submain47 = ucwords($submain46);
				echo $submain47; ?></th><?php echo $submain1; ?></tr></table>
			</div>


            <script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql73 = "select distinct d_profile.v_name,$maintwo.caste,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res73 = mysqli_query($conn,$sql73);
		while($row73 = mysqli_fetch_array($res73)){
			$v_name1 = $row73['v_name'];
			$caste73 =$row73['caste'];

			if($submain == 'kerosene'){
				$submain73 =$row73['kerosene'];
				}elseif($submain == 'lpg'){
				$submain73 =$row73['lpg'];
				}elseif($submain == 'biogas'){
				$submain73 =$row73['biogas'];
				}elseif($submain == 'wood'){
				$submain73 =$row73['wood'];
				}elseif($submain == 'cow_dung'){
				$submain73 =$row73['cow_dung'];
				}else{
				$submain73 =$row73['agroresidues'];
				}
			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' }, { role: 'annotation' }],
			['<?php echo $caste73; ?>',<?php echo $submain73; ?>, '<?php echo $submain73; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Source of Energy And Power Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
			<?php
		}
		else if($maintwo == 'cooking_chullah')
		{
			$sql46="select v_name from d_profile where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res46=mysqli_query($conn,$sql46);
			while($row47=mysqli_fetch_array($res46))
			{

				$v_name1 .='<th colspan="4">'.$row47['v_name'].'</th>';
			}

			$sql47="select caste,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res47 = mysqli_query($conn,$sql47);
			while($row48 = mysqli_fetch_array($res47))
			{

				$caste .='<th>'.$row48['caste'].'</th>';

				if($submain == 'traditional_chullah')
				{
					$submain1 .='<td>'.$row48['traditional_chullah'].'</td>';
				}
				else
				{
					$submain1 .='<td>'.$row48['smokeless_chullah'].'</td>';
				}



			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $caste; ?></tr>
			<tr><th>
			<?php
				$submain48 = str_replace('_', ' ', $submain);
				$submain49 = ucwords($submain48);
				echo $submain49; ?></th><?php echo $submain1; ?></tr></table>
			</div>

			<script type="text/javascript">
		google.charts.load('current', {packages:['corechart']});
    	google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
            // Define the chart to be drawn
            var data = google.visualization.arrayToDataTable([

		<?php
		$sql74 = "select distinct d_profile.v_name,$maintwo.caste,$submain from $maintwo,d_profile where $maintwo.v_id=d_profile.v_id and ($maintwo.v_id=$bn OR $maintwo.v_id=$jk OR $maintwo.v_id=$kk OR $maintwo.v_id=$km OR $maintwo.v_id=$ps)";
		$res74 = mysqli_query($conn,$sql74);
		while($row74 = mysqli_fetch_array($res74)){
			$v_name1 = $row74['v_name'];
			$caste74 =$row74['caste'];

			if($submain == 'traditional_chullah'){
				$submain74 =$row74['traditional_chullah'];
				}else{
				$submain74 =$row74['smokeless_chullah'];
				}
			?>

            ['', '<?php echo $submain; ?>', { role: 'annotation' }, { role: 'annotation' }],
			['<?php echo $caste74; ?>',<?php echo $submain74; ?>, '<?php echo $submain74; ?>', '<?php echo $v_name1; ?>'],
			<?php } ?>
             ]);


            var options = {
               title: 'Villages Source of Energy And Power Comparision',
			   bar: { groupWidth: '50%' },
			   legend: { position: "top" },
			   hAxis: {
          title: 'Comparision'
		  },
			   vAxis: {
          title: 'Percentage of Individuals'
        }
     };

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
	  </script>

			<div id="container1" class="chart-edit" style = "width: 100%; min-height: 500px; margin: 0 auto;"></div>
			<?php
		}

		//end of source of energy and power
	}
			?>


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
