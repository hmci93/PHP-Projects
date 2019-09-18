<?php
 if($_SERVER['REQUEST_METHOD']=='POST') {
echo 'Search Results<br>';
$p_data_upload_slno_key=$_POST['data_upload_slno_key'];

include_once("../class/class.data_template_upload.php");	
	$tb_handle=new data_template_upload();
	$tb_handle->Search($p_data_upload_slno_key);

 }
?>
