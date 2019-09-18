<?php 
//****Automatic Software CreatedBy@BD ****

 if($_SERVER['REQUEST_METHOD']=='POST') { 

	$rid=$_POST['up_metric_slno'];
	$p_up_metric_slno=$_POST['up_metric_slno'];
	$p_up_metric_metric_slno=$_POST['up_metric_metric_slno'];
	$p_up_metric_title=$_POST['up_metric_title'];
	$p_up_metric_url=$_POST['up_metric_url'];
	$p_up_metric_block=$_POST['up_metric_block'];
	$p_up_metric_reserved1=$_POST['up_metric_reserved1'];
	$p_up_metric_reserved2=$_POST['up_metric_reserved2'];
	$p_up_metric_reserved3=$_POST['up_metric_reserved3'];
	$p_up_metric_reserved4=$_POST['up_metric_reserved4'];
	$p_up_metric_reserved5=$_POST['up_metric_reserved5'];
	$p_up_metric_reserved6=$_POST['up_metric_reserved6'];
	$p_up_metric_reserved7=$_POST['up_metric_reserved7'];
	$p_up_metric_reserved8=$_POST['up_metric_reserved8'];
	$p_up_metric_reserved9=$_POST['up_metric_reserved9'];
	$p_up_metric_reserved10=$_POST['up_metric_reserved10'];
	$p_up_metric_reserved11=$_POST['up_metric_reserved11'];
	$p_up_metric_reserved12=$_POST['up_metric_reserved12'];
	$p_up_metric_reserved13=$_POST['up_metric_reserved13'];
	$p_up_metric_reserved14=$_POST['up_metric_reserved14'];
	$p_up_metric_reserved15=$_POST['up_metric_reserved15'];
	$p_up_metric_reserved16=$_POST['up_metric_reserved16'];
	$p_up_metric_reserved17=$_POST['up_metric_reserved17'];
	$p_up_metric_reserved18=$_POST['up_metric_reserved18'];
	$p_up_metric_reserved19=$_POST['up_metric_reserved19'];
	$p_up_metric_reserved20=$_POST['up_metric_reserved20'];


	include_once("class.metricupload.php");

	$tb_handle=new metricupload();

	$tb_handle->up_metric_slno=$p_up_metric_slno;
	$tb_handle->up_metric_metric_slno=$p_up_metric_metric_slno;
	$tb_handle->up_metric_title=$p_up_metric_title;
	$tb_handle->up_metric_url=$p_up_metric_url;
	$tb_handle->up_metric_block=$p_up_metric_block;
	$tb_handle->up_metric_reserved1=$p_up_metric_reserved1;
	$tb_handle->up_metric_reserved2=$p_up_metric_reserved2;
	$tb_handle->up_metric_reserved3=$p_up_metric_reserved3;
	$tb_handle->up_metric_reserved4=$p_up_metric_reserved4;
	$tb_handle->up_metric_reserved5=$p_up_metric_reserved5;
	$tb_handle->up_metric_reserved6=$p_up_metric_reserved6;
	$tb_handle->up_metric_reserved7=$p_up_metric_reserved7;
	$tb_handle->up_metric_reserved8=$p_up_metric_reserved8;
	$tb_handle->up_metric_reserved9=$p_up_metric_reserved9;
	$tb_handle->up_metric_reserved10=$p_up_metric_reserved10;
	$tb_handle->up_metric_reserved11=$p_up_metric_reserved11;
	$tb_handle->up_metric_reserved12=$p_up_metric_reserved12;
	$tb_handle->up_metric_reserved13=$p_up_metric_reserved13;
	$tb_handle->up_metric_reserved14=$p_up_metric_reserved14;
	$tb_handle->up_metric_reserved15=$p_up_metric_reserved15;
	$tb_handle->up_metric_reserved16=$p_up_metric_reserved16;
	$tb_handle->up_metric_reserved17=$p_up_metric_reserved17;
	$tb_handle->up_metric_reserved18=$p_up_metric_reserved18;
	$tb_handle->up_metric_reserved19=$p_up_metric_reserved19;
	$tb_handle->up_metric_reserved20=$p_up_metric_reserved20;
	


	echo "<br> up_metric_slno :- -----<font color=blue> ".$p_up_metric_slno."</font>\n";
	echo "<br> up_metric_metric_slno :- -----<font color=blue> ".$p_up_metric_metric_slno."</font>\n";
	echo "<br> up_metric_title :- -----<font color=blue> ".$p_up_metric_title."</font>\n";
	echo "<br> up_metric_url :- -----<font color=blue> ".$p_up_metric_url."</font>\n";
	echo "<br> up_metric_block :- -----<font color=blue> ".$p_up_metric_block."</font>\n";
	echo "<br> up_metric_reserved1 :- -----<font color=blue> ".$p_up_metric_reserved1."</font>\n";
	echo "<br> up_metric_reserved2 :- -----<font color=blue> ".$p_up_metric_reserved2."</font>\n";
	echo "<br> up_metric_reserved3 :- -----<font color=blue> ".$p_up_metric_reserved3."</font>\n";
	echo "<br> up_metric_reserved4 :- -----<font color=blue> ".$p_up_metric_reserved4."</font>\n";
	echo "<br> up_metric_reserved5 :- -----<font color=blue> ".$p_up_metric_reserved5."</font>\n";
	echo "<br> up_metric_reserved6 :- -----<font color=blue> ".$p_up_metric_reserved6."</font>\n";
	echo "<br> up_metric_reserved7 :- -----<font color=blue> ".$p_up_metric_reserved7."</font>\n";
	echo "<br> up_metric_reserved8 :- -----<font color=blue> ".$p_up_metric_reserved8."</font>\n";
	echo "<br> up_metric_reserved9 :- -----<font color=blue> ".$p_up_metric_reserved9."</font>\n";
	echo "<br> up_metric_reserved10 :- -----<font color=blue> ".$p_up_metric_reserved10."</font>\n";
	echo "<br> up_metric_reserved11 :- -----<font color=blue> ".$p_up_metric_reserved11."</font>\n";
	echo "<br> up_metric_reserved12 :- -----<font color=blue> ".$p_up_metric_reserved12."</font>\n";
	echo "<br> up_metric_reserved13 :- -----<font color=blue> ".$p_up_metric_reserved13."</font>\n";
	echo "<br> up_metric_reserved14 :- -----<font color=blue> ".$p_up_metric_reserved14."</font>\n";
	echo "<br> up_metric_reserved15 :- -----<font color=blue> ".$p_up_metric_reserved15."</font>\n";
	echo "<br> up_metric_reserved16 :- -----<font color=blue> ".$p_up_metric_reserved16."</font>\n";
	echo "<br> up_metric_reserved17 :- -----<font color=blue> ".$p_up_metric_reserved17."</font>\n";
	echo "<br> up_metric_reserved18 :- -----<font color=blue> ".$p_up_metric_reserved18."</font>\n";
	echo "<br> up_metric_reserved19 :- -----<font color=blue> ".$p_up_metric_reserved19."</font>\n";
	echo "<br> up_metric_reserved20 :- -----<font color=blue> ".$p_up_metric_reserved20."</font>\n";

	$tb_handle->update($rid);
	echo "<script>alert('Updated_Successfully');location.href='metricuploadEditForm.php?sl_no=$rid'</script>"; 

 }
?>