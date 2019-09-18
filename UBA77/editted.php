<?php
	include "dbconn1.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(function() {
		
			$("#text-one").change(function() {
				$("#text-one-one").load("textdata/" + $(this).val() + ".txt");
				$("#text-two").load("textdata/d_profile_sub.txt");
			});
			$("#text-one-one").change(function() {
				$("#text-two").load("textdata/" + $(this).val() + ".txt");
			});
		});
	</script>
</head>
<body>
	<form action="demo_comp.php" method="post">
		<select name="main" id="text-one">
			<option selected value="base">Please Select Section</option>
			<option value="d_profile">Demographic Profile</option>
			<option value="basic_amenities">Basic Amenities</option>
			<option value="land_agri_res">Land And Agriculture Resources</option>
			<option value="livestock_assets">Livestock Assets</option>
			<option value="livelihood_eco">Livelihood Economics</option>
			<option value="source_energy_power">Source Of Energy And Power</option>
		</select><br>
		<select name="maintwo" id="text-one-one">
				<option selected value="base">Please choose from above Section</option>
			</select><br>
	<select id="text-two" name="submain">
		<option>Please choose from above</option>
	</select>
<br>



	<input type="checkbox" name="bn" value="1">BN<br>
	<input type="checkbox" name="jk" value="2">JK<br>
	<input type="checkbox" name="kk" value="3">KK<br>
	<input type="checkbox" name="km" value="4">KM<br>
	<input type="checkbox" name="ps" value="5">PS<br>
	<input type="submit" name="submit" value="Compare">
	</form>



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
		
		

		?>
		<table border="1">
			
		
		<?php

//start of demogrphic profile

		if($submain == 'NULL' && $maintwo == 'NULL')
		{
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
			<tr><th>Average Members Per Family</th><?php echo $average_members_per_family; ?></tr>
		<?php
		
		}
		else if($maintwo == 'NULL')
		{
			$sql1="select v_name,$submain from $main WHERE v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res1 = mysqli_query($conn,$sql1);
			while($row2 = mysqli_fetch_array($res1))
			{
				$v_name1 .= '<th>'.$row2['v_name'].'</th>';

				if($submain == 'total_household')
				{
					$submain1 .='<td>'.$row2['total_household'].'</td>';
				}
				else if($submain == 'total_population')
				{
					$submain1 .='<td>'.$row2['total_population'].'</td>';
				}
				else if($submain == 'gender_ratio')
				{
					$submain1 .='<td>'.$row2['gender_ratio'].'</td>';
				}
				else
				{
					$submain1 .='<td>'.$row2['average_members_per_family'].'</td>';
				}
			}
		?>
		<tr><th></th><?php echo $v_name1; ?></tr>
			<tr><th><?php  
			$submain2 = str_replace('_', ' ', $submain);
			$submain3 = ucwords($submain2);
			echo $submain3; ?></th><?php echo $submain1; ?></tr>
		<?php
		}		
		else if($maintwo == 'gen_wise_pop')
		{
			$sql3="select v_name from $main where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res3=mysqli_query($conn,$sql3);
			while($row4=mysqli_fetch_array($res3))
			{
				$v_name1 .='<th colspan="2">'.$row4['v_name'].'</th>';
			}
			$sql2="select gender,$submain from $maintwo where v_id=$bn OR v_id=$jk OR v_id=$kk OR v_id=$km OR v_id=$ps";
			$res2 = mysqli_query($conn,$sql2);
			while($row3 = mysqli_fetch_array($res2))
			{
			
				$gender .='<th>'.$row3['gender'].'</th>';
				if($submain == '0_5_years')
				{
					$submain1 .='<td>'.$row3['0_5_years'].'</td>';
				}
				else if($submain == '6_18_years')
				{
					$submain1 .='<td>'.$row3['6_18_years'].'</td>';
				}
				else if($submain == '19_45_years')
				{
					$submain1 .='<td>'.$row3['19_45_years'].'</td>';
				}
				else if($submain == '46_and_above')
				{
					$submain1 .='<td>'.$row3['46_and_above'].'</td>';
				}
				else
				{
					$submain1 .='<td>'.$row3['total'].'</td>';
				}
			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $gender; ?></tr>
			<tr><th>
			<?php  
				$submain4 = str_replace('_', '-', $submain);
				$submain5 = ucwords($submain4);
				echo $submain5; ?></th><?php echo $submain1; ?></tr>
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
				echo $submain7; ?></th><?php echo $submain1; ?></tr>
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
					$submain1 .='<td>'.$row6['without_aadhar'].'</td>';
				}
				
			}
			?>
			<tr><th rowspan='2'></th><?php echo $v_name1; ?></tr>
			<tr><?php echo $caste; ?></tr>
			<tr><th>
			<?php  
				$submain8 = str_replace('_', ' ', $submain);
				$submain9 = ucwords($submain8);
				echo $submain9; ?></th><?php echo $submain1; ?></tr>
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
				echo $submain11; ?></th><?php echo $submain1; ?></tr>
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
				echo $submain13; ?></th><?php echo $submain1; ?></tr>
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
				echo $submain15; ?></th><?php echo $submain1; ?></tr>
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
				echo $submain17; ?></th><?php echo $submain1; ?></tr>
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
				echo $submain19; ?></th><?php echo $submain1; ?></tr>
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
				echo $submain21; ?></th><?php echo $submain1; ?></tr>
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
				echo $submain23; ?></th><?php echo $submain1; ?></tr>
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
				echo $submain25; ?></th><?php echo $submain1; ?></tr>
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
				echo $submain27; ?></th><?php echo $submain1; ?></tr>
			<?php
		}
	}
			?>
			
</table>
</body>
</html>