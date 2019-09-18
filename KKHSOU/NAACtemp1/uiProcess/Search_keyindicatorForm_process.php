<?php
 if($_SERVER['REQUEST_METHOD']=='POST') {
echo 'Search Results<br>';
$p_key_slno_key=$_POST['key_slno_key'];

include_once("../class/class.keyindicator.php");	
	$tb_handle=new keyindicator();
	$tb_handle->Search($p_key_slno_key);

 }
?>
