<?php 
 if($_SERVER['REQUEST_METHOD']=='POST') { 
echo 'Search Results<br>';	
$p_crite_slno_key=$_POST['crite_slno_key'];
		
include_once("class.criterion.php");	
	$tb_handle=new criterion();
	$tb_handle->Search($p_crite_slno_key);

 } 
?>