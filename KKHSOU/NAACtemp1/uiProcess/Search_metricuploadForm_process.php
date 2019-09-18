<?php
 if($_SERVER['REQUEST_METHOD']=='POST') {
echo 'Search Results<br>';
$p_up_metric_slno_key=$_POST['up_metric_slno_key'];

include_once("../class/class.metricupload.php");	
	$tb_handle=new metricupload();
	$tb_handle->Search($p_up_metric_slno_key);

 }
?>
