<?php
 include "dbconn1.php";
            if(isset($_GET['v_id'])){
                $v_id = $_GET['v_id'];
?>
			<!-- Land Use Pattern -->

                <div class="text-shadow-sub text-center">LAND AND AGRICULTURE RESOURCES</div><br>
                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">3.1. Land Use Pattern</div><br>
                <tr>
                     <th scope="col">Particulars</th>
                     <th scope="col">Village Data</th>
                </tr>
                <?php
                $sql15="select * from land_use_pattern where v_id=$v_id";
                $res15 = mysqli_query($conn,$sql15);
                while($row15 = mysqli_fetch_array($res15)){

                        $particulars15 =$row15['particulars'];
                        $village_data15 =$row15['village_data'];



                ?>

                <tr>
                    <th scope="row"><?php echo $particulars15; ?></th>
                    <td><?php echo $village_data15; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","Village Data"],
                    <?php

                    $sql61="select * from land_use_pattern where v_id=$v_id";
                    $res61=mysqli_query($conn,$sql61);
                    while($row61=mysqli_fetch_array($res61)){
                        $particulars61 =$row61['particulars'];
                        $village_data61 =$row61['village_data'];


                ?>

                    ["<?php echo $particulars61; ?>",<?php echo $village_data61; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Land Use Pattern",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    is3D: true
                  };
                  var chart = new google.visualization.PieChart(document.getElementById("container-demo-profile11"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile11" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>


            <!-- Source Wise Irrigation -->

                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">3.2. Source Wise Irrigation Coverage among then households</div><br>
                <tr>
                     <th scope="col">Particulars</th>
                     <th scope="col">Village Data</th>
                </tr>
                <?php
                $sql16="select * from source_wise_irrig where v_id=$v_id";
                $res16 = mysqli_query($conn,$sql16);
                while($row16 = mysqli_fetch_array($res16)){

                        $particulars16 =$row16['particulars'];
                        $village_data16 =$row16['village_data'];



                ?>

                <tr>
                    <th scope="row"><?php echo $particulars16; ?></th>
                    <td><?php echo $village_data16; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","Village Data"],
                    <?php

                    $sql62="select * from source_wise_irrig where v_id=$v_id";
                    $res62=mysqli_query($conn,$sql62);
                    while($row62=mysqli_fetch_array($res62)){
                        $particulars62 =$row62['particulars'];
                        $village_data62 =$row62['village_data'];


                ?>

                    ["<?php echo $particulars62; ?>",<?php echo $village_data62; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Land Use Pattern",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    is3D: true
                  };
                  var chart = new google.visualization.PieChart(document.getElementById("container-demo-profile12"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile12" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Irrigation Methods -->

                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">3.3. Irrigation methods used among the households</div><br>
                <tr>
                     <th scope="col">Particulars</th>
                     <th scope="col">Village Data</th>
                </tr>
                <?php
                $sql17="select * from irrig_methods where v_id=$v_id";
                $res17 = mysqli_query($conn,$sql17);
                while($row17 = mysqli_fetch_array($res17)){

                        $particulars17 =$row17['particulars'];
                        $village_data17 =$row17['village_data'];



                ?>

                <tr>
                    <th scope="row"><?php echo $particulars17; ?></th>
                    <td><?php echo $village_data17; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","Village Data"],
                    <?php

                    $sql63="select * from irrig_methods where v_id=$v_id";
                    $res63=mysqli_query($conn,$sql63);
                    while($row63=mysqli_fetch_array($res63)){
                        $particulars63 =$row63['particulars'];
                        $village_data63 =$row63['village_data'];


                ?>

                    ["<?php echo $particulars63; ?>",<?php echo $village_data63; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Land Use Pattern",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    is3D: true
                  };
                  var chart = new google.visualization.PieChart(document.getElementById("container-demo-profile13"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile13" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Chemicals -->

                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">3.4. Use of Chemicals and fertilizers</div><br>
                <tr>
                     <th scope="col">Particulars</th>
                     <th scope="col" colspan="2">Village Data</th>
                     <th scope="col">If Yes, Avg. Fertilizer or chemical Use(Kg/Acre)</th>
                </tr>
                <?php
                $sql18="select * from chemicals where v_id=$v_id";
                $res18 = mysqli_query($conn,$sql18);
                while($row18 = mysqli_fetch_array($res18)){

                        $particulars18 =$row18['particulars'];
                        $chemicals_used18 =$row18['chemicals_used'];
                        $chemicals_not_used18 =$row18['chemicals_not_used'];
                        $amount_if_used18 =$row18['amount_if_used'];



                ?>

                <tr>
                    <th scope="row" rowspan="2"><?php echo $particulars18; ?></th>
                    <td>Yes</td>
                    <td><?php echo $chemicals_used18; ?></td>
                    <td rowspan="2"><?php echo $amount_if_used18; ?></td>
                </tr>
                <tr><td>No</td><td><?php echo $chemicals_not_used18; ?></td></tr>
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

                    $sql64="select * from chemicals where v_id=$v_id";
                    $res64=mysqli_query($conn,$sql64);
                    while($row64=mysqli_fetch_array($res64)){
                        $particulars64 =$row64['particulars'];
                        $chemicals_used64 =$row64['chemicals_used'];
                        $chemicals_not_used64 =$row64['chemicals_not_used'];


                ?>

                    ["<?php echo $particulars64; ?>",<?php echo $chemicals_used64; ?>,<?php echo $chemicals_not_used64; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Use of Chemicals and Fertilizers",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" }
                  };
                  var chart = new google.visualization.BarChart(document.getElementById("container-demo-profile14"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile14" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>


<?php
            }
            ?>
