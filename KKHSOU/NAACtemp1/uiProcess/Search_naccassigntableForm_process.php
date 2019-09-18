<?php
 if($_SERVER['REQUEST_METHOD']=='POST') {
echo 'Search Results<br>';
$p_naac_slno_key=$_POST['naac_slno_key'];

include_once("../class/class.naccassigntable.php");	
	$tb_handle=new naccassigntable();
	$tb_handle->Search($p_naac_slno_key);

 }
?>
