
        <div id="container" style = "width: 800px; height: 600px; margin: 0 auto"></div>
            <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
               ['Caste Sections', 'With Aadhar', { role: 'annotation' }, 'Without Aadhar', { role: 'annotation' }],
               <?php
               if($res9=mysqli_query($conn,$sql))
               {
               while ($row9=mysqli_fetch_array($res9))
               {
                $v_name=$row9['v_name'];
                $total_household=$row9['total_household'];
                $total_population=$row9['total_population'];
                $gender_ratio=$row9['gender_ratio'];
                $average_members_per_family=$row9['average_members_per_family'];
                echo $v_name;
               ?>
               ['<?php echo $v_name; ?>',  <?php echo $total_household;?>,'<?php echo $total_household;?>%', <?php echo $total_population ;?>, '<?php echo $total_population ;?>%'],
               <?php }
            }?>
             ]);


            var options = {
               title: 'Aadhar Coverage across Prevailing Caste Sections',
               isStacked:'percent',
			   bar: { groupWidth: '75%' },  
			   hAxis: {
          title: 'Caste Sections'
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


