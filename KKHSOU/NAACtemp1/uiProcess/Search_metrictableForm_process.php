<?php
 if($_SERVER['REQUEST_METHOD']=='POST') {
echo 'Search Results<br>';
$p_metric_slno_key=$_POST['metric_slno_key'];

include_once("../class/class.metrictable.php");	
	$tb_handle=new metrictable();
	$tb_handle->Search($p_metric_slno_key);

 }
?>
