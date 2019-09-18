<?php
//WordCountProcess.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "assam1pw_astec", "jecmca", "assam1pw_dictionary");
 mysqli_set_charset( $connect, 'utf8'); 
 $output = '';
 
 if($_POST["action"] == "SearchChar")
 {
	 $query ="SELECT count(*) FROM `word` where word like  '".$_POST["query"]."%'";
	 $result = mysqli_query($connect, $query);
	 $row= mysqli_fetch_array($result);
	 $total=$row[0];
	$output .= ''.$total;
 }
 echo $output;
}
?>