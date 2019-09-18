<?php 
//****Automatic Software CreatedBy@BD ****


 if($_SERVER['REQUEST_METHOD']=='POST') { 
	$p_naac_slno=$_POST['naac_slno'];
	$p_naac_EmpId=$_POST['naac_EmpId'];
	$p_naac_crite_slno=$_POST['naac_crite_slno'];
	$p_naac_metric_slno=$_POST['naac_metric_slno'];
	$p_naac_metric_block=$_POST['naac_metric_block'];
	$p_naac_metric_reserved1=$_POST['naac_metric_reserved1'];
	$p_naac_metric_reserved2=$_POST['naac_metric_reserved2'];
	$p_naac_metric_reserved3=$_POST['naac_metric_reserved3'];
	$p_naac_metric_reserved4=$_POST['naac_metric_reserved4'];
	$p_naac_metric_reserved5=$_POST['naac_metric_reserved5'];
	$p_naac_metric_reserved6=$_POST['naac_metric_reserved6'];
	$p_naac_metric_reserved7=$_POST['naac_metric_reserved7'];
	$p_naac_metric_reserved8=$_POST['naac_metric_reserved8'];
	$p_naac_metric_reserved9=$_POST['naac_metric_reserved9'];
	$p_naac_metric_reserved10=$_POST['naac_metric_reserved10'];
	$p_naac_metric_reserved11=$_POST['naac_metric_reserved11'];
	$p_naac_metric_reserved12=$_POST['naac_metric_reserved12'];
	$p_naac_metric_reserved13=$_POST['naac_metric_reserved13'];
	$p_naac_metric_reserved14=$_POST['naac_metric_reserved14'];
	$p_naac_metric_reserved15=$_POST['naac_metric_reserved15'];
	$p_naac_metric_reserved16=$_POST['naac_metric_reserved16'];
	$p_naac_metric_reserved17=$_POST['naac_metric_reserved17'];
	$p_naac_metric_reserved18=$_POST['naac_metric_reserved18'];
	$p_naac_metric_reserved19=$_POST['naac_metric_reserved19'];
	$p_naac_metric_reserved20=$_POST['naac_metric_reserved20'];



	echo "<br> naac_slno :- -----<font color=blue> ".$p_naac_slno."</font>\n";
	echo "<br> naac_EmpId :- -----<font color=blue> ".$p_naac_EmpId."</font>\n";
	echo "<br> naac_crite_slno :- -----<font color=blue> ".$p_naac_crite_slno."</font>\n";
	echo "<br> naac_metric_slno :- -----<font color=blue> ".$p_naac_metric_slno."</font>\n";
	echo "<br> naac_metric_block :- -----<font color=blue> ".$p_naac_metric_block."</font>\n";
	echo "<br> naac_metric_reserved1 :- -----<font color=blue> ".$p_naac_metric_reserved1."</font>\n";
	echo "<br> naac_metric_reserved2 :- -----<font color=blue> ".$p_naac_metric_reserved2."</font>\n";
	echo "<br> naac_metric_reserved3 :- -----<font color=blue> ".$p_naac_metric_reserved3."</font>\n";
	echo "<br> naac_metric_reserved4 :- -----<font color=blue> ".$p_naac_metric_reserved4."</font>\n";
	echo "<br> naac_metric_reserved5 :- -----<font color=blue> ".$p_naac_metric_reserved5."</font>\n";
	echo "<br> naac_metric_reserved6 :- -----<font color=blue> ".$p_naac_metric_reserved6."</font>\n";
	echo "<br> naac_metric_reserved7 :- -----<font color=blue> ".$p_naac_metric_reserved7."</font>\n";
	echo "<br> naac_metric_reserved8 :- -----<font color=blue> ".$p_naac_metric_reserved8."</font>\n";
	echo "<br> naac_metric_reserved9 :- -----<font color=blue> ".$p_naac_metric_reserved9."</font>\n";
	echo "<br> naac_metric_reserved10 :- -----<font color=blue> ".$p_naac_metric_reserved10."</font>\n";
	echo "<br> naac_metric_reserved11 :- -----<font color=blue> ".$p_naac_metric_reserved11."</font>\n";
	echo "<br> naac_metric_reserved12 :- -----<font color=blue> ".$p_naac_metric_reserved12."</font>\n";
	echo "<br> naac_metric_reserved13 :- -----<font color=blue> ".$p_naac_metric_reserved13."</font>\n";
	echo "<br> naac_metric_reserved14 :- -----<font color=blue> ".$p_naac_metric_reserved14."</font>\n";
	echo "<br> naac_metric_reserved15 :- -----<font color=blue> ".$p_naac_metric_reserved15."</font>\n";
	echo "<br> naac_metric_reserved16 :- -----<font color=blue> ".$p_naac_metric_reserved16."</font>\n";
	echo "<br> naac_metric_reserved17 :- -----<font color=blue> ".$p_naac_metric_reserved17."</font>\n";
	echo "<br> naac_metric_reserved18 :- -----<font color=blue> ".$p_naac_metric_reserved18."</font>\n";
	echo "<br> naac_metric_reserved19 :- -----<font color=blue> ".$p_naac_metric_reserved19."</font>\n";
	echo "<br> naac_metric_reserved20 :- -----<font color=blue> ".$p_naac_metric_reserved20."</font>\n";
	//class calling..

	include_once("class.naccassigntable.php");

	$tb_handle=new naccassigntable();

	$tb_handle->naac_slno=$p_naac_slno;
	$tb_handle->naac_EmpId=$p_naac_EmpId;
	$tb_handle->naac_crite_slno=$p_naac_crite_slno;
	$tb_handle->naac_metric_slno=$p_naac_metric_slno;
	$tb_handle->naac_metric_block=$p_naac_metric_block;
	$tb_handle->naac_metric_reserved1=$p_naac_metric_reserved1;
	$tb_handle->naac_metric_reserved2=$p_naac_metric_reserved2;
	$tb_handle->naac_metric_reserved3=$p_naac_metric_reserved3;
	$tb_handle->naac_metric_reserved4=$p_naac_metric_reserved4;
	$tb_handle->naac_metric_reserved5=$p_naac_metric_reserved5;
	$tb_handle->naac_metric_reserved6=$p_naac_metric_reserved6;
	$tb_handle->naac_metric_reserved7=$p_naac_metric_reserved7;
	$tb_handle->naac_metric_reserved8=$p_naac_metric_reserved8;
	$tb_handle->naac_metric_reserved9=$p_naac_metric_reserved9;
	$tb_handle->naac_metric_reserved10=$p_naac_metric_reserved10;
	$tb_handle->naac_metric_reserved11=$p_naac_metric_reserved11;
	$tb_handle->naac_metric_reserved12=$p_naac_metric_reserved12;
	$tb_handle->naac_metric_reserved13=$p_naac_metric_reserved13;
	$tb_handle->naac_metric_reserved14=$p_naac_metric_reserved14;
	$tb_handle->naac_metric_reserved15=$p_naac_metric_reserved15;
	$tb_handle->naac_metric_reserved16=$p_naac_metric_reserved16;
	$tb_handle->naac_metric_reserved17=$p_naac_metric_reserved17;
	$tb_handle->naac_metric_reserved18=$p_naac_metric_reserved18;
	$tb_handle->naac_metric_reserved19=$p_naac_metric_reserved19;
	$tb_handle->naac_metric_reserved20=$p_naac_metric_reserved20;
	$tb_handle->insert();	
	echo "<br><br>Data Insertion Done";	
	echo "<script>alert('Insert_Successfully');location.href='naccassigntableForm.php'</script>"; 

 }
?>