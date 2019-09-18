<?php
 include "dbconn1.php";
            if(isset($_GET['v_id'])){
                $v_id = $_GET['v_id'];
?>
			<!-- LIVESTOCK ASSETS -->

                <div class="text-shadow-sub text-center">LIVESTOCK ASSETS</div><br>
                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">4.1. Cattle population, productivity, shelter and waste</div><br>
                <tr>
                     <th scope="col">Particulars</th>
                     <th scope="col">Village Data</th>
                </tr>
                <?php
                $sql19="select * from cattle_pop where v_id=$v_id";
                $res19 = mysqli_query($conn,$sql19);
                while($row19 = mysqli_fetch_array($res19)){

                        $particulars19 =$row19['particulars'];
                        $village_data19 =$row19['village_data'];



                ?>

                <tr>
                    <th scope="row"><?php echo $particulars19; ?></th>
                    <td><?php echo $village_data19; ?></td>
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

                    $sql65="select * from cattle_pop where v_id=$v_id";
                    $res65=mysqli_query($conn,$sql65);
                    while($row65=mysqli_fetch_array($res65)){
                        $particulars65 =$row65['particulars'];
                        $village_data65 =$row65['village_data'];


                ?>

                    ["<?php echo $particulars65; ?>",<?php echo $village_data65; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Cattle population, productivity, shelter and waste",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    is3D: true
                  };
                  var chart = new google.visualization.PieChart(document.getElementById("container-demo-profile15"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile15" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Cattle wise population -->

                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">4.2. Cattle wise population per household among various caste sections</div><br>
                <tr>
                     <th scope="col">Caste Section</th>
                     <th scope="col">Cow</th>
                     <th scope="col">Buffalo</th>
                     <th scope="col">Goats/Sheep</th>
                     <th scope="col">Bullocks</th>
                     <th scope="col">Calves</th>
                     <th scope="col">Poultry/Duck</th>
                </tr>
                <?php
                $sql20="select * from cattle_wise_pop_hsld where v_id=$v_id";
                $res20 = mysqli_query($conn,$sql20);
                while($row20 = mysqli_fetch_array($res20)){

                        $caste20 =$row20['caste'];
                        $cow20 =$row20['cow'];
                        $buffalo20 =$row20['buffalo'];
                        $goat_or_sheep20 =$row20['goat_or_sheep'];
                        $bullocks20 =$row20['bullocks'];
                        $calves20 =$row20['calves'];
                        $poultry_or_duck20 =$row20['poultry_or_duck'];



                ?>

                <tr>
                    <th scope="row"><?php echo $caste20; ?></th>
                    <td><?php echo $cow20; ?></td>
                    <td><?php echo $buffalo20; ?></td>
                    <td><?php echo $goat_or_sheep20; ?></td>
                    <td><?php echo $bullocks20; ?></td>
                    <td><?php echo $calves20; ?></td>
                    <td><?php echo $poultry_or_duck20; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","Cow","Buffalo","Goat/Sheep","Bullocks","Calves","Poultry/Duck"],
                    <?php

                    $sql66="select * from cattle_wise_pop_hsld where v_id=$v_id";
                    $res66=mysqli_query($conn,$sql66);
                    while($row66=mysqli_fetch_array($res66)){
                        $caste66 =$row66['caste'];
                        $cow66 =$row66['cow'];
                        $buffalo66 =$row66['buffalo'];
                        $goat_or_sheep66 =$row66['goat_or_sheep'];
                        $bullocks66 =$row66['bullocks'];
                        $calves66 =$row66['calves'];
                        $poultry_or_duck66 =$row66['poultry_or_duck'];


                ?>

                    ["<?php echo $caste66; ?>",<?php echo $cow66; ?>,<?php echo $buffalo66; ?>,<?php echo $goat_or_sheep66; ?>,<?php echo $bullocks66; ?>,<?php echo $calves66; ?>,<?php echo $poultry_or_duck66; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Cattle wise population per household among various",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" }
                  };
                  var chart = new google.visualization.BarChart(document.getElementById("container-demo-profile16"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile16" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>


<?php
            }
            ?>
