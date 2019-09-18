<?php
 include "dbconn1.php";
            if(isset($_GET['v_id'])){
                $v_id = $_GET['v_id'];
?>

    <!-- Average annual income -->

          <div class="text-shadow-sub text-center">LIVELIHOOD ECONOMICS</div><br>
            <div class="table-responsive-village-data">
            <table class="table table-striped table-bordered">
            <div class="text-shadow-sub">5.1. Occupation Pattern</div><br>
            <tr>
                 <th scope="col">Occupation</th>
                 <th scope="col">Male</th>
                 <th scope="col">Female</th>
            </tr>
            <?php
            $sql33="select * from occupation where v_id=$v_id";
            $res33 = mysqli_query($conn,$sql33);
            while($row33 = mysqli_fetch_array($res33)){

                    $particulars33 =$row33['particulars'];
                    $male33 =$row33['male'];
                    $female33 =$row33['female'];



            ?>

            <tr>
                <th scope="row"><?php echo $particulars33; ?></th>
                <td><?php echo $male33; ?></td>
                <td><?php echo $female33; ?></td>
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

                $sql76="select * from occupation where v_id=$v_id";
                $res76=mysqli_query($conn,$sql76);
                while($row76=mysqli_fetch_array($res76)){
                    $particulars76 =$row76['particulars'];
                    $male76 =$row76['male'];
                    $female76 =$row76['female'];


            ?>

                ["<?php echo $particulars76; ?>",<?php echo $male76; ?>,<?php echo $female76; ?>],

            <?php } ?>

            ]);

              var view = new google.visualization.DataView(data);


              var options = {
                title: "Occupation Pattern Across Gender",
                bar: {groupWidth: "50%"},
                legend: { position: "top" },
                isStacked: true
              };
              var chart = new google.visualization.BarChart(document.getElementById("container-demo-profile26"));
              chart.draw(view, options);
          }
        </script>
        <div id="container-demo-profile26" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

        <!-- Average annual income -->

                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">5.1. Average annual income per family across prevailing caste</div><br>
                <tr>
                     <th scope="col">Caste Section</th>
                     <th scope="col">Average Annual Income</th>
                </tr>
                <?php
                $sql21="select * from avg_annual_income where v_id=$v_id";
                $res21 = mysqli_query($conn,$sql21);
                while($row21 = mysqli_fetch_array($res21)){

                        $caste21 =$row21['caste'];
                        $average_annual_income21 =$row21['average_annual_income'];



                ?>

                <tr>
                    <th scope="row"><?php echo $caste21; ?></th>
                    <td><?php echo $average_annual_income21; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","Average Annual Income"],
                    <?php

                    $sql67="select * from avg_annual_income where v_id=$v_id";
                    $res67=mysqli_query($conn,$sql67);
                    while($row67=mysqli_fetch_array($res67)){
                        $caste67 =$row67['caste'];
                        $average_annual_income67 =$row67['average_annual_income'];


                ?>

                    ["<?php echo $caste67; ?>",<?php echo $average_annual_income67; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Average Annual Income",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" }
                  };
                  var chart = new google.visualization.ColumnChart(document.getElementById("container-demo-profile17"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile17" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

<?php
            }
            ?>
