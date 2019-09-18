<?php
 include "dbconn1.php";
            if(isset($_GET['v_id'])){
                $v_id = $_GET['v_id'];
?>
			<!-- Source of energy and power -->

            	<div class="text-shadow-sub text-center">SOURCE OF ENERGY AND POWER</div><br>
                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">6.1.1. General Information</div><br>
                <tr>
                     <th scope="col">Caste Section</th>
                     <th scope="col">Registered Electricity Connection to Households</th>
                </tr>
                <?php
                $sql22="select * from reg_elec_conn where v_id=$v_id";
                $res22 = mysqli_query($conn,$sql22);
                while($row22 = mysqli_fetch_array($res22)){

                        $caste22 =$row22['caste'];
                        $registered_electricity_connection_to_households22 =$row22['registered_electricity_connection_to_households'];



                ?>

                <tr>
                    <th scope="row"><?php echo $caste22; ?></th>
                    <td><?php echo $registered_electricity_connection_to_households22; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","Registered Electricity Connection to Households"],
                    <?php

                    $sql68="select * from reg_elec_conn where v_id=$v_id";
                    $res68=mysqli_query($conn,$sql68);
                    while($row68=mysqli_fetch_array($res68)){
                        $caste68 =$row68['caste'];
                        $registered_electricity_connection_to_households68 =$row68['registered_electricity_connection_to_households'];


                ?>

                    ["<?php echo $caste68; ?>",<?php echo $registered_electricity_connection_to_households68; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Registered Electricity Connection to Households",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    is3D: true
                  };
                  var chart = new google.visualization.PieChart(document.getElementById("container-demo-profile18"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile18" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Electricity Supply -->

                      <div class="table-responsive-village-data">
                      <table class="table table-striped table-bordered">
                      <div class="text-shadow-sub">6.1.2. Electricity Supply & Load of village</div><br>
                      <tr>
                           <th scope="col">Particulars</th>
                           <th scope="col">Village Data</th>
                      </tr>
                      <?php
                      $sql34="select * from electric_supply where v_id=$v_id";
                      $res34 = mysqli_query($conn,$sql34);
                      while($row34 = mysqli_fetch_array($res34)){

                              $particulars34 =$row34['particulars'];
                              $village_data34 =$row34['village_data'];



                      ?>

                      <tr>
                          <th scope="row"><?php echo $particulars34; ?></th>
                          <td><?php echo $village_data34; ?></td>
                      </tr>
                      <?php } ?>
                  </table>
                  </div>

            <!-- Light Source and usuage -->

            	<div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">6.1.3. Lighting Source and usage in Village</div><br>
                <tr>
                     <th scope="col">Lighting Source</th>
                     <th scope="col">Households (nos.)</th>
                </tr>
                <?php
                $sql23="select * from light_source_usuage where v_id=$v_id";
                $res23 = mysqli_query($conn,$sql23);
                while($row23 = mysqli_fetch_array($res23)){

                        $particulars23 =$row23['particulars'];
                        $households23 =$row23['households'];



                ?>

                <tr>
                    <th scope="row"><?php echo $particulars23; ?></th>
                    <td><?php echo $households23; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","Households"],
                    <?php

                    $sql69="select * from light_source_usuage where v_id=$v_id";
                    $res69=mysqli_query($conn,$sql69);
                    while($row69=mysqli_fetch_array($res69)){
                        $particulars69 =$row69['particulars'];
                        $households69 =$row69['households'];


                ?>

                    ["<?php echo $particulars69; ?>",<?php echo $households69; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Lighting Source and usage in Village",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    is3D: true
                  };
                  var chart = new google.visualization.PieChart(document.getElementById("container-demo-profile19"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile19" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Cooking Fuels Usage -->

            	<div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">6.1.4. Cooking Fuels Usage in Village (household nos.)</div><br>
                <tr>
                     <th scope="col">Caste Section</th>
                     <th scope="col">Kerosene</th>
                     <th scope="col">LPG</th>
                     <th scope="col">Biogas</th>
                     <th scope="col">Wood</th>
                     <th scope="col">Cow Dung</th>
                     <th scope="col">Agroresidues</th>
                </tr>
                <?php
                $sql24="select * from cooking_fuel where v_id=$v_id";
                $res24 = mysqli_query($conn,$sql24);
                while($row24 = mysqli_fetch_array($res24)){

                        $caste24 =$row24['caste'];
                        $kerosene24 =$row24['kerosene'];
                        $lpg24 =$row24['lpg'];
                        $biogas24 =$row24['biogas'];
                        $wood24 =$row24['wood'];
                        $cow_dung24 =$row24['cow_dung'];
                        $agroresidues24 =$row24['agroresidues'];



                ?>

                <tr>
                    <th scope="row"><?php echo $caste24; ?></th>
                    <td><?php echo $kerosene24; ?></td>
                    <td><?php echo $lpg24; ?></td>
                    <td><?php echo $biogas24; ?></td>
                    <td><?php echo $wood24; ?></td>
                    <td><?php echo $cow_dung24; ?></td>
                    <td><?php echo $agroresidues24; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","Kerosene","Lpg","Biogas","Wood","Cow Dung","Agroresidues"],
                    <?php

                    $sql70="select * from cooking_fuel where v_id=$v_id";
                    $res70=mysqli_query($conn,$sql70);
                    while($row70=mysqli_fetch_array($res70)){
                        $caste70 =$row70['caste'];
                        $kerosene70 =$row70['kerosene'];
                        $lpg70 =$row70['lpg'];
                        $biogas70 =$row70['biogas'];
                        $wood70 =$row70['wood'];
                        $cow_dung70 =$row70['cow_dung'];
                        $agroresidues70 =$row70['agroresidues'];


                ?>

                    ["<?php echo $caste70; ?>",<?php echo $kerosene70; ?>,<?php echo $lpg70; ?>,<?php echo $biogas70; ?>,<?php echo $wood70; ?>,<?php echo $cow_dung70; ?>,<?php echo $agroresidues70; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Cooking Fuels Usage in Village",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    isStacked: true
                  };
                  var chart = new google.visualization.ColumnChart(document.getElementById("container-demo-profile20"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile20" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Cooking Chullah Usage -->

            	<div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">6.1.5. Cooking Chullah Usage in village</div><br>
                <tr>
                     <th scope="col">Caste Section</th>
                     <th scope="col">Traditional Chullah</th>
                     <th scope="col">Smoke Less Chullah</th>
                </tr>
                <?php
                $sql25="select * from cooking_chullah where v_id=$v_id";
                $res25 = mysqli_query($conn,$sql25);
                while($row25 = mysqli_fetch_array($res25)){

                        $caste25 =$row25['caste'];
                        $traditional_chullah25 =$row25['traditional_chullah'];
                        $smokeless_chullah25 =$row25['smokeless_chullah'];



                ?>

                <tr>
                    <th scope="row"><?php echo $caste25; ?></th>
                    <td><?php echo $traditional_chullah25; ?></td>
                    <td><?php echo $smokeless_chullah25; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","Traditional Chullah","Smokeless Chullah"],
                    <?php

                    $sql71="select * from cooking_chullah where v_id=$v_id";
                    $res71=mysqli_query($conn,$sql71);
                    while($row71=mysqli_fetch_array($res71)){
                        $caste71 =$row71['caste'];
                        $traditional_chullah71 =$row71['traditional_chullah'];
                        $smokeless_chullah71 =$row71['smokeless_chullah'];


                ?>

                    ["<?php echo $caste71; ?>",<?php echo $traditional_chullah71; ?>,<?php echo $smokeless_chullah71; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Cooking Chullah Usage in village",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    isStacked: true
                  };
                  var chart = new google.visualization.ColumnChart(document.getElementById("container-demo-profile21"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile21" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>


<?php
            }
            ?>
