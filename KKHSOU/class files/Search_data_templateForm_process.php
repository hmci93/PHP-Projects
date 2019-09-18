<?php 
 if($_SERVER['REQUEST_METHOD']=='POST') { 
echo 'Search Results<br>';	
$p_Data_temp_slno_key=$_POST['Data_temp_slno_key'];
		
include_once("class.data_template.php");	
	$tb_handle=new data_template();
	$tb_handle->Search($p_Data_temp_slno_key);

 } 
?>