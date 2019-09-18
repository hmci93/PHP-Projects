 <?php
 include "dbconn1.php";
            if(isset($_GET['v_id']))
            {
                $v_id = $_GET['v_id'];


                $v_name1='';
                $tot_hsld='';
		        $tot_pop='';
		        $gen_ratio='';
                $average_members_per_family='';
                $submain1='';
                $submain2='';
                $submain3='';
                $submain4='';
                $caste='';
                $tot31=0;
                $tot32=0;
                $tot41=0;
                $tot42=0;
                $tot51=0;
                $tot52=0;
                $tot261=0;
                $tot262=0;


                ?>
                <!-- Demographic profile -->
                <div class="table-responsive-village-data">
					<table class="table table-striped table-bordered">

                <?php
                $query_village_name ="select * from d_profile where v_id=$v_id";
                $query1= mysqli_query($conn,$query_village_name);
                while($fetch_data = mysqli_fetch_array($query1)){
                    $v_name = $fetch_data['v_name'];
                    $total_household=$fetch_data['total_household'];
                    $total_population=$fetch_data['total_population'];
                    $gender_ratio=$fetch_data['gender_ratio'];

                    $v_name1 .= '<th>'.$fetch_data['v_name'].'</th>';
					$tot_hsld .= '<td>'.$fetch_data['total_household'].'</td>';
					$tot_pop .= '<td>'.$fetch_data['total_population'].'</td>';
					$gen_ratio .= '<td>'.$fetch_data['gender_ratio'].'</td>';
					$average_members_per_family .= '<td>'.$fetch_data['average_members_per_family'].'</td>';

                }

                ?>

                <div class="text-shadow-sub">1. Demographic Profile</div><br>
				<tr><th>Total Household</th><?php echo $tot_hsld; ?></tr>
				<tr><th>Total Population</th><?php echo $tot_pop; ?></tr>
				<tr><th>Gender Ratio</th><?php echo $gen_ratio; ?></tr>
                <tr><th>Average Members Per Family</th><?php echo $average_members_per_family; ?></tr></table>
            </div>

                <!-- Gender wise Population -->

            <div class="table-responsive-village-data">
				<table class="table table-striped table-bordered">
                <div class="text-shadow-sub">1.1 Gender Wise Population Across Age Groups</div><br>
                <tr>
                     <th scope="col">Age</th>
                     <th scope="col">0-5 Years</th>
                     <th scope="col">6-18 Years</th>
                     <th scope="col">19-45 Years</th>
                     <th scope="col">46 and Above</th>
                     <th scope="col">Total</th>
                </tr>
                <?php
                $sql2="select * from gen_wise_pop where v_id=$v_id";
                $res2 = mysqli_query($conn,$sql2);
                while($row2 = mysqli_fetch_array($res2)){

                   		$gender =$row2['gender'];
                        $first_year =$row2['0_5_years'];
                        $second_year =$row2['6_18_years'];
                        $third_year =$row2['19_45_years'];
                        $fourth_year =$row2['46_and_above'];
                        $total_year =$row2['total'];

                ?>

                <tr>
                    <th scope="row"><?php echo $gender; ?></th>
                    <td><?php echo $first_year; ?></td>
                    <td><?php echo $second_year; ?></td>
                    <td><?php echo $third_year; ?></td>
                    <td><?php echo $fourth_year; ?></td>
                    <td><?php echo $total_year; ?></td>
                </tr>
                <?php } ?>
			</table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","Male","Female"],
                    <?php

                    $sql50="select * from gen_wise_pop where v_id=$v_id";
                    $res50=mysqli_query($conn,$sql50);
                    while($row50=mysqli_fetch_array($res50)){
                        $submain1 .=",".$row50['0_5_years'];
                        $submain2 .=",".$row50['6_18_years'];
                        $submain3 .=",".$row50['19_45_years'];
                        $submain4 .=",".$row50['46_and_above'];

                    }
                ?>

                    ["0-5 Years"<?php echo $submain1; ?>],
                    ["6-18 Years"<?php echo $submain2; ?>],
                    ["19-45 Years"<?php echo $submain3; ?>],
                    ["46 and Above"<?php echo $submain4; ?>],
                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Gender Wise Population Across Age Groups",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    isStacked: true
                  };
                  var chart = new google.visualization.ColumnChart(document.getElementById("container-demo-profile"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Poverty Line Caste -->

            <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">1.2 Poverty Line Across Prevailing Caste Section</div><br>
                <tr>
                     <th scope="col">Caste Section</th>
                     <th scope="col">BPL</th>
                     <th scope="col">APL</th>
                     <th scope="col">Total</th>
                </tr>
                <?php
                $sql3="select * from pl_caste where v_id=$v_id";
                $res3 = mysqli_query($conn,$sql3);
                while($row3 = mysqli_fetch_array($res3)){

                        $caste3 =$row3['caste'];
                        $bpl =$row3['bpl'];
                        $apl =$row3['apl'];
                        $total3 =$bpl+$apl;
                        $tot31 =$tot31+$row3['bpl'];
                        $tot32 =$tot32+$row3['apl'];
                        $tot33 =$tot31+$tot32;

                ?>

                <tr>
                    <th scope="row"><?php echo $caste3; ?></th>
                    <td><?php echo $bpl; ?></td>
                    <td><?php echo $apl; ?></td>
                    <td><?php echo $total3; ?></td>
                </tr>
                <?php } ?>
                <tr><th>Total</th><td><?php echo $tot31; ?></td><td><?php echo $tot32; ?></td><td><?php echo $tot33; ?></td></tr>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","APL","BPL"],
                    <?php

                    $sql51="select * from pl_caste where v_id=$v_id";
                    $res51=mysqli_query($conn,$sql51);
                    while($row51=mysqli_fetch_array($res51)){
                        $caste51 =$row51['caste'];
                        $bpl51 =$row51['bpl'];
                        $apl51 =$row51['apl'];


                ?>

                    ["<?php echo $caste51; ?>",<?php echo $apl51; ?>,<?php echo $bpl51; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Poverty Line across prevailing caste sections",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    isStacked: true
                  };
                  var chart = new google.visualization.ColumnChart(document.getElementById("container-demo-profile1"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile1" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Aadhaar Coverage Caste -->

            <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">1.3 Aadhaar Coverage Across Prevailing Caste Section</div><br>
                <tr>
                     <th scope="col">Caste Section</th>
                     <th scope="col">With Aadhar</th>
                     <th scope="col">Without Aadhar</th>
                     <th scope="col">Total</th>
                </tr>
                <?php
                $sql4="select * from aadhar_cov where v_id=$v_id";
                $res4 = mysqli_query($conn,$sql4);
                while($row4 = mysqli_fetch_array($res4)){

                        $caste4 =$row4['caste'];
                        $with_aadhar =$row4['with_aadhar'];
                        $without_aadhar =$row4['without_aadhar'];
                        $total4 =$with_aadhar+$without_aadhar;
                        $tot41 =$tot41+$row4['with_aadhar'];
                        $tot42 =$tot42+$row4['without_aadhar'];
                        $tot44 =$tot41+$tot42;

                ?>

                <tr>
                    <th scope="row"><?php echo $caste4; ?></th>
                    <td><?php echo $with_aadhar; ?></td>
                    <td><?php echo $without_aadhar; ?></td>
                    <td><?php echo $total4; ?></td>
                </tr>
                <?php } ?>
                <tr><th>Total</th><td><?php echo $tot41; ?></td><td><?php echo $tot42; ?></td><td><?php echo $tot44; ?></td></tr>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","With Aadhar","Without Aadhar"],
                    <?php

                    $sql52="select * from aadhar_cov where v_id=$v_id";
                    $res52=mysqli_query($conn,$sql52);
                    while($row52=mysqli_fetch_array($res52)){
                        $caste52 =$row52['caste'];
                        $with_aadhar52 =$row52['with_aadhar'];
                        $without_aadhar52 =$row52['without_aadhar'];


                ?>

                    ["<?php echo $caste52; ?>",<?php echo $with_aadhar52; ?>,<?php echo $without_aadhar52; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Aadhar Coverage across Prevailing Caste Sections",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    isStacked: true
                  };
                  var chart = new google.visualization.ColumnChart(document.getElementById("container-demo-profile2"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile2" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Bank Coverage Caste -->

            <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">1.4 Bank Coverage Across Prevailing Caste Section</div><br>
                <tr>
                     <th scope="col">Caste Section</th>
                     <th scope="col">With Bank Account</th>
                     <th scope="col">Without Bank Account</th>
                     <th scope="col">Total</th>
                </tr>
                <?php
                $sql5="select * from bank_cov where v_id=$v_id";
                $res5 = mysqli_query($conn,$sql5);
                while($row5 = mysqli_fetch_array($res5)){

                        $caste5 =$row5['caste'];
                        $with_bank =$row5['with_bank'];
                        $without_bank =$row5['without_bank'];
                        $total5 =$row5['total'];
                        $tot51 =$tot51+$row5['with_bank'];
                        $tot52 =$tot52+$row5['without_bank'];
                        $tot55 =$tot51+$tot52;

                ?>

                <tr>
                    <th scope="row"><?php echo $caste5; ?></th>
                    <td><?php echo $with_bank; ?></td>
                    <td><?php echo $without_bank; ?></td>
                    <td><?php echo $total5; ?></td>
                </tr>
                <?php } ?>
                <tr><th>Total</th><td><?php echo $tot51; ?></td><td><?php echo $tot52; ?></td><td><?php echo $tot55; ?></td></tr>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","With Bank Account","Without Bank Account"],
                    <?php

                    $sql53="select * from bank_cov where v_id=$v_id";
                    $res53=mysqli_query($conn,$sql53);
                    while($row53=mysqli_fetch_array($res53)){
                        $caste53 =$row53['caste'];
                        $with_bank53 =$row53['with_bank'];
                        $without_bank53 =$row53['without_bank'];


                ?>

                    ["<?php echo $caste53; ?>",<?php echo $with_bank53; ?>,<?php echo $without_bank53; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Bank Coverage across Prevailing Caste Sections",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    isStacked: true
                  };
                  var chart = new google.visualization.ColumnChart(document.getElementById("container-demo-profile3"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile3" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Government Schemes Coverage -->

            <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">1.5 Government Schemes Coverage</div><br>
                <tr>
                     <th scope="col">Sl. No.</th>
                     <th scope="col">Name</th>
                     <th scope="col">Benificiary Households</th>
                </tr>
                <?php
                $sql6="select * from govt_scheme where v_id=$v_id and benificiary_individuals IS NULL";
                $res6 = mysqli_query($conn,$sql6);
                while($row6 = mysqli_fetch_array($res6)){

                        $sl_no6 =$row6['sl_no'];
                        $name6 =$row6['name'];
                        $benificiary_households6 =$row6['benificiary_households'];


                ?>

                <tr>
                    <th scope="row"><?php echo $sl_no6; ?></th>
                    <td><?php echo $name6; ?></td>
                    <td><?php echo $benificiary_households6; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>

            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","Benificiary Households"],
                    <?php

                    $sql54="select * from govt_scheme where v_id=$v_id and benificiary_individuals IS NULL";
                    $res54=mysqli_query($conn,$sql54);
                    while($row54=mysqli_fetch_array($res54)){
                        $name54 =$row54['name'];
                        $benificiary_households54 =$row54['benificiary_households'];


                ?>

                    ["<?php echo $name54; ?>",<?php echo $benificiary_households54; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Government Schemes Coverage",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    isStacked: true
                  };
                  var chart = new google.visualization.BarChart(document.getElementById("container-demo-profile4"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile4" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <br>
                <tr>
                     <th scope="col">Sl. No.</th>
                     <th scope="col">Name</th>
                     <th scope="col">Benificiary Individuals</th>
                </tr>
                <?php
                $sql7="select * from govt_scheme where v_id=$v_id and benificiary_households IS NULL";
                $res7 = mysqli_query($conn,$sql7);
                while($row7 = mysqli_fetch_array($res7)){

                        $sl_no7 =$row7['sl_no'];
                        $name7 =$row7['name'];
                        $benificiary_individuals7 =$row7['benificiary_individuals'];


                ?>

                <tr>
                    <th scope="row"><?php echo $sl_no7; ?></th>
                    <td><?php echo $name7; ?></td>
                    <td><?php echo $benificiary_individuals7; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","Benificiary Individuals"],
                    <?php

                    $sql55="select * from govt_scheme where v_id=$v_id and benificiary_households IS NULL";
                    $res55=mysqli_query($conn,$sql55);
                    while($row55=mysqli_fetch_array($res55)){
                        $name55 =$row55['name'];
                        $benificiary_individuals55 =$row55['benificiary_individuals'];


                ?>

                    ["<?php echo $name55; ?>",<?php echo $benificiary_individuals55; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Government Schemes Coverage",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    isStacked: true
                  };
                  var chart = new google.visualization.BarChart(document.getElementById("container-demo-profile5"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile5" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Migration Scenario -->

            <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">1.6 Migration Scenario</div><br>
                <tr>
                     <th scope="col">Category</th>
                     <th scope="col">Total population in village</th>
                     <th scope="col">Total number of migrants to city</th>
                </tr>
                <?php
                $sql26="select * from mig_scenario where v_id=$v_id";
                $res26 = mysqli_query($conn,$sql26);
                while($row26 = mysqli_fetch_array($res26)){

                        $caste26 =$row26['caste'];
                        $tot_pop_vil26 =$row26['tot_pop_vil'];
                        $tot_mig_city26 =$row26['tot_mig_city'];
                        $tot261 = $tot261+$row26['tot_pop_vil'];
                        $tot262 = $tot262+$row26['tot_mig_city'];


                ?>

                <tr>
                    <th scope="row"><?php echo $caste26; ?></th>
                    <td><?php echo $tot_pop_vil26; ?></td>
                    <td><?php echo $tot_mig_city26; ?></td>
                </tr>
                <?php } ?>
                <tr><th>Total</th><td><?php echo $tot261; ?></td><td><?php echo $tot262; ?></td></tr>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","Total number of migrants to city"],
                    <?php

                    $sql72="select * from mig_scenario where v_id=$v_id";
                    $res72=mysqli_query($conn,$sql72);
                    while($row72=mysqli_fetch_array($res72)){
                        $caste72 =$row72['caste'];
                        $tot_mig_city72 =$row72['tot_mig_city'];


                ?>

                    ["<?php echo $caste72; ?>",<?php echo $tot_mig_city72; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Migration Percentage across Caste Sections",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    is3D: true
                  };
                  var chart = new google.visualization.PieChart(document.getElementById("container-demo-profile22"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile22" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>













<?php
            }
            ?>
