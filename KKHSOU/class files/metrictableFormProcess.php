<?php 
//****Automatic Software CreatedBy@BD ****


 if($_SERVER['REQUEST_METHOD']=='POST') { 
	$p_metric_slno=$_POST['metric_slno'];
	$p_metric_no=$_POST['metric_no'];
	$p_metric_title=$_POST['metric_title'];
	$p_metric_details=$_POST['metric_details'];
	$p_metric_key_slno=$_POST['metric_key_slno'];
	$p_metric_block=$_POST['metric_block'];
	$p_metric_reserved1=$_POST['metric_reserved1'];
	$p_metric_reserved2=$_POST['metric_reserved2'];
	$p_metric_reserved3=$_POST['metric_reserved3'];
	$p_metric_reserved4=$_POST['metric_reserved4'];
	$p_metric_reserved5=$_POST['metric_reserved5'];
	$p_metric_reserved6=$_POST['metric_reserved6'];
	$p_metric_reserved7=$_POST['metric_reserved7'];
	$p_metric_reserved8=$_POST['metric_reserved8'];
	$p_metric_reserved9=$_POST['metric_reserved9'];
	$p_metric_reserved10=$_POST['metric_reserved10'];
	$p_metric_reserved11=$_POST['metric_reserved11'];
	$p_metric_reserved12=$_POST['metric_reserved12'];
	$p_metric_reserved13=$_POST['metric_reserved13'];
	$p_metric_reserved14=$_POST['metric_reserved14'];
	$p_metric_reserved15=$_POST['metric_reserved15'];
	$p_metric_reserved16=$_POST['metric_reserved16'];
	$p_metric_reserved17=$_POST['metric_reserved17'];
	$p_metric_reserved18=$_POST['metric_reserved18'];
	$p_metric_reserved19=$_POST['metric_reserved19'];
	$p_metric_reserved20=$_POST['metric_reserved20'];



	echo "<br> metric_slno :- -----<font color=blue> ".$p_metric_slno."</font>\n";
	echo "<br> metric_no :- -----<font color=blue> ".$p_metric_no."</font>\n";
	echo "<br> metric_title :- -----<font color=blue> ".$p_metric_title."</font>\n";
	echo "<br> metric_details :- -----<font color=blue> ".$p_metric_details."</font>\n";
	echo "<br> metric_key_slno :- -----<font color=blue> ".$p_metric_key_slno."</font>\n";
	echo "<br> metric_block :- -----<font color=blue> ".$p_metric_block."</font>\n";
	echo "<br> metric_reserved1 :- -----<font color=blue> ".$p_metric_reserved1."</font>\n";
	echo "<br> metric_reserved2 :- -----<font color=blue> ".$p_metric_reserved2."</font>\n";
	echo "<br> metric_reserved3 :- -----<font color=blue> ".$p_metric_reserved3."</font>\n";
	echo "<br> metric_reserved4 :- -----<font color=blue> ".$p_metric_reserved4."</font>\n";
	echo "<br> metric_reserved5 :- -----<font color=blue> ".$p_metric_reserved5."</font>\n";
	echo "<br> metric_reserved6 :- -----<font color=blue> ".$p_metric_reserved6."</font>\n";
	echo "<br> metric_reserved7 :- -----<font color=blue> ".$p_metric_reserved7."</font>\n";
	echo "<br> metric_reserved8 :- -----<font color=blue> ".$p_metric_reserved8."</font>\n";
	echo "<br> metric_reserved9 :- -----<font color=blue> ".$p_metric_reserved9."</font>\n";
	echo "<br> metric_reserved10 :- -----<font color=blue> ".$p_metric_reserved10."</font>\n";
	echo "<br> metric_reserved11 :- -----<font color=blue> ".$p_metric_reserved11."</font>\n";
	echo "<br> metric_reserved12 :- -----<font color=blue> ".$p_metric_reserved12."</font>\n";
	echo "<br> metric_reserved13 :- -----<font color=blue> ".$p_metric_reserved13."</font>\n";
	echo "<br> metric_reserved14 :- -----<font color=blue> ".$p_metric_reserved14."</font>\n";
	echo "<br> metric_reserved15 :- -----<font color=blue> ".$p_metric_reserved15."</font>\n";
	echo "<br> metric_reserved16 :- -----<font color=blue> ".$p_metric_reserved16."</font>\n";
	echo "<br> metric_reserved17 :- -----<font color=blue> ".$p_metric_reserved17."</font>\n";
	echo "<br> metric_reserved18 :- -----<font color=blue> ".$p_metric_reserved18."</font>\n";
	echo "<br> metric_reserved19 :- -----<font color=blue> ".$p_metric_reserved19."</font>\n";
	echo "<br> metric_reserved20 :- -----<font color=blue> ".$p_metric_reserved20."</font>\n";
	//class calling..

	include_once("class.metrictable.php");

	$tb_handle=new metrictable();

	$tb_handle->metric_slno=$p_metric_slno;
	$tb_handle->metric_no=$p_metric_no;
	$tb_handle->metric_title=$p_metric_title;
	$tb_handle->metric_details=$p_metric_details;
	$tb_handle->metric_key_slno=$p_metric_key_slno;
	$tb_handle->metric_block=$p_metric_block;
	$tb_handle->metric_reserved1=$p_metric_reserved1;
	$tb_handle->metric_reserved2=$p_metric_reserved2;
	$tb_handle->metric_reserved3=$p_metric_reserved3;
	$tb_handle->metric_reserved4=$p_metric_reserved4;
	$tb_handle->metric_reserved5=$p_metric_reserved5;
	$tb_handle->metric_reserved6=$p_metric_reserved6;
	$tb_handle->metric_reserved7=$p_metric_reserved7;
	$tb_handle->metric_reserved8=$p_metric_reserved8;
	$tb_handle->metric_reserved9=$p_metric_reserved9;
	$tb_handle->metric_reserved10=$p_metric_reserved10;
	$tb_handle->metric_reserved11=$p_metric_reserved11;
	$tb_handle->metric_reserved12=$p_metric_reserved12;
	$tb_handle->metric_reserved13=$p_metric_reserved13;
	$tb_handle->metric_reserved14=$p_metric_reserved14;
	$tb_handle->metric_reserved15=$p_metric_reserved15;
	$tb_handle->metric_reserved16=$p_metric_reserved16;
	$tb_handle->metric_reserved17=$p_metric_reserved17;
	$tb_handle->metric_reserved18=$p_metric_reserved18;
	$tb_handle->metric_reserved19=$p_metric_reserved19;
	$tb_handle->metric_reserved20=$p_metric_reserved20;
	$tb_handle->insert();	
	echo "<br><br>Data Insertion Done";	
	echo "<script>alert('Insert_Successfully');location.href='metrictableForm.php'</script>"; 

 }
?>