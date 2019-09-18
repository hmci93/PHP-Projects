<?php
include "connect.php";
if (isset($_GET['term']))
{
	$word=trim($_GET['term']);
	$word=mysqli_real_escape_string($con,$word);
mysqli_set_charset($con,"utf8");
	$soundex='';
	$soundex=assoundex($word);
    $return_arr = array();
	if(empty($soundex))
	{
		$extract=mysqli_query($con,"SELECT word FROM word WHERE (soundex(transliterate)=soundex('$word') or transliterate like '$word%') order by word limit 10");
		while($row=mysqli_fetch_assoc($extract)) 
		{
         $return_arr[] = $row['word'];
   		}
    	/* Toss back results as json encoded array. */
   		echo json_encode($return_arr);
	}
	else
	{
		$extract=mysqli_query($con,"SELECT word FROM word WHERE as_soundex='$soundex' or word	like '$word%' order by word limit 10");
		while($row=mysqli_fetch_assoc($extract)) 
		{
         $return_arr[] = $row['word'];
   		}
    	/* Toss back results as json encoded array. */
   		echo json_encode($return_arr);
	}
}
//Assamese soundex code
function assoundex($str)
{
$asword=$str;
$soundex='';
$triple='';
$double='';
$char='';
$l=strlen($asword);
$pos=0;
$c=0;
$letter=9;
function triple(&$num,&$num1)
{
	$num+=9;
	$num1+=9;
}
function double(&$num,&$num1)
{
	$num+=6;
	$num1+=6;
}
function char(&$num,&$num1)
{
	$num+=3;
	$num1+=3;
}
while($c<=$l)
{
	//For conjunction
	if($letter==9)
	{  
		$triple=substr($asword,$pos,9);	
		if($triple=='ক্ষ')
		{
			$soundex=$soundex.'3';					
			triple($c,$pos);
		}
		else if($triple=='হ্য' || $triple=='য্য')
		{
			$soundex=$soundex.'Q';			
			triple($c,$pos);
		}	
		else if($triple=='ঞ্চ' || $triple=='ঞ্ছ')
		{
			$soundex=$soundex.'NC';			
			triple($c,$pos);
		}
		else if($triple=='ঞ্জ')
		{
			$soundex=$soundex.'NJ';			
			triple($c,$pos);
		}
		else
		{
			$letter=6;
		}
	}
	//For double character 
	if($letter==6)
	{
		$double=substr($asword,$pos,6);
		if($double=='ড়' || $double=='ঢ়')
		{
			$soundex=$soundex.'R';				
			double($c,$pos);
		}
		else if($double=='য়')
		{
			$soundex=$soundex.'Y';				
			double($c,$pos);
		}
		else
		{
			$letter=3;
		}
	}	
	//For single character
	if($letter==3)
	{
		$char=substr($asword,$pos,3);
		if($char=='অ')
		{
			$soundex=$soundex.'A';
			char($c,$pos);
		}
		else if($char=='আ')
		{
			$soundex=$soundex.'7';
			char($c,$pos);
		}
		else if($char=='ই' || $char=='ঈ')
		{
			$soundex=$soundex.'I';
			char($c,$pos);
		}
		else if($char=='উ' || $char=='ঊ' || $char=='ও')
		{
			$soundex=$soundex.'U';
			char($c,$pos);
		}
		else if($char=='ঋ')
		{
			$soundex=$soundex.'W';
			char($c,$pos);
		}
		else if($char=='এ')
		{
			$soundex=$soundex.'E';
			char($c,$pos);
		}
		else if($char=='ঐ')
		{
			$soundex=$soundex.'8';
			char($c,$pos);
		}
		else if($char=='ঔ')
		{
			$soundex=$soundex.'9';
			char($c,$pos);
		}
		else if($char=='ক')
		{
			$soundex=$soundex.'K';
			char($c,$pos);
		}
		else if($char=='খ')
		{
			$soundex=$soundex.'3';
			char($c,$pos);
		}
		else if($char=='গ')
		{
			$soundex=$soundex.'G';
			char($c,$pos);
		}
		else if($char=='ঘ')
		{
			$soundex=$soundex.'4';
			char($c,$pos);
		}
		else if($char=='ঙ' || $char=='ং')
		{
			$soundex=$soundex.'6';
			char($c,$pos);
		}
		else if($char=='চ' || $char=='ছ')
		{
			$soundex=$soundex.'C';
			char($c,$pos);
		}
		else if($char=='জ' || $char=='য')
		{
			$soundex=$soundex.'J';
			char($c,$pos);
		}
		else if($char=='ঝ')
		{
			$soundex=$soundex.'5';
			char($c,$pos);
		}
		else if($char=='ঞ')
		{
			$soundex=$soundex.'Y';
			char($c,$pos);
		}
		else if($char=='ত' || $char=='ট' || $char=='ৎ')
		{
			$soundex=$soundex.'T';
			char($c,$pos);
		}
		else if($char=='থ' || $char=='ঠ')
		{
			$soundex=$soundex.'1';
			char($c,$pos);
		}
		else if($char=='দ' || $char=='ড')
		{
			$soundex=$soundex.'D';
			char($c,$pos);
		}
		else if($char=='ধ' || $char=='ঢ')
		{
			$soundex=$soundex.'2';
			char($c,$pos);
		}
		else if($char=='ন' || $char=='ণ')
		{
			$soundex=$soundex.'N';
			char($c,$pos);
		}
		else if($char=='প')
		{
			$soundex=$soundex.'P';
			char($c,$pos);
		}
		else if($char=='ফ')
		{
			$soundex=$soundex.'F';
			char($c,$pos);
		}
		else if($char=='ভ')
		{
			$soundex=$soundex.'V';
			char($c,$pos);
		}
		else if($char=='ম')
		{
			$soundex=$soundex.'M';
			char($c,$pos);
		}
		else if($char=='স' || $char=='ষ' || $char=='শ')
		{
			$soundex=$soundex.'S';
			char($c,$pos);
		}
		else if($char=='ৰ')
		{
			$soundex=$soundex.'R';
			char($c,$pos);
		}
		else if($char=='ল')
		{
			$soundex=$soundex.'L';
			char($c,$pos);
		}
		else if($char=='হ')
		{
			$soundex=$soundex.'H';
			char($c,$pos);
		}
		else if($char=='ৱ' || $char=='ব')
		{
			$soundex=$soundex.'B';
			char($c,$pos);
		}
		else
		{
			char($c,$pos);
		}
		$letter=9;
	}
	if($c==$l)
	{
		$c++;
	}
}
return $soundex;
}
?>