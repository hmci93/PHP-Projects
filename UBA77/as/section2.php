<?php
 include "dbconn1.php";
            if(isset($_GET['v_id'])){
                $v_id = $_GET['v_id'];


                $tot271=0;
                $tot272=0;
                $tot273=0;
                $tot274=0;
                $tot275=0;
                $tot276=0;
                $tot277=0;
                $tot278=0;
                $tot279=0;
                $tot2710=0;
                $tot2711=0;
                $tot2712=0;
?>

			<!-- Education -->

            <div class="text-shadow-sub text-center">Basic Amenities</div><br>
            <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">2.1 Education</div><br>
                <tr>
                     <th scope="col">Particulars</th>
                     <th scope="col">Village Data</th>
                </tr>
                <?php
                $sql8="select * from education where v_id=$v_id";
                $res8 = mysqli_query($conn,$sql8);
                while($row8 = mysqli_fetch_array($res8)){

                        $particulars8 =$row8['particulars'];
                        $village_data8 =$row8['village_data'];


                ?>

                <tr>
                    <th scope="row"><?php echo $particulars8; ?></th>
                    <td><?php echo $village_data8; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>

            <!-- Education levels -->

                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">2.2 Number of male and female individuals across different education levels</div><br>
                <tr>
                     <th scope="col">Education Level</th>
                     <th scope="col">Male</th>
                     <th scope="col">Female</th>
                </tr>
                <?php
                $sql9="select * from edu_lvl where v_id=$v_id";
                $res9 = mysqli_query($conn,$sql9);
                while($row9 = mysqli_fetch_array($res9)){

                        $education_level9 =$row9['education_level'];
                        $male9 =$row9['male'];
                        $female9 =$row9['female'];


                ?>

                <tr>
                    <th scope="row"><?php echo $education_level9; ?></th>
                    <td><?php echo $male9; ?></td>
                    <td><?php echo $female9; ?></td>
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

                    $sql56="select * from edu_lvl where v_id=$v_id";
                    $res56=mysqli_query($conn,$sql56);
                    while($row56=mysqli_fetch_array($res56)){
                        $education_level56 =$row56['education_level'];
                        $male56 =$row56['male'];
                        $female56 =$row56['female'];


                ?>

                    ["<?php echo $education_level56; ?>",<?php echo $male56; ?>,<?php echo $female56; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Number of male and female individuals across different education levels",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" }
                  };
                  var chart = new google.visualization.BarChart(document.getElementById("container-demo-profile6"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile6" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- School Going Children -->

                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">2.3 School Going Children and adult literacy across caste groups</div><br>
                <tr>
                     <th scope="col">Caste</th>
                     <th scope="col">Category</th>
                     <th colspan="3" scope="col">School Going Children</th>
                     <th colspan="3" scope="col">Adults</th>
                </tr>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Male</th>
                    <th scope="col">Female</th>
                    <th scope="col">Total</th>
                    <th scope="col">Male</th>
                    <th scope="col">Female</th>
                    <th scope="col">Total</th>
                </tr>
                <?php
                $sql27="select * from sch_child_adult_literacy where v_id=$v_id";
                $res27 = mysqli_query($conn,$sql27);
                while($row27 = mysqli_fetch_array($res27)){

                        $caste27 = $row27['caste'];

                        $sgc_bpl_male27 = $row27['sgc_bpl_male'];
                        $sgc_bpl_female27 = $row27['sgc_bpl_female'];
                        $sgc_bpl_tot27 = $row27['sgc_bpl_tot'];

                        $adult_bpl_male27 = $row27['adult_bpl_male'];
                        $adult_bpl_female27 = $row27['adult_bpl_female'];
                        $adult_bpl_tot27 = $row27['adult_bpl_tot'];

                        $sgc_apl_male27 =  $row27['sgc_apl_male'];
                        $sgc_apl_female27 =$row27['sgc_apl_female'];
                        $sgc_apl_tot27 = $row27['sgc_apl_tot'];

                        $adult_apl_male27 = $row27['adult_apl_male'];
                        $adult_apl_female27 = $row27['adult_apl_female'];
                        $adult_apl_tot27 = $row27['adult_apl_tot'];

                        $tot271 = $tot271+$row27['sgc_bpl_male'];
                        $tot272 = $tot272+$row27['sgc_bpl_female'];
                        $tot273 = $tot273+$row27['sgc_bpl_tot'];

                        $tot274 = $tot274+$row27['adult_bpl_male'];
                        $tot275 = $tot275+$row27['adult_bpl_female'];
                        $tot276 = $tot276+$row27['adult_bpl_tot'];

                        $tot277 = $tot277+$row27['sgc_apl_male'];
                        $tot278 = $tot278+$row27['sgc_apl_female'];
                        $tot279 = $tot279+$row27['sgc_apl_tot'];

                        $tot2710 = $tot2710+$row27['adult_apl_male'];
                        $tot2711 = $tot2711+$row27['adult_apl_female'];
                        $tot2712 = $tot2712+$row27['adult_apl_tot'];

                ?>

                <tr>
                    <th rowspan="2" scope="row"><?php echo $caste27; ?></th>
                    <td>BPL</td>
                    <td><?php echo $sgc_bpl_male27; ?></td>
                    <td><?php echo $sgc_bpl_female27; ?></td>
                    <td><?php echo $sgc_bpl_tot27; ?></td>
                    <td><?php echo $adult_bpl_male27; ?></td>
                    <td><?php echo $adult_bpl_female27; ?></td>
                    <td><?php echo $adult_bpl_tot27; ?></td>
                </tr>
                <tr>
                    <td>APL</td>
                    <td><?php echo $sgc_apl_male27; ?></td>
                    <td><?php echo $sgc_apl_female27; ?></td>
                    <td><?php echo $sgc_apl_tot27; ?></td>
                    <td><?php echo $adult_apl_male27; ?></td>
                    <td><?php echo $adult_apl_female27; ?></td>
                    <td><?php echo $adult_apl_tot27; ?></td>
                </tr>
                <?php } ?>
                <tr>
                    <th rowspan="2" scope="row">TOTAL</th>
                    <td>BPL</td>
                    <td><?php echo $tot271; ?></td>
                    <td><?php echo $tot272; ?></td>
                    <td><?php echo $tot273; ?></td>
                    <td><?php echo $tot274; ?></td>
                    <td><?php echo $tot275; ?></td>
                    <td><?php echo $tot276; ?></td>
                </tr>
                <tr>
                    <td>APL</td>
                    <td><?php echo $tot277; ?></td>
                    <td><?php echo $tot278; ?></td>
                    <td><?php echo $tot279; ?></td>
                    <td><?php echo $tot2710; ?></td>
                    <td><?php echo $tot2711; ?></td>
                    <td><?php echo $tot2712; ?></td>
                </tr>
            </table>
            </div>

            <!-- Health -->

                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">2.4 Health</div><br>
                <tr>
                     <th scope="col">Particulars</th>
                     <th scope="col">Village Data</th>
                </tr>
                <?php
                $sql10="select * from health where v_id=$v_id";
                $res10 = mysqli_query($conn,$sql10);
                while($row10 = mysqli_fetch_array($res10)){

                        $particulars10 =$row10['particulars'];
                        $village_data10 =$row10['village_data'];


                ?>

                <tr>
                    <th scope="row"><?php echo $particulars10; ?></th>
                    <td><?php echo $village_data10; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>

            <!-- Drinkage Water Facility -->

                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">2.5 Drinkage Water Facility</div><br>
                <tr>
                     <th scope="col">Availability of Drinking Water</th>
                     <th scope="col">Village Data</th>
                </tr>
                <?php
                $sql11="select * from drink_wtr_fac where v_id=$v_id";
                $res11 = mysqli_query($conn,$sql11);
                while($row11 = mysqli_fetch_array($res11)){

                        $particulars11 =$row11['particulars'];
                        $village_data11 =$row11['village_data'];


                ?>

                <tr>
                    <th scope="row"><?php echo $particulars11; ?></th>
                    <td><?php echo $village_data11; ?></td>
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

                    $sql57="select * from drink_wtr_fac where v_id=$v_id";
                    $res57=mysqli_query($conn,$sql57);
                    while($row57=mysqli_fetch_array($res57)){
                        $particulars57 =$row57['particulars'];
                        $village_data57 =$row57['village_data'];


                ?>

                    ["<?php echo $particulars57; ?>",<?php echo $village_data57; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Drinking Water Facility",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    is3D: true
                  };
                  var chart = new google.visualization.PieChart(document.getElementById("container-demo-profile7"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile7" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Household Waste Collection -->

                <div class="text-shadow-sub">2.6. Drainage Facility and Sanitation</div><br>
                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">2.6.1. Household Waste Collection System</div><br>
                <tr>
                     <th scope="col">Household Waste Collection System</th>
                     <th scope="col">Village Data</th>
                </tr>
                <?php
                $sql12="select * from hse_hld_waste where v_id=$v_id";
                $res12 = mysqli_query($conn,$sql12);
                while($row12 = mysqli_fetch_array($res12)){

                        $particulars12 =$row12['particulars'];
                        $village_data12 =$row12['village_data'];


                ?>

                <tr>
                    <th scope="row"><?php echo $particulars12; ?></th>
                    <td><?php echo $village_data12; ?></td>
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

                    $sql58="select * from hse_hld_waste where v_id=$v_id";
                    $res58=mysqli_query($conn,$sql58);
                    while($row58=mysqli_fetch_array($res58)){
                        $particulars58 =$row58['particulars'];
                        $village_data58 =$row58['village_data'];


                ?>

                    ["<?php echo $particulars58; ?>",<?php echo $village_data58; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Household Waste Collection System",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    is3D: true
                  };
                  var chart = new google.visualization.PieChart(document.getElementById("container-demo-profile8"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile8" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Drainage -->

                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">2.6.2. Drainage Linked to Households</div><br>
                <tr>
                     <th scope="col">Drainage Linked to Households</th>
                     <th scope="col">Village Data</th>
                </tr>
                <?php
                $sql28="select * from drainage where v_id=$v_id";
                $res28 = mysqli_query($conn,$sql28);
                while($row28 = mysqli_fetch_array($res28)){

                        $particulars28 =$row28['particulars'];
                        $village_data28 =$row28['village_data'];


                ?>

                <tr>
                    <th scope="row"><?php echo $particulars28; ?></th>
                    <td><?php echo $village_data28; ?></td>
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

                    $sql73="select * from drainage where v_id=$v_id";
                    $res73=mysqli_query($conn,$sql73);
                    while($row73=mysqli_fetch_array($res73)){
                        $particulars73 =$row73['particulars'];
                        $village_data73 =$row73['village_data'];


                ?>

                    ["<?php echo $particulars73; ?>",<?php echo $village_data73; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Drainage Linked to Households",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    is3D: true
                  };
                  var chart = new google.visualization.PieChart(document.getElementById("container-demo-profile23"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile23" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Compost Pit -->

                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">2.6.3. Compost Pit</div><br>
                <tr>
                     <th scope="col">Compost Pit</th>
                     <th scope="col">Village Data</th>
                </tr>
                <?php
                $sql29="select * from compost_pit where v_id=$v_id";
                $res29 = mysqli_query($conn,$sql29);
                while($row29 = mysqli_fetch_array($res29)){

                        $particulars29 =$row29['particulars'];
                        $village_data29 =$row29['village_data'];


                ?>

                <tr>
                    <th scope="row"><?php echo $particulars29; ?></th>
                    <td><?php echo $village_data29; ?></td>
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

                    $sql74="select * from compost_pit where v_id=$v_id";
                    $res74=mysqli_query($conn,$sql74);
                    while($row74=mysqli_fetch_array($res74)){
                        $particulars74 =$row74['particulars'];
                        $village_data74 =$row74['village_data'];


                ?>

                    ["<?php echo $particulars74; ?>",<?php echo $village_data74; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Compost Pit",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    is3D: true
                  };
                  var chart = new google.visualization.PieChart(document.getElementById("container-demo-profile24"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile24" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Households toilets across caste -->

                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">2.6.4. Households with and without toilets across different prevailing caste section in village</div><br>
                <tr>
                     <th scope="col">Caste Section</th>
                     <th scope="col">With Toilet</th>
                     <th scope="col">Without Toilet</th>
                     <th scope="col">Total</th>
                </tr>
                <?php
                $sql13="select * from hsehld_wt_or_wot where v_id=$v_id";
                $res13 = mysqli_query($conn,$sql13);
                while($row13 = mysqli_fetch_array($res13)){

                        $caste13 =$row13['caste'];
                        $with_toilet13 =$row13['with_toilet'];
                        $without_toilet13 =$row13['without_toilet'];
                        $total13 =$row13['total'];


                ?>

                <tr>
                    <th scope="row"><?php echo $caste13; ?></th>
                    <td><?php echo $with_toilet13; ?></td>
                    <td><?php echo $without_toilet13; ?></td>
                    <td><?php echo $total13; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","With Toilet","Without Toilet"],
                    <?php

                    $sql59="select * from hsehld_wt_or_wot where v_id=$v_id";
                    $res59=mysqli_query($conn,$sql59);
                    while($row59=mysqli_fetch_array($res59)){
                        $caste59 =$row59['caste'];
                        $with_toilet59 =$row59['with_toilet'];
                        $without_toilet59 =$row59['without_toilet'];


                ?>

                    ["<?php echo $caste59; ?>",<?php echo $with_toilet59; ?>,<?php echo $without_toilet59; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Households with and without toilets across different prevailing caste section in village",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    isStacked: true
                  };
                  var chart = new google.visualization.ColumnChart(document.getElementById("container-demo-profile9"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile9" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Use of toilets -->

                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">2.6.5. Use of toilets across different prevailing caste section in village</div><br>
                <tr>
                     <th scope="col">Caste Section</th>
                     <th scope="col">Private</th>
                     <th scope="col">Community</th>
                     <th scope="col">Open Defecation</th>
                </tr>
                <?php
                $sql30="select * from use_of_toilets where v_id=$v_id";
                $res30 = mysqli_query($conn,$sql30);
                while($row30 = mysqli_fetch_array($res30)){

                        $caste30 =$row30['caste'];
                        $private30 =$row30['private'];
                        $community30 =$row30['community'];
                        $open_defecation30 =$row30['open_defecation'];


                ?>

                <tr>
                    <th scope="row"><?php echo $caste30; ?></th>
                    <td><?php echo $private30; ?></td>
                    <td><?php echo $community30; ?></td>
                    <td><?php echo $open_defecation30; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","Private","Communnity","Open Defecation"],
                    <?php

                    $sql75="select * from use_of_toilets where v_id=$v_id";
                    $res75=mysqli_query($conn,$sql75);
                    while($row75=mysqli_fetch_array($res75)){
                        $caste75 =$row75['caste'];
                        $private75 =$row75['private'];
                        $community75 =$row75['community'];
                        $open_defecation75 =$row75['open_defecation'];


                ?>

                    ["<?php echo $caste75; ?>",<?php echo $private75; ?>,<?php echo $community75; ?>,<?php echo $open_defecation75; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Use of toilets across different prevailing caste section in village",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    isStacked: true
                  };
                  var chart = new google.visualization.ColumnChart(document.getElementById("container-demo-profile25"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile25" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Type of Houses -->

                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">2.7. Type of Houses among the households</div><br>
                <tr>
                     <th scope="col">Caste Section</th>
                     <th scope="col">Kutcha</th>
                     <th scope="col">Semi-Pucca</th>
                     <th scope="col">Pucca</th>
                     <th scope="col">Homeless</th>
                </tr>
                <?php
                $sql14="select * from houses_among_houshld where v_id=$v_id";
                $res14 = mysqli_query($conn,$sql14);
                while($row14 = mysqli_fetch_array($res14)){

                        $caste14 =$row14['caste'];
                        $kutcha14 =$row14['kutcha'];
                        $semi_pucca14 =$row14['semi_pucca'];
                        $pucca14 =$row14['pucca'];
                        $homeless14 =$row14['homeless'];


                ?>

                <tr>
                    <th scope="row"><?php echo $caste14; ?></th>
                    <td><?php echo $kutcha14; ?></td>
                    <td><?php echo $semi_pucca14; ?></td>
                    <td><?php echo $pucca14; ?></td>
                    <td><?php echo $homeless14; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);



                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ["","Kutcha","Semi Pucca","Pucca","Homeless"],
                    <?php

                    $sql60="select * from houses_among_houshld where v_id=$v_id";
                    $res60=mysqli_query($conn,$sql60);
                    while($row60=mysqli_fetch_array($res60)){
                        $caste60 =$row60['caste'];
                        $kutcha60 =$row60['kutcha'];
                        $semi_pucca60 =$row60['semi_pucca'];
                        $pucca60 =$row60['pucca'];
                        $homeless60 =$row60['homeless'];


                ?>

                    ["<?php echo $caste60; ?>",<?php echo $kutcha60; ?>,<?php echo $semi_pucca60; ?>,<?php echo $pucca60; ?>,<?php echo $homeless60; ?>],

                <?php } ?>

                ]);

                  var view = new google.visualization.DataView(data);


                  var options = {
                    title: "Type of Houses among the households",
                    bar: {groupWidth: "50%"},
                    legend: { position: "top" },
                    isStacked: true
                  };
                  var chart = new google.visualization.ColumnChart(document.getElementById("container-demo-profile10"));
                  chart.draw(view, options);
              }
            </script>
            <div id="container-demo-profile10" style = "width: 100%; min-height: 600px; margin: 0 auto;"></div>

            <!-- Village Connectivity -->

                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">2.8. Village Connectivity (Road and Transport)</div><br>
                <tr>
                     <th scope="col">Particulars</th>
                     <th scope="col">Village Data</th>
                </tr>
                <?php
                $sql31="select * from vil_connectivity where v_id=$v_id";
                $res31 = mysqli_query($conn,$sql31);
                while($row31 = mysqli_fetch_array($res31)){

                        $particulars31 =$row31['particulars'];
                        $village_data31 =$row31['village_data'];


                ?>

                <tr>
                    <th scope="row"><?php echo $particulars31; ?></th>
                    <td><?php echo $village_data31; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>

            <!-- Village infrastructure -->

                <div class="table-responsive-village-data">
                <table class="table table-striped table-bordered">
                <div class="text-shadow-sub">2.9. Village infrastructure and services</div><br>
                <tr>
                     <th scope="col">Village Infrastructure / Services</th>
                     <th scope="col">Located in Village (Yes/No)</th>
                     <th scope="col">Numbers</th>
                     <th scope="col">Distance (in KM), If located outside</th>
                </tr>
                <?php
                $sql32="select * from vil_infra_services where v_id=$v_id";
                $res32 = mysqli_query($conn,$sql32);
                while($row32 = mysqli_fetch_array($res32)){

                        $particulars32 =$row32['particulars'];
                        $located32 =$row32['located'];
                        $number32 =$row32['number'];
                        $dist_if_outside32 =$row32['dist_if_outside'];


                ?>

                <tr>
                    <th scope="row"><?php echo $particulars32; ?></th>
                    <td><?php echo $located32; ?></td>
                    <td><?php echo $number32; ?></td>
                    <td><?php echo $dist_if_outside32; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>


<?php
            }
            ?>
