<?php
//****Automatic Software CreatedBy@BD ****

 if($_SERVER['REQUEST_METHOD']=='POST') {

	$rid=$_POST['data_upload_slno'];
	$p_data_upload_slno=$_POST['data_upload_slno'];
	$p_data_upload_temp_slno=$_POST['data_upload_temp_slno'];
	$p_data_upload_title=$_POST['data_upload_title'];
	$p_data_upload_url=$_POST['data_upload_url'];
	$p_data_upload_reserved1=$_POST['data_upload_reserved1'];
	$p_data_upload_reserved2=$_POST['data_upload_reserved2'];
	$p_data_upload_reserved3=$_POST['data_upload_reserved3'];
	$p_data_upload_reserved4=$_POST['data_upload_reserved4'];
	$p_data_upload_reserved5=$_POST['data_upload_reserved5'];
	$p_data_upload_reserved6=$_POST['data_upload_reserved6'];
	$p_data_upload_reserved7=$_POST['data_upload_reserved7'];
	$p_data_upload_reserved8=$_POST['data_upload_reserved8'];
	$p_data_upload_reserved9=$_POST['data_upload_reserved9'];
	$p_data_upload_reserved10=$_POST['data_upload_reserved10'];
	$p_data_upload_reserved11=$_POST['data_upload_reserved11'];
	$p_data_upload_reserved12=$_POST['data_upload_reserved12'];
	$p_data_upload_reserved13=$_POST['data_upload_reserved13'];
	$p_data_upload_reserved14=$_POST['data_upload_reserved14'];
	$p_data_upload_reserved15=$_POST['data_upload_reserved15'];
	$p_data_upload_reserved16=$_POST['data_upload_reserved16'];
	$p_data_upload_reserved17=$_POST['data_upload_reserved17'];
	$p_data_upload_reserved18=$_POST['data_upload_reserved18'];
	$p_data_upload_reserved19=$_POST['data_upload_reserved19'];
	$p_data_upload_reserved20=$_POST['data_upload_reserved20'];


	include_once("../class/class.data_template_upload.php");

	$tb_handle=new data_template_upload();

	$tb_handle->data_upload_slno=$p_data_upload_slno;
	$tb_handle->data_upload_temp_slno=$p_data_upload_temp_slno;
	$tb_handle->data_upload_title=$p_data_upload_title;
	$tb_handle->data_upload_url=$p_data_upload_url;
	$tb_handle->data_upload_reserved1=$p_data_upload_reserved1;
	$tb_handle->data_upload_reserved2=$p_data_upload_reserved2;
	$tb_handle->data_upload_reserved3=$p_data_upload_reserved3;
	$tb_handle->data_upload_reserved4=$p_data_upload_reserved4;
	$tb_handle->data_upload_reserved5=$p_data_upload_reserved5;
	$tb_handle->data_upload_reserved6=$p_data_upload_reserved6;
	$tb_handle->data_upload_reserved7=$p_data_upload_reserved7;
	$tb_handle->data_upload_reserved8=$p_data_upload_reserved8;
	$tb_handle->data_upload_reserved9=$p_data_upload_reserved9;
	$tb_handle->data_upload_reserved10=$p_data_upload_reserved10;
	$tb_handle->data_upload_reserved11=$p_data_upload_reserved11;
	$tb_handle->data_upload_reserved12=$p_data_upload_reserved12;
	$tb_handle->data_upload_reserved13=$p_data_upload_reserved13;
	$tb_handle->data_upload_reserved14=$p_data_upload_reserved14;
	$tb_handle->data_upload_reserved15=$p_data_upload_reserved15;
	$tb_handle->data_upload_reserved16=$p_data_upload_reserved16;
	$tb_handle->data_upload_reserved17=$p_data_upload_reserved17;
	$tb_handle->data_upload_reserved18=$p_data_upload_reserved18;
	$tb_handle->data_upload_reserved19=$p_data_upload_reserved19;
	$tb_handle->data_upload_reserved20=$p_data_upload_reserved20;



	echo "<br> data_upload_slno :- -----<font color=blue> ".$p_data_upload_slno."</font>\n";
	echo "<br> data_upload_temp_slno :- -----<font color=blue> ".$p_data_upload_temp_slno."</font>\n";
	echo "<br> data_upload_title :- -----<font color=blue> ".$p_data_upload_title."</font>\n";
	echo "<br> data_upload_url :- -----<font color=blue> ".$p_data_upload_url."</font>\n";
	echo "<br> data_upload_reserved1 :- -----<font color=blue> ".$p_data_upload_reserved1."</font>\n";
	echo "<br> data_upload_reserved2 :- -----<font color=blue> ".$p_data_upload_reserved2."</font>\n";
	echo "<br> data_upload_reserved3 :- -----<font color=blue> ".$p_data_upload_reserved3."</font>\n";
	echo "<br> data_upload_reserved4 :- -----<font color=blue> ".$p_data_upload_reserved4."</font>\n";
	echo "<br> data_upload_reserved5 :- -----<font color=blue> ".$p_data_upload_reserved5."</font>\n";
	echo "<br> data_upload_reserved6 :- -----<font color=blue> ".$p_data_upload_reserved6."</font>\n";
	echo "<br> data_upload_reserved7 :- -----<font color=blue> ".$p_data_upload_reserved7."</font>\n";
	echo "<br> data_upload_reserved8 :- -----<font color=blue> ".$p_data_upload_reserved8."</font>\n";
	echo "<br> data_upload_reserved9 :- -----<font color=blue> ".$p_data_upload_reserved9."</font>\n";
	echo "<br> data_upload_reserved10 :- -----<font color=blue> ".$p_data_upload_reserved10."</font>\n";
	echo "<br> data_upload_reserved11 :- -----<font color=blue> ".$p_data_upload_reserved11."</font>\n";
	echo "<br> data_upload_reserved12 :- -----<font color=blue> ".$p_data_upload_reserved12."</font>\n";
	echo "<br> data_upload_reserved13 :- -----<font color=blue> ".$p_data_upload_reserved13."</font>\n";
	echo "<br> data_upload_reserved14 :- -----<font color=blue> ".$p_data_upload_reserved14."</font>\n";
	echo "<br> data_upload_reserved15 :- -----<font color=blue> ".$p_data_upload_reserved15."</font>\n";
	echo "<br> data_upload_reserved16 :- -----<font color=blue> ".$p_data_upload_reserved16."</font>\n";
	echo "<br> data_upload_reserved17 :- -----<font color=blue> ".$p_data_upload_reserved17."</font>\n";
	echo "<br> data_upload_reserved18 :- -----<font color=blue> ".$p_data_upload_reserved18."</font>\n";
	echo "<br> data_upload_reserved19 :- -----<font color=blue> ".$p_data_upload_reserved19."</font>\n";
	echo "<br> data_upload_reserved20 :- -----<font color=blue> ".$p_data_upload_reserved20."</font>\n";

	$tb_handle->update($rid);
	echo "<script>alert('Updated_Successfully');location.href='../ui/data_template_uploadForm.php'</script>";

 }
?>
