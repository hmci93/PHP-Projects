<?php
//****Automatic Software CreatedBy@BD ****


 if($_SERVER['REQUEST_METHOD']=='POST') {
	$p_key_slno=$_POST['key_slno'];
	$p_key_indicator=$_POST['key_indicator'];
	$p_key_title=$_POST['key_title'];
	$p_key_crite_slno=$_POST['key_crite_slno'];
	$p_key_block=$_POST['key_block'];
	$p_key_reserved1=$_POST['key_reserved1'];
	$p_key_reserved2=$_POST['key_reserved2'];
	$p_key_reserved3=$_POST['key_reserved3'];
	$p_key_reserved4=$_POST['key_reserved4'];
	$p_key_reserved5=$_POST['key_reserved5'];
	$p_key_reserved6=$_POST['key_reserved6'];
	$p_key_reserved7=$_POST['key_reserved7'];
	$p_key_reserved8=$_POST['key_reserved8'];
	$p_key_reserved9=$_POST['key_reserved9'];
	$p_key_reserved10=$_POST['key_reserved10'];
	$p_key_reserved11=$_POST['key_reserved11'];
	$p_key_reserved12=$_POST['key_reserved12'];
	$p_key_reserved13=$_POST['key_reserved13'];
	$p_key_reserved14=$_POST['key_reserved14'];
	$p_key_reserved15=$_POST['key_reserved15'];
	$p_key_reserved16=$_POST['key_reserved16'];
	$p_key_reserved17=$_POST['key_reserved17'];
	$p_key_reserved18=$_POST['key_reserved18'];
	$p_key_reserved19=$_POST['key_reserved19'];
	$p_key_reserved20=$_POST['key_reserved20'];



	echo "<br> key_slno :- -----<font color=blue> ".$p_key_slno."</font>\n";
	echo "<br> key_indicator :- -----<font color=blue> ".$p_key_indicator."</font>\n";
	echo "<br> key_title :- -----<font color=blue> ".$p_key_title."</font>\n";
	echo "<br> key_crite_slno :- -----<font color=blue> ".$p_key_crite_slno."</font>\n";
	echo "<br> key_block :- -----<font color=blue> ".$p_key_block."</font>\n";
	echo "<br> key_reserved1 :- -----<font color=blue> ".$p_key_reserved1."</font>\n";
	echo "<br> key_reserved2 :- -----<font color=blue> ".$p_key_reserved2."</font>\n";
	echo "<br> key_reserved3 :- -----<font color=blue> ".$p_key_reserved3."</font>\n";
	echo "<br> key_reserved4 :- -----<font color=blue> ".$p_key_reserved4."</font>\n";
	echo "<br> key_reserved5 :- -----<font color=blue> ".$p_key_reserved5."</font>\n";
	echo "<br> key_reserved6 :- -----<font color=blue> ".$p_key_reserved6."</font>\n";
	echo "<br> key_reserved7 :- -----<font color=blue> ".$p_key_reserved7."</font>\n";
	echo "<br> key_reserved8 :- -----<font color=blue> ".$p_key_reserved8."</font>\n";
	echo "<br> key_reserved9 :- -----<font color=blue> ".$p_key_reserved9."</font>\n";
	echo "<br> key_reserved10 :- -----<font color=blue> ".$p_key_reserved10."</font>\n";
	echo "<br> key_reserved11 :- -----<font color=blue> ".$p_key_reserved11."</font>\n";
	echo "<br> key_reserved12 :- -----<font color=blue> ".$p_key_reserved12."</font>\n";
	echo "<br> key_reserved13 :- -----<font color=blue> ".$p_key_reserved13."</font>\n";
	echo "<br> key_reserved14 :- -----<font color=blue> ".$p_key_reserved14."</font>\n";
	echo "<br> key_reserved15 :- -----<font color=blue> ".$p_key_reserved15."</font>\n";
	echo "<br> key_reserved16 :- -----<font color=blue> ".$p_key_reserved16."</font>\n";
	echo "<br> key_reserved17 :- -----<font color=blue> ".$p_key_reserved17."</font>\n";
	echo "<br> key_reserved18 :- -----<font color=blue> ".$p_key_reserved18."</font>\n";
	echo "<br> key_reserved19 :- -----<font color=blue> ".$p_key_reserved19."</font>\n";
	echo "<br> key_reserved20 :- -----<font color=blue> ".$p_key_reserved20."</font>\n";
	//class calling..

	include_once("../class/class.keyindicator.php");

	$tb_handle=new keyindicator();

	$tb_handle->key_slno=$p_key_slno;
	$tb_handle->key_indicator=$p_key_indicator;
	$tb_handle->key_title=$p_key_title;
	$tb_handle->key_crite_slno=$p_key_crite_slno;
	$tb_handle->key_block=$p_key_block;
	$tb_handle->key_reserved1=$p_key_reserved1;
	$tb_handle->key_reserved2=$p_key_reserved2;
	$tb_handle->key_reserved3=$p_key_reserved3;
	$tb_handle->key_reserved4=$p_key_reserved4;
	$tb_handle->key_reserved5=$p_key_reserved5;
	$tb_handle->key_reserved6=$p_key_reserved6;
	$tb_handle->key_reserved7=$p_key_reserved7;
	$tb_handle->key_reserved8=$p_key_reserved8;
	$tb_handle->key_reserved9=$p_key_reserved9;
	$tb_handle->key_reserved10=$p_key_reserved10;
	$tb_handle->key_reserved11=$p_key_reserved11;
	$tb_handle->key_reserved12=$p_key_reserved12;
	$tb_handle->key_reserved13=$p_key_reserved13;
	$tb_handle->key_reserved14=$p_key_reserved14;
	$tb_handle->key_reserved15=$p_key_reserved15;
	$tb_handle->key_reserved16=$p_key_reserved16;
	$tb_handle->key_reserved17=$p_key_reserved17;
	$tb_handle->key_reserved18=$p_key_reserved18;
	$tb_handle->key_reserved19=$p_key_reserved19;
	$tb_handle->key_reserved20=$p_key_reserved20;
	$tb_handle->insert();
	echo "<br><br>Data Insertion Done";
	echo "<script>alert('Insert_Successfully');location.href='../ui/keyindicatorForm.php'</script>"; 

 }
?>
