<?php
//****Automatic Software CreatedBy@BD ****

 if($_SERVER['REQUEST_METHOD']=='POST') {

	$rid=$_POST['crite_slno'];
	$p_crite_slno=$_POST['crite_slno'];
	$p_crite_title=$_POST['crite_title'];
	$p_crite_block=$_POST['crite_block'];
	$p_crite_descrip=$_POST['crite_descrip'];
	$p_crite_reserved1=$_POST['crite_reserved1'];
	$p_crite_reserved2=$_POST['crite_reserved2'];
	$p_crite_reserved3=$_POST['crite_reserved3'];
	$p_crite_reserved4=$_POST['crite_reserved4'];
	$p_crite_reserved5=$_POST['crite_reserved5'];
	$p_crite_reserved6=$_POST['crite_reserved6'];
	$p_crite_reserved7=$_POST['crite_reserved7'];
	$p_crite_reserved8=$_POST['crite_reserved8'];
	$p_crite_reserved9=$_POST['crite_reserved9'];
	$p_crite_reserved10=$_POST['crite_reserved10'];
	$p_crite_reserved11=$_POST['crite_reserved11'];
	$p_crite_reserved12=$_POST['crite_reserved12'];
	$p_crite_reserved13=$_POST['crite_reserved13'];
	$p_crite_reserved14=$_POST['crite_reserved14'];
	$p_crite_reserved15=$_POST['crite_reserved15'];
	$p_crite_reserved16=$_POST['crite_reserved16'];
	$p_crite_reserved17=$_POST['crite_reserved17'];
	$p_crite_reserved18=$_POST['crite_reserved18'];
	$p_crite_reserved19=$_POST['crite_reserved19'];
	$p_crite_reserved20=$_POST['crite_reserved20'];


	include_once("class.criterion.php");

	$tb_handle=new criterion();

	$tb_handle->crite_slno=$p_crite_slno;
	$tb_handle->crite_title=$p_crite_title;
	$tb_handle->crite_block=$p_crite_block;
	$tb_handle->crite_descrip=$p_crite_descrip;
	$tb_handle->crite_reserved1=$p_crite_reserved1;
	$tb_handle->crite_reserved2=$p_crite_reserved2;
	$tb_handle->crite_reserved3=$p_crite_reserved3;
	$tb_handle->crite_reserved4=$p_crite_reserved4;
	$tb_handle->crite_reserved5=$p_crite_reserved5;
	$tb_handle->crite_reserved6=$p_crite_reserved6;
	$tb_handle->crite_reserved7=$p_crite_reserved7;
	$tb_handle->crite_reserved8=$p_crite_reserved8;
	$tb_handle->crite_reserved9=$p_crite_reserved9;
	$tb_handle->crite_reserved10=$p_crite_reserved10;
	$tb_handle->crite_reserved11=$p_crite_reserved11;
	$tb_handle->crite_reserved12=$p_crite_reserved12;
	$tb_handle->crite_reserved13=$p_crite_reserved13;
	$tb_handle->crite_reserved14=$p_crite_reserved14;
	$tb_handle->crite_reserved15=$p_crite_reserved15;
	$tb_handle->crite_reserved16=$p_crite_reserved16;
	$tb_handle->crite_reserved17=$p_crite_reserved17;
	$tb_handle->crite_reserved18=$p_crite_reserved18;
	$tb_handle->crite_reserved19=$p_crite_reserved19;
	$tb_handle->crite_reserved20=$p_crite_reserved20;



	echo "<br> crite_slno :- -----<font color=blue> ".$p_crite_slno."</font>\n";
	echo "<br> crite_title :- -----<font color=blue> ".$p_crite_title."</font>\n";
	echo "<br> crite_block :- -----<font color=blue> ".$p_crite_block."</font>\n";
	echo "<br> crite_descrip :- -----<font color=blue> ".$p_crite_descrip."</font>\n";
	echo "<br> crite_reserved1 :- -----<font color=blue> ".$p_crite_reserved1."</font>\n";
	echo "<br> crite_reserved2 :- -----<font color=blue> ".$p_crite_reserved2."</font>\n";
	echo "<br> crite_reserved3 :- -----<font color=blue> ".$p_crite_reserved3."</font>\n";
	echo "<br> crite_reserved4 :- -----<font color=blue> ".$p_crite_reserved4."</font>\n";
	echo "<br> crite_reserved5 :- -----<font color=blue> ".$p_crite_reserved5."</font>\n";
	echo "<br> crite_reserved6 :- -----<font color=blue> ".$p_crite_reserved6."</font>\n";
	echo "<br> crite_reserved7 :- -----<font color=blue> ".$p_crite_reserved7."</font>\n";
	echo "<br> crite_reserved8 :- -----<font color=blue> ".$p_crite_reserved8."</font>\n";
	echo "<br> crite_reserved9 :- -----<font color=blue> ".$p_crite_reserved9."</font>\n";
	echo "<br> crite_reserved10 :- -----<font color=blue> ".$p_crite_reserved10."</font>\n";
	echo "<br> crite_reserved11 :- -----<font color=blue> ".$p_crite_reserved11."</font>\n";
	echo "<br> crite_reserved12 :- -----<font color=blue> ".$p_crite_reserved12."</font>\n";
	echo "<br> crite_reserved13 :- -----<font color=blue> ".$p_crite_reserved13."</font>\n";
	echo "<br> crite_reserved14 :- -----<font color=blue> ".$p_crite_reserved14."</font>\n";
	echo "<br> crite_reserved15 :- -----<font color=blue> ".$p_crite_reserved15."</font>\n";
	echo "<br> crite_reserved16 :- -----<font color=blue> ".$p_crite_reserved16."</font>\n";
	echo "<br> crite_reserved17 :- -----<font color=blue> ".$p_crite_reserved17."</font>\n";
	echo "<br> crite_reserved18 :- -----<font color=blue> ".$p_crite_reserved18."</font>\n";
	echo "<br> crite_reserved19 :- -----<font color=blue> ".$p_crite_reserved19."</font>\n";
	echo "<br> crite_reserved20 :- -----<font color=blue> ".$p_crite_reserved20."</font>\n";

	$tb_handle->update($rid);
	echo "<script>alert('Updated_Successfully');location.href='criterionForm.php'</script>"; 

 }
?>
